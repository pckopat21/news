<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\Ayar_model;
use App\Models\Admin\Izin_Model;
use App\Models\Admin\Izin_turleri_model;
use App\Models\Admin\Personel_model;

class Yazdir extends BaseController
{

    public $izinModel, $ayarModel, $izinturleriModel, $personelModel;
    public function __construct()
    {
        helper(["Tools_helper"]);
        $db = db_connect();
        $this->izinModel = new Izin_model($db);
        $this->personelModel = new Personel_model($db);
        $this->izinturleriModel = new Izin_turleri_model($db);
        $this->ayarModel = new Ayar_model($db);
    }
    public function index()
    {
        $data = [];
        $data["title"] = "İzinler";
        $data["subtitle"] = "İzin Listeleme";
        $data["main"] = "admin";
        $data["mf"] = "izin";
        $data["sf"] = "list";
        $data["izin"] = $this->izinModel->izin(array());
        return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
    }
    public function yonlendir($izin_id)
    {

        $adres = $this->request->uri->getSegment(3);
        $data = array("izin_id" => $this->request->uri->getSegment(4));
        $data['izin_yazdir'] = $this->izinModel->yazdir_izin($data['izin_id'])[0];
        $data['ayar'] = $this->ayarModel->c_all()[0];
//        print_r($data);
//        exit;
        //$data["izin_id"] = $this->request->uri->getSegment(4);
        return view("admin/yazdir/{$adres}",$data);
    }



}