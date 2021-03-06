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
                                    <input type="email" class="form-control" name="personel_eposta" id="validationCustom03" required>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom03" class="form-label">Telefon</label>
                                    <input type="text" class="form-control" name="personel_telefon" id="validationCustom03" data-inputmask='"mask": "9999999999"' data-mask required>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom05" class="form-label">Do??um Tarihi</label>
                                    <input type="date" class="form-control" name="personel_dogumtarihi" id="validationCustom05" required>
                                    <div class="invalid-feedback">Please provide a valid zip.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom05" class="form-label">??lk ????e Giri?? Tarihi</label>
                                    <input type="date" class="form-control" name="personel_isegiristarih" id="validationCustom05" required>
                                    <div class="invalid-feedback">Please provide a valid zip.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom05" class="form-label">KGM Giri?? Tarihi</label>
                                    <input type="date" class="form-control" name="personel_kurumisegiristarih" id="validationCustom05" required>
                                    <div class="invalid-feedback">Please provide a valid zip.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom04" class="form-label">Stat?? Se??imi Yap??n??z</label>
                                    <select class="form-control"  name="unvan_id" id="validationCustom04" required>
                                        <option selected disabled value="">L??tfen Se??im Yap??n??z</option>
                                        <?php foreach ($durum as $durum) { ?>
                                            <option  value="<?= $durum->durum_id; ?>"><?= $durum->durum_ad; ?></option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">L??tfen Se??im Yap??n??z.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom04" class="form-label">Kadro Se??imi Yap??n??z</label>
                                    <!-- FOREACH -->
                                    <select class="form-control" name="personel_gorev" id="validationCustom04" required>
                                        <option selected disabled value="">L??tfen Se??im Yap??n??z</option>
                                        <?php foreach ($gorev as $gorev) { ?>
                                            <option  value="<?= $gorev->gorev_id; ?>"><?= $gorev->gorev_ad; ?></option>
                                        <?php } ?>
                                    </select>
                                    <!-- END FOREACH -->
                                    <div class="invalid-feedback">L??tfen Se??im Yap??n??z.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom04" class="form-label">??nvan Se??imi Yap??n??z</label>
                                    <select class="form-control" name="personel_unvan" id="validationCustom04" required>
                                        <option selected disabled value="">L??tfen Se??im Yap??n??z</option>
                                        <?php foreach ($unvan as $unvan) { ?>
                                            <option  value="<?= $unvan->unvan_id; ?>"><?= $unvan->unvan_ad; ?></option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">L??tfen Se??im Yap??n??z.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom04" class="form-label">G??rev Yeri Se??imi Yap??n??z</label>
                                    <select class="form-control" name="personel_gorevyeri" id="validationCustom04" required>
                                        <option selected disabled value="">L??tfen Se??im Yap??n??z</option>
                                        <?php foreach ($gorev_yeri as $gorevyeri) { ?>
                                            <option  value="<?= $gorevyeri->gorevyeri_id; ?>"><?= $gorevyeri->gorevyeri_ad; ?></option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">L??tfen Se??im Yap??n??z.</div>
                                </div>
                                <div class="form-group col-md-9">
                                    <label for="validationCustom01" class="form-label">??kamet Adresi</label>
                                    <input type="text" class="form-control" name="personel_adres" id="validationCustom01" placeholder="??kamet Etti??i Adres" required>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please provide a valid zip.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom04" class="form-label">Kan Grubu </label>
                                    <select class="form-control" name="personel_kan" id="validationCustom04" required>
                                        <option selected disabled value="">L??tfen Se??im Yap??n??z</option>
                                        <option>A Rh (+)</option>
                                        <option>B Rh (+)</option>
                                        <option>AB Rh (+)</option>
                                        <option>O Rh (+)</option>
                                        <option>A Rh (-)</option>
                                        <option>B Rh (-)</option>
                                        <option>AB Rh (-)</option>
                                        <option>O Rh (-)</option>
                                    </select>
                                    <div class="invalid-feedback">L??tfen Se??im Yap??n??z.</div>
                                </div>
                                <div class="form-group col-md-9">
                                    <label for="validationCustom01" class="form-label">A????klama Giriniz</label>
                                    <input type="text" class="form-control" name="personel_aciklama" id="validationCustom01" placeholder="A????klama" >
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="validationCustom04" class="form-label">S??zle??meli mi? </label>
                                    <select class="form-control" name="personel_sozlesmelimi" id="validationCustom04" required>
                                        <option selected disabled value="">L??tfen Se??im Yap??n??z</option>
                                        <option value="1">Evet</option>
                                        <option value="0">Hay??r</option>
                                    </select>
                                    <div class="invalid-feedback">L??tfen Se??im Yap??n??z.</div>
                                </div>
                                <div class="form-group col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label" for="invalidCheck">Bilgilerin do??rulu??unu onayl??yorum.
                                        </label>
                                        <div class="invalid-feedback">L??tfen bilgilerin do??rulu??unu onaylay??n..</div>
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