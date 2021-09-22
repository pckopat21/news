<?php
namespace App\Controllers\Admin;
use App\Controllers\MyBaseController;
use App\Models\Admin\Izin_turleri_model;
use Config\Services;
//$ip = $_SERVER['HTTP_CLIENT_IP']; //$this->input->ip_address() ;
//$ip = $this->input->ip_address();
//$localip = $HTTP_SERVER_VARS['HTTP_X_FORWARDED_FOR'];
class Izin extends MyBaseController
{
    /**
     * @var Izin_turleri_model
     */
    private $izinturleriModel;

    public function __construct()
    {
        parent::__construct();
        $this->izinturleriModel = new Izin_turleri_model($this->db);
    }

    public function index()
    {
        $this->data = [];
        $this->data["title"] = "İzinler";
        $this->data["subtitle"] = "İzin Listeleme Ekranı";
        $this->data["main"] = "admin";
        $this->data["mf"] = "izin";
        $this->data["sf"] = "list";
        $this->data["izin"] = $this->izinModel->izin(array());
        return parent::run_view();

//        $data["title"] = "İzinler";
//        $data["subtitle"] = "İzin Listeqqle";
        /*$db = db_connect();
        $kategorilerModel = new Kategoriler_model($db);dinamik yapı açısından constrxcın oraya aldık
        $data["kategoriler"] = $kategorilerModel->c_all(); bunu da düzenlemim gerekiyor bu kez de*/


    }
    public function add()
    {
        $data = [];
        $data["title"] = "İzinler";
        $data["subtitle"] = "İzin Ekleme";
        $data["main"] = "admin";
        $data["mf"] = "izin";
        $data["sf"] = "add";
        $data["personel"] = $this->personelModel->personel_izin(array());
        $data["izin_turleri"] = $this->izinturleriModel->izin_turleri(array());
        $this->data = $data;
        return parent::run_view();
    }
    public function add_form()
    {
        $data = [
            "validation" => Services::validation() //dinamik yapı
        ];
        $data = [
            "izin_personel" => $this->request->getPost("izin_personel"),
            "izin_turid" => $this->request->getPost("izin_turid"),
            "izin_yil" => $this->request->getPost("izin_yil"),
            "izin_baslayis" => $this->request->getPost("izin_baslayis"),
            "izin_bitis" => $this->request->getPost("izin_bitis"),
            "izin_isebaslayis" => $this->request->getPost("izin_isebaslayis"),
            "izin_suresi" => $this->request->getPost("izin_suresi"),
            "izin_vefat" => $this->request->getPost("izin_vefat"),
            "izin_saglikkurumu" => $this->request->getPost("izin_saglikkurumu"),
            "izin_aciklama" => $this->request->getPost("izin_aciklama"),
            "izin_adresi" => $this->request->getPost("izin_adresi"),
            "izin_personel" => $this->request->getPost("izin_personel"),
            "izin_ekleyen_personel" => session()->get("kullanici_mail")
        ];
        if ($this->request->getMethod() == "post")
        {
            helper("form");
            $rules =[
                "izin_personel" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ],
                "izin_yil" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ]
            ];
            if (!$this->validate($rules))
            {//eğitimde validation olarak geçiyor ama burada çalışmıyor!!!!
                $data = [];
                $data["title"] = "İzinler";
                $data["subtitle"] = "İzin Ekleme";
                $data["main"] = "admin";
                $data["mf"] = "izin";
                $data["sf"] = "add";
                $data["validation"] =$this->validator;
                return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
            } else
                {
                $ekle = $this->izinModel->add($data);
                    if ($ekle)
                    {
                        $infoMessage = array(
                            "type" => "success",
                            "text" => "İşlem Başarılı",
                            "message" => "Kaydetme İşlemi Başarılı!"
                        );
                        session()-> setFlashdata("alarm", $infoMessage);
                    } else
                    {
                    $infoMessage = array(
                        "type" => "error",
                        "text" => "İşlem Başarısız",
                        "message" => "Kaydetme İşlemi Başarısız!"
                    );
                    session()-> setFlashdata("alarm", $infoMessage);
                    }
                return redirect()->to(base_url("izin"));
                }
        }
    }
    public function edit($ayar_id)
    {
        $data = [];
        $data["title"] = "Genel Ayarlar";
        $data["subtitle"] = "Genel Ayar Düzenleme";
        $data["main"] = "admin";
        $data["mf"] = "ayar";
        $data["sf"] = "edit";
        $data["ayar"] = $this->personelModel->c_one(array("ayar_id"=>$ayar_id));
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
            "personel_durum" =>$this->request->getPost("personel_durum") === null ? 0 : 1
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
                        "personel_durum" =>$this->request->getPost("personel_durum") === null ? 0 : 1
                    )
                );
                if ($update){
                    $infoMessage = array(
                        "type" => "success",
                        "text" => "İşlem Başarılı",
                        "message" => "Güncelleme İşlemi Başarılı!"
                    );
                    session()-> setFlashdata("alarm", $infoMessage);
                } else{
                    $infoMessage = array(
                        "type" => "error",
                        "text" => "İşlem Başarısız",
                        "message" => "Güncelleme İşlemi Başarısız!"
                    );
                    session()-> setFlashdata("alarm", $infoMessage);
                }
                return redirect()->to(base_url("personel"));
            }
        }
    }
    public function delete($izin_id)
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