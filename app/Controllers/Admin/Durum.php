<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\Durum_model;
use Config\Services;
//$ip = $_SERVER['HTTP_CLIENT_IP']; //$this->input->ip_address() ;
//$ip = $this->input->ip_address();
//$localip = $HTTP_SERVER_VARS['HTTP_X_FORWARDED_FOR'];
class Durum extends BaseController
{
    public function __construct()
    {
        helper(["Tools_helper"]);
        $db = db_connect();
        $this->durumModel = new Durum_model($db);
    } // Durum.php bu controller veri çekme işlemi değil. Gerek yok bence sil. ha işte benim de anlamadığım kısım burası
    // her bir mpdel için yeni bir controllers oluşturuyprdum ben yanlış yani öyle mi?
    // Evet sana tekrar söylüyorum. Tekrar ve sürekli deneme proje yapmayı devam et. Ileriye daha iyi anlayacaksın. :)
    // tamamdır devam edelim teşekkr


    public function index()
    {
        $data = [];
        $data["title"] = "Durum";
        $data["subtitle"] = "Durum Listeleme";
        $data["main"] = "admin";
        $data["mf"] = "durum";
        $data["sf"] = "list";
        //Bu değilmiş Contorller personel olacakmış

        return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
    }

}