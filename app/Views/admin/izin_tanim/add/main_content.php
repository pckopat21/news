<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-danger">
                    <div class="card-body">
                        <form class="row g-3 needs-validation" novalidate role="form" action="<?= base_url("{$mf}/add_form")?>" method="post">
                            <div class="form-group col-md-4">
                                <label for="validationCustom01" class="form-label">İzin Açıklama</label>
                                <input type="text" class="form-control" name="ad" id="validationCustom01" placeholder="Açıklama" required >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom04" class="form-label">İzin Türü Seçimi Yapınız</label>
                                <select class="form-control" name="izin_tur_id" id="validationCustom04" required>
                                    <option selected disabled value="">Lütfen Seçim Yapınız</option>
                                    <?php foreach ($izin_turleri as $izin_turleri) { ?>
                                        <option  value="<?= $izin_turleri->izin_turid; ?>"><?= $izin_turleri->izin_ad; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom04" class="form-label">İzin Statü Seçimi Yapınız</label>
                                <select class="form-control" name="calisan_statu_id" id="validationCustom04" required>
                                    <option selected disabled value="">Lütfen Seçim Yapınız</option>
                                    <?php foreach ($durum as $durum) { ?>
                                        <option  value="<?= $durum->durum_id; ?>"><?= $durum->durum_ad; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom05" class="form-label">Alt Tecrübe</label>
                                <input type="number" class="form-control" name="alt_tecrube" id="validationCustom05" min='0' max='20'  required>
                                <div class="invalid-feedback">Please provide a valid zip.</div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom05" class="form-label">Üst Tecrübe</label>
                                <input type="number" class="form-control" name="ust_tecrube" id="validationCustom05" min='0' max='99' required>
                                <div class="invalid-feedback">Please provide a valid zip.</div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="validationCustom01" class="form-label">İzin Hakkı</label>
                                <input type="number" class="form-control" name="izin_hakki" id="validationCustom01" min='0' max='99' required>
                            </div>

                            <div class="form-group col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">İzin Tanımlama Bilgilerinin doğruluğunu onaylıyorum.
                                    </label>
                                    <div class="invalid-feedback">Lütfen bilgilerin doğruluğunu onaylayın..</div>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <button class="btn btn-primary" type="submit">İzin Tanımlama Bilgilerini Kaydet</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content"></section>




