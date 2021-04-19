
<!-- /.row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $title ?></h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm">
                        <div class="input-group-append"><a href="<?= base_url("kategoriler/add")?>" class="btn btn-primary btn-sm"><i class="fas fa-plus">Ekle</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap table-content">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Kategori Başlık</th>
                        <th>Açıklama</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (empty($kategori)){ ?>
                        <tr><td class="text-center" colspan="5">Henüz İçerik Eklenmemiş</td></tr>
                    <?php } else{ ?>
                    <?php foreach ($kategori as $kategori) { ?>
                        <tr>
                            <td><?= $kategori->kategori_id?></td>
                            <td><?= $kategori->kategori_ad?></td>
                            <td><?= $kategori->kategori_aciklama?></td>
                            <td>
                                <input type="checkbox"
                                       class="js-switch"
                                    <?= ($kategori->kategori_durum) ?"checked" : "" ?> />
                            </td>
                            <td><a href="<?= base_url("{$mf}/edit/$kategori->kategori_id")?>" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i>Düzenle</a>
                                <button data-url="<?= base_url("{$mf}/delete/$kategori->kategori_id")?>" class="btn btn-danger btn-xs delete-buton"><i class="fas fa-trash-alt"></i>Sil</button>
                            </td>

                        </tr>
                    <?php } ?>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<!-- /.row -->
<section class="content"></section>