
<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Son 3 Yıla Ait Kayıtlar Listelenmektedir.</h3>
                    <div class="card-tools">
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped table-content" >
                        <thead>
                        <tr>
                            <th width="1">S.No</th>
                            <th>Statü</th>
                            <th>Ünvan</th>
                            <th>Personel</th>
                            <th>İzin Türü</th>
                            <th>İzin Yılı</th>
                            <th>İlk İşe Giriş </th>
                            <th width="1">Kullanılan</th>
                            <th width="1">Hakedilen</th>
                            <th width="75">Kalan İzin</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (empty($izin_kullanim)){ ?>
                            <tr><td class="text-center" colspan="10">Henüz İçerik Eklenmemiş</td></tr>
                        <?php } else{ ?>
                            <?php $say=0; foreach ($izin_kullanim as $izin_kullanim) {$say++?>
                                <tr>
                                    <td><?php echo $say ?></td>
                                    <td><?= $izin_kullanim->durum_ad ?></td>
                                    <td><?= $izin_kullanim->unvan_ad ?></td>
                                    <td><?= $izin_kullanim->personel_adsoyad ?></td>
                                    <td><?= $izin_kullanim->izin_ad ?></td>
                                    <td><?= $izin_kullanim->izin_yil ?></td>
                                    <td><?= date("d-m-Y",strtotime($izin_kullanim->personel_isegiristarih)) ?></td>
                                    <td><?= $izin_kullanim->izin_suresi ?></td>
                                    <td><?= $izin_kullanim->izin_hakki ?></td>
                                    <td><?= $izin_kullanim->Kalanizin ?></td>
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