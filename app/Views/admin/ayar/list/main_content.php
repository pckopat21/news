<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped table-content" >
                        <thead>
                        <tr>
                            <th width="1">#</th>
                            <th>Kurum Başlık</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (empty($ayar)){ ?>
                            <tr><td class="text-center" colspan="5">Henüz İçerik Eklenmemiş</td></tr>
                        <?php } else{ ?>
                            <?php $say=0; foreach ($ayar as $ayar) {$say++?>
                                <tr>
                                    <td><?= $say ?></td>
                                    <td><?= $ayar->ayar_title?></td>
                                    <td><center><a href="<?= base_url("{$mf}/edit/$ayar->ayar_id")?>"><button class="btn btn-round btn-success btn-xs">Düzenle</button></a></center></td>
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