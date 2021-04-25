<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= $this->extend("layouts/temp2"); ?>
    <?= $this->section("keluar"); ?>
    <div class="container">
        <div class="card my-3">
            <div class="card header">
                <h3 class="text-center"> Data Siswa</h3>
            </div>
            <div class="card-body">
                <div class="starter-template text-center ">
                    <a href="<?= base_url('siswa/new') ?>">TAMBAH DATA SISWA</a>
                    <table class="table table-bordered table-striped" <tr>
                        <th> Nama Siswa</th>
                        <th> NIS </th>
                        <th> Email</th>
                        <th> AKSI</th>
                        </tr>

                        <?php foreach ($siswa as $s) : ?>
                            <tr>
                                <td><?= $s['name'] ?> </td>
                                <td><?= $s['nis'] ?> </td>
                                <td><?= $s['email'] ?> </td>
                                <td>
                                    <ul class="nav">
                                        <a href="<?= base_url('siswa/' . $s['id']) ?>" class="btn btn-success mr-2">TAMPIL</a>
                                        <a href="<?= base_url('siswa/' . $s['id'] . '/edit') ?>" class="btn btn-secondary mr-2">UBAH</a>
                                        <form action="<?= base_url('siswa/' . $s['id']) ?>" method="POST">
                                            <?php csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-warning mr-2" onclick="return confirm('Ingin Hapus Data ?')">HAPUS</button>

                                        </form>
                                    </ul>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                        <div class="starter-template text-center py-1 px-2">
                            <h1>Hai ! <?= session()->get('name'); ?></h1>
                            <p class="lead">Selamat Datang </p>
                    </table>
                </div>
            </div>
        </div>
        <?= $this->endSection(); ?>


    </div>

    </tr>
</body>

</html>