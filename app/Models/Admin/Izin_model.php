<?php namespace App\Models\Admin;
use Codeigniter\Database\ConnectionInterface;

class Izin_model
{
    protected $db;
    public function __construct(ConnectionInterface &$db)
    {
        $this-> db =& $db;
        $this-> table = "izin";
    }
    public function c_one($where = array())//one dediği tek bir listelemedir
    {
        return $this-> db-> table($this-> table)-> where($where)-> get()-> getRow();
    }
    public function izin($where = array())//one dediği tek bir listelemedir
    {
        return $this-> db-> query("SELECT i.izin_turid,p.personel_sozlesmelimi,p.unvan_id,i.izin_durum,datediff(i.izin_isebaslayis,i.izin_baslayis) as tarihfark,
                                        i.izin_id,i.izin_yil,i.izin_baslayis,i.izin_bitis,i.izin_isebaslayis,p.personel_adsoyad,u.unvan_ad,d.durum_ad,it.izin_ad, i.izin_suresi
                                        FROM personel p inner join unvan u on u.unvan_id=p.personel_unvan
                                        inner join durum d on d.durum_id=p.unvan_id
                                        inner join izin i on i.izin_personel=p.personel_id
                                        inner join izin_turleri it on it.izin_turid=i.izin_turid
                                        where i.izin_durum='1' order by i.izin_id desc, i.izin_yil desc")->getresult();//sorgu yazıyorum
    }
    public function c_all($where = array())//burada ise hepsini listeleme
    {
        return $this-> db-> table($this-> table)-> where($where)-> get()-> getResult();//verilerin tamamı result
    }
    public function izin_mukerrer($izin_baslayis, $izin_bitis, $izin_personel, $izin_yil)
    {
        $builder = $this->db->table('izin');
        $builder->select('*');
        $builder->where('izin_baslayis',$izin_baslayis);
        $builder->where('izin_bitis',$izin_bitis);
        $builder->where('izin_personel',$izin_personel);
        $builder->where('izin_yil',$izin_yil);
        $builder->where('izin_durum',"1");
        $data = $builder->get()->getRow();
        return $data;
    }
    public function bildirim_baslayis($where = array())
    {       return $this->db->query("SELECT datediff(i.izin_isebaslayis,i.izin_baslayis) as tarihfark,p.personel_resim,
            i.izin_baslayis,i.izin_bitis,i.izin_isebaslayis,i.izin_yil,p.personel_adsoyad,p.personel_id,
            u.unvan_ad,d.durum_ad,it.izin_ad, i.izin_suresi
            FROM personel p
            inner join unvan u on u.unvan_id=p.personel_unvan
            inner join durum d on d.durum_id=p.unvan_id
            inner join izin i on i.izin_personel=p.personel_id
            inner join izin_turleri it on it.izin_turid=i.izin_turid
            where i.izin_isebaslayis = CURDATE()
            and i.izin_durum='1'
            and p.personel_durum='1'
            order by personel_adsoyad ASC")->getResult();
        /*$this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        $builder = $this->db->table("personel p");
        $builder->select('SELECT datediff(i.izin_isebaslayis,i.izin_baslayis) as tarihfark,p.personel_resim,
        i.izin_baslayis,i.izin_bitis,i.izin_isebaslayis,i.izin_yil,p.personel_adsoyad,p.personel_id,
        u.unvan_ad,d.durum_ad,it.izin_ad, i.izin_suresi');
        $builder->join('unvan p', 'u.unvan_id=p.personel_unvan', 'INNER');
        $builder->join('durum d', 'd.durum_id=p.unvan_id', 'INNER');
        $builder->join('izin i', 'i.izin_personel=p.personel_id', 'INNER');
        $builder->join('izin_turleri it', 'it.izin_turid=i.izin_turid', 'INNER');
        $builder->where('İ.izin_isebaslayis','CURDATE()');
        $builder->where('p.personel_durum', '1');
        $builder->where('i.izin_durum', '1');
        $data = $builder->get()->getResult();
        return $data;*/
    }
    public function bildirim_baslayiscount($where = array())
    {
        $builder = $this->db->table('izin');
        $builder->selectCount('izin_onay');
        $builder->where('izin_onay',"1");
        $builder->where('izin_durum',"1");
        $builder->where('izin_isebaslayis','CURDATE()',false);
        $data = $builder->get()->getRow();
        return $data;
    }
    public function bildirim_izinonay($where = array())
    {
        $builder = $this->db->table('izin');
        $builder->select('*');
        $builder->where('izin_onay',"1");
        $builder->where('izin_durum',"1");
        $data = $builder->get()->getResult();
        return $data;
    }
    public function bildirim_izinonaycount($where = array())
    {
        $builder = $this->db->table('izin');
        $builder->selectCount('izin_onay');
        $builder->where('izin_onay',"1");
        $builder->where('izin_durum',"1");
        $data = $builder->get()->getRow();
        return $data;
    }
    public function bildirim_onay($where = array())
    {
        $builder = $this->db->table('izin i');
        $builder->select('*');
        $builder->join('personel p','p.personel_id=i.izin_personel','INNER');
        $builder->join('durum d','d.durum_id=p.unvan_id','INNER');
        $builder->join('unvan u','u.unvan_id=p.personel_unvan','INNER');
        $builder->where('i.izin_onay',"0");
        $builder->where('i.izin_durum',"1");
        $data = $builder->get()->getResult();
        return $data;
    }
    public function bildirim_onaycount($where = array())
    {
        $builder = $this->db->table('izin');
        $builder->selectCount('izin_onay');
        $builder->where('izin_onay',"0");
        $builder->where('izin_durum',"1");
        $data = $builder->get()->getRow();
        return $data;
    }
    public function izin_listesi($where = array())
    {
        return $this->db->query("SELECT datediff(i.izin_isebaslayis,i.izin_baslayis) as tarihfark,i.izin_id,p.personel_sozlesmelimi,
        i.izin_baslayis,i.izin_bitis,i.izin_turid,
       i.izin_isebaslayis,i.izin_yil,p.personel_adsoyad,u.unvan_ad,u.unvan_id,d.durum_ad,it.izin_ad,
        i.izin_suresi FROM personel p
        inner join unvan u on u.unvan_id=p.personel_unvan
        inner join durum d on d.durum_id=p.unvan_id
        inner join izin i on i.izin_personel=p.personel_id
        inner join izin_turleri it on it.izin_turid=i.izin_turid
        where i.izin_isebaslayis > CURDATE() and i.izin_durum='1' order by izin_isebaslayis ASC")->getResult();
    }
    public function yazdir_izin($izin_id)
    {
        $builder = $this->db->table('izin_calisan_haklari ich');
        $builder->select('i.izin_saglikkurumu,d.durum_ad,u.unvan_ad,p.personel_adsoyad,p.personel_tc,
        p.personel_sicilno,it.izin_ad,i.izin_tarih,p.personel_adres,i.izin_vefat,
        i.izin_adresi,i.izin_yil,i.izin_baslayis,i.izin_suresi,p.personel_telefon,p.personel_isegiristarih');
        $builder->join('durum d',' d.durum_id=ich.calisan_statu_id','INNER');
        $builder->join('personel p','p.unvan_id=d.durum_id','INNER');
        $builder->join('izin i','i.izin_personel=p.personel_id and ich.izin_tur_id=i.izin_turid','INNER');
        $builder->join('unvan u','u.unvan_id=p.personel_unvan','INNER');
        $builder->join('izin_turleri it','it.izin_turid=ich.izin_tur_id','INNER');
        $builder->where('p.personel_durum',"1");
        $builder->where('i.izin_durum',"1");
        $builder->where('i.izin_id', $izin_id);
        $data = $builder->get()->getResult();
        return $data;
    }
    public function add($data = array())
    {
        return $this-> db-> table($this-> table)-> insert($data);
    }
    public function update($where = array(),$data =array())
    {
        return $this-> db-> table($this-> table)->where($where)->update($data);
    }
    public function delete($where =array() )
    {
        return $this->db->table($this->table)->where($where)->delete();
    }
}
