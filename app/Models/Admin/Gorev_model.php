<?php namespace App\Models\Admin;
use Codeigniter\Database\ConnectionInterface;

class Gorev_model

{
    protected $db;
    public function __construct(ConnectionInterface &$db)
    {
        $this-> db =& $db;
        $this-> table = "gorev";//istediğini bu sanırım evet doğru.
    }
    public function c_all($where = array())
    {
        return $this-> db-> query("Select * from gorev where gorev_durum='1' order by gorev_ad")-> getResult();
    }
}

