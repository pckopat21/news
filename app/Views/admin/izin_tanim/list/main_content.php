
<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Aşağıda listenen personelleri yazdırabilirsiniz</h3>
                    <div class="card-tools">
                        <a href="<?= base_url("{$mf}/add")?>"><button type="button" class="btn btn-primary">Yeni izin Türü Ekle</button></a>
                    </div>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped table-content" >
                        <thead>
                        <tr>
                            <th width="1">#</th>
                            <th>Statü</th>
                            <th>İzin Adı</th>
                            <th>İzin Açıklaması</th>
                            <th>Yaş Alt Sınır</th>
                            <th>Yaş Üst Sınır</th>
                            <th>İzin Hakkı</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (empty($izin_tanim)){ ?>
                            <tr><td class="text-center" colspan="8">Henüz İçerik Eklenmemiş</td></tr>
                        <?php } else{ ?>
                            <?php $say=0; foreach ($izin_tanim as $izin_tanim) {$say++?>
                                <tr>
                                    <td><?= $say ?></td>
                                    <td><?= $izin_tanim->durum_ad?></td>
                                    <td><?= $izin_tanim->izin_ad?></td>
                                    <td><?= $izin_tanim->ad?></td>
                                    <td><?= $izin_tanim->alt_tecrube?></td>
                                    <td><?= $izin_tanim->ust_tecrube?></td>
                                    <td><?= $izin_tanim->izin_hakki?></td>
                                    <td><center><a href="<?= base_url("{$mf}/edit/$izin_tanim->id")?>"><button class="btn btn-round btn-success btn-xs">Düzenle</button></a></center></td>
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