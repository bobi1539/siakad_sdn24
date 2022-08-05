<div class="row m-4 justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center">Input Data Pengajuan Oleh : <?php echo $this->session->userdata('nama_penduduk') ?></h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <form action="<?php echo base_url('user/tambah_pengajuan_aksi') ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nik_penduduk">NIK</label>
                        <input name="nik_penduduk" type="text" class="form-control" id="nik_penduduk" readonly value="<?php echo $this->session->userdata('nik_penduduk') ?>">
                    </div>

                    <div class="form-group">
                        <label for="kode_dokumen">Pilih Dokumen Yang Akan Di Ajukan</label>
                        <select name="kode_dokumen" class="form-control" id="kode_dokumen">

                            <?php foreach ($dokumen as $data) : ?>
                                <option value="<?php echo $data['kode_dokumen'] ?>"><?php echo $data['nama_dokumen'] ?></option>
                            <?php endforeach ?>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="keperluan">Keperluan</label>
                        <input name="keperluan" type="text" class="form-control" id="keperluan" required>
                    </div>

                    <div class="form-group">
                        <label for="ktp">Upload Foto KTP</label>
                        <input type="file" name="file_ktp" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label for="kk">Upload Foto KK</label>
                        <input type="file" name="file_kk" class="form-control-file" required>
                    </div>
                    <a href="<?php echo base_url('user/pengajuan') ?>" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary float-right">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>