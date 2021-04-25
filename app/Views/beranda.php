<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <?= $this->extend("layouts/template"); ?>
    <?= $this->section("content"); ?>
    <!--Jumbotron-->
    <div class="jumbotron text-center">
        <h1> SISTEM INFORMASI SISWA </h1>
        <P>Selamat Datang di Portal Resmi Siswanya Camp404</P>
        <a href="<?= base_url('info-kegiatan') ?>" class="btn btn-dark" class="nav-link">Informasi Kegiatan</a>
        <a href="<?= base_url('login') ?>" class="btn btn-dark" class="nav-link">Data Siswa</a>

    </div>
    <?= $this->endSection(); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>