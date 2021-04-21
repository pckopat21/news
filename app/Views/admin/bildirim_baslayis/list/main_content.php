<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#"><i class="fas fa-users"></i><span class="badge badge-danger navbar-badge">3</span></a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right"><span class="dropdown-item dropdown-header">Bugün Başlayış Yapanlar</span>
        <?php $say = 0; foreach ($bildirim_baslayis as $bildirim_baslayis) { $say++  ?>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
            <div class="media">
                <img src="<?= $bildirim_baslayis->personel_resim?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body"><h3 class="dropdown-item-title"><?= $bildirim_baslayis->personel_adsoyad?><span class="float-right text-sm text-success"><?= $say?><i class="fas fa-star"></i></span></h3>
                    <p class="text-sm"><?= $bildirim_baslayis->unvan_ad?></p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i><?= $bildirim_baslayis->izin_suresi?> gün <?= $bildirim_baslayis->izin_ad?></p>
                </div>
            </div>
        </a>
        <?php } ?>
    </div>
</li>
