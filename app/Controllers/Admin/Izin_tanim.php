<?php
namespace App\Controllers\Admin;
use App\Controllers\MyBaseController;
use App\Models\Admin\Durum_model;
use App\Models\Admin\Izin_Model;
use App\Models\Admin\Izin_tanim_model;
use App\Models\Admin\Izin_turleri_model;

use Config\Services;
//$ip = $_SERVER['HTTP_CLIENT_IP']; //$this->input->ip_address() ;
//$ip = $this->input->ip_address();
//$localip = $HTTP_SERVER_VARS['HTTP_X_FORWARDED_FOR'];
class Izin_tanim extends MyBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->izinturleriModel = new Izin_turleri_model($this->db);
        $this->izintanimModel = new Izin_tanim_model($this->db);
        $this->durumModel = new Durum_model($this->db);
    }
    public function index()
    {
        $data = [];
        $data["title"] = "İzin Tanım";
        $data["subtitle"] = "İzin Tanımlama Listesi";
        $data["main"] = "admin";
        $data["mf"] = "izin_tanim";
        $data["sf"] = "list";
        $data["izin_tanim"] = $this->izintanimModel->izin_tanim(array());//bu kısım maincontent foraech için
        $data["izin_turleri"] = $this->izinturleriModel->izin_turleri(array());//bu kısım maincontent foraech için
        $this->data=$data;
        return parent::run_view();

    }
    public function add()
    {
        $data = [];
        $data["title"] = "İzin Tanımlama";
        $data["subtitle"] = "İzin Tanım Ekleme İşlemleri";
        $data["main"] = "admin";
        $data["mf"] = "izin_tanim";
        $data["sf"] = "add";
        $data["izin_tanim"] = $this->izintanimModel->izin_tanim(array());//bu kısım /add kısmı için
        $data["izin_turleri"] = $this->izinturleriModel->izin_turleri(array());//bu kısım maincontent foraech için
        $data["durum"] = $this->durumModel->c_all(array());//bu kısım maincontent foraech için
        $this->data = $data;
        return parent::run_view();


        return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
    }
    public function add_form()
    {
        $data = [
            "validation" => Services::validation() //\Config\Services::validation()  alanını use ye ekliyoruz dinamik yapı
        ];
        $data = [
            "ad" => $this->request->getPost("ad"),
            "alt_tecrube" => $this->request->getPost("alt_tecrube"),
            "ust_tecrube" => $this->request->getPost("ust_tecrube"),
            "izin_hakki" => $this->request->getPost("izin_hakki"),
            "calisan_statu_id" => $this->request->getPost("calisan_statu_id"),
            "izin_tur_id" => $this->request->getPost("izin_tur_id"),
            "izin_ekleyenpersonel" => session()->get("kullanici_mail")
        ];
        if ($this->request->getMethod() == "post"){
            helper("form");
            $rules =[
                "ad" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ],
                "izin_hakki" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ]
            ];
            if (!$this->validate($rules)){//eğitimde validation olarak geçiyor ama burada çalışmıyor!!!!
                $data = [];
                $data["title"] = "İzinler";
                $data["subtitle"] = "İzin Ekleme";
                $data["main"] = "admin";
                $data["mf"] = "izin_tanim";
                $data["sf"] = "add";
                $data["validation"] =$this->validator;
                return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
            } else{

                $ekle = $this->izintanimModel->add($data);
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
                return redirect()->to(base_url("izin_tanim"));
            }
        }
    }
    public function edit($id)
    {
        $data = [];
        $data["title"] = "İzin Tanımlama Ekranı ";
        $data["subtitle"] = "İzin Tanım Düzenleme";
        $data["main"] = "admin";
        $data["mf"] = "izin_tanim";
        $data["sf"] = "edit";
        $data["durum"] = $this->durumModel->c_all(); // Şimdi veri çekme sırasında
        $data["izin_turleri"] = $this->izinturleriModel->c_all();
        $data["izin_tanim"] = $this->izintanimModel->c_one(array("id"=>$id));
        return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
    }
    public function update_form($id)
    {
        $data = [
            "validation" => Services::validation() //\Config\Services::validation()  alanını use ye ekliyoruz dinamik yapı
        ];
        $data = [
            "ad" => $this->request->getPost("ad"),
            "alt_tecrube" => $this->request->getPost("alt_tecrube"),
            "ust_tecrube" => $this->request->getPost("ust_tecrube"),
            "izin_hakki" => $this->request->getPost("izin_hakki"),
            "calisan_statu_id" => $this->request->getPost("calisan_statu_id"),
            "izin_tur_id" => $this->request->getPost("izin_tur_id"),
            "izincalisan_durum" => $this->request->getPost("izincalisan_durum")
        ];
        if ($this->request->getMethod() == "post"){
            helper("form");
            $rules =[
                "ad" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ],
                "izin_hakki" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ]
            ];
            if (!$this->validate($rules)){//eğitimde validation olarak geçiyor ama burada çalışmıyor!!!!
                $data = [];
                $data["title"] = "İzin Tanımlama Listesi";
                $data["subtitle"] = "İzin Tanım Ekleme";
                $data["main"] = "admin";
                $data["mf"] = "izin_tanim";
                $data["sf"] = "add";
                $data["izin_tanim"] =$this->izintanimModel->c_one(array("id"=>$id));
                $data["validation"] =$this->validator;
                return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
            } else{
                $update = $this->izintanimModel->update(
                    array("id"=>$id),
                    array(
                        "ad" => $this->request->getPost("ad"),
                        "alt_tecrube" => $this->request->getPost("alt_tecrube"),
                        "ust_tecrube" => $this->request->getPost("ust_tecrube"),
                        "izin_hakki" => $this->request->getPost("izin_hakki"),
                        "calisan_statu_id" => $this->request->getPost("calisan_statu_id"),
                        "izin_tur_id" => $this->request->getPost("izin_tur_id"),
                        "izincalisan_durum" => $this->request->getPost("izincalisan_durum"),
                    )
                );
                if ($update){
                    $infoMessage = array(
                        "type" => "success",
                        "text" => "İşlem Başarılı",
                        "message" => "İzin Tanım Güncelleme İşlemi Başarılı!"
                    );
                    session()-> setFlashdata("alarm", $infoMessage);
                } else{
                    $infoMessage = array(
                        "type" => "error",
                        "text" => "İşlem Başarısız",
                        "message" => "İzin Tanım Güncelleme İşlemi Başarısız!"
                    );
                    session()-> setFlashdata("alarm", $infoMessage);
                }
                return redirect()->to(base_url("izin_tanim"));
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