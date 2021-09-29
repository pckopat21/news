<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-danger">
                        <div class="card-body">
                            <form class="row g-3 needs-validation" novalidate role="form" action="<?= base_url("{$mf}/add_form")?>" method="post">
                                <div class="form-group col-md-3">
                                    <label for="validationCustom01" class="form-label">Ad Soyad</label>
                                    <input type="text" class="form-control" name="personel_adsoyad" id="validationCustom01" placeholder="Ad Soyad" required>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Ad Soyad Bilgisi Giriniz</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom02" class="form-label">TC Kimlik</label>
                                    <input type="number" class="form-control" name="personel_tc" minlength="11" id="validationCustom02" placeholder="TC kimlik" required>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">TC Kimlik Bilgisi Giriniz</div>

                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom02" class="form-label">Sicil No</label>
                                    <input type="text" class="form-control" name="personel_sicilno" id="validationCustom02" placeholder="Sicil No" required>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom03" class="form-label">E-Posta</label>
                                    <input type="email" class="form-control" name="personel_eposta" id="validationCustom03">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom03" class="form-label">Telefon</label>
                                    <input type="text" class="form-control" name="personel_telefon" value="5" id="validationCustom03" data-inputmask='"mask": "9999999999"' data-mask required>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom05" class="form-label">Doğum Tarihi</label>
                                    <input type="date" class="form-control" name="personel_dogumtarihi" id="validationCustom05" required>
                                    <div class="invalid-feedback">Please provide a valid zip.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom05" class="form-label">İlk İşe Giriş Tarihi</label>
                                    <input type="date" class="form-control" name="personel_isegiristarih" id="validationCustom05" required>
                                    <div class="invalid-feedback">Please provide a valid zip.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom05" class="form-label">KGM Giriş Tarihi</label>
                                    <input type="date" class="form-control" name="personel_kurumisegiristarih" id="validationCustom05" required>
                                    <div class="invalid-feedback">Please provide a valid zip.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom04" class="form-label">Statü Seçimi Yapınız</label>
                                    <select class="form-control"  name="unvan_id" id="validationCustom04" required>
                                        <option selected disabled value="">Lütfen Seçim Yapınız</option>
                                        <?php foreach ($durum as $durum) { ?>
                                            <option  value="<?= $durum->durum_id; ?>"><?= $durum->durum_ad; ?></option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">Lütfen Seçim Yapınız.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom04" class="form-label">Kadro Seçimi Yapınız</label>
                                    <!-- FOREACH -->
                                    <select class="form-control" name="personel_gorev" id="validationCustom04" required>
                                        <option selected disabled value="">Lütfen Seçim Yapınız</option>
                                        <?php foreach ($gorev as $gorev) { ?>
                                            <option  value="<?= $gorev->gorev_id; ?>"><?= $gorev->gorev_ad; ?></option>
                                        <?php } ?>
                                    </select>
                                    <!-- END FOREACH -->
                                    <div class="invalid-feedback">Lütfen Seçim Yapınız.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom04" class="form-label">Ünvan Seçimi Yapınız</label>
                                    <select class="form-control" name="personel_unvan" id="validationCustom04" required>
                                        <option selected disabled value="">Lütfen Seçim Yapınız</option>
                                        <?php foreach ($unvan as $unvan) { ?>
                                            <option  value="<?= $unvan->unvan_id; ?>"><?= $unvan->unvan_ad; ?></option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">Lütfen Seçim Yapınız.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom04" class="form-label">Görev Yeri Seçimi Yapınız</label>
                                    <select class="form-control" name="personel_gorevyeri" id="validationCustom04" required>
                                        <option selected disabled value="">Lütfen Seçim Yapınız</option>
                                        <?php foreach ($gorev_yeri as $gorevyeri) { ?>
                                            <option  value="<?= $gorevyeri->gorevyeri_id; ?>"><?= $gorevyeri->gorevyeri_ad; ?></option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">Lütfen Seçim Yapınız.</div>
                                </div>
                                <div class="form-group col-md-9">
                                    <label for="validationCustom01" class="form-label">İkamet Adresi</label>
                                    <input type="text" class="form-control" name="personel_adres" id="validationCustom01" placeholder="İkamet Ettiği Adres" required>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please provide a valid zip.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom04" class="form-label">Kan Grubu </label>
                                    <select class="form-control" name="personel_kan" id="validationCustom04" required>
                                        <option selected disabled value="">Lütfen Seçim Yapınız</option>
                                        <option>A Rh (+)</option>
                                        <option>B Rh (+)</option>
                                        <option>AB Rh (+)</option>
                                        <option>O Rh (+)</option>
                                        <option>A Rh (-)</option>
                                        <option>B Rh (-)</option>
                                        <option>AB Rh (-)</option>
                                        <option>O Rh (-)</option>
                                    </select>
                                    <div class="invalid-feedback">Lütfen Seçim Yapınız.</div>
                                </div>
                                <div class="form-group col-md-9">
                                    <label for="validationCustom01" class="form-label">Açıklama Giriniz</label>
                                    <input type="text" class="form-control" name="personel_aciklama" id="validationCustom01" placeholder="Açıklama" >
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom04" class="form-label">Sözleşmeli mi? </label>
                                    <select class="form-control" name="personel_sozlesmelimi" id="validationCustom04" required>
                                        <option selected disabled value="">Lütfen Seçim Yapınız</option>
                                        <option value="1">Evet</option>
                                        <option value="0">Hayır</option>
                                    </select>
                                    <div class="invalid-feedback">Lütfen Seçim Yapınız.</div>
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
                                    <button class="btn btn-primary" type="submit">Personelin Bilgilerini Kaydet</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content"></section>
