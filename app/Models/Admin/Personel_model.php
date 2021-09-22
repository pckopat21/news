<?php namespace App\Models\Admin;
use Codeigniter\Database\ConnectionInterface;

class Personel_model
{
    protected $db;
    public function __construct(ConnectionInterface &$db)
    {
        $this-> db =& $db;
        $this-> table = "personel";
    }
    public function c_one($where = array())//one dediği tek bir listelemedir
    {
        return $this-> db-> table($this-> table)-> where($where)-> get()-> getRow();
    }
    public function unvan($where = array())//one dediği tek bir listelemedir
    {
        return $this-> db-> query("SELECT * FROM personel p inner join unvan u on u.unvan_id=p.personel_unvan
        inner join durum d on d.durum_id=p.unvan_id
        inner join gorev_yeri g on g.gorevyeri_id=p.personel_gorevyeri
        where p.personel_durum='1'
        order by personel_adsoyad ASC")->getresult();//sorgu yazıyorum
    }
    public function personel_list($where = array())//one dediği tek bir listelemedir
    {
        return $this-> db-> query("SELECT * FROM personel p inner join unvan u on u.unvan_id=p.personel_unvan
        inner join durum d on d.durum_id=p.unvan_id
        inner join gorev_yeri g on g.gorevyeri_id=p.personel_gorevyeri
        where p.personel_durum='1'
        order by personel_adsoyad ASC")->getresult();//sorgu yazıyorum
    }
    public function personel_profil($where = array())
    {
        $builder = $this->db->table("personel");
        $builder->select('*');
        $builder->join('durum','durum.durum_id=personel.unvan_id','INNER');
        $builder->join('gorev_yeri','gorev_yeri.gorevyeri_id=personel.personel_gorevyeri','INNER');
        $builder->join('unvan','unvan.unvan_id=personel.personel_unvan','INNER');
        $builder->where('personel.personel_id', $where);
        $builder->where('personel.personel_durum',"1");
        $data = $builder->get()->getRow();
        return $data;
    }
    public function personel_liste($where = array())
    {
            $builder = $this->db->table("personel");
            $builder->select('*');
            $builder->join('durum','durum.durum_id=personel.unvan_id','INNER');
            $builder->join('gorev_yeri','gorev_yeri.gorevyeri_id=personel.personel_gorevyeri','INNER');
            $builder->join('unvan','unvan.unvan_id=personel.personel_unvan','INNER');
            $builder->where('personel_gorev', $where);
            $builder->where('personel.personel_durum',"1");
            $data = $builder->get()->getResult();
            return $data;
        /*$builder = $this->builder($this->table);
        $builder = $builder->where('personel_gorev', $personel_gorev);
        $builder = $builder->join('durum','durum.durum_id=personel.unvan_id');
        $builder = $builder->join('gorev_yeri','gorev_yeri.gorevyeri_id=personel.personel_gorevyeri');
        $builder = $builder->join('unvan','unvan.unvan_id=personel.personel_unvan');
        $builder = $builder->select('personel.personel_tc');
        $builder = $builder->get();
        return $builder->getResultArray();

       $this->db->select("*");
            $this->db->from('personel');
            $this->db->where('personel.personel_gorev', $personel_gorev);
            $this->db->join('durum','durum.durum_id=personel.unvan_id','LEFT');
            $this->db->join('gorev_yeri','gorev_yeri.gorevyeri_id=personel.personel_gorevyeri','LEFT');
            $this->db->join('unvan','unvan.unvan_id=personel.personel_unvan','LEFT');
            $query=$this->db->get();

       return $query->result();*/
    }
    /*public function personel_detay($where = array())//one dediği tek bir listelemedir
    {
        return $this-> db-> query("SELECT * FROM personel p inner join unvan u on u.unvan_id=p.personel_unvan
        inner join durum d on d.durum_id=p.unvan_id
        inner join gorev_yeri g on g.gorevyeri_id=personel_gorevyeri
        where p.personel_durum='1'
        order by personel_adsoyad ASC")->getresult();//sorgu yazıyorum
    }*/
    public function personel_izin($where = array())
    {
        return $this->db->query("SELECT p.unvan_id,p.personel_id,p.personel_adsoyad,d.durum_ad from personel p
        INNER JOIN durum d on d.durum_id=p.unvan_id
        WHERE p.personel_durum='1'
        ORDER BY p.personel_adsoyad")->getresult();
    }
    public function personel_kart($where = array())
    {
        return $this->db->query("select case  when (curdate()> t.izin_baslayis and curdate()< t.ise_baslayis) then '1' else '0' end as izin_bilgisi,
        t.* from (SELECT curdate(),
        max(i.izin_baslayis) as izin_baslayis,max(i.izin_bitis) as izin_bitis, max(i.izin_isebaslayis) as ise_baslayis,-- i.izin_turid,
        p.personel_id, p.personel_adsoyad,u.unvan_ad,p.personel_tc,p.personel_adres,p.personel_telefon,
        p.personel_sicilno,p.personel_kan,p.personel_dogumtarihi,p.personel_isegiristarih,p.personel_resim,
        TIMESTAMPDIFF (YEAR,personel_isegiristarih,NOW()) yil,
        TIMESTAMPDIFF (Month,personel_isegiristarih,NOW())%12 ay,
        TIMESTAMPDIFF (Day,DATE_ADD(personel_isegiristarih,
        INTERVAL TIMESTAMPDIFF (Month,personel_isegiristarih,NOW()) MONTH),NOW()) gun from personel p
        inner join unvan u on u.unvan_id=p.personel_unvan
        left join izin i on i.izin_personel=p.personel_id
        where p.personel_durum='1'
        group by p.personel_id
        order by p.personel_siralama asc, p.personel_sicilno asc) t")->getresult();
    }
    public function personel_istat($where = array())
    {
        return $this->db->query("SELECT p.personel_gorev,g.gorev_ad,COUNT(*) as count  from personel p
inner join gorev g on g.gorev_id=p.personel_gorev
where p.personel_durum='1'
GROUP BY p.personel_gorev
ORDER BY g.gorev_id")->getresult();
    }
    public function personel_listesi($where = array())
    {
        return $this->db->query("SELECT COUNT(*) as count  from personel p
inner join gorev g on g.gorev_id=p.personel_gorev
where p.personel_durum='1'")->getresult();
    }
    public function bildirim_dogumgunu($where = array())
    {
        $builder = $this->db->table("personel p");
        $builder->select('TIMESTAMPDIFF(YEAR, p.personel_dogumtarihi, CURDATE()) as yas,u.unvan_ad,
        p.personel_id,p.personel_adsoyad,p.personel_dogumtarihi,p.personel_resim');
        $builder->join('unvan u','u.unvan_id=p.personel_unvan','INNER');
        $builder->where('DAY(p.personel_dogumtarihi) = DAY(CURDATE())');
        $builder->where('month(p.personel_dogumtarihi) = month(CURDATE())');
        $builder->where('p.personel_durum',"1");

        $data = $builder->get()->getResult();
        return $data;
    }
    public function bildirim_dogumcount($where = array())
    {
        $builder = $this->db->table('personel');
        $builder->selectCount('personel_id');
        $builder->where('personel_durum',"1");
        $builder->where('DAY(personel_dogumtarihi) = DAY(CURDATE())');
        $builder->where('month(personel_dogumtarihi) = month(CURDATE())');
        $data = $builder->get()->getRow();
        return $data;
    }
    public function c_all($where = array())//burada ise hepsini listeleme
    {
        return $this-> db-> table($this-> table)-> where($where)-> get()-> getResult();//verilerin tamamı result
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
