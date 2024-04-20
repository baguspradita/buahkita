<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">


    <!-- fontawsome -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body
    style="font-family: 'Roboto Condensed', sans-serif; background-image: url('<?= base_url('assets/img/beranda.jpg') ?>')"
    class="beranda">
    <div class="container my-5">

        <h2 class="fw-bold" style="font-family: cursive;"><i class="fa-solid fa-user"></i>
            <?= $customer['nama'] ?></h2>
        <h2 class="fw-bold my-3" style="font-family: cursive;">Selamat Datang Pelanggan Setia Buah Kita
        </h2>
        <h5 class="mb-5" style="font-family: cursive;">Di sini, kami percaya bahwa buah-buahan adalah sumber kehidupan
            dan kesehatan.
            Kami mengutamakan kualitas
            dalam setiap buah yang kami tawarkan kepada Anda. Kami bekerja sama dengan para petani terbaik untuk
            memastikan bahwa setiap buah yang kami jual ditanam dengan cinta dan dipanen pada saat yang tepat, sehingga
            memberikan cita rasa dan nutrisi terbaik untuk Anda.</h5>

        <div class="row text-center my-5">
            <div class="col-md-4 my-3">
                <a href="<?= base_url('C_User') ?>">
                    <button type="button" class="btn btn-secondary fw-bold button-74"><i
                            class="fa-solid fa-keyboard"></i>
                        Order</button>
                </a>
            </div>
            <div class="col-md-4 my-3">
                <a href="<?= base_url('C_User/riwayat') ?>"><button type="button"
                        class="btn btn-secondary fw-bold button-74"><i class="fa-solid fa-clock-rotate-left"></i>
                        Riwayat
                        Pemesanan</button></a>
            </div>
            <div class="col-md-4 my-3">
                <a href="<?= base_url('C_User/setting') ?>"><button type="button"
                        class="btn btn-secondary  fw-bold button-74"><i class="fa-solid fa-gear"></i>
                        Setting</button></a>
            </div>

        </div>
    </div>


    <div class="text-start mb-0 p-3 footer-menu" style="background-color: rgba(0, 0, 0, 0.2)">
        <div class="row">
            <div class="col-md-10">
                <a href="<?= base_url('C_Home') ?>"><button type="button" class="btn btn-secondary btn-sm fw-bold"><i
                            class="fa-solid fa-backward"></i> Back
                        to
                        home</button></a>

            </div>
        </div>
    </div>









    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>




</body>

</html>