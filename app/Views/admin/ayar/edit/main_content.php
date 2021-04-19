<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-danger">
                    <div class="card-body">
                        <form class="row g-3 needs-validation" novalidate role="form" action="<?= base_url("{$mf}/update_form/$ayar->ayar_id")?>" method="post">
                            <div class="form-group col-md-4">
                                <label for="validationCustom01" class="form-label">Kurum Başlığı</label>
                                <input type="text" class="form-control" name="ayar_title" id="validationCustom01" required value="<?= $ayar->ayar_title?>" >
                            </div>
                            <div class="form-group col-md-4">
                                <label for="validationCustom01" class="form-label">Genel Müdürlük</label>
                                <input type="text" class="form-control" name="ayar_bolge_adi" id="validationCustom01" required value="<?= $ayar->ayar_bolge_adi?>" >
                            </div>
                            <div class="form-group col-md-4">
                                <label for="validationCustom01" class="form-label">Kurum Adı</label>
                                <input type="text" class="form-control" name="ayar_kurum" id="validationCustom01" required value="<?= $ayar->ayar_kurum?>" >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom01" class="form-label">Kurum Sorumlusu</label>
                                <input type="text" class="form-control" name="ayar_yonetici" id="validationCustom01" required value="<?= $ayar->ayar_yonetici?>" >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom01" class="form-label">Kurum Sorumlu Ünvanı</label>
                                <input type="text" class="form-control" name="ayar_yoneticiunvan" id="validationCustom01" required value="<?= $ayar->ayar_yoneticiunvan?>" >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom01" class="form-label">Personel Müdürü</label>
                                <input type="text" class="form-control" name="ayar_mudur" id="validationCustom01" required value="<?= $ayar->ayar_mudur?>" >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom01" class="form-label">Personel Müdür Ünvanı</label>
                                <input type="text" class="form-control" name="ayar_mudurunvan" id="validationCustom01" required value="<?= $ayar->ayar_mudurunvan?>" >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom01" class="form-label">Telefon No:</label>
                                <input type="text" class="form-control" name="ayar_tel" id="validationCustom01" required value="<?= $ayar->ayar_tel?>" >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom01" class="form-label">Telefon No(GSM):</label>
                                <input type="text" class="form-control" name="ayar_gsm" id="validationCustom01" required value="<?= $ayar->ayar_gsm?>" >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom01" class="form-label">Fax No:</label>
                                <input type="text" class="form-control" name="ayar_faks" id="validationCustom01" required value="<?= $ayar->ayar_faks?>" >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="validationCustom01" class="form-label">Mail Adresi:</label>
                                <input type="text" class="form-control" name="ayar_mail" id="validationCustom01" required value="<?= $ayar->ayar_mail?>" >
                            </div>
                            <div class="form-group col-md-2">
                                <label for="validationCustom01" class="form-label">İl:</label>
                                <input type="text" class="form-control" name="ayar_il" id="validationCustom01" required value="<?= $ayar->ayar_il?>" >
                            </div>
                            <div class="form-group col-md-2">
                                <label for="validationCustom01" class="form-label">İlçe:</label>
                                <input type="text" class="form-control" name="ayar_ilce" id="validationCustom01" required value="<?= $ayar->ayar_ilce?>" >
                            </div>
                            <div class="form-group col-md-8">
                                <label for="validationCustom01" class="form-label">Adres</label>
                                <input type="text" class="form-control" name="ayar_adres" id="validationCustom01" required value="<?= $ayar->ayar_adres?>" >
                            </div>
                            <div class="form-group col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">Bilgilerin doğruluğunu onaylıyorum.</label>
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

