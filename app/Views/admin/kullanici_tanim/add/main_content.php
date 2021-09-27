<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-danger">
                    <div class="card-body">
                        <form class="row g-3 needs-validation" novalidate role="form" action="<?= base_url("{$mf}/add_form")?>" method="post">
                            <div class="form-group col-md-3">
                                <label for="validationCustom04" class="form-label">Personel Seçimi Yapınız</label>
                                <select class="form-control" name="kullanici_tc" id="validationCustom04" required>
                                    <option selected disabled value="">Lütfen Seçim Yapınız</option>
                                    <?php foreach ($personel as $personel) { ?>
                                        <option  value="<?= $personel->personel_tc;?>"><?= $personel->personel_adsoyad;?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom05" class="form-label">Kullanıcı Adı</label>
                                <input type="text" class="form-control" name="kullanici_mail" id="validationCustom05" placeholder="Kullanıcı Adı Oluşturun"  required>
                                <div class="invalid-feedback">Lütfen Kullanıcı Adı Girin.</div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom04" class="form-label">Yetki Seçimi Yapınız</label>
                                <select class="form-control" name="kullanici_yetki" id="validationCustom04" required>
                                    <option selected disabled value="">Lütfen Seçim Yapınız</option>
                                    <?php foreach ($yetki as $yetki) { ?>
                                        <option  value="<?= $yetki->yetki_id; ?>"><?= $yetki->yetki_ad; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom05" class="form-label">Kullanıcı Şifre</label>
                                <input type="password" class="form-control" name="kullanici_password" id="validationCustom05" required>
                                <div class="invalid-feedback">Lütfen Kullanıcı Şifresi Oluşturun.</div>
                            </div>
                            <div class="form-group col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">Kullanıcı Tanımlama Bilgilerinin doğruluğunu onaylıyorum.
                                    </label>
                                    <div class="invalid-feedback">Lütfen bilgilerin doğruluğunu onaylayın..</div>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <button class="btn btn-primary" type="submit">Kullanıcı Tanımlama Bilgilerini Kaydet</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content"></section>
