<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url()?>/dashboard" class="brand-link">
        <img src="<?= base_url()?>/images/kgm.jpg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><?= $title?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url()?>/images/kgm.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= findAdmin("kullanici_adsoyad") ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Menüde Arama Yapın" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Sidebar Menu-->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview"><a href="<?= base_url("dashboard")?>" class="nav-link"><i class="nav-icon fas fa-home"></i><p>Anasayfa</p></a></li>
                <li class="nav-item has-treeview"><a href="<?= base_url("personel")?>" class="nav-link"><i class="nav-icon fas fa-user"></i><p>Personeller</p></a></li>
                <li class="nav-item has-treeview"><a href="<?= base_url("izin")?>" class="nav-link"><i class="nav-icon fas fa-edit"></i><p>İzinler</p></a></li>
                <li class="nav-item has-treeview"><a href="<?= base_url("izin_kullanim")?>" class="nav-link"><i class="nav-icon fas fa-calculator"></i><p>İzin Kullanım Durumları</p></a></li>
                <li class="nav-item has-treeview"><a href="<?= base_url("ayar/edit/0")?>" class="nav-link"><i class="nav-icon fas fa-cog"></i><p>Genel Ayarlar</p></a></li>
                      <li class="nav-item">
                    <a href="#" class="nav-link"><i class="nav-icon fas fa-table"></i><p>Tanımlama İşlemleri<i class="fas fa-angle-left right"></i></p></a>
                    <ul class="nav nav-treeview"><li class="nav-item"><a href="<?= base_url("izin_tanim")?>" class="nav-link"><i class="far fa-circle nav-icon"></i><p>İzin Tanımlama</p></a></li>
                        <li class="nav-item"><a href="<?= base_url("unvan_tanim")?>" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Ünvan Tanımlama</p></a></li>
                        <li class="nav-item"><a href="<?= base_url("gorevyeri_tanim")?>" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Görev Yeri Tanımlama</p></a></li>
                        <li class="nav-item"><a href="<?= base_url("kullanici_tanim")?>" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Kullanıcı Tanımlama</p></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="<?= base_url("ayar")?>" class="nav-link"><i class="nav-icon far fa-calendar-alt"></i><p>Calendar<span class="badge badge-info right">2</span></p></a></li>

            </ul>
        </nav>
        <!--  sidebar-menu
        <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="nav-icon fas fa-table"></i><p>Tables<i class="fas fa-angle-left right"></i></p></a>
                    <ul class="nav nav-treeview"><li class="nav-item"><a href="http://news.test/izin" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Simple Tables</p></a></li>
                        <li class="nav-item"><a href="http://news.test/izin_kullanim" class="nav-link"><i class="far fa-circle nav-icon"></i><p>DataTables</p></a></li>
                        <li class="nav-item"><a href="http://news.test/kategoriler" class="nav-link"><i class="far fa-circle nav-icon"></i><p>jsGrid</p></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="http://news.test/personel" class="nav-link"><i class="nav-icon far fa-calendar-alt"></i><p>Calendar<span class="badge badge-info right">2</span></p></a></li>
            </ul>
        </nav>-->





    </div>
    <!-- /.sidebar -->
</aside>