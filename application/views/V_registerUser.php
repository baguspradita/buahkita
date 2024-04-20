<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title ?></title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('user/') ?>css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Background Video-->
    <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="<?= base_url('user/') ?>assets/mp4/bg.mp4" type="video/mp4" />
    </video>
    <!-- Masthead-->
    <div class="masthead">
        <div class="masthead-content text-white">
            <div class="container-fluid px-4 px-lg-0">
                <h1 class="fst-italic lh-1 mb-4"><?= $title ?></h1>

                <p class="mb-5">Nikmati Keajaiban Rasa Buah Lokal & Import Tanpa Batas!</p>

                <form method="post" action="<?= base_url('C_Auth/registerUser') ?>">
                    <!-- Email address input-->
                    <div class="row input-group-newsletter">
                        <div class="col-md-12 mb-3">
                            <input class="form-control" id="nama" name="nama" type="text"
                                placeholder="Masukan nama lengkap..." aria-label="Enter email address..." />
                            <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="col-md-12 mb-3">
                            <input class="form-control" id="email" name="email" type="email"
                                placeholder="Masukan alamat email..." aria-label="Enter email address..." />
                            <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="col-md-12 mb-3">
                            <input class="form-control" id="telepon" name="telepon" type="number"
                                placeholder="Masukan nomor telepon..." aria-label="Enter email address..." />
                            <?= form_error('telepon', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input class="form-control" id="password1" name="password1" type="password"
                                placeholder="Masukan password..." aria-label="Enter email address..." />
                            <?= form_error('password1', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input class="form-control" id="password2" name="password2" type="password"
                                placeholder="Confirm password..." aria-label="Enter email address..." />
                            <?= form_error('password2', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <div class="col-auto mb-2"><button class="btn btn-primary" id="submitButton" type="submit">Sign
                            Up</button></div>

                    <a href="<?= base_url('C_Auth/loginUser') ?>">All ready Sign in !</a>

                </form>
            </div>
        </div>
    </div>
    <!-- Social Icons-->
    <!-- For more icon options, visit https://fontawesome.com/icons?d=gallery&p=2&s=brands-->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('user/') ?>js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>