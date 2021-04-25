<?php

namespace App\Controllers\Admin;
use App\Controllers\MyBaseController;
use App\Models\Admin\Ayar_model;
use App\Models\Admin\Izin_Model;
use App\Models\Admin\Personel_model;

class Dashboard extends MyBaseController
{
    public function __construct()
    {
        parent::__construct();

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
        /*$data["personel_kart"] = $this->personelModel->personel_kart(array());
        $data["personel_istat"] = $this->personelModel->personel_istat(array());
        $data["personel_listesi"] = $this->personelModel->personel_listesi(array());
        $data["bildirim_baslayis"] = $this->izinModel->bildirim_baslayis(array());
        $data["dashboard"] = $this->ayarModel->c_all(array());*/
        $this->data = $data;
        return parent::run_view();
    }
}