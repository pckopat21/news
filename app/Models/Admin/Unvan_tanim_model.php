<?php namespace App\Models\Admin;
use Codeigniter\Database\ConnectionInterface;

class Unvan_tanim_model
{
    protected $db;
    public function __construct(ConnectionInterface &$db)
    {
        $this-> db =& $db;
        $this-> table = "unvan";
    }
    public function c_one($where = array())//one dediği tek bir listelemedir
    {
        return $this-> db-> table($this-> table)-> where($where)-> get()-> getRow();
    }
    public function c_all($where = array())//burada ise hepsini listeleme
    {
        return $this-> db-> table($this-> table)-> where($where)-> get()-> getResult();//verilerin tamamı result
    }
    public function unvan_tanim($where = array())//one dediği tek bir listelemedir
    {
        return $this-> db-> query("SELECT * FROM unvan where unvan_durum='1' order by unvan_ad ")->getresult();//sorgu yazıyorum
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