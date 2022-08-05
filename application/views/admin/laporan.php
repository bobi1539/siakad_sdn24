<div class="row my-4">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Laporan Pengajuan Dokumen</h4>
            </div>
            <div class="card-body">
                <form action="<?php echo base_url('admin/laporan_pengajuan') ?>" method="POST" target="_blank">
                    <div class="form-group">
                        <label for="kode_dokumen">Nama Dokumen</label>
                        <select name="kode_dokumen" class="form-control" id="kode_dokumen">
                            <option value="semua">Lihat Semua</option>
                            <?php foreach ($data_dokumen as $data) : ?>
                                <option value="<?php echo $data['kode_dokumen'] ?>"><?php echo $data['nama_dokumen'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input name="tanggal" id="tanggal" type="text" class="form-control" minlength="2" maxlength="2">
                    </div>
                    <div class="form-group">
                        <label for="bulan">Bulan</label>
                        <input name="bulan" id="bulan" type="text" class="form-control" minlength="2" maxlength="2">
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <select name="tahun" class="form-control" id="tahun">
                            <option value="">-Pilih-</option>
                            <?php for ($tahun = date('Y'); $tahun > 2010; $tahun--) : ?>
                                <option value="<?php echo $tahun ?>"><?php echo $tahun ?></option>
                            <?php endfor ?>

                        </select>
                    </div>
                    <button class="btn btn-primary col-lg-12 mt-3" type="submit">Lihat</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Laporan Data Penduduk</h4>
            </div>
            <div class="card-body">
                <form action="<?php echo base_url('admin/laporan_penduduk') ?>" method="POST" target="_blank">
                    <div class="form-group">
                        <label for="kode_jorong">Jorong</label>
                        <select name="kode_jorong" class="form-control" id="kode_jorong">
                            <option value="semua">Lihat Semua</option>
                            <?php foreach ($data_jorong as $data) : ?>
                                <option value="<?php echo $data['kode_jorong'] ?>"><?php echo $data['nama_jorong'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button class="btn btn-primary col-lg-12 mt-3" type="submit">Lihat</button>
                </form>
            </div>
        </div>
    </div>
</div>