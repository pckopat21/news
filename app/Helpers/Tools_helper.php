<?php
function pazar_gunlerini_bul($baslangic_tarih, $bitis_tarih)
{
    $startDate = new DateTime($baslangic_tarih);
    $endDate = new DateTime($bitis_tarih);
    $toplamGun = 0;

    $sundays = array();

    while ($startDate <= $endDate) {
        $toplamGun++;
        if ($startDate->format('w') == 0)
        {
            $sundays[] = $startDate->format('Y-m-d');
        }
        $startDate->modify('+1 day');
    }
    echo "toplamGun: ".$toplamGun;

    return array(
        'toplam_gun'=>$toplamGun,
        'pazar_sayisi'=>sizeof($sundays),
        'gecerli_izin_gun_sayisi'=>$toplamGun-sizeof($sundays)
    );
}
function sfd($durum, $baslik, $mesaj)
{
    $sfd ='<div class="alert alert-'.$durum.' alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-info"></i> '.$baslik.'</h5>
                  '.$mesaj.'
                </div>';
    $ci = Config\Services::session();
    return $ci->setFlashdata("durum",$sfd);
}

function fdata()
{
    $ci = Config\Services::session();
    return $ci->getFlashdata( "durum");
}

function findAdmin($name = array())
{
    //$admin = Config\Services::session();
    $admin = session() ->get($name);
    if ($admin)
        return $admin;
            else
            return false;
}

function kirinti($durum, $subtitle = null, $url = null, $title, $baslik = null)
{
    if ($durum == "bekle"){
        return '<div class="row mb-2">
                    <div class="col-sm-6">
                    <h1>'.$subtitle.'</h1>
                    </div>
                    <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard">Anasayfa</a></li>
                    <li class="breadcrumb-item active">'.$title.'</li>
                </ol>
            </div>
        </div>';

    }
    if ($durum =="ilerle"){
        return '<div class="row mb-2">
                    <div class="col-sm-6">
                    <h1>'.$subtitle.'</h1>
                    </div>
                    <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard">Anasayfa</a></li>
                    <li class="breadcrumb-item "><a href="'.base_url($url).'">'.$title.'</a></li>
                    <li class="breadcrumb-item active">'.$baslik.'</li>
                </ol>
            </div>
        </div>';
    }
}