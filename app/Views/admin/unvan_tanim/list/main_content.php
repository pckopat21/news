
<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Aşağıda listenen ünvanları yazdırabilirsiniz</h3>
                    <div class="card-tools">
                        <a href="<?= base_url("{$mf}/add")?>"><button type="button" class="btn btn-primary">Yeni Ünvan Ekle</button></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped table-content" >
                        <thead>
                        <tr>
                            <th width="1">#</th>
                            <th>Ünvan</th>
                            <th>Ünvan Açıklaması</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (empty($unvan_tanim)){ ?>
                            <tr><td class="text-center" colspan="4">Henüz İçerik Eklenmemiş</td></tr>
                        <?php } else{ ?>
                            <?php $say=0; foreach ($unvan_tanim as $unvan_tanim) {$say++?>
                                <tr>
                                    <td><?= $say ?></td>
                                    <td><?= $unvan_tanim->unvan_ad?></td>
                                    <td><?= $unvan_tanim->unvan_aciklama?></td>
                                    <td><center><a href="<?= base_url("{$mf}/edit/$unvan_tanim->unvan_id")?>"><button class="btn btn-round btn-success btn-xs">Düzenle</button></a></center></td>
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