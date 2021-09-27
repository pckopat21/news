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
                            <th>Süresi</th>
                            <th>Onayla</th>
                            <th>Reddet</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (empty($izin_onay)){ ?>
                            <tr><td class="text-center" colspan="12">Henüz İçerik Eklenmemiş</td></tr>
                        <?php } else{ ?>
                            <?php $say=0; foreach ($izin_onay as $izin_onay) {$say++?>
                                <tr>
                                    <td><?= $say ?></td>
                                    <td><?= $izin_onay->personel_adsoyad?></td>
                                    <td><?= $izin_onay->durum_ad?></td>
                                    <td><?= $izin_onay->unvan_ad?></td>
                                    <td><?= $izin_onay->izin_yil?></td>
                                    <td><?= $izin_onay->izin_turid?></td>
                                    <td><?= date("d-m-Y",strtotime($izin_onay->izin_baslayis)) ?></td>
                                    <td><?= date("d-m-Y",strtotime($izin_onay->izin_bitis)) ?></td>
                                    <td><?= date("d-m-Y",strtotime($izin_onay->izin_isebaslayis)) ?></td>
                                    <td><?= $izin_onay->izin_suresi?></td>
                                    <td><button data-url="<?= base_url("{$mf}/onayla/$izin_onay->izin_id")?>" class="btn btn-success btn-xs delete-buton">Onayla</button></td>
                                    <td><button data-url="<?= base_url("{$mf}/delete/$izin_onay->izin_id")?>" class="btn btn-danger btn-xs delete-buton">Reddet</button></td>
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
