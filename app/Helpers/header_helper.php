<?php
namespace App\Controllers\Admin;
use App\Models\Admin\Izin_Model;

Class header_helper{

    private $findAll;  //This can be accessed by all class methods

    public function __construct()
    {
        parent::__construct();
        $db = db_connect();
        $this->izinModel = new Izin_model($db);
        $data =[];
        $data["bildirim_baslayis"] = $this->izinModel->bildirim_baslayis(array());
    }
}
