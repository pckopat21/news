<section class="content">
    <div class="container-fluid">
        <div class="col-12">
    <div class="row">
        <?php  foreach ($personel_listesi as $personel_listesi) {?>
            <div class="col-lg-2 col-6">
                <div class="small-box bg-gradient-orange"><div class="inner"><h3><?= $personel_listesi->count?><sup style="font-size: 20px"></sup></h3><p>Toplam Personel</p></div><div class="icon"><i class="fas fa-chart-pie"></i></div>
                    <a href="<?= base_url('personeller')?>" class="small-box-footer">Personel Detayı <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        <?php } ?>
        <?php  foreach ($personel_istat as $personel_istat) {?>
        <div class="col-lg-2 col-6">
            <div class="small-box bg-gradient-orange"><div class="inner"><h3><?= $personel_istat->count?><sup style="font-size: 20px"></sup></h3><p><?= $personel_istat->gorev_ad?> Sayısı</p></div><div class="icon"><i class="fas fa-user"></i></div>
                         <a href="<?= base_url("personel_listesi/filtered/$personel_istat->personel_gorev")?>" class="small-box-footer">Personel Detayı <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">İzinli / Raporlu Olan Personeller</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Personel</th>
                                <th>Statü</th>
                                <th>Ünvan</th>
                                <th>İzin Tür</th>
                                <th>Dönemi</th>
                                <th>İzin Başlayış</th>
                                <th>İzin Bitiş </th>
                                <th>İşe Başlayış </th>
                                <th>İzin Süresi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (empty($izin_listesi)){ ?>
                                <tr><td class="text-center" colspan="10">Henüz İçerik Eklenmemiş</td></tr>
                            <?php } else{ ?>
                                <?php $say=0; foreach ($izin_listesi as $izin) {$say++?>
                                    <tr>
                                        <td><?= $say ?></td>
                                        <td><?= $izin->personel_adsoyad?></td>
                                        <td><?= $izin->durum_ad?></td>
                                        <td><?= $izin->unvan_ad?></td>
                                        <td><?= $izin->izin_ad?></td>
                                        <td><?= $izin->izin_yil?></td>
                                        <td><?= date("d-m-Y",strtotime($izin->izin_baslayis)) ?></td>
                                        <td><?= date("d-m-Y",strtotime($izin->izin_bitis)) ?></td>
                                        <td><?= date("d-m-Y",strtotime($izin->izin_isebaslayis)) ?></td>
                                        <td><?= $izin->izin_suresi ?></td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                            </tbody>
                           <!-- <tfoot>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                            </tr>
                            </tfoot>-->
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Personel Bilgi Kartları</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="card card-solid">
                        <div class="row">
                            <?php if (empty($personel_kart)){ ?>
                                <tr><td class="text-center" colspan="10">Henüz İçerik Eklenmemiş</td></tr>
                            <?php } else{ ?>
                            <?php  foreach ($personel_kart as $personel_kart) {?>
                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                <div class="card bg-light d-flex flex-fill">
                                    <div class="card-header text-muted border-bottom-0">
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-7">
                                                <h1 class="text-muted text-lg"><b><?= $personel_kart->personel_adsoyad?></b></h1>
                                                <p class="text-muted text-sm"><b>Ünvan: </b><?= $personel_kart->unvan_ad?></p>
                                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span><b>Adres: </b><?= $personel_kart->personel_adres?></li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-mobile-alt"></i></span><b>Telefon: </b>0<?= $personel_kart->personel_telefon?></li>
                                                    <li class="small"><span class="fa-li"><i class="far fa-address-card"></i></span><b>Sicil: </b><?= $personel_kart->personel_sicilno?></li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-clinic-medical"></i></span><b>Kan Grubu: </b><?= $personel_kart->personel_kan?></li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-birthday-cake"></i></span><b>Doğum Tarihi: </b><?= date("d-m-Y",strtotime($personel_kart->personel_dogumtarihi)) ?></li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-briefcase"></i></span><b>İlk İşe Giriş: </b><?= date("d-m-Y",strtotime($personel_kart->personel_isegiristarih)) ?></li>
                                                </ul>
                                            </div>
                                            <div class="col-5 text-center">
                                                <img src="<?=  $personel_kart->personel_resim ?>" onerror="this.src='<?= base_url()?>/images/kgm.jpg'" alt="user-avatar" class="img-circle img-fluid">
                                                <?php
                                                if ($personel_kart->izin_bilgisi==1) {?><button class="btn btn-danger btn-xs">İzinli</button><?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-center">
                                            <div>
                                                <a><?=  $personel_kart->yil ?> yıl</a>
                                                <a><?=  $personel_kart->ay ?> ay</a>
                                                <a><?=  $personel_kart->gun ?> gündür çalışmakta</a>
                                            </div>
                                            <a href="#" class="btn btn-sm bg-teal">Dosya İşlemleri</a>
                                            <a href="<?= base_url("personel_profil/edit/$personel_kart->personel_id")?>" class="btn btn-sm btn-primary">Personel Detayı</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <?php } ?>
                        </div>
                    <!-- /.card-body -->
                    <!-- /.card-footer -->
                </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<section class="content"></section>
