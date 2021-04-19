<?php namespace App\Models\Admin;
use Codeigniter\Database\ConnectionInterface;

class Durum_model

{
    protected $db;
    public function __construct(ConnectionInterface &$db)
    {
        $this-> db =& $db;
        $this-> table = "durum";//istediğini bu sanırım evet doğru.
    }
    public function c_all($where = array())
    {
        return $this-> db-> query("Select * from durum where durum_aktif='1' order by durum_ad")-> getResult();//verilerin tamamı result
    }
}

