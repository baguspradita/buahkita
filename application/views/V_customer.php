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

            <!-- Info boxes -->
            <div class="row">
                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Proses</span>
                            <span class="info-box-number"><?= $jumlah['proses'] ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Selesai</span>
                            <span class="info-box-number"><?= $jumlah['selesai'] ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <h3 class="card-title"><?= $title ?></h3>
                        </div>
                        <div class="col-md-2">
                            <a href="<?= base_url('C_Admin/pdf_customer') ?>"><button type="button"
                                    class="btn btn-danger btn-sm"><i class="nav-icon fas fa-download"></i> Download
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
                                <th>NAMA CUSTOMER</th>
                                <th>EMAIL</th>
                                <th>NOMOR TELEPON</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($customer as $c) :  ?>
                            <tr>
                                <td scope="row"><?= $no++ ?></td>
                                <td scope="row"><?= $c['nama'] ?></td>
                                <td scope="row"><?= $c['email'] ?></td>
                                <td scope="row"><?= $c['telepon'] ?></td>
                                <td scope="row">
                                    <?php if ($c['is_active'] == 'active') { ?>
                                    <a href="<?= base_url('C_Admin/blocked/' . $c['id_customer']) ?>"
                                        onclick="return confirm('Apakah anda yakin ingin memblokir akun ini ?')"><button
                                            class="btn btn-success"><i class="fa-solid fa-unlock"></i></button></a>
                                    <?php } elseif ($c['is_active'] == 'blocked') { ?>
                                    <a href="<?= base_url('C_Admin/active/' . $c['id_customer']) ?>"
                                        onclick="return confirm('Apakah anda yakin ingin mengaktifkan akun ini ?')"><button
                                            class="btn btn-danger"><i class="fa-solid fa-lock"></i></button></a>
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <!-- tutup modal -->
                </div>
            </div>
        </div>
    </section>
</div>