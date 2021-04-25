<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <?= $this->extend("layouts/temp2"); ?>
    <?= $this->section("keluar"); ?>
    <h3>Data Siswa SMAN 79 Jakarta</h3>
    <table class="table-bordered table-striped">
        <tr>
            <th>Nama</th>
            <th>NIS</th>
            <th>Tempat, Tanggal Lahir</th>
        </tr>
        <tr>
            <td>Khairul Rizal</td>
            <td>2021001</td>
            <td>Jakarta, 6 Agustus 2007</td>
        </tr>
        <tr>
            <td>Benzema Jabbar</td>
            <td>2021002</td>
            <td>Depok, 15 Januari 2007</td>
        </tr>
        <tr>
            <td>Epah Nisroha</td>
            <td>2021003</td>
            <td>Rembang, 23 April 2007</td>
        </tr>

    </table>
    <?= $this->endSection(); ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>