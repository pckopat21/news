<?php namespace App\Models\Admin;
use Codeigniter\Database\ConnectionInterface;

class Guncelleme_model
{
    protected $db;
    public function __construct(ConnectionInterface &$db)
    {
        $this-> db =& $db;
        $this-> table = "guncelleme";
    }
    public function guncelleme($where = array())
    {
        return $this-> db-> query("SELECT * from guncelleme where guncelleme_durum='1' order by guncelleme_id desc")->getresult();
    }
    public function c_one($where = array())//one dediği tek bir listelemedir
    {
        return $this-> db-> table($this-> table)-> where($where)-> get()-> getRow();
    }
    public function c_all($where = array())//burada ise hepsini listeleme
    {
        return $this-> db-> table($this-> table)-> where($where)-> get()-> getResult();//verilerin tamamı result
    }
}
