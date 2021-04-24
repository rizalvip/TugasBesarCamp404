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
    <div class="container my-5 col-4">
        <div class="card">
            <div class="card header">
                <h3 class="text-center"> Form Login Siswa/wi</h3>
            </div>
            <div class="card-body">
                <!--slot flash message-->
                <div class="row">
                    <div class="col mx-auto">
                        <form action="<?= base_url('login/proses') ?>" method="POST">
                            <?= csrf_field() ?>
                            <label>Email </label>
                            <input type="text" class="form-control" name="email" required>
                            <label>Password </label>
                            <input type="password" class="form-control" name="password" required>
                            <br>
                            <input type="Submit" class="btn btn-success" value="Login">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>
</body>

</html>