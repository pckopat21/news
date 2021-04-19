<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\Kategoriler_model;
use Config\Services;

class Kategoriler extends BaseController
{
    public function __construct()
    {
        helper(["Tools_helper"]);
        $db = db_connect();
        $this->kategorilerModel = new Kategoriler_model($db);
    }

    public function index()
    {
        $data = [];
        $data["title"] = "Kategoriler";
        $data["subtitle"] = "Kategori Listeleme";
        $data["main"] = "admin";
        $data["mf"] = "kategoriler";
        $data["sf"] = "list";
        /*$db = db_connect();
        $kategorilerModel = new Kategoriler_model($db);dinamik yapı açısından constrxcın oraya aldık
        $data["kategori"] = $kategorilerModel->c_all(); bunu da düzenlemim gerekiyor bu kez de*/
        $data["kategori"] = $this->kategorilerModel->c_all(array());

        return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
    }

    public function add()
    {
        $data = [];
        $data["title"] = "Kategoriler";
        $data["subtitle"] = "Kategori Ekleme";
        $data["main"] = "admin";
        $data["mf"] = "kategoriler";
        $data["sf"] = "add";
        return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
    }

    public function add_form()
    {
        $data = [
            "validation" => Services::validation() //\Config\Services::validation()  alanını use ye ekliyoruz dinamik yapı
        ];
        $data = [
            "kategori_ad" => $this->request->getPost("kategori_ad"),
            "kategori_aciklama" => $this->request->getPost("kategori_aciklama"),
            "kategori_durum" =>$this->request->getPost("kategori_durum") === null ? 0 : 1
        ];
        if ($this->request->getMethod() == "post"){
            helper("form");
            $rules =[
                "kategori_ad" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ],
                "kategori_aciklama" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ]
            ];
            if (!$this->validate($rules)){//eğitimde validation olarak geçiyor ama burada çalışmıyor!!!!
                $data = [];
                $data["title"] = "Kategoriler";
                $data["subtitle"] = "Kategori Ekleme";
                $data["main"] = "admin";
                $data["mf"] = "kategoriler";
                $data["sf"] = "add";
                $data["validation"] =$this->validator;
                return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
            } else{

                $ekle = $this->kategorilerModel->add($data);
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
                return redirect()->to(base_url("kategoriler"));
            }
        }
    }
    public function edit($kategori_id)
    {
        $data = [];
        $data["title"] = "Kategoriler";
        $data["subtitle"] = "Kategori Düzenleme";
        $data["main"] = "admin";
        $data["mf"] = "kategoriler";
        $data["sf"] = "edit";
        $data["kategori"] = $this->kategorilerModel->c_one(array("kategori_id"=>$kategori_id));
        return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
    }
    public function update_form($kategori_id)
    {
        $data = [
            "validation" => Services::validation() //\Config\Services::validation()  alanını use ye ekliyoruz dinamik yapı
        ];
        $data = [
            "kategori_ad" => $this->request->getPost("kategori_ad"),
            "kategori_aciklama" => $this->request->getPost("kategori_aciklama"),
            "kategori_durum" =>$this->request->getPost("kategori_durum") === null ? 0 : 1
        ];
        if ($this->request->getMethod() == "post"){
            helper("form");
            $rules =[
                "kategori_ad" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ],
                "kategori_aciklama" => [
                    "rules" => "required|trim",
                    "errors" =>[
                        "required" => "{field} Boş Bırakılamaz"
                    ]
                ]
            ];
            if (!$this->validate($rules)){//eğitimde validation olarak geçiyor ama burada çalışmıyor!!!!
                $data = [];
                $data["title"] = "Kategoriler";
                $data["subtitle"] = "Kategori Ekleme";
                $data["main"] = "admin";
                $data["mf"] = "kategoriler";
                $data["sf"] = "add";
                $data["kategori"] =$this->kategorilerModel->c_one(array("kategori_id"=>$kategori_id));
                $data["validation"] =$this->validator;
                return view( "{$data['main']}/{$data['mf']}/{$data['sf']}/index",$data);
            } else{

                $update = $this->kategorilerModel->update(
                    array("kategori_id"=>$kategori_id),
                    array(
                        "kategori_ad" => $this->request->getPost("kategori_ad"),
                        "kategori_aciklama" => $this->request->getPost("kategori_aciklama"),
                        "kategori_durum" =>$this->request->getPost("kategori_durum") === null ? 0 : 1
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
                return redirect()->to(base_url("kategoriler"));
            }
        }
    }

    public function delete($kategori_id)
    {
        $delete = $this->kategorilerModel->delete(array("kategori_id"=>$kategori_id));
        if ($delete){
            return redirect()->to(base_url("kategoriler"));
        }else{
            return redirect()->to(base_url("kategoriler"));
        }
    }
}