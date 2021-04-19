<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\Ayar_model;
use App\Models\Admin\Izin_Model;
use App\Models\Admin\Personel_model;

class Dashboard extends BaseController
{
    public function __construct()
    {
        helper(["Tools_helper"]);
        $db = db_connect();
        $this->izinModel = new Izin_model($db);
        $this->personelModel = new Personel_model($db);
        $this->ayarModel = new Ayar_model($db);

    }

    public function index()
    {
        $data = [];
        $data["title"] = "KGM Modülü";
        $data["subtitle"] = "Dashboard Listeleme";
        $data["main"] = "admin";
        $data["mf"] = "dashboard";
        $data["sf"] = "list";
        $data["izin"] = $this->izinModel->izin_listesi(array());
        $data["personel_kart"] = $this->personelModel->personel_kart(array());
        $data["personel_istat"] = $this->personelModel->personel_istat(array());
        $data["personel_listesi"] = $this->personelModel->personel_listesi(array());
        $data["bildirim_baslayis"] = $this->izinModel->bildirim_baslayis(array());
        //$data["dashboard"] = $this->ayarModel->c_all(array());



        return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
    }
}