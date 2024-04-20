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
                    <h3 class="card-title">Data Petugas</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <?= $this->session->flashdata('message'); ?>
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>EMAIL</th>
                                <th>LEVEL</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($getPetugas as $p) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $p['full_name'] ?></td>
                                <td><?= $p['email'] ?></td>
                                <td><?= $p['level'] ?></td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                        data-target="#exampleModal<?= $p['id_petugas'] ?>">
                                        <i class="nav-icon fas fa-edit"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal<?= $p['id_petugas'] ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Petugas</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post"
                                                        action="<?= base_url('C_Admin/editPetugas/' . $p['id_petugas']) ?>">
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1"
                                                                class="form-label">Nama</label>
                                                            <input type="text" name="full_name" id="full_name"
                                                                class="form-control" aria-describedby="emailHelp"
                                                                value="<?= $p['full_name'] ?>">
                                                            <?= form_error('full_name', '<small class="text-danger">', '</small>') ?>

                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="harga" class="form-label">Email</label>
                                                            <input type="email" name="email" id="email"
                                                                class="form-control" value="<?= $p['email'] ?>">
                                                            <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1"
                                                                class="form-label">Role</label>
                                                            <select name="level" id="level" class="custom-select"
                                                                id="inputGroupSelect01">
                                                                <?php if ($p['level'] == 'admin') { ?>

                                                                <option value="admin" selected>Admin</option>
                                                                <option value="operator">Operator</option>

                                                                <?php } else { ?>

                                                                <option value="operator" selected>Operator</option>
                                                                <option value="admin">Admin</option>

                                                                <?php } ?>
                                                                <?= form_error('level', '<small class="text-danger">', '</small>') ?>
                                                            </select>
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

                                <td><a href="<?= base_url('C_Admin/deletePetugas/' . $p['id_petugas']) ?>"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus data ?')">
                                        <button type="submit" class="btn btn-danger"><i
                                                class="nav-icon fas fa-trash"></i></button>
                                    </a></td>

                                <td>
                                    <?php if ($p['is_active'] == 'active') { ?>

                                    <a href="<?= base_url('C_Admin/blockedP/' . $p['id_petugas']) ?>"
                                        onclick="return confirm('Apakah anda yakin ingin memblokir akun ini ?')">
                                        <button type="submit" class="btn btn-success"><i
                                                class="fa-solid fa-unlock"></i></button>
                                    </a>

                                    <?php } elseif ($p['is_active'] == 'blocked') { ?>

                                    <a href="<?= base_url('C_Admin/activeP/' . $p['id_petugas']) ?>"
                                        onclick="return confirm('Apakah anda yakin ingin mengaktifkan akun ini ?')">
                                        <button type="submit" class="btn btn-danger"><i
                                                class="fa-solid fa-lock"></i></button>
                                    </a>

                                    <?php } ?>
                                </td>


                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <?php if ($petugas['level'] == 'admin') { ?>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-plus"></i> Tambah Petugas
                    </button>
                    <?php } ?>

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
                                    <form method="post" action="<?= base_url('C_Admin/masterdata') ?>">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                                            <input type="text" name="full_name" id="full_name" class="form-control"
                                                aria-describedby="emailHelp">
                                            <?= form_error('full_name', '<small class="text-danger">', '</small>') ?>

                                        </div>

                                        <div class="mb-3">
                                            <label for="harga" class="form-label">Email</label>
                                            <input type="email" name="email" id="email" class="form-control">
                                            <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Role</label>
                                            <select name="level" id="level" class="custom-select"
                                                id="inputGroupSelect01">
                                                <option selected>- Pilih -</option>

                                                <option value="admin">Admin</option>
                                                <option value="operator">Operator</option>
                                                <?= form_error('level', '<small class="text-danger">', '</small>') ?>
                                            </select>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="harga" class="form-label">Password</label>
                                                    <input type="password" name="password1" id="password1"
                                                        class="form-control">
                                                    <?= form_error('password1', '<small class="text-danger">', '</small>') ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="harga" class="form-label">Confirm Password</label>
                                                    <input type="password" name="password2" id="password2"
                                                        class="form-control">
                                                    <?= form_error('password2', '<small class="text-danger">', '</small>') ?>
                                                </div>
                                            </div>
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