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
    <div class="container my-3 w-50">
        <div class="card">
            <div class="card header">
                <h3 class="text-center"> Ubah Data Siswa</h3>
            </div>
            <div class="card-body">
                <form action="<?= base_url('siswa/' . $siswa['id']) ?>" method="POST">
                    <?php csrf_field(); ?>
                    <input type="hidden" name="_method" value="PUT">
                    <ul class="list-group">
                        Nama <input type="text" name="name" value="<?= $siswa['name'] ?>" required>
                        NIS <input type="text" name="nis" value="<?= $siswa['nis'] ?>" required>
                        Email <input type="text" name="email" value="<?= $siswa['email'] ?>" required>
                    </ul>
                    <hr>
                    <input type="submit" value="Simpan" class="btn btn-success">
                    <a href="<?= base_url('siswa') ?>" class="btn btn-primary">Kembali</a>

                </form>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>

</body>

</html>