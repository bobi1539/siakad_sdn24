<div class="row m-4 justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center">Edit Data Jorong Nagari Koto Tangah</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <form action="<?php echo base_url('jorong/edit_aksi') ?>" method="POST">
                    <div class="form-group">
                        <label for="kode_jorong">Nama Jorong</label>
                        <input name="kode_jorong" type="text" class="form-control" id="kode_jorong" value="<?php echo $data_jorong['kode_jorong'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama_jorong">Nama Jorong</label>
                        <input name="nama_jorong" type="text" class="form-control" id="nama_jorong" value="<?php echo $data_jorong['nama_jorong'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="kepala_jorong">Nama Kepala Jorong</label>
                        <input name="kepala_jorong" type="text" class="form-control" id="kepala_jorong" value="<?php echo $data_jorong['kepala_jorong'] ?>" required>
                    </div>
                    <a href="<?php echo base_url('jorong') ?>" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>