<?php namespace App\Models\Admin;
use Codeigniter\Database\ConnectionInterface;

class Izin_kullanim_model
{
    protected $db;
    public function __construct(ConnectionInterface &$db)
    {
        $this-> db =& $db;
        $this-> table = "izin";
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
    public function izin_kullanim($where = array())
    {
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");

        return $this->db->query("select d.durum_ad,u.unvan_ad,it.izin_ad,p.personel_isegiristarih,p.personel_adsoyad,sum(i.izin_suresi) as izin_suresi,i.izin_yil,ich.izin_hakki, 
  (ich.izin_hakki - sum(i.izin_suresi)) as Kalanizin,
  /*TIMESTAMPDIFF(YEAR, p.personel_isegiristarih, CURDATE()) AS tecrube,*/
  (i.izin_yil - YEAR(p.personel_isegiristarih)) as tecrube
  from izin_calisan_haklari ich
  LEFT OUTER JOIN durum d on d.durum_id=ich.calisan_statu_id
  LEFT OUTER JOIN personel p on p.unvan_id=d.durum_id
  LEFT OUTER JOIN izin i on i.izin_personel=p.personel_id and ich.izin_tur_id=i.izin_turid
  LEFT OUTER JOIN unvan u on u.unvan_id=p.personel_unvan
  LEFT OUTER JOIN izin_turleri it on it.izin_turid=ich.izin_tur_id
  /*where ich.alt_tecrube<=TIMESTAMPDIFF(YEAR, p.personel_isegiristarih, CURDATE())
  and ich.ust_tecrube>=TIMESTAMPDIFF(YEAR, p.personel_isegiristarih, CURDATE())*/
  where ich.alt_tecrube<= i.izin_yil - YEAR(p.personel_isegiristarih)
  and ich.ust_tecrube>= i.izin_yil - YEAR(p.personel_isegiristarih)
  and i.izin_durum='1'
  and p.personel_durum='1'
  -- and (i.izin_yil) >= year(NOW() - interval 2 year) /*son 3 yılın kayıtlarını getirir*/
  GROUP BY i.izin_personel,i.izin_yil,i.izin_turid
  order by personel_adsoyad ASC")->getresult();
    }
    public function personel_profil($where = array())
    {
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        return $this->db->query("select TIMESTAMPDIFF(YEAR, p.personel_dogumtarihi, CURDATE()) as yas, 
personel_resim,personel_tc,personel_adres,d.durum_ad,u.unvan_ad,it.izin_ad,p.personel_isegiristarih,
p.personel_adsoyad,sum(i.izin_suresi) as izinsuresi,i.izin_yil,ich.izin_hakki,
  (ich.izin_hakki - sum(i.izin_suresi)) as Kalanizin,
  TIMESTAMPDIFF(YEAR, p.personel_isegiristarih, CURDATE()) AS tecrube 
  from izin_calisan_haklari ich
  LEFT OUTER JOIN durum d on d.durum_id=ich.calisan_statu_id
  LEFT OUTER JOIN personel p on p.unvan_id=d.durum_id
  LEFT OUTER JOIN izin i on i.izin_personel=p.personel_id and ich.izin_tur_id=i.izin_turid
  LEFT OUTER JOIN unvan u on u.unvan_id=p.personel_unvan
  LEFT OUTER JOIN izin_turleri it on it.izin_turid=ich.izin_tur_id
  where p.personel_durum='1' 
  and i.izin_durum='1'
  and ich.alt_tecrube<=TIMESTAMPDIFF(YEAR, p.personel_isegiristarih, CURDATE())
  and ich.ust_tecrube>=TIMESTAMPDIFF(YEAR, p.personel_isegiristarih, CURDATE())
  GROUP BY i.izin_personel,i.izin_yil,i.izin_turid")->getresult();
    }
    public function personel_profilizin($where = array())
    {
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        $builder = $this->db->table("izin_calisan_haklari ich");
        $builder->select('d.durum_ad,u.unvan_ad,it.izin_ad,p.personel_isegiristarih,p.personel_adsoyad,
        sum(i.izin_suresi) as izin_suresi,i.izin_yil,ich.izin_hakki, 
        (ich.izin_hakki - sum(i.izin_suresi)) as Kalanizin,
        (i.izin_yil - YEAR(p.personel_isegiristarih)) as tecrube');
        $builder->join('durum d', 'd.durum_id=ich.calisan_statu_id', 'LEFT OUTER');
        $builder->join('personel p', 'p.unvan_id=d.durum_id', 'LEFT OUTER');
        $builder->join('izin i', 'i.izin_personel=p.personel_id and ich.izin_tur_id=i.izin_turid', 'LEFT OUTER');
        $builder->join('unvan u', 'u.unvan_id=p.personel_unvan', 'LEFT OUTER');
        $builder->join('izin_turleri it', 'it.izin_turid=ich.izin_tur_id', 'LEFT OUTER');
        $builder->where('p.personel_id', $where);
        $builder->where('i.izin_durum', '1');
        $builder->where('ich.alt_tecrube<= i.izin_yil - YEAR(p.personel_isegiristarih)');
        $builder->where('ich.ust_tecrube>= i.izin_yil - YEAR(p.personel_isegiristarih)');
        //$builder->groupBy(["i.izin_personel", "i.izin_yil", "i.izin_turid"]);
        $builder->groupBy('i.izin_personel');
        $builder->groupBy('i.izin_yil');
        $builder->groupBy('i.izin_turid');
        $builder->orderBy('izin_yil DESC');
        $data = $builder->get()->getResult();
        return $data;
    }
}