<?php namespace App\Models\Admin;
use Codeigniter\Database\ConnectionInterface;

class Kullanici_tanim_model
{
    protected $db;
    public function __construct(ConnectionInterface &$db)
    {
        $this-> db =& $db;
        $this-> table = "kullanici";
    }
    public function c_one($where = array())//one dediği tek bir listelemedir
    {
        return $this-> db-> table($this-> table)-> where($where)-> get()-> getRow();
    }
    public function c_all($where = array())//burada ise hepsini listeleme
    {
        return $this-> db-> table($this-> table)-> where($where)-> get()-> getResult();//verilerin tamamı result
    }
    public function kullanici_mukerrer($kullanici_mail)
    {
        $builder = $this->db->table('kullanici');
        $builder->select('*');
        $builder->where('kullanici_durum',"1");
        $builder->where('kullanici_mail',$kullanici_mail);

        $data = $builder->get()->getRow();
        return $data;
    }
    public function kullanici_tanim($where = array())//one dediği tek bir listelemedir
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        $builder->join('personel','personel.personel_tc=kullanici.kullanici_tc','INNER');
        $builder->join('yetki','yetki.yetki_id=kullanici.kullanici_yetki','INNER');
        $builder->join('unvan','unvan.unvan_id=personel.personel_unvan','INNER');
        //$builder->where('personel_gorev', $where);
        //$builder->where('personel.personel_durum',"1");
        $builder->orderby('kullanici.kullanici_yetki','DESC');
        $builder->orderby('personel.personel_adsoyad','ASC');
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
