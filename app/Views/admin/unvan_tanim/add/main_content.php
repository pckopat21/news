<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-danger">
                    <div class="card-body">
                        <form class="row g-3 needs-validation" novalidate role="form" action="<?= base_url("{$mf}/add_form")?>" method="post">
                            <div class="form-group col-md-6">
                                <label for="validationCustom01" class="form-label">Ünvan Adı </label>
                                <input type="text" class="form-control" name="unvan_ad" id="validationCustom01" placeholder="Ünvan Adı" required >
                                <div class="invalid-feedback">Lütfen bilgileri kontrol edin..</div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="validationCustom01" class="form-label">Ünvan Açıklama</label>
                                <input type="text" class="form-control" name="unvan_aciklama" id="validationCustom01" placeholder="Ünvan Açıklama" >
                            </div>


                            <div class="form-group col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">Ünvan Tanımlama Bilgilerinin doğruluğunu onaylıyorum.
                                    </label>
                                    <div class="invalid-feedback">Lütfen bilgilerin doğruluğunu onaylayın..</div>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <button class="btn btn-primary" type="submit">Ünvan Tanımlama Bilgilerini Kaydet</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content"></section>




