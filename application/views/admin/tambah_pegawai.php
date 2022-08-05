<?php
$data_admin = $this->session->userdata();
?>
<div class="row m-4 justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center">Profil Admin</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <form action="<?php echo base_url('admin/tambah_pegawai_aksi') ?>" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input name="username" type="text" class="form-control" id="username">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" type="password" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                            <label for="no_pegawai">No Pegawai</label>
                            <input name="no_pegawai" type="text" class="form-control" id="no_pegawai">
                        </div>
                        <div class="form-group">
                            <label for="nama_pegawai">Nama Pegawai</label>
                            <input name="nama_pegawai" type="text" class="form-control" id="nama_pegawai">
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input name="jabatan" type="text" class="form-control" id="jabatan">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                <option value="laki-laki">laki-laki</option>
                                <option value="perempuan">perempuan</option>
                            </select>
                        </div>
                        <button class="btn btn-primary float-right" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="ganti_password" tabindex="-1" aria-labelledby="ganti_passwordLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo base_url('admin/ganti_password') ?>" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="ganti_passwordLabel">Ganti Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="username" value="<?php echo $data_admin['username'] ?>">
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