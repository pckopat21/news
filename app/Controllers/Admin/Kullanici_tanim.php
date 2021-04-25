<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\Kullanici_tanim_model;
use App\Models\Admin\Personel_model;
use App\Models\Admin\Yetki_model;
use Config\Services;
//$ip = $_SERVER['HTTP_CLIENT_IP']; //$this->input->ip_address() ;
//$ip = $this->input->ip_address();
//$localip = $HTTP_SERVER_VARS['HTTP_X_FORWARDED_FOR'];
class Kullanici_tanim extends BaseController
{
    public function __construct()
    {
        helper(["Tools_helper"]);
        $db = db_connect();
        $this->kullaniciModel = new Kullanici_tanim_model($db);
        $this->personelModel = new Personel_model($db);
        $this->yetkiModel = new Yetki_model($db);
    }
    public function index()
    {
        $data = [];
        $data["title"] = "Kullanıcı Tanım";
        $data["subtitle"] = "Kullanıcı Tanımlama Listesi";
        $data["main"] = "admin";
        $data["mf"] = "kullanici_tanim";
        $data["sf"] = "list";
        $data["kullanici_tanim"] = $this->kullaniciModel->kullanici_tanim(array());//bu kısım maincontent foraech için


        return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
    }
    public function add()
    {
        $data = [];
        $data["title"] = "Kullanıcı Tanım";
        $data["subtitle"] = "Kullanıcı Tanım Ekleme İşlemleri";
        $data["main"] = "admin";
        $data["mf"] = "kullanici_tanim";
        $data["sf"] = "add";
        $data["kullanici_tanim"] = $this->kullaniciModel->kullanici_tanim(array());//bu kısım maincontent foraech için
        $data["personel"] = $this->personelModel->c_all();//bu kısım maincontent foraech için
        $data["yetki"] = $this->yetkiModel->c_all();//bu kısım maincontent foraech için




        return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
    }
    public function add_form()
    {
        $data = [
            "validation" => Services::validation() //\Config\Services::validation()  alanını use ye ekliyoruz dinamik yapı

        ];
        $data = [
            "kullanici_tc" => $this->request->getPost("kullanici_tc"),
            "kullanici_mail" => $this->request->getPost("kullanici_mail"),
            "kullanici_password" => md5($this->request->getPost("kullanici_password")),
            "kullanici_yetki" => $this->request->getPost("kullanici_yetki")
        ];
        if ($this->request->getMethod() == "post"){
            helper("form");
            $rules =[
                "kullanici_mail" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ],
                "kullanici_password" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ]
            ];
            if (!$this->validate($rules)){//eğitimde validation olarak geçiyor ama burada çalışmıyor!!!!
                $data = [];
                $data["title"] = "Kullanıcı Tanım";
                $data["subtitle"] = "Kullanıcı Ekleme";
                $data["main"] = "admin";
                $data["mf"] = "kullanici_tanim";
                $data["sf"] = "add";
                $data["validation"] =$this->validator;
                return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
            } else{

                $ekle = $this->kullaniciModel->add($data);
                if ($ekle){
                    $infoMessage = array(
                        "type" => "success",
                        "text" => "İşlem Başarılı",
                        "message" => "Kaydetme İşlemi Başarılı!"
                    );
                    session()-> setFlashdata("alarm", $infoMessage);
                } else{
                    $infoMessage = array(
                        "type" => "error",
                        "text" => "İşlem Başarısız",
                        "message" => "Kaydetme İşlemi Başarısız!"
                    );
                    session()-> setFlashdata("alarm", $infoMessage);
                }
                return redirect()->to(base_url("kullanici_tanim"));
            }
        }
    }
    public function edit($kullanici_id)
    {
        $data = [];
        $data["title"] = "Kullanıcı Tanımlama ";
        $data["subtitle"] = "Kullanıcı Düzenleme";
        $data["main"] = "admin";
        $data["mf"] = "kullanici_tanim";
        $data["sf"] = "edit";
        $data["yetki"] = $this->yetkiModel->c_all(); // Şimdi veri çekme sırasında
        $data["personel"] = $this->personelModel->c_all();
        $data["kullanici_tanim"] = $this->kullaniciModel->c_one(array("kullanici_id"=>$kullanici_id));
        return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
    }
    public function update_form($kullanici_id)
    {
        $data = [
            "validation" => Services::validation() //\Config\Services::validation()  alanını use ye ekliyoruz dinamik yapı
        ];
        $data = [
            "kullanici_yetki" => $this->request->getPost("kullanici_yetki"),
            "kullanici_durum" => $this->request->getPost("kullanici_durum")
        ];
        if ($this->request->getMethod() == "post"){
            helper("form");
            $rules =[
                "kullanici_yetki" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ],
                "kullanici_durum" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ]
            ];
            if (!$this->validate($rules)){//eğitimde validation olarak geçiyor ama burada çalışmıyor!!!!
                $data = [];
                $data["title"] = "Kullanıcı Listesi";
                $data["subtitle"] = "Kullanıcı Ekleme";
                $data["main"] = "admin";
                $data["mf"] = "kullanici_tanim";
                $data["sf"] = "add";
                $data["kullanici_tanim"] =$this->kullaniciModel->c_one(array("kullanici_id"=>$kullanici_id));
                $data["validation"] =$this->validator;
                return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
            } else{
                $update = $this->kullaniciModel->update(
                    array("kullanici_id"=>$kullanici_id),
                    array(
                        "kullanici_yetki" => $this->request->getPost("kullanici_yetki"),
                        "kullanici_durum" => $this->request->getPost("kullanici_durum")
                    )
                );
                if ($update){
                    $infoMessage = array(
                        "type" => "success",
                        "text" => "İşlem Başarılı",
                        "message" => "Kullanıcı Tanım Güncelleme İşlemi Başarılı!"
                    );
                    session()-> setFlashdata("alarm", $infoMessage);
                } else{
                    $infoMessage = array(
                        "type" => "error",
                        "text" => "İşlem Başarısız",
                        "message" => "Kullanıcı Tanım Güncelleme İşlemi Başarısız!"
                    );
                    session()-> setFlashdata("alarm", $infoMessage);
                }
                return redirect()->to(base_url("kullanici_tanim"));
            }
        }
    }
    public function delete($id)
    {
                $update = $this->izinModel->update(
                    array("izin_id"=>$izin_id),
                    array(
                        "izin_durum" =>$this->request->getPost("izin_durum") === null ? 1 : 0,
                        'izin_silen_personel' => session()->get("kullanici_mail")
                       // 'izin_silen_ip' => $this->getIPAddress()
                    )
                );
                if ($update){
                    $infoMessage = array(
                        "type" => "success",
                        "text" => "İşlem Başarılı",
                        "message" => "İzin Silme İşlemi Başarılı!"
                    );
                    session()-> setFlashdata("alarm", $infoMessage);
                } else{
                    $infoMessage = array(
                        "type" => "error",
                        "text" => "İşlem Başarısız",
                        "message" => "İzin Silme İşlemi Başarısız!"
                    );
                    session()-> setFlashdata("alarm", $infoMessage);
                }
                return redirect()->to(base_url("izin"));
        /*$delete = $this->izinModel->delete(array("izin_id"=>$izin_id)); bu fonksiyon ile veriyi siliyorum ama ben yukarıda durumu 1 yapmanın daha uygun olduğunu düşündüm
        if ($delete){
            return redirect()->to(base_url("izin"));
        }else{
            return redirect()->to(base_url("izin"));
        }*/
    }
}