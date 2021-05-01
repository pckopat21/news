<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url("dashboard")?>" class="nav-link">Anasayfa</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url('guncelleme')?>" class="nav-link">Sürüm Notları</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url('iletisim')?>" class="nav-link">İletişim</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <?php if (isset($bildirim_dogumgunu)){ ?>
        <?= view("admin/bildirim/bildirim_baslayis")?>
        <?php } ?>
        <?php if (isset($bildirim_dogumgunu)){ ?>
        <?= view("admin/bildirim/bildirim_dogumgunu")?>
        <?php } ?>

            <?= view("admin/bildirim/bildirim_onay")?>

        <!-- Notifications Dropdown Menu yukarıdaki bildirimlerin admini {$main} di değiştirdim üst klasörlerde görsel görünmüyordu -->

        <!--<li class="nav-item"><a class="nav-link" data-widget="fullscreen" href="#" role="button"><i class="fas fa-expand-arrows-alt"></i></a></li>
         <li class="nav-item"> ----burasu ayar yapılan kısım arka plan dark mode vs gibi
             <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                 <i class="fas fa-th-large"></i>
             </a>
         </li> -->
         <li class="nav-item dropdown">
             <a class="nav-link" data-toggle="dropdown" href="#">
                 <i class="far fa-user"></i>
                 <span class="badge badge-warning navbar-badge"><!--sayi verebiliriz--></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header"><?= findAdmin("kullanici_adsoyad") ?></span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> Profil Düzenleme
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-key mr-2"></i> Şifre Güncelleme
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?= base_url("admin/logout")?>" class="dropdown-item">
                    <i class="fas fa-edit mr-2"></i> Güvenli Çıkış
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
            </div>
        </li>
    </ul>
</nav>