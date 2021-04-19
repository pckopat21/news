<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\Izin_kullanim_model;

use Config\Services;
//$ip = $_SERVER['HTTP_CLIENT_IP']; //$this->input->ip_address() ;
//$ip = $this->input->ip_address();
//$localip = $HTTP_SERVER_VARS['HTTP_X_FORWARDED_FOR'];
class Izin_kullanim extends BaseController
{
    //public $izinkullanimModel;
    public function __construct()
    {
        helper(["Tools_helper"]);
        $db = db_connect();
        $this->izinkullanimModel = new Izin_kullanim_model($db);
    }
    public function index()
    {
        $data = [];
        $data["title"] = "İzin Kullanım";
        $data["subtitle"] = "İzin Kullanım Durumları";
        $data["main"] = "admin";
        $data["mf"] = "izin_kullanim";// yonlendirme yapılacak linktir
        $data["sf"] = "list";
        $data["izin_kullanim"] = $this->izinkullanimModel->izin_kullanim(array());


        return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
    }
}