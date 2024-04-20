<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title ?></h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?= $title ?></h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped mb-3">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>ID TRANSAKSI</th>
                                <th>PEMBELI</th>
                                <th>NAMA BARANG</th>
                                <th>STATUS</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($tampil as $t) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $t['id_transaksi'] ?></td>
                                <td><?= $t['nama'] ?></td>
                                <td><?= $t['nama_barang'] ?></td>
                                <td><?= $t['status'] ?></td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                        data-target="#exampleModal2<?= $t['id_transaksi'] ?>">
                                        Edit
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal2<?= $t['id_transaksi'] ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel2">Edit Transaksi</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- form edit -->
                                                    <form method="post"
                                                        action="<?= base_url('C_Admin/editTransaksi/' . $t['id_transaksi'])  ?>">
                                                        <!-- Pembeli -->

                                                        <label for="exampleInputEmail1" class="form-label">Nama
                                                            Pembeli</label>
                                                        <div class="input-group mb-3">
                                                            <select class="custom-select" name="customer" id="customer">
                                                                <?php foreach ($customer as $c) : ?>
                                                                <option value="<?= $c['id_customer'] ?>"
                                                                    <?php if ($c['id_customer'] == $t['id_customer']) : ?>
                                                                    selected <?php endif ?>><?= $c['nama'] ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>

                                                        <!-- Nama Barang -->
                                                        <label for="barang" name="barang" id="barang"
                                                            class="form-label">Nama
                                                            Barang</label>
                                                        <div class="input-group mb-3">
                                                            <select class="custom-select" name="barang" id="barang">

                                                                <?php foreach ($barang as $b) : ?>
                                                                <option value="<?= $b['id_barang'] ?>"
                                                                    <?php if ($b['id_barang'] == $t['id_barang']) : ?>
                                                                    selected <?php endif ?>>
                                                                    <?= $b['nama_barang'] ?>
                                                                </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">Jumlah
                                                                Beli</label>
                                                            <input type="number " class="form-control" id="jumlah"
                                                                name="jumlah" value="<?= $t['jumlah'] ?>">
                                                        </div>
                                                        <!-- Status -->
                                                        <label for="exampleInputPassword1"
                                                            class="form-label">Status</label>
                                                        <div class="input-group mb-3">
                                                            <select class="custom-select" name="status" id="status">
                                                                <!-- Value menggunakan option statis -->
                                                                <option selected>- Pilih -</option>
                                                                <?php if ($t['status'] == 'ada') : ?>
                                                                <option value="ada" selected>Ada </option>
                                                                <option value="kosong">Kosong </option>
                                                                <?php endif ?>

                                                                <?php if ($t['status'] == 'kosong') : ?>
                                                                <option value="ada">Ada </option>
                                                                <option value="kosong" selected>Kosong </option>
                                                                <?php endif ?>
                                                            </select>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td> <a href="<?= base_url('C_Admin/delete/' . $t['id_transaksi']) ?>">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>



                </div>
            </div>

        </div>
    </section>
</div>