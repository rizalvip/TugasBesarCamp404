<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= $this->extend("layouts/template"); ?>
    <?= $this->section("content"); ?>
    <div class="container d-flex justift-content-center">
        <div class="card my-3 w-50">
            <div class="card header">
                <h3 class="text-center"> Profil Siswa</h3>
            </div>
            <div class="card-body">
                <div class="row ml-2">
                    <h4 class="col-4"> Nama</h4>
                    <h4> : <?= $siswa['name']; ?> </h4>
                </div>
                <div class="row ml-2">
                    <h4 class="col-4"> NIS</h4>
                    <h4> : <?= $siswa['nis']; ?> </h4>
                </div>
                <div class="row ml-2">
                    <h4 class="col-4"> Email</h4>
                    <h4> : <?= $siswa['email']; ?> </h4>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>
</body>

</html>