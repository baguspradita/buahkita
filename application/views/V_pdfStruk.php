<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <!-- Fontawsome -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/logo.png') ?>">
    <style type="text/css">
        body {
            font-size: small;
            line-height: 1.4;
        }

        p {
            margin: 0;
        }

        .performance-facts {
            border: 1px solid black;
            margin: 30px;
            float: left;
            width: 90%;
            padding: 0.5rem;

            table {
                border-collapse: collapse;
            }
        }

        .performance-facts__title {
            font-weight: bold;
            font-size: 2rem;
            margin: 0 0 0.25rem 0;
        }

        .performance-facts__header {
            border-bottom: 10px solid black;
            padding: 0 0 0.25rem 0;
            margin: 0 0 0.5rem 0;

            p {
                margin: 0;
            }
        }

        .performance-facts__table {
            width: 100%;

            thead tr {

                th,
                td {
                    border: 0;
                }
            }

            th,
            td {
                font-weight: normal;
                text-align: left;
                padding: 0.25rem 0;
                border-top: 1px solid black;
                white-space: nowrap;
            }

            td {
                &:last-child {
                    text-align: right;
                }
            }

            .blank-cell {
                width: 1rem;
                border-top: 0;
            }

            .thick-row {

                th,
                td {
                    border-top-width: 5px;
                }
            }
        }

        .small-info {
            font-size: 0.7rem;
        }

        .performance-facts__table--small {
            @extend .performance-facts__table;
            border-bottom: 1px solid #999;
            margin: 0 0 0.5rem 0;

            thead {
                tr {
                    border-bottom: 1px solid black;
                }
            }

            td {
                &:last-child {
                    text-align: left;
                }
            }

            th,
            td {
                border: 0;
                padding: 0;
            }
        }

        .performance-facts__table--grid {
            @extend .performance-facts__table;
            margin: 0 0 0.5rem 0;

            td {
                &:last-child {
                    text-align: left;

                    &::before {
                        content: "•";
                        font-weight: bold;
                        margin: 0 0.25rem 0 0;
                    }
                }
            }
        }

        .text-center {
            text-align: center;
        }

        .thick-end {
            border-bottom: 10px solid black;
        }

        .thin-end {
            border-bottom: 1px solid black;
        }
    </style>
</head>

<body>


    <section class="performance-facts">
        <header class="performance-facts__header">
            <h1 class="performance-facts__title">BUAH KITA</h1>
            <p><i class="fa-solid fa-map"></i> Griya Mutiara Banguntapan, Bantul,Yogyakarta, Indonesia</p>
            <p>08212 1595 3726</p>
        </header>
        <table class="performance-facts__table">
            <tbody>



                <tr>
                    <th colspan="3">
                        <b>Nama</b>
                    </th>
                    <td>
                        <b>: <?= $struk['nama_customer'] ?></b>
                    </td>
                </tr>

                <tr>
                    <th colspan="3">
                        <b>Buah</b>
                    </th>
                    <td>
                        <b>: <?= $struk['nama_barang'] ?></b>
                    </td>
                </tr>

                <tr>
                    <th colspan="3">
                        <b>Kategori</b>
                    </th>
                    <td>
                        <b>: <?= $struk['kategori'] ?></b>
                    </td>
                </tr>

                <tr>
                    <th colspan="3">
                        <b>harga</b>
                    </th>
                    <td>
                        <b>: <?= $struk['harga'] ?></b>
                    </td>
                </tr>

                <tr>
                    <th colspan="3">
                        <b>Jumlah Pesanan</b>
                    </th>
                    <td>
                        <b>: <?= $struk['jumlah'] ?></b>
                    </td>
                </tr>

                <tr>
                    <th colspan="3">
                        <b>Tanggal Pemesanan</b>
                    </th>
                    <td>
                        <b>: <?= $struk['tanggal'] ?></b>
                    </td>
                </tr>

                <tr>
                    <th colspan="3">
                        <b>Kode Transaksi</b>
                    </th>
                    <td>
                        <b>: <?= $struk['kode_transaksi'] ?></b>
                    </td>
                </tr>





            </tbody>
        </table>



        <div class="row">
            <div class="d-flex flex-row-reverse">
                <h5 class="fw-bold"> TOTAL : Rp. <?= $struk['jumlah'] * $struk['harga'] ?>
                </h5>
            </div>
        </div>





    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>