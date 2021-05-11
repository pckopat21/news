<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Controllers\MyBaseController;
use App\Models\Admin\Gorevyeri_model;
use Config\Services;
//$ip = $_SERVER['HTTP_CLIENT_IP']; //$this->input->ip_address() ;
//$ip = $this->input->ip_address();
//$localip = $HTTP_SERVER_VARS['HTTP_X_FORWARDED_FOR'];
class Gorevyeri_tanim extends MyBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->gorevyeriModel = new Gorevyeri_model($this->db);
    }
    public function index()
    {
        $data = [];
        $data["title"] = "Görev Yeri Tanım";
        $data["subtitle"] = "Görev Yeri Tanımlama Listesi";
        $data["main"] = "admin";
        $data["mf"] = "gorevyeri_tanim";
        $data["sf"] = "list";
        $data["gorevyeri_tanim"] = $this->gorevyeriModel->goreyyeri(array());//bu kısım maincontent foraech için
        $this->data = $data;
        return parent::run_view();
        //eski yapi return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
    }
    public function add()
    {
        $data = [];
        $data["title"] = "Görev Yeri Tanım";
        $data["subtitle"] = "Görev Yeri Tanım Ekleme İşlemleri";
        $data["main"] = "admin";
        $data["mf"] = "gorevyeri_tanim";
        $data["sf"] = "add";
        $data["gorevyeri_tanim"] = $this->gorevyeriModel->goreyyeri(array());//bu kısım /add kısmı için
        //return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
        $this->data = $data;
        return parent::run_view();
    }
    public function add_form()
    {
        $data = [
            "validation" => Services::validation() //\Config\Services::validation()  alanını use ye ekliyoruz dinamik yapı
        ];
        $data = [
            "gorevyeri_ad" => $this->request->getPost("gorevyeri_ad"),
            "gorevyeri_aciklama" => $this->request->getPost("gorevyeri_aciklama")

        ];
        if ($this->request->getMethod() == "post"){
            helper("form");
            $rules =[
                "gorevyeri_ad" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ],
                "gorevyeri_aciklama" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ]
            ];
            if (!$this->validate($rules)){//eğitimde validation olarak geçiyor ama burada çalışmıyor!!!!
                $data = [];
                $data["title"] = "Görev Yeri Tanım";
                $data["subtitle"] = "Görev Yeri Tanım Ekleme";
                $data["main"] = "admin";
                $data["mf"] = "gorevyeri_tanim";
                $data["sf"] = "add";
                $data["validation"] =$this->validator;
                return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
            } else{

                $ekle = $this->gorevyeriModel->add($data);
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
                return redirect()->to(base_url("gorevyeri_tanim"));
            }
        }
    }
    public function edit($gorevyeri_id)
    {
        $data = [];
        $data["title"] = "Görev Yeri Tanımlama Ekranı ";
        $data["subtitle"] = "Görev Yeri Düzenleme";
        $data["main"] = "admin";
        $data["mf"] = "gorevyeri_tanim";
        $data["sf"] = "edit";
        $data["gorevyeri_tanim"] = $this->gorevyeriModel->c_one(array("gorevyeri_id"=>$gorevyeri_id));
        //return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
        $this->data = $data;
        return parent::run_view();
    }
    public function update_form($gorevyeri_id)
    {
        $data = [
            "validation" => Services::validation() //\Config\Services::validation()  alanını use ye ekliyoruz dinamik yapı
        ];
        $data = [
            "gorevyeri_ad" => $this->request->getPost("gorevyeri_ad"),
            "gorevyeri_aciklama" => $this->request->getPost("gorevyeri_aciklama")
        ];
        if ($this->request->getMethod() == "post"){
            helper("form");
            $rules =[
                "gorevyeri_ad" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ],
                "gorevyeri_aciklama" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ]
            ];
            if (!$this->validate($rules)){//eğitimde validation olarak geçiyor ama burada çalışmıyor!!!!
                $data = [];
                $data["title"] = "Görev Yeri Tanımlama Listesi";
                $data["subtitle"] = "Görev Yeri Tanım Ekleme";
                $data["main"] = "admin";
                $data["mf"] = "gorevyeri_tanim";
                $data["sf"] = "add";
                $data["gorevyeri_tanim"] =$this->izintanimModel->c_one(array("gorevyeri_id"=>$gorevyeri_id));
                $data["validation"] =$this->validator;
                return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
            } else{
                $update = $this->gorevyeriModel->update(
                    array("gorevyeri_id"=>$gorevyeri_id),
                    array(
                        "gorevyeri_ad" => $this->request->getPost("gorevyeri_ad"),
                        "gorevyeri_durum" => $this->request->getPost("gorevyeri_durum"),
                        "gorevyeri_aciklama" => $this->request->getPost("gorevyeri_aciklama")
                    )
                );
                if ($update){
                    $infoMessage = array(
                        "type" => "success",
                        "text" => "İşlem Başarılı",
                        "message" => "Görev Yeri Güncelleme İşlemi Başarılı!"
                    );
                    session()-> setFlashdata("alarm", $infoMessage);
                } else{
                    $infoMessage = array(
                        "type" => "error",
                        "text" => "İşlem Başarısız",
                        "message" => "Görev Yeri Güncelleme İşlemi Başarısız!"
                    );
                    session()-> setFlashdata("alarm", $infoMessage);
                }
                return redirect()->to(base_url("gorevyeri_tanim"));
            }
        }
    }
    public function delete($gorevyeri_id)
    {
                $update = $this->izinModel->update(
                    array("gorevyeri_id"=>$gorevyeri_id),
                    array(
                        "gorevyeri_durum" =>$this->request->getPost("gorevyeri_durum") === null ? 1 : 0
                        //'izin_silen_personel' => session()->get("kullanici_mail")
                       // 'izin_silen_ip' => $this->getIPAddress()
                    )
                );
                if ($update){
                    $infoMessage = array(
                        "type" => "success",
                        "text" => "İşlem Başarılı",
                        "message" => "Görev Yeri Silme İşlemi Başarılı!"
                    );
                    session()-> setFlashdata("alarm", $infoMessage);
                } else{
                    $infoMessage = array(
                        "type" => "error",
                        "text" => "İşlem Başarısız",
                        "message" => "Görev Yeri Silme İşlemi Başarısız!"
                    );
                    session()-> setFlashdata("alarm", $infoMessage);
                }
                return redirect()->to(base_url("gorevyeri_tanim"));

    }
}