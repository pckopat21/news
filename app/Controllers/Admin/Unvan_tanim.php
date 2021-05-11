<?php
namespace App\Controllers\Admin;
use App\Controllers\MyBaseController;
use App\Models\Admin\Durum_model;
use App\Models\Admin\Izin_tanim_model;
use App\Models\Admin\Izin_turleri_model;
use App\Models\Admin\Unvan_tanim_model;
use Config\Services;
//$ip = $_SERVER['HTTP_CLIENT_IP']; //$this->input->ip_address() ;
//$ip = $this->input->ip_address();
//$localip = $HTTP_SERVER_VARS['HTTP_X_FORWARDED_FOR'];
class Unvan_tanim extends MyBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->izinturleriModel = new Izin_turleri_model($this->db);
        $this->izintanimModel = new Izin_tanim_model($this->db);
        $this->durumModel = new Durum_model($this->db);
        $this->unvanModel = new Unvan_tanim_model($this->db);
    }
    public function index()
    {
        $data = [];
        $data["title"] = "Ünvan Tanım";
        $data["subtitle"] = "Ünvan Tanımlama Listesi";
        $data["main"] = "admin";
        $data["mf"] = "unvan_tanim";
        $data["sf"] = "list";
        $data["unvan_tanim"] = $this->unvanModel->unvan_tanim(array());//bu kısım maincontent foraech için
        //return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
        $this->data = $data;
        return parent::run_view();
    }
    public function add()
    {
        $data = [];
        $data["title"] = "Ünvan Tanımlama";
        $data["subtitle"] = "Ünvan Tanım Ekleme İşlemleri";
        $data["main"] = "admin";
        $data["mf"] = "unvan_tanim";
        $data["sf"] = "add";
        $data["unvan_tanim"] = $this->unvanModel->unvan_tanim(array());//bu kısım maincontent foraech için
        //eski yapireturn view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
        $this->data = $data;
        return parent::run_view();
    }
    public function add_form()
    {
        $data = [
            "validation" => Services::validation() //\Config\Services::validation()  alanını use ye ekliyoruz dinamik yapı
        ];
        $data = [
            "unvan_ad" => $this->request->getPost("unvan_ad"),
            "unvan_aciklama" => $this->request->getPost("unvan_aciklama")
            //"unvan_ekleyen" => session()->get("kullanici_mail") sonra alan oluştururuz
        ];
        if ($this->request->getMethod() == "post"){
            helper("form");
            $rules =[
                "unvan_ad" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ],
                "unvan_aciklama" => [
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

                $ekle = $this->unvanModel->add($data);
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
                return redirect()->to(base_url("unvan_tanim"));
            }
        }
    }
    public function edit($unvan_id)
    {
        $data = [];
        $data["title"] = "Ünvan Tanımlama Ekranı ";
        $data["subtitle"] = "Ünvan Tanım Düzenleme";
        $data["main"] = "admin";
        $data["mf"] = "unvan_tanim";
        $data["sf"] = "edit";
        $data["unvan_tanim"] = $this->unvanModel->c_one(array("unvan_id"=>$unvan_id));
        //return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
        $this->data = $data;
        return parent::run_view();
    }
    public function update_form($unvan_id)
    {
        $data = [
            "validation" => Services::validation() //\Config\Services::validation()  alanını use ye ekliyoruz dinamik yapı
        ];
        $data = [
            "unvan_ad" => $this->request->getPost("unvan_ad"),
            "unvan_aciklama" => $this->request->getPost("unvan_aciklama"),
            "unvan_durum" => $this->request->getPost("unvan_durum")
            //"unvan_duzenleyen" => session()->get("kullanici_mail") sonra eklerim tablosunu
        ];
        if ($this->request->getMethod() == "post"){
            helper("form");
            $rules =[
                "unvan_ad" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ],
                "unvan_aciklama" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ]
            ];
            if (!$this->validate($rules)){//eğitimde validation olarak geçiyor ama burada çalışmıyor!!!!
                $data = [];
                $data["title"] = "Ünvan Tanımlama Listesi";
                $data["subtitle"] = "Ünvan Tanım Ekleme";
                $data["main"] = "admin";
                $data["mf"] = "unvan_tanim";
                $data["sf"] = "add";
                $data["unvan_tanim"] =$this->unvanModel->c_one(array("unvan_id"=>$unvan_id));
                $data["validation"] =$this->validator;
                return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
            } else{
                $update = $this->unvanModel->update(
                    array("unvan_id"=>$unvan_id),
                    array(
                        "unvan_ad" => $this->request->getPost("unvan_ad"),
                        "unvan_aciklama" => $this->request->getPost("unvan_aciklama"),
                        "unvan_durum" => $this->request->getPost("unvan_durum")
                        //"unvan_duzenleyen" => session()->get("kullanici_mail") tablosu ekelnecek
                    )
                );
                if ($update){
                    $infoMessage = array(
                        "type" => "success",
                        "text" => "İşlem Başarılı",
                        "message" => "Ünvan Tanım Güncelleme İşlemi Başarılı!"
                    );
                    session()-> setFlashdata("alarm", $infoMessage);
                } else{
                    $infoMessage = array(
                        "type" => "error",
                        "text" => "İşlem Başarısız",
                        "message" => "Ünvan Tanım Güncelleme İşlemi Başarısız!"
                    );
                    session()-> setFlashdata("alarm", $infoMessage);
                }
                return redirect()->to(base_url("unvan_tanim"));
            }
        }
    }
    public function delete($id) //silme işlemini kullanmıyorum
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