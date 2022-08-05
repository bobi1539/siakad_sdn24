<div class="row m-4 justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center">Input Data Dokumen Nagari Koto Tangah</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <form action="<?php echo base_url('dokumen/tambah_aksi') ?>" method="POST">
                    <div class="form-group">
                    <label for="kode_dokumen">Kode Dokumen</label>
                        <select name="kode_dokumen" class="form-control" id="kode_dokumen">
                            <option value="sktm">sktm</option>
                            <option value="skp">skp</option>
                            <option value="skkb">skkb</option>
                            <option value="skd">skd</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_dokumen">Nama Dokumen</label>
                        <input name="nama_dokumen" type="text" class="form-control" id="nama_dokumen" required>
                    </div>
                    <div class="form-group">
                        <label for="syarat">Syarat</label>
                        <input name="syarat" type="text" class="form-control" id="syarat" required>
                    </div>
                    <div class="form-group">
                        <label for="lama_pembuatan">Lama Pembuatan</label>
                        <input name="lama_pembuatan" type="text" class="form-control" id="lama_pembuatan" required>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>