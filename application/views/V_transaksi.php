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
                            <a href="<?= base_url('C_Admin/pdf_transaksi') ?>"><button type="button" class="btn btn-danger btn-sm"><i class="nav-icon fas fa-download"></i> Download
                                    PDF</button></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped mb-3">
                        <?= $this->session->flashdata('message'); ?>
                        <thead>
                            <tr>
                                <th>ID TRANSAKSI</th>
                                <th>KATEGORI</th>
                                <th>PEMBELI</th>
                                <th>NAMA BARANG</th>
                                <th>JUMLAH</th>
                                <th>TOTAL</th>
                                <th>STATUS</th>
                                <th>DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($tampil as $t) : ?>
                                <tr>
                                    <td><?= $t['id_transaksi'] ?></td>
                                    <td><?= $t['kategori'] ?></td>
                                    <td><?= $t['nama_customer'] ?></td>
                                    <td><?= $t['nama_barang'] ?></td>
                                    <td><?= $t['jumlah'] ?></td>
                                    <td>Rp <?= $t['harga'] * $t['jumlah'] ?> </td>
                                    <td>
                                        <?php if ($t['status'] == '0') { ?>

                                            <a href="<?= base_url('C_Admin/pesananBaru/') . $t['id_transaksi'] ?>">
                                                <button type="button" class="btn btn-info btn-sm">Diterima</button></a>

                                        <?php } elseif ($t['status'] == 'proses') { ?>

                                            <a href="<?= base_url('C_Admin/proses/' . $t['id_transaksi']) ?>">
                                                <button type="button" class="btn btn-info btn-sm">Menyiapkan</button></a>

                                        <?php } elseif ($t['status'] == 'selesai') { ?>

                                            <button type="button" class="btn btn-success btn-sm">Selesai</button>

                                        <?php } ?>
                                    </td>
                                    <td> <a href="<?= base_url('C_Admin/delete/' . $t['id_transaksi']) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
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