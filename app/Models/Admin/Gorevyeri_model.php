<?php namespace App\Models\Admin;
use Codeigniter\Database\ConnectionInterface;

class Gorevyeri_model

{
    protected $db;
    public function __construct(ConnectionInterface &$db)
    {
        $this-> db =& $db;
        $this-> table = "gorev_yeri";//istediğini bu sanırım evet doğru.
    }
    public function c_all($where = array())
    {
        return $this-> db-> query("Select * from gorev_yeri where gorevyeri_durum='1' order by gorevyeri_ad")-> getResult();
    }
}

