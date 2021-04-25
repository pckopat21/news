<?php namespace App\Models\Admin;
use Codeigniter\Database\ConnectionInterface;

class Yetki_model

{
    protected $db;
    public function __construct(ConnectionInterface &$db)
    {
        $this-> db =& $db;
        $this-> table = "yetki";//istediğini bu sanırım evet doğru.
    }
    public function c_all($where = array())
    {
        return $this-> db-> query("Select * from yetki where yetki_durum='1' order by yetki_ad")-> getResult();//verilerin tamamı result
    }
}

