<?php
namespace App\Controllers\Admin;
use App\Controllers\MyBaseController;
use App\Models\Admin\Durum_model;
use App\Models\Admin\Gorev_model;
use App\Models\Admin\Unvan_model;
use App\Models\Admin\Gorevyeri_model;
use Config\Services;

class Personel_listesi extends MyBaseController
{
    public function __construct()
    {
        parent::__construct();
        //$this->personelModel = new Personel_model($db);
        $this->durumModel = new Durum_model($this->db);
        $this->gorevModel = new Gorev_model($this->db);
        $this->unvanModel = new Unvan_model($this->db);
        $this->gorevyeriModel = new Gorevyeri_model($this->db);
    }
    public function index()
    {
        $data = [];
        $data["title"] = "Personel Detay Listesi";
        $data["subtitle"] = "Personel Listesi";
        $data["main"] = "admin";
        $data["mf"] = "personel_listesi";
        $data["sf"] = "list";
        $data["personel"] = $this->personelModel->unvan(array());
        //return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
        $this->data=$data;
        return parent::run_view();
    }
    public function filtered($personel_gorev)
    {
        $data = [];
        $data["title"] = "Personel Detay Listesi";
        $data["subtitle"] = "Personel Listesi";
        $data["main"] = "admin";
        $data["mf"] = "personel_listesi";
        $data["sf"] = "list";
        /*$db = db_connect();
        $kategorilerModel = new Kategoriler_model($db);dinamik yapı açısından constrxcın oraya aldık
        $data["kategoriler"] = $kategorilerModel->c_all(); bunu da düzenlemim gerekiyor bu kez de*/
        $data["personel"] = $this->personelModel->personel_liste(array("personel_gorev"=>$personel_gorev));
        //$data["personel"] = $this->personelModel->personel_listesi()->where("personel_gorev",$personel_gorev);
        //$data["personel"] = $this->personelModel->where('personel_gorev', $personel_gorev)->findAll();
        //return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
        $this->data=$data;
        return parent::run_view();

    }


    public function add()//ihtiyaç yok sadece görüntüleme için yukarı index filltered yetiyor
    {
        $data = [];
        $data["title"] = "Personeller";
        $data["subtitle"] = "Personel Ekleme";
        $data["main"] = "admin";
        $data["mf"] = "personel";
        $data["sf"] = "add";
        $data["durum"] = $this->durumModel->c_all(); // Şimdi veri çekme sırasında
        $data["gorev"] = $this->gorevModel->c_all(); // Şimdi veri çekme sırasında
        $data["unvan"] = $this->unvanModel->c_all(); // Şimdi veri çekme sırasında
        $data["gorev_yeri"] = $this->gorevyeriModel->c_all(); // Şimdi veri çekme sırasında
        $data["personel"] = $this->personelModel->personel_kart(); // Şimdi veri çekme sırasında
        return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
    }
    public function add_form()
    {
        $data = [
            "validation" => Services::validation() //\Config\Services::validation()  alanını use ye ekliyoruz dinamik yapı
        ];
        $data = [
            "personel_adsoyad" => $this->request->getPost("personel_adsoyad"),
            "personel_tc" => $this->request->getPost("personel_tc"),
            "personel_sicilno" => $this->request->getPost("personel_sicilno"),
            "personel_eposta" => $this->request->getPost("personel_eposta"),
            "personel_telefon" => $this->request->getPost("personel_telefon"),
            "personel_dogumtarihi" => $this->request->getPost("personel_dogumtarihi"),
            "personel_isegiristarih" => $this->request->getPost("personel_isegiristarih"),
            "personel_kurumisegiristarih" => $this->request->getPost("personel_kurumisegiristarih"),
            "unvan_id" => $this->request->getPost("unvan_id"),
            "personel_gorev" => $this->request->getPost("personel_gorev"),
            "personel_unvan" => $this->request->getPost("personel_unvan"),
            "personel_gorevyeri" => $this->request->getPost("personel_gorevyeri"),
            "personel_adres" => $this->request->getPost("personel_adres"),
            "personel_kan" => $this->request->getPost("personel_kan"),
            "personel_aciklama" => $this->request->getPost("personel_aciklama"),
            "personel_sozlesmelimi" => $this->request->getPost("personel_sozlesmelimi"),
            'personel_ekleyen' => session()->get("kullanici_mail")
            //"personel_durum" =>$this->request->getPost("personel_durum") === null ? 0 : 1
        ];
        if ($this->request->getMethod() == "post"){
            helper("form");
            $rules =[
                "personel_adsoyad" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ],
                "personel_tc" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ]
            ];
            if (!$this->validate($rules)){//eğitimde validation olarak geçiyor ama burada çalışmıyor!!!!
                $data = [];
                $data["title"] = "Personeller";
                $data["subtitle"] = "Personel Ekleme";
                $data["main"] = "admin";
                $data["mf"] = "personel";
                $data["sf"] = "add";
                $data["validation"] =$this->validator;
                return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
            } else{
                /*$db = db_connect();
                $kategorilerModel = new Kategoriler_model($db);-- dinamik olması açısından kaldırdık yukarı aldık
                $ekle = $kategorilerModel->add($data); bunu da düzenliyoruz*/
                $ekle = $this->personelModel->add($data);
                if ($ekle){
                    $infoMessage = array(
                        "type" => "success",
                        "text" => "İşlem Başarılı",
                        "message" => "Personel Kaydetme İşlemi Başarılı!"
                    );
                    session()-> setFlashdata("alarm", $infoMessage);
                } else{
                    $infoMessage = array(
                        "type" => "error",
                        "text" => "İşlem Başarısız",
                        "message" => "Personel Kaydetme İşlemi Başarısız!"
                    );
                    session()-> setFlashdata("alarm", $infoMessage);
                }
                return redirect()->to(base_url("personel"));
            }
        }
    }
    public function edit($personel_id)
    {
        $data = [];
        $data["title"] = "Personeller";
        $data["subtitle"] = "Personel Düzenleme";
        $data["main"] = "admin";
        $data["mf"] = "personel";
        $data["sf"] = "edit";
        $data["personel"] = $this->personelModel->c_one(array("personel_id"=>$personel_id));
        $data["durum"] = $this->durumModel->c_all(); // Şimdi veri çekme sırasında
        $data["gorev"] = $this->gorevModel->c_all(); // Şimdi veri çekme sırasında
        $data["unvan"] = $this->unvanModel->c_all(); // Şimdi veri çekme sırasında
        $data["gorev_yeri"] = $this->gorevyeriModel->c_all(); // Şimdi veri çekme sırasında
        return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
    }
    public function update_form($personel_id)
    {
        $data = [
            "validation" => Services::validation() //\Config\Services::validation()  alanını use ye ekliyoruz dinamik yapı
        ];
        $data = [
            "personel_adsoyad" => $this->request->getPost("personel_adsoyad"),
            "personel_tc" => $this->request->getPost("personel_tc"),
            "personel_sicilno" => $this->request->getPost("personel_sicilno"),
            "personel_eposta" => $this->request->getPost("personel_eposta"),
            "personel_telefon" => $this->request->getPost("personel_telefon"),
            "personel_dogumtarihi" => $this->request->getPost("personel_dogumtarihi"),
            "personel_isegiristarih" => $this->request->getPost("personel_isegiristarih"),
            "personel_kurumisegiristarih" => $this->request->getPost("personel_kurumisegiristarih"),
            "unvan_id" => $this->request->getPost("unvan_id"),
            "personel_gorev" => $this->request->getPost("personel_gorev"),
            "personel_unvan" => $this->request->getPost("personel_unvan"),
            "personel_gorevyeri" => $this->request->getPost("personel_gorevyeri"),
            "personel_adres" => $this->request->getPost("personel_adres"),
            "personel_kan" => $this->request->getPost("personel_kan"),
            "personel_aciklama" => $this->request->getPost("personel_aciklama"),
            "personel_sozlesmelimi" => $this->request->getPost("personel_sozlesmelimi"),
            'personel_duzenleyen' => session()->get("kullanici_mail"),
            "personel_siralama" => $this->request->getPost("personel_siralama"),
            "personel_durum" =>$this->request->getPost("personel_durum")
        ];
        if ($this->request->getMethod() == "post"){
            helper("form");
            $rules =[
                "personel_adsoyad" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ],
                "personel_tc" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ]
            ];
            if (!$this->validate($rules)){//eğitimde validation olarak geçiyor ama burada çalışmıyor!!!!
                $data = [];
                $data["title"] = "Personeller";
                $data["subtitle"] = "Personel Ekleme";
                $data["main"] = "admin";
                $data["mf"] = "personel";
                $data["sf"] = "add";
                $data["personel"] =$this->personelModel->c_one(array("personel_id"=>$personel_id));
                $data["validation"] =$this->validator;
                return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
            } else{
                /*$db = db_connect();
                $kategorilerModel = new Kategoriler_model($db);-- dinamik olması açısından kaldırdık yukarı aldık
                $ekle = $kategorilerModel->add($data); bunu da düzenliyoruz*/
                $update = $this->personelModel->update(
                    array("personel_id"=>$personel_id),
                    array(
                        "personel_adsoyad" => $this->request->getPost("personel_adsoyad"),
                        "personel_tc" => $this->request->getPost("personel_tc"),
                        "personel_sicilno" => $this->request->getPost("personel_sicilno"),
                        "personel_eposta" => $this->request->getPost("personel_eposta"),
                        "personel_telefon" => $this->request->getPost("personel_telefon"),
                        "personel_dogumtarihi" => $this->request->getPost("personel_dogumtarihi"),
                        "personel_isegiristarih" => $this->request->getPost("personel_isegiristarih"),
                        "personel_kurumisegiristarih" => $this->request->getPost("personel_kurumisegiristarih"),
                        "unvan_id" => $this->request->getPost("unvan_id"),
                        "personel_gorev" => $this->request->getPost("personel_gorev"),
                        "personel_unvan" => $this->request->getPost("personel_unvan"),
                        "personel_gorevyeri" => $this->request->getPost("personel_gorevyeri"),
                        "personel_adres" => $this->request->getPost("personel_adres"),
                        "personel_kan" => $this->request->getPost("personel_kan"),
                        "personel_aciklama" => $this->request->getPost("personel_aciklama"),
                        "personel_sozlesmelimi" => $this->request->getPost("personel_sozlesmelimi"),
                        "personel_siralama" => $this->request->getPost("personel_siralama"),
                        'personel_duzenleyen' => session()->get("kullanici_mail"),
                        "personel_durum" =>$this->request->getPost("personel_durum")
                    )
                );
                if ($update){
                    $infoMessage = array(
                        "type" => "success",
                        "text" => "İşlem Başarılı",
                        "message" => "Personel Güncelleme İşlemi Başarılı!"
                    );
                    session()-> setFlashdata("alarm", $infoMessage);
                } else{
                    $infoMessage = array(
                        "type" => "error",
                        "text" => "İşlem Başarısız",
                        "message" => "Personel Güncelleme İşlemi Başarısız!"
                    );
                    session()-> setFlashdata("alarm", $infoMessage);
                }
                return redirect()->to(base_url("personel"));
            }
        }
    }
    public function delete($personel_id)
    {
        $update = $this->personelModel->update(
            array("personel_id"=>$personel_id),
            array(
                "personel_durum" =>$this->request->getPost("personel_durum") === null ? 1 : 0,
                'personel_silen' => session()->get("kullanici_mail")
                // 'izin_silen_ip' => $this->getIPAddress()
            )
        );
        if ($update){
            $infoMessage = array(
                "type" => "success",
                "text" => "İşlem Başarılı",
                "message" => "Personel Silme İşlemi Başarılı!"
            );
            session()-> setFlashdata("alarm", $infoMessage);
        } else{
            $infoMessage = array(
                "type" => "error",
                "text" => "İşlem Başarısız",
                "message" => "Personel Silme İşlemi Başarısız!"
            );
            session()-> setFlashdata("alarm", $infoMessage);
        }
        return redirect()->to(base_url("personel"));
        /*$delete = $this->izinModel->delete(array("izin_id"=>$izin_id)); bu fonksiyon ile veriyi siliyorum ama ben yukarıda durumu 1 yapmanın daha uygun olduğunu düşündüm
        if ($delete){
            return redirect()->to(base_url("izin"));
        }else{
            return redirect()->to(base_url("izin"));
        }*/
    }



    /*public function delete($personel_id)
    {
        $delete = $this->personelModel->delete(array("personel_id"=>$personel_id));
        if ($delete){
            return redirect()->to(base_url("personel"));
        }else{
            return redirect()->to(base_url("personel"));
        }
    }*/
}