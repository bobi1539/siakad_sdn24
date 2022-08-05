<?php
$data_user = $this->session->userdata();
?>
<div class="row m-4 justify-content-center">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center">Profil User</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <form action="<?php echo base_url('user/update_profil_aksi') ?>" method="POST">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input name="username" type="text" class="form-control" id="username" value="<?php echo $data_user['username'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nik_penduduk">NIK</label>
                                <input name="nik_penduduk" type="text" class="form-control" id="nik_penduduk" value="<?php echo $data_user['nik_penduduk'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="no_kk">No KK</label>
                                <input name="no_kk" type="text" class="form-control" id="no_kk" value="<?php echo $data_user['no_kk'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_penduduk">Nama Lengkap</label>
                                <input name="nama_penduduk" type="text" class="form-control" id="nama_penduduk" value="<?php echo $data_user['nama_penduduk'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="kode_jorong">Jorong</label>
                                <select name="kode_jorong" class="form-control" id="kode_jorong">
                                    <option value="<?php echo $data_user['kode_jorong'] ?>"><?php echo $data_user['nama_jorong'] ?></option>
                                    <?php foreach ($jorong as $data) : ?>
                                        <option value="<?php echo $data['kode_jorong'] ?>"><?php echo $data['nama_jorong'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kepala_jorong">Kepala Jorong</label>
                                <input name="kepala_jorong" type="text" class="form-control" id="kepala_jorong" value="<?php echo $data_user['kepala_jorong'] ?>" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                    <option value="<?php echo $data_user['jenis_kelamin'] ?>"><?php echo $data_user['jenis_kelamin'] ?></option>
                                    <option value="laki-laki">laki-laki</option>
                                    <option value="perempuan">perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tempat">Tempat Lahir</label>
                                <input name="tempat" type="text" class="form-control" id="tempat" value="<?php echo $data_user['tempat'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" value="<?php echo $data_user['tanggal_lahir'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="pendidikan">Pendidikan</label>
                                <input name="pendidikan" type="text" class="form-control" id="pendidikan" value="<?php echo $data_user['pendidikan'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input name="alamat" type="text" class="form-control" id="alamat" value="<?php echo $data_user['alamat'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#ganti_password">
                        Ganti Password
                    </button>
                    <button onclick="return confirm('Yakin data di update?')" class="btn btn-primary float-right" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="ganti_password" tabindex="-1" aria-labelledby="ganti_passwordLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo base_url('user/ganti_password') ?>" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="ganti_passwordLabel">Ganti Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="username" value="<?php echo $data_user['username'] ?>">
                    <div class="form-group">
                        <label for="password_baru">Password Baru</label>
                        <input name="password_baru" type="password" class="form-control" id="password_baru" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>