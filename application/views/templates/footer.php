<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
    </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= base_url('lte/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap -->
<script src="<?= base_url('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('lte/dist/js/adminlte.js') ?>"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?= base_url('lte/plugins/jquery-mousewheel/jquery.mousewheel.js') ?>"></script>
<script src="<?= base_url('lte/plugins/raphael/raphael.min.js') ?>"></script>
<script src="<?= base_url('lte/plugins/jquery-mapael/jquery.mapael.min.js') ?>"></script>
<script src="<?= base_url('lte/plugins/jquery-mapael/maps/usa_states.min.js') ?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('lte/plugins/chart.js/Chart.min.js') ?>"></script>

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

<!-- chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('lte/dist/js/demo.js') ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('lte/dist/js/pages/dashboard2.js') ?>"></script>
<script>
/* show file value after file select */


$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": true,
        "autoWidth": true,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $("#example2").DataTable({
        "responsive": true,
        "lengthChange": true,
        "autoWidth": true,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

});

document.querySelector('.custom-file-input').addEventListener('change', function(e) {
    var fileName = document.getElementById("img").files[0].name;
    var nextSibling = e.target.nextElementSibling
    nextSibling.innerText = fileName
});
document.querySelector('.custom-file-input').addEventListener('change', function(e) {
    var fileName = document.getElementById("image").files[0].name;
    var nextSibling = e.target.nextElementSibling
    nextSibling.innerText = fileName
});
</script>
<?php
$lokal = array(
    'kategori_transaksi' => 'lokal',

);
$this->db->where($lokal);
$lokal = $this->db->get('transaksi')->num_rows();

$import = array(
    'kategori_transaksi' => 'import',

);
$this->db->where($import);
$import = $this->db->get('transaksi')->num_rows();

$data['jumlah'] = array(
    'lokal' => $lokal,
    'import' => $import,
);

$nama_kategori = "";
foreach ($kategori as $k) {
    $kateg = $k['kategori'];
    $nama_kategori .= "'$kateg'" . ", ";
}

?>
<script>
const ctx = document.getElementById('myChart');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?= $nama_kategori ?>],
        backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)'],
        datasets: [{
            label: 'Data Transaksi',
            data: [<?= $jumlah['lokal'] ?>, <?= $jumlah['import'] ?>, , ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

</body>

</html>