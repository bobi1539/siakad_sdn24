<?php
$data_admin = $this->session->userdata();
?>
<div class="row m-4 justify-content-center">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center">Tambah Data Penduduk</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <form method="POST" action="<?php echo base_url('penduduk/tambah_penduduk_aksi') ?>">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input name="username" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input name="password" type="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nik_penduduk">NIK Penduduk</label>
                                <input name="nik_penduduk" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_penduduk">Nama Penduduk</label>
                                <input name="nama_penduduk" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="no_kk">No KK</label>
                                <input name="no_kk" type="text" class="form-control form-control-user" required>
                            </div>
                            <div class="form-group">
                                <label for="kode_jorong">Nama Jorong</label>
                                <select name="kode_jorong" class="form-control" id="exampleFormControlSelect1">
                                    <option value="pilih">-Pilih-</option>
                                    <?php foreach ($data_jorong as $data) : ?>
                                        <option value="<?php echo $data['kode_jorong'] ?>"><?php echo $data['nama_jorong'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input name="tanggal_lahir" id="tanggal_lahir" type="date" class="form-control form-control-user" required>
                            </div>
                            <div class=" form-group">
                                <label for="tempat">Tempat Lahir</label>
                                <input name="tempat" type="text" class="form-control form-control-user" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                    <option value="pilih">-Pilih-</option>
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pendidikan">Pendidikan</label>
                                <input name="pendidikan" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input name="pekerjaan" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input name="alamat" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>