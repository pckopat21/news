<?php
namespace App\Controllers\Admin;
use App\Controllers\MyBaseController;
//use App\Models\Admin\Ayar_model;
use Config\Services;

class Ayar extends MyBaseController
{
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $data = [];
        $data["title"] = "Ayarlar";
        $data["subtitle"] = "Ayarlar Listeleme";
        $data["main"] = "admin";
        $data["mf"] = "ayar";
        $data["sf"] = "list";
        $this->data=$data;
        return parent::run_view();
        //return view("{$data['main']}/{$data['mf']}/{$data['sf']}/index", $data);
    }
    public function add()//ekleme işlemi yapılmamakta şimdilik
    {
        $data = [];
        $data["title"] = "Ayarlar";
        $data["subtitle"] = "Genel Ayar Ekleme";
        $data["main"] = "admin";
        $data["mf"] = "ayar";
        $data["sf"] = "add";
        $data["ayar"] = $this->ayarModel->c_all(); // Şimdi veri çekme sırasında
        //return view("{$data['main']}/{$data['mf']}/{$data['sf']}/index", $data);
        $this->data=$data;
        return parent::run_view();
    }
    public function add_form()
    {
        $data = [
            "validation" => Services::validation() //\Config\Services::validation()  alanını use ye ekliyoruz dinamik yapı
        ];
        $data = [
            "ayar_title" => $this->request->getPost("ayar_title"),
            "ayar_duzenleyen" => session()->get("kullanici_mail")
        ];
        if ($this->request->getMethod() == "post") {
            helper("form");
            $rules = [
                "ayar_title" => [
                    "rules" => "required|trim",
                    "errors" => [
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ],
                "ayar_kurum" => [
                    "rules" => "required|trim",
                    "errors" => [
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ]
            ];
            if (!$this->validate($rules)) {//eğitimde validation olarak geçiyor ama burada çalışmıyor!!!!
                $data = [];
                $data["title"] = "Ayarlar";
                $data["subtitle"] = "Genel Ayar Ekleme";
                $data["main"] = "admin";
                $data["mf"] = "ayar";
                $data["sf"] = "add";
                $data["validation"] = $this->validator;
                return view("{$data['main']}/{$data['mf']}/{$data['sf']}/index", $data);
            } else {

                $ekle = $this->ayarModel->add($data);
                if ($ekle) {
                    $infoMessage = array(
                        "type" => "success",
                        "text" => "İşlem Başarılı",
                        "message" => "Genel Ayar Kaydetme İşlemi Başarılı!"
                    );
                    session()->setFlashdata("alarm", $infoMessage);
                } else {
                    $infoMessage = array(
                        "type" => "error",
                        "text" => "İşlem Başarısız",
                        "message" => "Genel Ayar Kaydetme İşlemi Başarısız!"
                    );
                    session()->setFlashdata("alarm", $infoMessage);
                }
                return redirect()->to(base_url("ayar"));
            }
        }
    }
    public function edit($ayar_id)
    {
        $data = [];
        $data["title"] = "Ayarlar";
        $data["subtitle"] = "Genel Ayar Düzenleme";
        $data["main"] = "admin";
        $data["mf"] = "ayar";
        $data["sf"] = "edit";
        $data["ayar_edit"] = $this->ayarModel->c_one(array("ayar_id" => $ayar_id));
        $this->data=$data;
        return parent::run_view();
        //return view("{$data['main']}/{$data['mf']}/{$data['sf']}/index", $data);
    }
    public function update_form($ayar_id)
    {
        $data = [
            "validation" => Services::validation() //\Config\Services::validation()  alanını use ye ekliyoruz dinamik yapı
        ];
        $data = [
            "ayar_title" => $this->request->getPost("ayar_title"),
            "ayar_bolge_adi" => $this->request->getPost("ayar_bolge_adi"),
            "ayar_kurum" => $this->request->getPost("ayar_kurum"),
            "ayar_yonetici" => $this->request->getPost("ayar_yonetici"),
            "ayar_yoneticiunvan" => $this->request->getPost("ayar_yoneticiunvan"),
            "ayar_mudur" => $this->request->getPost("ayar_mudur"),
            "ayar_mudurunvan" => $this->request->getPost("ayar_mudurunvan"),
            "ayar_tel" => $this->request->getPost("ayar_tel"),
            "ayar_gsm" => $this->request->getPost("ayar_gsm"),
            "ayar_faks" => $this->request->getPost("ayar_faks"),
            "ayar_mail" => $this->request->getPost("ayar_mail"),
            "ayar_il" => $this->request->getPost("ayar_il"),
            "ayar_ilce" => $this->request->getPost("ayar_ilce"),
            "ayar_adres" => $this->request->getPost("ayar_adres"),
            "ayar_duzenleyen" => session()->get("kullanici_mail")
        ];
        if ($this->request->getMethod() == "post") {
            helper("form");
            $rules = [
                "ayar_title" => [
                    "rules" => "required|trim",
                    "errors" => [
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ],
                "ayar_kurum" => [
                    "rules" => "required|trim",
                    "errors" => [
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ]
            ];
            if (!$this->validate($rules)) {//eğitimde validation olarak geçiyor ama burada çalışmıyor!!!!
                $data = [];
                $data["title"] = "Ayarlar";
                $data["subtitle"] = "Genel Ayar Ekleme";
                $data["main"] = "admin";
                $data["mf"] = "ayar";
                $data["sf"] = "add";
                $data["ayar"] = $this->ayarModel->c_all(array("ayar_id" => $ayar_id));
                $data["validation"] = $this->validator;
                return view("{$data['main']}/{$data['mf']}/{$data['sf']}/index", $data);
            } else {
                $update = $this->ayarModel->update(
                    array("ayar_id" => $ayar_id),
                    array(
                        "ayar_title" => $this->request->getPost("ayar_title"),
                        "ayar_bolge_adi" => $this->request->getPost("ayar_bolge_adi"),
                        "ayar_kurum" => $this->request->getPost("ayar_kurum"),
                        "ayar_yonetici" => $this->request->getPost("ayar_yonetici"),
                        "ayar_yoneticiunvan" => $this->request->getPost("ayar_yoneticiunvan"),
                        "ayar_mudur" => $this->request->getPost("ayar_mudur"),
                        "ayar_mudurunvan" => $this->request->getPost("ayar_mudurunvan"),
                        "ayar_tel" => $this->request->getPost("ayar_tel"),
                        "ayar_gsm" => $this->request->getPost("ayar_gsm"),
                        "ayar_faks" => $this->request->getPost("ayar_faks"),
                        "ayar_mail" => $this->request->getPost("ayar_mail"),
                        "ayar_il" => $this->request->getPost("ayar_il"),
                        "ayar_ilce" => $this->request->getPost("ayar_ilce"),
                        "ayar_adres" => $this->request->getPost("ayar_adres"),
                        "ayar_duzenleyen" => session()->get("kullanici_mail")
                    )
                );
                if ($update) {
                    $infoMessage = array(
                        "type" => "success",
                        "text" => "İşlem Başarılı",
                        "message" => "Genel Ayar Güncelleme İşlemi Başarılı!"
                    );
                    session()->setFlashdata("alarm", $infoMessage);
                } else {
                    $infoMessage = array(
                        "type" => "error",
                        "text" => "İşlem Başarısız",
                        "message" => "Genel Ayar Güncelleme İşlemi Başarısız!"
                    );
                    session()->setFlashdata("alarm", $infoMessage);
                }
                return redirect()->to(base_url("ayar/edit/0"));
            }
        }
    }
}