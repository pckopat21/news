<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Aşağıda listenen personelleri yazdırabilirsiniz</h3>
                    <div class="card-tools">
                        <a href="<?= base_url("personel/add")?>"><button type="button" class="btn btn-primary">Yeni Personel Ekle</button></a>
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
                            <th>Görev Yeri</th>
                            <th>Sicil</th>
                            <th>Giriş Tarihi</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (empty($personel)){ ?>
                            <tr><td class="text-center" colspan="5">Henüz İçerik Eklenmemiş</td></tr>
                        <?php } else{ ?>
                            <?php $say=0; foreach ($personel as $personel) {$say++?>
                                <tr>
                                    <td><?= $say ?></td>
                                    <td><?= $personel->personel_adsoyad?></td>
                                    <td><?= $personel->durum_ad?></td>
                                    <td><?= $personel->unvan_ad?></td>
                                    <td><?= $personel->gorevyeri_ad?></td>
                                    <td><?= $personel->personel_sicilno?></td>
                                    <td><?= date("d-m-Y",strtotime($personel->personel_isegiristarih)) ?></td>
                                    <td><center><a href="<?= base_url("{$mf}/edit/$personel->personel_id")?>"><button class="btn btn-round btn-success btn-xs">Düzenle</button></a></center></td>
                                    <!-- <td><button data-url="<?= base_url("{$mf}/delete/$personel->personel_id")?>" class="btn btn-danger btn-xs delete-buton">Silme İşlemi</button></td>

                                   <td><input type="checkbox" class="js-switch"<?= ($personel->personel_sozlesmelimi) ? "checked" : "" ?> /></td> -->

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