
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url()?>/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url()?>/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url()?>/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url()?>/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url()?>/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url()?>/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url()?>/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url()?>/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url()?>/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= base_url()?>/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url()?>/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url()?>/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url()?>/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url()?>/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= base_url()?>/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Google Font: Source Sans Pro -->

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url()?>/admin/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url()?>/admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url()?>/admin/assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><?= $title ?></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <?= fdata() ?>
            <p class="login-box-msg">Kullanıcı Giriş Formu</p>
            <form action="<?php echo base_url("admin/login_form") ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="kullanici_mail"  placeholder="Kullanıcı Adı" >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    <?php if (isset($validation)){ ?> <span class="input-group mb1 text-danger"><?= $validation-> showError("kullanici_mail");?></span>
                    <?php } ?>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="kullanici_password"  placeholder="Şifre Giriniz">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <?php if (isset($validation)){ ?> <span class="input-group  text-danger"><?= $validation->showError("kullanici_password");?></span>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary"><input type="checkbox" id="remember"><label for="remember">Beni Hatırla</label></div>
                    </div>
                    <!-- /.col -->
                    <div class="col-12"><button type="submit" class="btn btn-primary btn-block">Giriş Yapın </button></div>
                    <!-- /.col -->
                </div>
            </form>


            <!-- /.social-auth-links -->

        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<?= view("admin/_includes/script")?>
</body>
</html>
