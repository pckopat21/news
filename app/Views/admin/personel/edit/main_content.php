<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-danger">
                    <div class="card-body">
                        <form class="row g-3 needs-validation" novalidate role="form" action="<?= base_url("{$mf}/update_form/$personel->personel_id")?>" method="post">
                            <div class="form-group col-md-3">
                                <label for="validationCustom01" class="form-label">Ad Soyad</label>
                                <input type="text" class="form-control" name="personel_adsoyad" id="validationCustom01" value="<?= $personel->personel_adsoyad?>" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom02" class="form-label">TC Kimlik</label>
                                <input type="number" class="form-control" name="personel_tc" minlength="11" id="validationCustom02" value="<?= $personel->personel_tc?>" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom02" class="form-label">Sicil No</label>
                                <input type="text" class="form-control" name="personel_sicilno" id="validationCustom02" value="<?= $personel->personel_sicilno?>" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom03" class="form-label">E-Posta</label>
                                <input type="email" class="form-control" name="personel_eposta" id="validationCustom03" value="<?= $personel->personel_eposta?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom03" class="form-label">Telefon</label>
                                <input type="text" class="form-control" name="personel_telefon" id="validationCustom03" value="<?= $personel->personel_telefon?>" data-inputmask='"mask": "9999999999"' data-mask required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom05" class="form-label">Doğum Tarihi</label>
                                <input type="date" class="form-control" name="personel_dogumtarihi" id="validationCustom05" value="<?= $personel->personel_dogumtarihi?>" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom05" class="form-label">İlk İşe Giriş Tarihi</label>
                                <input type="date" class="form-control" name="personel_isegiristarih" id="validationCustom05" value="<?= $personel->personel_isegiristarih?>" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom05" class="form-label">KGM Giriş Tarihi</label>
                                <input type="date" class="form-control" name="personel_kurumisegiristarih" value="<?= $personel->personel_kurumisegiristarih?>" id="validationCustom05" required>
                                <div class="invalid-feedback">Please provide a valid zip.</div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom04" class="form-label">Statü Seçimi Yapınız</label>
                                <select class="form-control"  name="unvan_id" id="validationCustom04" required>
                                    <?php foreach ($durum as $durum) { ?>
                                        <option <?= $personel->unvan_id==$durum->durum_id ? "selected='select'" : '';  ?> value="<?=  $durum->durum_id ?>"><?= $durum->durum_ad?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom04" class="form-label">Kadro Seçimi Yapınız</label>
                                <!-- FOREACH -->
                                <select class="form-control" name="personel_gorev" id="validationCustom04" required>
                                    <?php foreach ($gorev as $gorev) { ?>
                                    <option  <?= $personel->personel_gorev==$gorev->gorev_id ? "selected='select'" : ''; ?> value="<?=  $gorev->gorev_id ?>"><?= $gorev->gorev_ad?></option>
                                    <?php } ?>
                                </select>
                                <!-- END FOREACH -->
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom04" class="form-label">Ünvan Seçimi Yapınız</label>
                                <select class="form-control" name="personel_unvan" id="validationCustom04" required>
                                    <?php foreach ($unvan as $unvan) { ?>
                                        <option <?= $personel->personel_unvan==$unvan->unvan_id ? "selected='select'" : ''; ?> value="<?=  $unvan->unvan_id ?>"><?= $unvan->unvan_ad?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom04" class="form-label">Görev Yeri Seçimi Yapınız</label>
                                <select class="form-control" name="personel_gorevyeri" id="validationCustom04" required>
                                    <option selected disabled value="">Lütfen Seçim Yapınız</option>
                                    <?php foreach ($gorev_yeri as $gorev_yeri) { ?>
                                        <option  <?= $personel->personel_gorevyeri==$gorev_yeri->gorevyeri_id ? "selected='select'" : ''; ?> value="<?=  $gorev_yeri->gorevyeri_id ?>"><?= $gorev_yeri->gorevyeri_ad?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="validationCustom01" class="form-label">İkamet Adresi</label>
                                <input type="text" class="form-control" name="personel_adres" id="validationCustom01" value="<?= $personel->personel_adres?>"  required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="validationCustom04" class="form-label">Kan Grubu </label>
                                <select class="form-control" name="personel_kan" id="validationCustom04" required>
                                    <option value="<?= $personel->personel_kan?>"><?= $personel->personel_kan?></option>
                                    <option>A Rh (+)</option>
                                    <option>B Rh (+)</option>
                                    <option>AB Rh (+)</option>
                                    <option>O Rh (+)</option>
                                    <option>A Rh (-)</option>
                                    <option>B Rh (-)</option>
                                    <option>AB Rh (-)</option>
                                    <option>O Rh (-)</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="validationCustom04" class="form-label">Personel Durumu </label>
                                <select class="form-control" name="personel_durum" id="validationCustom04" required>
                                    <option value="1" <?=  $personel->personel_durum == '1' ? 'selected=""' : ''; ?>>Aktif</option>
                                    <option value="0" <?=  $personel->personel_durum == '0' ? 'selected=""' : ''; ?>>Pasif</option>
                                </select>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="validationCustom01" class="form-label">Açıklama Giriniz</label>
                                <input type="text" class="form-control" name="personel_aciklama" id="validationCustom01" value="<?= $personel->personel_aciklama?>" >
                            </div>
                            <div class="form-group col-md-2">
                                <label for="validationCustom01" class="form-label">Sıralama</label>
                                <input type="number" class="form-control" name="personel_siralama" id="validationCustom01" value="<?= $personel->personel_siralama?>" >
                            </div>
                            <div class="form-group col-md-2">
                                <label for="validationCustom04" class="form-label">Sözleşmeli mi </label>
                                <select class="form-control" name="personel_sozlesmelimi" id="validationCustom04" required>
                                    <option value="1" <?=  $personel->personel_sozlesmelimi == '1' ? 'selected=""' : ''; ?>>Evet</option>
                                    <option value="0" <?=  $personel->personel_sozlesmelimi == '0' ? 'selected=""' : ''; ?>>Hayır</option>
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
                                <button class="btn btn-primary" type="submit">Personelin Bilgilerini Güncelle</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content"></section>
