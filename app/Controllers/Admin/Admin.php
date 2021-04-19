<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController; //izin vermesi için ekliyoruz controlleri
use App\Models\Admin\Ayar_model;
use App\Models\Admin\Yonetim_model;

class Admin extends BaseController
{
    public function __construct()
    {
        helper(["Tools_helper"]);
        $db = db_connect();
        $this->ayarModel = new Ayar_model($db);
    }

    public function login()
    {
        $data = [];
        $data["title"] = "KGM Giriş Sayfası";
        $data["subtitle"] = "KGM Takip Sistemi ";
        $data["main"] = "admin";
        $data["mf"] = "admin";
        $data["sf"] = "login";
        $data["ayar"] = $this->ayarModel->c_all(array());

        return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
    }
    public function login_form()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        $db = db_connect();
        //model bağlantısı
        $yonetimModel = new Yonetim_model($db);//bunu helper dan yaptık
        $kullanici_mail = $this-> request-> getPost( "kullanici_mail");
        $kullanici_password = md5($this-> request-> getPost("kullanici_password"));
        if ($this->request->getMethod() == "post") {
            helper("form");
            $rules = [
                "kullanici_mail" => [
                    "rules" => "required|trim",  //*valid_email|
                    "errors" => [
                        "required" => "Kullanıcı adı zorunludur",
                        //"valid_email" => "Eposta doğru girilmelidir geçerli"
                    ]
                ],
                "kullanici_password" => [
                    "rules" => "required|trim",
                    "errors" => [
                        "required" => "şifre alanı zorunludur"
                    ]
                ]
            ];
            if (!$this->validate($rules)) {//eğitimde validation olarak geçiyor ama burada çalışmıyor!!!!
                $data["title"] = "KGM Giriş Sayfası";
                $data["subtitle"] = "KGM Takip Sistemi";
                $data["main"] = "admin";
                $data["mf"] = "admin";
                $data["sf"] = "login";
                $data["validation"] = $data['validation'];

                return view("{$data['main']}/{$data['mf']}/{$data['sf']}/index", $data);
            }else {
                //model bağlantısı sorun çıkmazsa
                $login = $yonetimModel-> c_one(array("kullanici_mail"=> $kullanici_mail, "kullanici_password"=> $kullanici_password, "kullanici_durum"=> 1));
                if ($login)
                {
                        //dashboarda yönlen, session oluştur
                        $data = array(
                            "kullanici_id" => $login-> kullanici_id,
                            "kullanici_adsoyad" => $login-> kullanici_adsoyad,
                            "kullanici_mail" => $login-> kullanici_mail,
                            "kullanici_durum" => $login-> kullanici_durum,
                            "admin" => true
                        );
                        session()-> set($data);
                        $infoMessage = array(
                            "type" => "success",
                            "text" => "Giriş İşlemi Başarılı",
                            "message" => "Hoş Geldin" ." ". $login->kullanici_adsoyad. "<br/> "
                        );
                        session()->setFlashdata("alarm",$infoMessage);
                        return redirect()-> to(base_url("dashboard"));
                    }else{
                        //login olmazsa
                        //kuıllanıcı giriş bilgileri uyuşmadı durumu
                        sfd("danger","Hata","Sistem Yöneticinize başvurunuz");
                        return redirect()->to(base_url("admin/login"));
                    }

            }
        }
    }


    public function logout()
    {

        //if (session()->has('logout')){
          //  session()->remove('logout');
            //return redirect()->to(base_url("admin/login?access=out"))->with('fail','Çıkış İşlemi Başarılı');
      //  }
        session()-> destroy();
        return redirect()->to(base_url("admin/login"));

    }
}
