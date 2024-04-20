<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <!-- fontawsome -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="setting" style=" background-image: url('<?= base_url('assets/img/setting.jpg') ?>')">

    <div class="container px-4 card-kategori my-5">
        <h3 class="text-center mb-5 fw-bold" style="font-family: cursive;"><?= $title ?></h3>
        <div class="row">
            <div class="col-md-6">
                <div class="card py-4 text-left  card-title-top smt-0 my-3" data-aos="fade-down" data-aos-duration="1000">
                    <div class="card-body">
                        <h3 class="text-center mb-5 fw-bold text-white" style="font-family: cursive;">Profile</h3>
                        <div class="row my-3 text-white">
                            <div class="col-md-6">
                                <h6> Nama</h6>
                            </div>
                            <div class="col-md-6">
                                <h6> : <?= $customer['nama'] ?></h6>
                            </div>
                        </div>
                        <div class="row my-3 text-white">
                            <div class="col-md-6">
                                <h6> Email</h6>
                            </div>
                            <div class="col-md-6">
                                <h6> : <?= $customer['email'] ?></h6>
                            </div>
                        </div>
                        <div class="row my-3 text-white">
                            <div class="col-md-6">
                                <h6> Nomor Telepon</h6>
                            </div>
                            <div class="col-md-6">
                                <h6> : <?= $customer['telepon'] ?></h6>
                            </div>
                        </div>




                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-pen-to-square"></i> Edit
                            Profile
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card py-4 text-left  card-title-top smt-0 my-3" data-aos="fade-down" data-aos-duration="1000">
                    <div class="card-body text-white">
                        <h3 class="text-center mb-5 fw-bold" style="font-family: cursive;">Change Password</h3>
                        <p class="login-box-msg"><?= $this->session->flashdata('message'); ?></p>
                        <form method="post" action="<?= base_url('C_User/changePassword') ?>">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Curent Password</label>
                                <input type="password" class="form-control" id="curent" name="curent">
                                <?= form_error('curent', '<small class="text-danger">', '</small>') ?>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="new_password1" name="new_password1">
                                <?= form_error('new_password1', '<small class="text-danger">', '</small>') ?>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="new_password2" name="new_password2">
                                <?= form_error('new_password2', '<small class="text-danger">', '</small>') ?>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="text-start mb-0 p-3 footer-menu" style="background-color: rgba(0, 0, 0, 0.2)">
        <div class="row">
            <div class="col-md-10">
                <a href="<?= base_url('C_User/beranda') ?>"><button type="button" class="btn btn-secondary btn-sm fw-bold"><i class="fa-solid fa-backward"></i> Back</button></a>

            </div>
        </div>
    </div>









    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>




</body>

</html>