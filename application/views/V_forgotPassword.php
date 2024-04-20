<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href=" <?= base_url('lte/plugins/fontawesome-free/css/all.min.css') ?> ">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href=" <?= base_url('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?> ">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('lte/dist/css/adminlte.min.css') ?>">

    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- Captcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>


</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h1><b>Forgot Your Password ?</b></h1>
            </div>
            <div class="card-body">
                <p class="login-box-msg"><?= $this->session->flashdata('message'); ?></p>

                <form action="<?= base_url('C_Auth/forgotPassword') ?>" method="post">
                    <!-- Forgot Password -->
                    <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <!-- /.col -->
                        <div class="form-group col-12">
                            <div class="g-recaptcha" data-sitekey="6Lc2gscmAAAAAASbPtpvWOa0wtCgweSJL7cAsSKl"
                                name="g-recaptcha-response"></div>
                        </div>

                        <div class="col-12 mb-2">
                            <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                        </div>
                        <div class="col-12">
                            <a href="<?= base_url('C_Auth') ?>"><button type="button"
                                    class="btn btn-secondary btn-block">Back</button></a>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url('lte/plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('lte/dist/js/adminlte.min.js') ?>"></script>
</body>

</html>