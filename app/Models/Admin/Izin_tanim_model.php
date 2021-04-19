<?php namespace App\Models\Admin;
use Codeigniter\Database\ConnectionInterface;

class Izin_tanim_model
{
    protected $db;
    public function __construct(ConnectionInterface &$db)
    {
        $this-> db =& $db;
        $this-> table = "izin_calisan_haklari";
    }
    public function c_one($where = array())//one dediği tek bir listelemedir
    {
        return $this-> db-> table($this-> table)-> where($where)-> get()-> getRow();
    }
    public function c_all($where = array())//burada ise hepsini listeleme
    {
        return $this-> db-> table($this-> table)-> where($where)-> get()-> getResult();//verilerin tamamı result
    }
    public function izin_tanim($where = array())//one dediği tek bir listelemedir
    {
        return $this-> db-> query("SELECT * FROM izin_turleri it 
        INNER JOIN izin_calisan_haklari ich on ich.izin_tur_id=it.izin_turid
        INNER JOIN durum d on d.durum_id=ich.calisan_statu_id
        where ich.izincalisan_durum ='1'
        ORDER BY d.durum_ad,it.izin_ad,ich.alt_tecrube ")->getresult();//sorgu yazıyorum
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