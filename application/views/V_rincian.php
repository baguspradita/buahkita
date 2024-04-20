<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>style.css">
    <!-- Fontawsome -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body style="font-family: 'Roboto Condensed', sans-serif; background-image: url('<?= base_url('assets/img/bg4.jpg') ?>')" class="rincian">
    <div class="container my-5">
        <div class="card">
            <div class="card-body">
                <table class="table">

                    <thead>
                        <tr>
                            <th scope="col">Nama Customer</th>
                            <th scope="col">: <?= $kode_transaksi['nama_customer'] ?></th>
                        </tr>
                        <tr>
                            <th scope="col">Buah</th>
                            <th scope="col">: <?= $kode_transaksi['nama_barang'] ?></th>
                        </tr>
                        <tr>
                            <th scope="col">Kategori</th>
                            <th scope="col">: <?= $kode_transaksi['kategori_transaksi'] ?></th>
                        </tr>
                        <tr>
                            <th scope="col">Jumlah Pesanan</th>
                            <th scope="col">: <?= $kode_transaksi['jumlah'] ?></th>
                        </tr>
                        <tr>
                            <th scope="col">Harga</th>
                            <th scope="col">: <?= $kode_transaksi['harga'] ?></th>
                        </tr>
                        <tr>
                            <th scope="col">Tanggal Pemesanan</th>
                            <th scope="col">: <?= $kode_transaksi['tanggal'] ?></th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

        <div class="card my-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <h5 class="fw-bold"> TOTAL : Rp. <?= $kode_transaksi['jumlah'] * $kode_transaksi['harga'] ?>
                        </h5>
                    </div>
                    <div class="col-md-2">

                        <a href="<?= base_url('C_User/pdf_struk/' . $kode_transaksi['kode_transaksi']) ?>">
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-download"></i>
                                Download Struk</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-start mb-0 p-3 footer-menu" style="background-color: rgba(0, 0, 0, 0.2)">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?= base_url('C_User/riwayat') ?>"><button type="button" class="btn btn-secondary btn-sm fw-bold"><i class="fa-solid fa-backward"></i>
                            Back</button></a>
                    <a href="<?= base_url('C_Home') ?>"><button type="button" class="btn btn-secondary btn-sm fw-bold"><i class="fa-solid fa-backward"></i> Back
                            to
                            home</button></a>

                </div>
            </div>
        </div>









        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
</body>

</html>