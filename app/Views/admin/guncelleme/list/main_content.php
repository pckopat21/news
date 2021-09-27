<section class="content">
    <div class="container-fluid">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Güncelleme Detayları</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Estimated budget</span>
                      <span class="info-box-number text-center text-muted mb-0">2300</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Total amount spent</span>
                      <span class="info-box-number text-center text-muted mb-0">2000</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Estimated project duration</span>
                      <span class="info-box-number text-center text-muted mb-0">20</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <?php if (empty($guncelleme)){ ?>
                    <tr><td class="text-center" colspan="10">Henüz İçerik Eklenmemiş</td></tr>
                <?php } else{ ?>
                    <?php $say=0; foreach ($guncelleme as $guncelleme) {$say++?>

                <div class="col-12">
                  <h4><?= $guncelleme->guncelleme_tur; ?></h4>
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="<?= base_url()?>/images/favicon/apple-icon-57x57.png" >
                        <span class="username">
                          <a href="#"><?= $guncelleme->guncelleme_baslik; ?></a>
                        </span>
                        <span class="description"><?= date("d-m-Y",strtotime($guncelleme->guncelleme_tarih)); ?> - <?= date("H:i:s",strtotime($guncelleme->guncelleme_tarih)); ?></span>
                      </div>
                      <p><?= $guncelleme->guncelleme_aciklama; ?></p>
                      <p><a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> <?= $guncelleme->guncelleme_versiyon; ?></a></p>
                    </div>
                </div>
              <?php } ?>
          <?php } ?>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 class="text-primary"><i class="fas fa-paint-brush"></i> Karayolları Genel Müdürlüğü</h3>
              <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
              <br>
              <div class="text-muted">
                <p class="text-sm">Proje Geliştirme Sorumlusu
                  <b class="d-block">Servet AVCI</b>
                </p>
                <p class="text-sm">Takım Lideris
                  <b class="d-block">Servet AVCI</b>
                </p>
              </div>
              <h5 class="mt-5 text-muted">Proje Dokümanları</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                </li>
              </ul>
              <div class="text-center mt-5 mb-3">
                <a href="#" class="btn btn-sm btn-primary">Add files</a>
                <a href="#" class="btn btn-sm btn-warning">Report contact</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      </div>
      <!-- /.card -->
    </section>
<!--
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
                      </table>
                  </div>
            </div>
        </div>
    </div>
</div>
</section>
<section class="content"></section>
-->
