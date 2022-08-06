<div class="row m-4 justify-content-center">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center">Input Data Guru</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>
                
                <form action="<?php echo base_url('data_guru/tambah_aksi') ?>" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="nip" class="col-sm-4 col-form-label">NIP</label>
                                <div class="col-sm-8">
                                    <input name="nip" type="text" class="form-control" id="nip" required maxlength="18">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama_guru" class="col-sm-4 col-form-label">Nama Guru</label>
                                <div class="col-sm-8">
                                    <input name="nama_guru" type="text" class="form-control" id="nama_guru" required maxlength="100">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jabatan" class="col-sm-4 col-form-label">Jabatan</label>
                                <div class="col-sm-8">
                                    <input name="jabatan" type="text" class="form-control" id="jabatan" required maxlength="20">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tgl Lahir</label>
                                <div class="col-sm-8">
                                    <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <input name="alamat" type="text" class="form-control" id="alamat" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <a href="<?php echo base_url('data_guru') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>