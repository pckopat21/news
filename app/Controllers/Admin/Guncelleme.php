<?php
namespace App\Controllers\Admin;
use App\Controllers\MyBaseController;
use App\Models\Admin\Guncelleme_model;

use Config\Services;

class guncelleme extends MyBaseController
{
    public $guncellemeModel;
    public function __construct()
    {
        parent::__construct();
        $this->guncellemeModel = new Guncelleme_model($this->db);
    }
    public function index()
    {
        $data = [];
        $data["title"] = "Güncellemeler";
        $data["subtitle"] = "Versiyon Sürüm Notları";
        $data["main"] = "admin";
        $data["mf"] = "guncelleme";// yonlendirme yapılacak linktir
        $data["sf"] = "list";
        $data["guncelleme"] = $this->guncellemeModel->guncelleme(array());
        $this->data = $data;
        return parent::run_view();

        //return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
    }
}
