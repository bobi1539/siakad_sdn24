<div class="row m-4 justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center">Ganti Password</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <form action="<?php echo base_url('data_user/ganti_password_aksi') ?>" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="username" class="col-sm-4 col-form-label">Username</label>
                                <div class="col-sm-8">
                                    <input name="username" type="text" class="form-control" id="username" value="<?php echo $data_user['username'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-4 col-form-label">Password Baru</label>
                                <div class="col-sm-8">
                                    <input name="password" type="password" class="form-control" id="password" required minlength="6">
                                </div>
                            </div>
                        </div>

                    </div>
                    <a href="<?php echo base_url('data_user') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>