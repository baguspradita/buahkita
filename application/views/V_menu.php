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
    style="font-family: 'Roboto Condensed', sans-serif; background-image: url('<?= base_url('assets/img/bg3.jpg') ?>')"
    class="menu">
    <div class=" container my-5">


        <div class="card mb-5">
            <div class="card-body text-center fw-bold">
                <h3 class="fw-bold"> SILAHKAN MENGISI FORM DIBAWAH INI UNTUK ORDER</h3>
            </div>
        </div>


        <div class="card">
            <div class="card-body">
                <form method="post" action="<?= base_url('C_User') ?>">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Customer</label>
                        <input class="form-control" type="text" value="<?= $customer['nama'] ?>"
                            aria-label="<?= $customer['nama'] ?>" id="customer" name="customer" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select name="kategori" class="form form-select" id="kategori">
                            <option selected>- Pilih Kategori -</option>
                            <?php foreach ($kategori as $k) : ?>
                            <option value="<?= $k['kategori'] ?>">
                                <?= $k['kategori'] ?>
                            </option>
                            <?php endforeach; ?>
                            <?= form_error('kategori', '<small class="text-danger">', '</small>') ?>
                        </select>

                    </div>
                    <div class="mb-3">
                        <label for="barang" class="form-label">Buah</label>
                        <select name="barang" class="form form-select" id="barang">
                            <?= form_error('barang', '<small class="text-danger">', '</small>') ?>
                            <option selected>- Pilih Buah -</option>
                            <?php foreach ($barang as $b) : ?>
                            <option value="<?= $b['id_barang'] ?>"><?= $b['nama_barang'] ?>
                            </option>
                            <?php endforeach; ?>

                        </select>
                    </div>

                    <div class="mb-3 col-md-2">
                        <label for="exampleInputPassword1" class="form-label">Jumlah Buah </label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah">
                        <?= form_error('jumlah', '<small class="text-danger">', '</small>') ?>
                    </div>

                    <button type="submit" class="btn  btn-sm fw-bold button-74 bounce"><i
                            class="fa-solid fa-cart-shopping"></i>
                        Chek Out</button>
                </form>
            </div>
        </div>
    </div>
    <div class="text-start mb-0 p-3 footer-menu" style="background-color: rgba(0, 0, 0, 0.2)">
        <div class="row">
            <div class="col-md-10">
                <a href="<?= base_url('C_User/beranda') ?>"><button type="button"
                        class="btn btn-secondary btn-sm fw-bold"><i class="fa-solid fa-backward"></i> Back</button></a>

            </div>
        </div>
    </div>









    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script>
    $(document).ready(function() {

        $('#kategori').change(function() {

            var id = $(this).val();

            $.ajax({
                url: "<?= base_url('C_User/get_barang') ?>",
                method: "POST",
                data: {
                    id: id
                },
                async: true,
                dataType: 'json',
                success: function(data) {

                    var html = '';
                    var i;
                    html += '<option>' + '- Pilih -' + '</option>';
                    for (i = 0; i < data.length; i++) {

                        html += '<option value=' + data[i].id_barang + '>' + data[i]
                            .nama_barang + '</option>';
                    }
                    $('#barang').html(html);
                    // console.log(id);


                }
            });
            return false;

        });

    });
    </script>

    <!-- <script>
        $(document).ready(function() {
            $('#kategori').change(function() {
                var id = $(this).val();
                $.ajax({
                    type: "post",
                    url: "<?= base_url('C_User/get_barang') ?>",
                    data: {
                        id: id
                    },
                    dataType: "json",
                    succes: function(response) {
                        console.log(response);
                    }
                });
            });
        });
    </script> -->

</body>

</html>