<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">

        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <h3 class="card-title">Buah <?= $jenis ?></h3>
                        </div>
                        <div class="col-md-2">

                            <a href="<?= base_url('C_Admin/pdf_barang/' . $kategoriId['kategori']) ?>"><button
                                    type="button" class="btn btn-danger btn-sm"><i class="nav-icon fas fa-download"></i>
                                    Download
                                    PDF</button></a>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped mb-3">

                        <?= $this->session->flashdata('message'); ?>

                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA BARANG</th>
                                <th>HARGA</th>
                                <th>DESKRIPSI</th>
                                <?php if ($petugas['level'] == 'admin') { ?>
                                <th>EDIT</th>
                                <th>DELETE</th>
                                <?php  } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($barangId as $b) :  ?>
                            <tr>




                                <td scope="row"><?= $no++ ?></td>
                                <td><?= $b['nama_barang'] ?></td>
                                <td><?= $b['harga'] ?></td>
                                <td><?= $b['deskripsi'] ?></td>
                                <?php if ($petugas['level'] == 'admin') { ?>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                        data-target="#exampleEdit<?= $b['id_barang'] ?>">
                                        <i class="nav-icon fas fa-edit"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleEdit<?= $b['id_barang'] ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Form Edit -->
                                                    <form method="post"
                                                        action="<?= base_url('C_Admin/editBarang/' . $b['id_barang']) ?>">
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Nama
                                                                Barang</label>
                                                            <input type="text" name="barang" id="barang"
                                                                class="form-control" aria-describedby="emailHelp"
                                                                value="<?= $b['nama_barang'] ?>">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1"
                                                                class="form-label">Kategori</label>
                                                            <select name="kategori" id="kategori" class="custom-select"
                                                                id="inputGroupSelect01">
                                                                <?php foreach ($kategori as $k) :  ?>

                                                                <?php if ($k['kategori'] == $b['kategori']) { ?>

                                                                <option value="<?= $k['kategori'] ?>" selected>
                                                                    <?= $k['kategori'] ?></option>

                                                                <?php } ?>
                                                                <option value="<?= $k['kategori'] ?>">
                                                                    <?= $k['kategori'] ?></option>

                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1"
                                                                class="form-label">Harga</label>
                                                            <input type="text" name="harga" id="harga"
                                                                class="form-control" value="<?= $b['harga'] ?>">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1"
                                                                class="form-label">Deskripsi</label>
                                                            <input type="text" name="deskripsi" id="deskripsi"
                                                                class="form-control" value="<?= $b['deskripsi'] ?>">
                                                        </div>

                                                        <div class="custom-file">

                                                            <input type="file" class="custom-file-input-tambah" id="img"
                                                                name="img" aria-describedby="myInput"
                                                                value="<?= $b['img'] ?>">
                                                            <label class="custom-file-label"
                                                                for=""><?= $b['img'] ?></label>


                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="<?= base_url('C_Admin/deleteBarang/' . $b['id_barang']) ?>"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus data ?')">
                                        <button type="submit" class="btn btn-danger"><i
                                                class="nav-icon fas fa-trash"></i></button>
                                    </a></td>
                                <?php } ?>
                            </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <?php if ($petugas['level'] == 'admin') { ?>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-plus"></i> Tambah Barang
                    </button>
                    <?php } ?>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Form Tambah -->
                                    <form method="post" action="<?= base_url('C_Admin/inputBarang') ?>"
                                        enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                                            <input type="text" name="barang" id="barang" class="form-control"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Kategori</label>
                                            <select name="kategori" id="kategori" class="custom-select"
                                                id="inputGroupSelect01">
                                                <option selected>- Pilih -</option>
                                                <?php foreach ($kategori as $k) :  ?>
                                                <option value="<?= $k['kategori'] ?>"><?= $k['kategori'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>


                                        <div class="mb-3">
                                            <label for="harga" class="form-label">Deskripsi</label>
                                            <input type="text" name="deskripsi" id="deskripsi" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label for="harga" class="form-label">Harga</label>
                                            <input type="number" name="harga" id="harga" class="form-control">
                                        </div>

                                        <label for="harga" class="form-label">Foto</label>
                                        <div class="custom-file">

                                            <input type="file" class="custom-file-input" id="image" name="image"
                                                aria-describedby="myInput">
                                            <label class="custom-file-label" for="myInput">Choose file</label>


                                        </div>



                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>