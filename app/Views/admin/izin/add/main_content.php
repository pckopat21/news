<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-danger">
                    <div class="card-body">
                        <form class="row g-3 needs-validation" novalidate role="form" action="<?= base_url("{$mf}/add_form")?>" method="post">
                             <div class="form-group col-md-6">
                                <label for="validationCustom04" class="form-label">Personel Seçimi Yapınız</label>
                                <select class="form-control" name="izin_personel" id="validationCustom04" required>
                                    <option selected disabled value="">Lütfen Seçim Yapınız</option>
                                    <?php foreach ($personel as $personel) { ?>
                                        <option  value="<?= $personel->personel_id; ?>" data-unvan-id="<?= $personel->unvan_id ?>"> <?= $personel->personel_adsoyad."-".$personel->durum_ad; ?></option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">Lütfen Seçim Yapınız.</div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="validationCustom04" class="form-label">İzin Türü Seçimi Yapınız</label>
                                <select class="form-control" name="izin_turid" id="validationCustom04" required>
                                    <option selected disabled value="">Lütfen Seçim Yapınız</option>
                                    <?php foreach ($izin_turleri as $izin_turleri) { ?>
                                        <option  value="<?= $izin_turleri->izin_turid; ?>"><?= $izin_turleri->izin_ad; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="validationCustom05" class="form-label">İzin Yılı</label>
                                <input type="number" maxlength="4" class="form-control" name="izin_yil" id="validationCustom05" value="<?php echo date("Y");?>" min='<?=  date("Y")-3;?>' max='<?=  date("Y");?>'checked required>
                                <div class="invalid-feedback">Please provide a valid zip.</div>
                            </div>
                            <div class="form-group col-md-3">
                                <label  for="baslamatarihi" class="form-label">İzin Başlayış Tarihi</label>
                                <input type="date" id="baslamatarihi" class="form-control" name="izin_baslayis" required>
                                <div class="invalid-feedback">Please provide a valid zip.</div>
                            </div>
                            <div class="form-group col-md-3">
                                <label  for="bitistarihi" class="form-label">İzin Bitiş Tarihi</label>
                                <input type="date" id="bitistarihi" class="form-control" name="izin_bitis" required>
                                <div class="invalid-feedback">Please provide a valid zip.</div>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="isebaslayis" class="form-label">İşe Başlayış Tarihi</label>
                                <input type="date" id="isebaslayis" class="form-control" name="izin_isebaslayis" required>
                                <div class="invalid-feedback">Please provide a valid zip.</div>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="validationCustom05" class="form-label">İzin Süresi</label>
                                <input type="number" class="form-control" name="izin_suresi" id="izin_suresi" oninput="addNewDate()" min='1' max='30' required>
                                <div class="invalid-feedback">Please provide a valid zip.</div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="validationCustom01" class="form-label">Vefat Eden Kişi Yakınlık Bilgisi</label>
                                <input type="text" class="form-control" name="izin_vefat" id="validationCustom01" placeholder="Vefat İzni Verildiyse Doldurulacak-> ÖRNEĞiN='Babamın'">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="validationCustom01" class="form-label">Rapor Aldığı Sağlık Kuruluşu</label>
                                <input type="text" class="form-control" name="izin_saglikkurumu" id="validationCustom01" placeholder="Rapor Aldıysa Doldurulacak-> ÖRNEĞiN='Osmaniye Devlet Hastanesi'">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="validationCustom01" class="form-label">İzin Açıklama</label>
                                <input type="text" class="form-control" name="izin_aciklama" id="validationCustom01" placeholder="Açıklama" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="validationCustom01" class="form-label">İzin Adresi</label>
                                <input type="text" class="form-control"  name="izin_adresi" id="validationCustom01" placeholder="Açıklama" >
                            </div>

                            <div class="form-group col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">İzin Bilgilerin doğruluğunu onaylıyorum.
                                    </label>
                                    <div class="invalid-feedback">Lütfen bilgilerin doğruluğunu onaylayın..</div>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <button class="btn btn-primary" type="submit">İzin Bilgilerini Kaydet</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content"></section>




