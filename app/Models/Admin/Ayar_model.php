<?php namespace App\Models\Admin;
use Codeigniter\Database\ConnectionInterface;

class Ayar_model
{
    protected $db;
    public function __construct(ConnectionInterface &$db)
    {
        $this-> db =& $db;
        $this-> table = "ayar";
    }
    public function c_one($where = array())//one dediği tek bir listelemedir
    {
        return $this-> db-> table($this-> table)-> where($where)-> get()-> getRow();
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
    public function ayar_versiyon($where = array())
    {
        return $this->db->query("SELECT COUNT(*) as count  from ayar
        where ayar_durum='1'")->getresult();
    }
}
