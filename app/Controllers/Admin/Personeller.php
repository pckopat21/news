<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Controllers\MyBaseController;
use App\Models\Admin\Personel_model;
use App\Models\Admin\Durum_model;
use App\Models\Admin\Gorev_model;
use App\Models\Admin\Unvan_model;
use App\Models\Admin\Gorevyeri_model;
use Config\Services;

class Personeller extends MyBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->durumModel = new Durum_model($this->db);
        $this->gorevModel = new Gorev_model($this->db);
        $this->unvanModel = new Unvan_model($this->db);
        $this->gorevyeriModel = new Gorevyeri_model($this->db);
    }
    public function index()
    {
        $data = [];
        $data["title"] = "Personeller";
        $data["subtitle"] = "Personel Listesi";
        $data["main"] = "admin";
        $data["mf"] = "personeller";
        $data["sf"] = "list";
        /*$db = db_connect();
        $kategorilerModel = new Kategoriler_model($db);dinamik yapı açısından constrxcın oraya aldık
        $data["kategoriler"] = $kategorilerModel->c_all(); bunu da düzenlemim gerekiyor bu kez de*/
        $data["personel"] = $this->personelModel->unvan(array());
        //return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
        $this->data=$data;
        return parent::run_view();
    }


}