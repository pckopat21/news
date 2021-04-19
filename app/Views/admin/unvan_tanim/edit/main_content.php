<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-danger">
                    <div class="card-body">
                        <form class="row g-3 needs-validation" novalidate role="form" action="<?= base_url("{$mf}/update_form/$unvan_tanim->unvan_id")?>" method="post">
                            <div class="form-group col-md-4">
                                <label for="validationCustom01" class="form-label">Ünvan Ad</label>
                                <input type="text" class="form-control" name="unvan_ad" id="validationCustom01" value="<?= $unvan_tanim->unvan_ad?>" required>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="validationCustom01" class="form-label">Ünvan Açıklama</label>
                                <input type="text" class="form-control" name="unvan_aciklama" id="validationCustom01"  min='0' max='20' value="<?= $unvan_tanim->unvan_aciklama?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom04" class="form-label">Ünvan Durumu </label>
                                <select class="form-control" name="unvan_durum" id="validationCustom04" required>
                                    <option value="1" <?=  $unvan_tanim->unvan_durum == '1' ? 'selected=""' : ''; ?>>Aktif</option>
                                    <option value="0" <?=  $unvan_tanim->unvan_durum == '0' ? 'selected=""' : ''; ?>>Pasif</option>
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
                                <button class="btn btn-primary" type="submit">Ünvan Bilgilerini Güncelle</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content"></section>

