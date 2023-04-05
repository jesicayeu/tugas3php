<?php
require 'koneksi.php';

$masuk = query("SELECT * FROM masuk");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Surat Masuk</title>
    <style>
        h1 {
            text-align: center;
        }

        .table1 {
            color: #444;
            font-family: sans-serif;
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #f2f5f7;
        }

        .table1 tr th {
            background: #35A9DB;
            color: #fff;
            font-weight: normal;
        }

        .table1, th, td {
            padding: 8px 20px;
            text-align: center;
        }

        .table1 tr:hover {
            background-color: #f5f5f5;
        }

        .table1 tr:nth-child(even) {
            background-color: #f2f2f2;
        }

    </style>
</head>
<body>
    <h1>Daftar Surat Masuk</h1>
    <table class="table1" border="2" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Tanggal Terima</th>
            <th>Tanggal Surat</th>
            <th>No.Surat</th>
            <th>Pengirim</th>
            <th>Perihal</th>
            <th>Aksi</th>
        </tr>
        <?php $i=1;?>
        <?php foreach ($masuk as $m): ?>
        <tr>
            <td><?=$i++;?></td>
            <td><?= $m["Terima"];?></td>
            <td><?= $m["Surat"];?></td>
            <td><?= $m["No"];?></td>
            <td><?= $m["Pengirim"];?></td>
            <td><?= $m["Perihal"];?></td>
            <td>
                <a href="#">Hapus</a>
                <a href="#">Ubah</a>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>