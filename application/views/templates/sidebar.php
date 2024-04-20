<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link">
        <img src="<?= base_url('lte/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Buah Kita</span>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('lte/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="<?= base_url('C_Admin') ?>" class="d-block"><?= $petugas['full_name'] ?></a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href="<?= base_url('C_Admin') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>

                </li>



                <li class="nav-header">PRODUK</li>


                <li class="nav-item">

                </li>


                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-lemon"></i>
                        <p>
                            Data Buah
                        </p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <?php foreach ($kategori as $k) : ?>
                            <a href="<?= base_url('C_Admin/barang/' . $k['kategori']) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Buah <?= $k['kategori'] ?></p>
                            </a>
                            <?php endforeach; ?>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="<?= base_url('C_Admin/transaksi') ?>" class="nav-link">
                        <i class="nav-icon fas fa-money-bill"></i>
                        <p>Transaksi</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('C_Admin/customer') ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Data Customer</p>
                    </a>
                </li>

                <?php if ($petugas['level'] == 'admin') { ?>
                <li class="nav-header">MISCELLANEOUS</li>
                <li class="nav-item">
                    <a href="<?= base_url('C_Admin/masterdata') ?>" class="nav-link">
                        <i class="nav-icon fa-solid fa-gear"></i>
                        <p>Master Data</p>
                    </a>
                </li>
                <?php } ?>

                <li class="nav-item">
                    <a href="<?= base_url('C_Admin/changePassword') ?>" class="nav-link">
                        <i class="nav-icon fa-solid fa-key"></i>
                        <p>Change Password</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('C_Auth/logout') ?>" class="nav-link"
                        onclick="return confirm('Apakah anda yakin ingin logout ?')">
                        <i class="nav-icon fas fa-right-from-bracket"></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>