<div class="row m-4 justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center">Input Data Jorong Nagari Koto Tangah</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <form action="<?php echo base_url('jorong/tambah_aksi') ?>" method="POST">
                    <div class="form-group">
                        <label for="kode_jorong">Kode Jorong</label>
                        <input name="kode_jorong" type="text" class="form-control" id="kode_jorong" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_jorong">Nama Jorong</label>
                        <input name="nama_jorong" type="text" class="form-control" id="nama_jorong" required>
                    </div>
                    <div class="form-group">
                        <label for="kepala_jorong">Nama Kepala Jorong</label>
                        <input name="kepala_jorong" type="text" class="form-control" id="kepala_jorong" required>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>