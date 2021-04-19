<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-danger">
                    <div class="card-body">
                        <form class="row g-3 needs-validation" novalidate role="form" action="<?= base_url("{$mf}/update_form/$izin_tanim->id")?>" method="post">
                            <div class="form-group col-md-4">
                                <label for="validationCustom01" class="form-label">İzin Açıklama</label>
                                <input type="text" class="form-control" name="ad" id="validationCustom01" value="<?= $izin_tanim->ad?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="validationCustom04" class="form-label">İzin Türü</label>
                                <select class="form-control"  name="izin_tur_id" id="validationCustom04" required>
                                    <?php foreach ($izin_turleri as $izin_turleri) { ?>
                                        <option <?= $izin_tanim->izin_tur_id==$izin_turleri->izin_turid ? "selected='select'" : '';  ?> value="<?=  $izin_turleri->izin_turid ?>"><?= $izin_turleri->izin_ad?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="validationCustom04" class="form-label">Statürü Türü Seçimi</label>
                                <!-- FOREACH -->
                                <select class="form-control" name="calisan_statu_id" id="validationCustom04" required>
                                    <?php foreach ($durum as $durum) { ?>
                                        <option  <?= $izin_tanim->calisan_statu_id==$durum->durum_id ? "selected='select'" : ''; ?> value="<?=  $durum->durum_id ?>"><?= $durum->durum_ad?></option>
                                    <?php } ?>
                                </select>
                                <!-- END FOREACH -->
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom01" class="form-label">Alt Tecrübe</label>
                                <input type="text" class="form-control" name="alt_tecrube" id="validationCustom01"  min='0' max='20' value="<?= $izin_tanim->alt_tecrube?>"  required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom01" class="form-label">Üst Tecrübe</label>
                                <input type="text" class="form-control" name="alt_tecrube" id="validationCustom01"  min='0' max='99' value="<?= $izin_tanim->ust_tecrube?>" >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom01" class="form-label">İzin Hakkı</label>
                                <input type="number" class="form-control" name="izin_hakki" id="validationCustom01"  min='0' max='40' value="<?= $izin_tanim->izin_hakki?>" >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom04" class="form-label">İzin Durumu </label>
                                <select class="form-control" name="izincalisan_durum" id="validationCustom04" required>
                                    <option value="1" <?=  $izin_tanim->izincalisan_durum == '1' ? 'selected=""' : ''; ?>>Aktif</option>
                                    <option value="0" <?=  $izin_tanim->izincalisan_durum == '0' ? 'selected=""' : ''; ?>>Pasif</option>
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
                                <button class="btn btn-primary" type="submit">İzin Tür Bilgilerini Güncelle</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content"></section>

