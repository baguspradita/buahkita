<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
    #table {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #table td,
    #table th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #table tr:hover {
        background-color: #ddd;
    }

    #table th {
        padding-top: 10px;
        padding-bottom: 10px;
        text-align: left;
        background-color: #79bd9a;
        color: white;
    }

    #footer {
        text-align: center;
        margin-top: 100px;
    }
    </style>



</head>

<body>
    <div style="text-align:center">
        <h1>BUAH KITA</h1>
        <h2> Laporan <?= $title ?></h2>
    </div>

    <table id="table" class="mb-5">
        <thead>
            <tr>
                <th>Id Transaksi</th>
                <th>Nama Customer</th>
                <th>Buah</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Total</th>

            </tr>
        </thead>
        <tbody>
            <!-- <?php $no = 1;
                    foreach ($transaksi as $t) : ?> -->
            <tr>
                <td><?= $t['id_transaksi'] ?></td>
                <td><?= $t['nama_customer'] ?></td>
                <td><?= $t['nama_barang'] ?></td>
                <td><?= $t['kategori'] ?></td>
                <td><?= $t['jumlah'] ?></td>
                <td><?= $t['tanggal'] ?></td>
                <td>Rp <?= $t['harga'] * $t['jumlah'] ?> </td>

            </tr>
            <!-- <?php endforeach;  ?> -->

        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>