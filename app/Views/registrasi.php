    <?= $this->extend("layouts/template"); ?>

    <?= $this->section("content"); ?>
    <div class="container my-5 col-4">
        <div class="card">
            <div class="card header">
                <h3 class="text-center"> Form Registrasi Siswa</h3>
            </div>
            <div class="card-body">
                <!--slot flash message-->
                <div class="row">
                    <div class="col mx-auto">

                        <?php if (session()->getFlashdata('gagal')) : ?>
                            <?php $errors = session()->getFlashdata('gagal') ?>
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    <?php foreach ($errors as $error) : ?>
                                        <li> <?= $error ?></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <?php if (session()->getFlashdata('sukses')) : ?>
                            <?php $errors = session()->getFlashdata('sukses') ?>
                            <div class="alert alert-danger" role="alert">
                                <p> <?= session()->getFlashdata('sukses') ?> </p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <form method="post" action="<?= base_url(); ?>/registrasi/simpan">
                    <?= csrf_field() ?>
                    <label>Nama </label>
                    <input type="text" class="form-control" name="name" required>
                    <label>Email </label>
                    <input type="text" class="form-control" name="email" required>
                    <label>Password </label>
                    <input type="password" class="form-control" name="password" required>
                    <label>Konfirmasi Password </label>
                    <input type="password" class="form-control" name="kofirm_pass" required>
                    <br>
                    <input type="Submit" class="btn btn-success" value="Registrasi">

                </form>

            </div>
        </div>
    </div>
    </div>
    </div>
    <?= $this->endSection(); ?>