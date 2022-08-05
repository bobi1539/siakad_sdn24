<div class="row m-4 justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center">Edit Data Dokumen Nagari Koto Tangah</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <form action="<?php echo base_url('dokumen/edit_aksi') ?>" method="POST">
                    <input type="hidden" name="kode_dokumen" value="<?php echo $data_dokumen['kode_dokumen'] ?>">
                    <div class="form-group">
                        <label for="nama_dokumen">Nama Dokumen</label>
                        <input name="nama_dokumen" type="text" class="form-control" id="nama_dokumen" required value="<?php echo $data_dokumen['nama_dokumen'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="syarat">Syarat</label>
                        <input name="syarat" type="text" class="form-control" id="syarat" required value="<?php echo $data_dokumen['syarat'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="lama_pembuatan">Lama Pembuatan</label>
                        <input name="lama_pembuatan" type="text" class="form-control" id="lama_pembuatan" required value="<?php echo $data_dokumen['lama_pembuatan'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>