<div class="row m-4 justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center">Input Data User</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <form action="<?php echo base_url('data_user/tambah_aksi') ?>" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="username" class="col-sm-4 col-form-label">Username</label>
                                <div class="col-sm-8">
                                    <input name="username" type="text" class="form-control" id="username" required maxlength="100">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input name="password" type="password" class="form-control" id="password" required minlength="6">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nip" class="col-sm-4 col-form-label">NIP / Nama Guru</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="nip" name="nip">
                                        <?php foreach ($data_guru as $data) : ?>
                                            <option value="<?php echo $data['nip'] ?>"><?php echo $data['nip'] . " : " . $data['nama_guru'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="role_id" class="col-sm-4 col-form-label">Role</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="role_id" name="role_id">
                                        <option value="ADMIN">ADMIN</option>
                                        <option value="WALI_KELAS">WALI_KELAS</option>
                                    </select>
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