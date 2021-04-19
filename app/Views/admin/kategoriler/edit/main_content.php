
<!-- /.row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <!-- /.card-header -->
            <form role="form" action="<?= base_url("{$mf}/update_form/$kategori->kategori_id")?>" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="kategori_ad" class="form-control" value="<?= $kategori->kategori_ad?>">
                        <?php if (isset($validation)){ ?> <span class="input-group mb1 text-danger"><?= $validation-> showError("kategori_ad");?></span>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Açıklama</label>
                        <input type="text" name="kategori_aciklama" class="form-control" value="<?= $kategori->kategori_aciklama?>">
                        <?php if (isset($validation)){ ?> <span class="input-group mb1 text-danger"><?= $validation-> showError("kategori_aciklama");?></span>
                        <?php } ?>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="a1" class="text-info mr-2 text-bold">Pasif</label>
                            <input id="a1" type="checkbox" class="js-switch" <?= ($kategori->kategori_durum) ? "checked" : "" ?> name="kategori_durum" value="1"/>
                            <label for="a1" class="text-primary mr-2 text-bold">Aktif</label>
                        </div>
                        <div class="col-md-6 text-right">
                            <a class="btn btn-info mr-3" href="<?= base_url("{$mf}")?>">Vazgeç</a>
                            <button type="submit" class="btn btn-primary">Güncelle</button>
                        </div>
                    </div>

                </div>
            </form
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<!-- /.row -->
<section class="content"></section>