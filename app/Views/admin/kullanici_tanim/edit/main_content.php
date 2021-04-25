<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-danger">
                    <div class="card-body">
                        <form class="row g-3 needs-validation" novalidate role="form" action="<?= base_url("{$mf}/update_form/$kullanici_tanim->kullanici_id")?>" method="post">
                            <div class="form-group col-md-3">
                                <label for="validationCustom01" class="form-label">TC Kimlik</label>
                                <input type="text" class="form-control" disabled name="kullanici_tc" id="validationCustom01" value="<?= $kullanici_tanim->kullanici_tc?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom01" class="form-label">Kullanıcı Adı</label>
                                <input type="text" class="form-control" disabled name="kullanici_mail" id="validationCustom01" value="<?= $kullanici_tanim->kullanici_mail?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom04" class="form-label">Yetki </label>
                                <select class="form-control"  name="kullanici_yetki" id="validationCustom04" required>
                                    <?php foreach ($yetki as $yetki) { ?>
                                        <option <?= $kullanici_tanim->kullanici_yetki==$yetki->yetki_id ? "selected='select'" : '';  ?> value="<?=  $yetki->yetki_id ?>"><?= $yetki->yetki_ad?></option>
                                    <?php } ?>
                                </select>
                            </div>



                            <div class="form-group col-md-3">
                                <label for="validationCustom04" class="form-label">Kullanıcı Durumu </label>
                                <select class="form-control" name="kullanici_durum" id="validationCustom04" required>
                                    <option value="1" <?=  $kullanici_tanim->kullanici_durum == '1' ? 'selected=""' : ''; ?>>Aktif</option>
                                    <option value="0" <?=  $kullanici_tanim->kullanici_durum == '0' ? 'selected=""' : ''; ?>>Pasif</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">Bilgilerin doğruluğunu onaylıyorum.
                                    </label>
                                    <div class="invalid-feedback">Lütfen bilgilerin doğruluğunu onaylayın..</div>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <button class="btn btn-primary" type="submit">Kullanıcı Bilgilerini Güncelle</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content"></section>

