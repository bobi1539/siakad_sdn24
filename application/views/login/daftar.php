<style>
    .bg-daftar {
        background-image: url('../assets/img/bg2.jpg');
        background-size: cover;
    }
</style>
<div class="bg-daftar">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-10">

                <div class="card shadow-lg my-5">
                    <div class="card-body p-5">
                        
                        <?php echo $this->session->tempdata('pesan') ?>

                        <div class="text-center">
                            <h2 class="h4 text-gray-900 mb-0">Selamat Datang</h2>
                            <h2 class="h4 text-gray-900 mb-4">Silahkan Registrasi</h2>
                        </div>
                        <form method="POST" action="<?php echo base_url('login/pendaftaran') ?>">
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
                                        Daftar
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <a class="small btn-link" href="<?php echo base_url('login') ?>">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>