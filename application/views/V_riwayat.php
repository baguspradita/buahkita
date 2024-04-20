<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('lte/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('lte/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('lte/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('lte/') ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('lte/') ?>dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <!-- fontawsome -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body style="font-family: 'Roboto Condensed', sans-serif; background-image: url('<?= base_url('assets/img/bg3.jpg') ?>')" class="riwayat">

    <!-- Content Wrapper. Contains page content -->

    <!-- Main content -->

    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">RIWAYAT PESANAN</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Customer</th>
                                    <th>Buah</th>
                                    <th>Kategori</th>
                                    <th>Jumlah</th>
                                    <th>Tanggal Pemesanan</th>
                                    <th>Kode Transaksi</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($riwayat as $r) :  ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $r['nama_customer'] ?></td>
                                        <td><?= $r['nama_barang'] ?></td>
                                        <td><?= $r['kategori'] ?></td>
                                        <td><?= $r['jumlah'] ?></td>
                                        <td><?= $r['tanggal'] ?></td>
                                        <td><?= $r['kode_transaksi'] ?></td>
                                        <td>Rp <?= $r['harga'] * $r['jumlah'] ?> </td>
                                        <td>
                                            <?php if ($r['status'] == '0') { ?>

                                                <h6 class="text-primary fw-bold ">Pesan Telah Terkirim</h6>

                                            <?php } elseif ($r['status'] == 'proses') { ?>

                                                <h6 class="text-warning fw-bold">Menyiapkan Pesanan</h6>

                                            <?php } elseif ($r['status'] == 'selesai') { ?>

                                                <h6 class="text-success fw-bold">Pesanan Siap Diambil</h6>

                                            <?php } ?>
                                        </td>
                                        <td><a href="<?= base_url('C_User/rincian/' . $r['kode_transaksi']) ?>"><button type="button" class="btn btn-info btn-sm fw-bold"><i class="fa-solid fa-magnifying-glass"></i></button></a>
                                        </td>

                                    </tr>

                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>


        <!-- /.row -->
    </div>

    <div class="text-start mb-0 p-3 footer-menu" style="background-color: rgba(0, 0, 0, 0.2)">
        <div class="row">
            <div class="col-md-12 text-left">
                <a href="<?= base_url('C_User/beranda') ?>"><button type="button" class="btn btn-secondary btn-sm fw-bold"><i class="fa-solid fa-backward"></i> Back</button></a>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('lte/') ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('lte/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('lte/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('lte/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('lte/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('lte/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('lte/') ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('lte/') ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('lte/') ?>plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url('lte/') ?>plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('lte/') ?>plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('lte/') ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('lte/') ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('lte/') ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('lte/') ?>dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('lte/') ?>dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>

</html>