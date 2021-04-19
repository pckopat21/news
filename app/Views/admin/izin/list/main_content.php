<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Aşağıda listenen personelleri yazdırabilirsiniz</h3>
                    <div class="card-tools">
                        <a href="<?= base_url("izin/add")?>"><button type="button" class="btn btn-primary">Yeni İzin Ekle</button></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped table-content" >
                        <thead>
                        <tr>
                            <th width="1">#</th>
                            <th>Ad Soyad</th>
                            <th>Statü</th>
                            <th>Ünvan</th>
                            <th>Dönem</th>
                            <th>İzin Türü</th>
                            <th>İzin Başlangıcı</th>
                            <th>İzin Bitişi</th>
                            <th>İşe Başlama</th>
                            <th>İzin Süresi</th>
                            <th>Yazdır</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (empty($izin)){ ?>
                            <tr><td class="text-center" colspan="12">Henüz İçerik Eklenmemiş</td></tr>
                        <?php } else{ ?>
                            <?php $say=0; foreach ($izin as $izin) {$say++?>
                                <tr>
                                    <td><?= $say ?></td>
                                    <td><?= $izin->personel_adsoyad?></td>
                                    <td><?= $izin->durum_ad?></td>
                                    <td><?= $izin->unvan_ad?></td>
                                    <td><?= $izin->izin_yil?></td>
                                    <td><?= $izin->izin_ad?></td>
                                    <td><?= date("d-m-Y",strtotime($izin->izin_baslayis)) ?></td>
                                    <td><?= date("d-m-Y",strtotime($izin->izin_bitis)) ?></td>
                                    <td><?= date("d-m-Y",strtotime($izin->izin_isebaslayis)) ?></td>
                                    <td><?= $izin->izin_suresi?></td>
                                    <td><center><?php if ($izin->unvan_id==1 && $izin->izin_turid==1 && $izin->personel_sozlesmelimi==0) {?>
                                                <a target="_blank"
                                                   href="<?= base_url("Yazdir/yonlendir/yazdir_memur/".$izin->izin_id)?>"><button class="btn btn-round btn-primary btn-xs">Yazdır</button></a>
                                            <?php } else if ($izin->unvan_id==2 && $izin->izin_turid==1 && $izin->personel_sozlesmelimi==0)  {?>
                                                <a target="_blank"
                                                   href="<?= base_url("Yazdir/yonlendir/yazdir_isci/".$izin->izin_id)?>"><button class="btn btn-round btn-primary btn-xs">Yazdır</button></a>
                                            <?php } else if ($izin->unvan_id==1 && $izin->izin_turid==1 && $izin->personel_sozlesmelimi==1)  {?>
                                                <a target="_blank"
                                                   href="<?= base_url("Yazdir/yonlendir/yazdir_sozlesmeli/".$izin->izin_id)?>"><button class="btn btn-round btn-primary btn-xs">Yazdır</button></a>
                                            <?php } else if ($izin->unvan_id==3 && $izin->izin_turid==1 && $izin->personel_sozlesmelimi==0)  {?>
                                                <a target="_blank" href="<?= base_url("Yazdir/yonlendir/yazdir_surekliisci/".$izin->izin_id)?>"><button class="btn btn-round btn-primary btn-xs">Yazdır</button></a>
                                            <?php } else if ($izin->unvan_id==1 && $izin->personel_sozlesmelimi==0 && $izin->izin_turid==6)  {?>
                                                <a target="_blank" href="<?= base_url("Yazdir/yonlendir/yazdir_memurvefat/".$izin->izin_id)?>"><button class="btn btn-round btn-primary btn-xs">Yazdır</button></a>
                                            <?php }else if ($izin->unvan_id==1 /*&& $izin->personel_sozlesmelimi==0*/ && $izin->izin_turid==3)  {?>
                                                <a target="_blank"
                                                   href="<?= base_url("Yazdir/yonlendir/yazdirmemurrapor/".$izin->izin_id)?>"><button class="btn btn-round btn-primary btn-xs">Yazdır</button></a>
                                            <?php }else if ($izin->unvan_id==1 && $izin->personel_sozlesmelimi==0 && $izin->izin_turid==9)  {?>
                                                <a target="_blank"
                                                   href="<?= base_url("Yazdir/yonlendir/yazdir_memurevlilik/".$izin->izin_id)?>"><button class="btn btn-round btn-primary btn-xs">Yazdır</button></a>
                                            <?php }else if ($izin->unvan_id==1 && $izin->personel_sozlesmelimi==1 && $izin->izin_turid==9)
                                            {?>
                                                <a target="_blank" href="<?= base_url("Yazdir/yonlendir/yazdir_sozlesmelievlilik/".$izin->izin_id)?>"><button class="btn btn-round btn-primary btn-xs">Yazdır</button></a>
                                            <?php }
                                            ?></center></td>
                                    <td><button data-url="<?= base_url("{$mf}/delete/$izin->izin_id")?>" class="btn btn-danger btn-xs delete-buton">Silme İşlemi</button></td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                        </tbody>
                        <!--  <tfoot>  //bu kısımı alt satırda çıkmawsı için kullanacağız
                          <tr>
                              <th>#</th>
                              <th>Ad Soyad</th>
                              <th>TC</th>
                              <th>Telefon</th>
                              <th>Sicil</th>
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
<section class="content"></section>