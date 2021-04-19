<?php namespace App\Models\Admin;
use Codeigniter\Database\ConnectionInterface;

class Izin_turleri_model
{
    protected $db;
    public function __construct(ConnectionInterface &$db)
    {
        $this-> db =& $db;
        $this-> table = "izin_turleri";
    }
    public function izin_turleri($where = array())
    {
        return $this-> db-> query("SELECT * from izin_turleri where izin_durum='1' order by izin_ad")->getresult();
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
    public function izin_listesi($where = array())
    {
        return $this->db->query("SELECT datediff(i.izin_isebaslayis,i.izin_baslayis) as tarihfark,
        i.izin_baslayis,i.izin_bitis,i.izin_isebaslayis,i.izin_yil,p.personel_adsoyad,u.unvan_ad,d.durum_ad,it.izin_ad, 
        i.izin_suresi FROM personel p 
        inner join unvan u on u.unvan_id=p.personel_unvan 
        inner join durum d on d.durum_id=p.unvan_id 
        inner join izin i on i.izin_personel=p.personel_id 
        inner join izin_turleri it on it.izin_turid=i.izin_turid 
        where i.izin_isebaslayis > CURDATE() and i.izin_durum='1' order by izin_isebaslayis ASC")->getresult();
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