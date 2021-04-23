<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\Izin_model;
use App\Models\Admin\Personel_model;

class Bildirim_dogumgunu extends BaseController
{
    public function __construct()
    {
        helper(["Tools_helper"]);
        $db = db_connect();
        $this->izinModel = new Izin_model($db);
        $this->personelModel = new Personel_model($db);
    }
    public function index()
    {
        $data = [];
        $data["title"] = "Bildirim Doğum Günü";
        $data["subtitle"] = "Bildirim Doğum Günü";
        $data["main"] = "admin";
        $data["mf"] = "bildirim_dogumgunu";
        $data["sf"] = "list";
        $data["bildirim_baslayis"] = $this->izinModel->bildirim_baslayis(array());
        $data["bildirim_dogumgunu"] = $this->personelModel->bildirim_dogumgunu(array());
        $data["bildirim"] = $this->personelModel->c_all(array());

        return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
    }



}