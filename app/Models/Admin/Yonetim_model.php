<?php namespace App\Models\Admin;
use Codeigniter\Database\ConnectionInterface;


class Yonetim_model
{
    protected $db;
    public function __construct(ConnectionInterface &$db)
    {
        $this-> db =& $db;
        $this-> table = "kullanici";
    }


public function c_one($where = array())
    {
        return $this-> db-> table($this-> table)-> where($where)-> get()-> getRow();
    }
}