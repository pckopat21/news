<?php namespace App\Models\Admin;
use Codeigniter\Database\ConnectionInterface;

class Unvan_model

{
    protected $db;
    public function __construct(ConnectionInterface &$db)
    {
        $this-> db =& $db;
        $this-> table = "unvan";//istediğini bu sanırım evet doğru.
    }
    public function c_all($where = array())
    {
        return $this-> db-> query("Select * from unvan where unvan_durum='1' order by unvan_ad")-> getResult();
    }
}

