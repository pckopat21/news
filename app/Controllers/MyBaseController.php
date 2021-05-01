<?php

namespace App\Controllers;

use App\Models\Admin\Ayar_model;
use App\Models\Admin\Izin_Model;
use App\Models\Admin\Personel_model;

abstract class MyBaseController extends BaseController
{
    /**
     * @var \CodeIgniter\Database\BaseConnection
     */
    protected $db;
    /**
     * @var Ayar_model
     */
    protected $ayarModel;
    /**
     * @var Personel_model
     */
    protected $personelModel;
    /**
     * @var Izin_Model
     */
    protected $izinModel;

    /**
     * @var string
     */
    protected $viewName;
    /**
     * @var string
     */
    protected $subtitle;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var array
     */
    protected $data;
    public $main;
    public $mf;
    public $sf;

    public function __construct()
    {
        helper(["Tools_helper"]);
        $this->db = db_connect();
        $this->izinModel = new Izin_model($this->db);
        $this->personelModel = new Personel_model($this->db);
        $this->ayarModel = new Ayar_model($this->db);
        $this->data = [];
    }
    public function run_view()
    {
        $this->data['bildirim_dogumgunu'] = true;
        $this->data['bildirim_baslayis'] = true;
        $this->data["izin"] = $this->izinModel->izin(array());
        $this->data["izin_listesi"] = $this->izinModel->izin_listesi(array());
        $this->data["personel_kart"] = $this->personelModel->personel_kart(array());
        $this->data["personel_istat"] = $this->personelModel->personel_istat(array());
        $this->data["personel_listesi"] = $this->personelModel->personel_listesi(array());
        $this->data["bildirim_dogumgunu"] = $this->personelModel->bildirim_dogumgunu(array());
        $this->data["bildirim_baslayis"] = $this->izinModel->bildirim_baslayis(array());
        $this->data["dashboard"] = $this->ayarModel->c_all(array());

        $this->viewName = "{$this->data['main']}/{$this->data['mf']}/{$this->data['sf']}/index";

        return view( $this->viewName, $this->data);
    }
}