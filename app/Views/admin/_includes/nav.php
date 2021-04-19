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
        <?= view("{$main}/bildirim_baslayis/list/main_content")?>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#"><i class="far fa-bell"></i><span class="badge badge-warning navbar-badge">15</span></a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right"><span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item"><i class="fas fa-envelope mr-2"></i> 4 new messages<span class="float-right text-muted text-sm">3 mins</span></a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item"><i class="fas fa-users mr-2"></i> 8 friend requests<span class="float-right text-muted text-sm">12 hours</span></a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item"><i class="fas fa-file mr-2"></i> 3 new reports<span class="float-right text-muted text-sm">2 days</span></a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class="nav-item"><a class="nav-link" data-widget="fullscreen" href="#" role="button"><i class="fas fa-expand-arrows-alt"></i></a></li>
        <!-- <li class="nav-item"> ----burasu ayar yapılan kısım arka plan dark mode vs gibi
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