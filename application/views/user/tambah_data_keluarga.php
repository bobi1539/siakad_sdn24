<div class="row m-4 justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center">Input Data Keluarga Dari : <?php echo $this->session->userdata('nama_penduduk') ?></h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <form action="<?php echo base_url('user/tambah_data_keluarga_aksi') ?>" method="POST">
                    <div class="form-group">
                        <label for="nik_penduduk">NIK</label>
                        <input name="nik_penduduk" type="text" class="form-control" id="nik_penduduk" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_penduduk">Nama</label>
                        <input name="nama_penduduk" type="text" class="form-control" id="nama_penduduk" required>
                    </div>
                    <div class="form-group">
                        <label for="no_kk">No KK</label>
                        <input name="no_kk" type="text" class="form-control" id="no_kk" readonly value="<?php echo $this->session->userdata('no_kk') ?>">
                    </div>
                    <div class="form-group">
                        <label for="kode_jorong">Kode Jorong</label>
                        <input name="kode_jorong" type="text" class="form-control" id="kode_jorong" readonly value="<?php echo $this->session->userdata('kode_jorong') ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama_jorong">Nama Jorong</label>
                        <input name="nama_jorong" type="text" class="form-control" id="nama_jorong" readonly value="<?php echo $this->session->userdata('nama_jorong') ?>">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir">
                    </div>
                    <div class="form-group">
                        <label for="tempat">Tempat Lahir</label>
                        <input name="tempat" type="text" class="form-control" id="tempat">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                            <option value="">-Pilih-</option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pendidikan">Pendidikan</label>
                        <input name="pendidikan" type="text" class="form-control" id="pendidikan">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input name="alamat" type="text" class="form-control" id="alamat">
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input name="pekerjaan" type="text" class="form-control" id="pekerjaan">
                    </div>
                    <div class="form-group">
                        <label for="status_di_keluarga">Status di Keluarga</label>
                        <select name="status_di_keluarga" class="form-control" id="status_di_keluarga">
                            <option value="0">-Pilih-</option>
                            <option value="ayah">Ayah</option>
                            <option value="ibu">Ibu</option>
                            <option value="anak">Anak</option>
                            <option value="kakak">Kakak</option>
                            <option value="adik">Adik</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>