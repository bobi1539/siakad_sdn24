<div class="row m-4 justify-content-center">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center">Input Data Siswa</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <form action="<?php echo base_url('data_siswa/tambah_aksi') ?>" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="nis" class="col-sm-4 col-form-label">NIS</label>
                                <div class="col-sm-8">
                                    <input name="nis" type="text" class="form-control" id="nis" required maxlength="4">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="nisn" class="col-sm-4 col-form-label">NISN</label>
                                <div class="col-sm-8">
                                    <input name="nisn" type="text" class="form-control" id="nisn" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="nama_siswa" class="col-sm-4 col-form-label">Nama Siswa</label>
                                <div class="col-sm-8">
                                    <input name="nama_siswa" type="text" class="form-control" id="nama_siswa" required maxlength="100">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" required maxlength="100">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="n_ayah" class="col-sm-4 col-form-label">Nama Ayah</label>
                                <div class="col-sm-8">
                                    <input name="n_ayah" type="text" class="form-control" id="n_ayah" required maxlength="100">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="p_ayah" class="col-sm-4 col-form-label">Pekerjaan Ayah</label>
                                <div class="col-sm-8">
                                    <input name="p_ayah" type="text" class="form-control" id="p_ayah" required maxlength="100">
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

                            <div class="form-group row">
                                <label for="n_ibu" class="col-sm-4 col-form-label">Nama Ibu</label>
                                <div class="col-sm-8">
                                    <input name="n_ibu" type="text" class="form-control" id="n_ibu" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="p_ibu" class="col-sm-4 col-form-label">Pekerjaan Ibu</label>
                                <div class="col-sm-8">
                                    <input name="p_ibu" type="text" class="form-control" id="p_ibu" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="no_telpon" class="col-sm-4 col-form-label">No Telpon</label>
                                <div class="col-sm-8">
                                    <input name="no_telpon" type="text" class="form-control" id="no_telpon" required maxlength="100">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <input name="alamat" type="text" class="form-control" id="alamat" required maxlength="100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="t_badan" class="col-sm-4 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-8">
                                    <input name="t_badan" type="text" class="form-control" id="t_badan" required maxlength="100">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="b_badan" class="col-sm-4 col-form-label">Berat Badan</label>
                                <div class="col-sm-8">
                                    <input name="b_badan" type="text" class="form-control" id="b_badan" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="mt-4">KONDISI KESEHATAN</h5>
                            <div class="form-group row">
                                <label for="k_pendengaran" class="col-sm-4 col-form-label">Pendengaran</label>
                                <div class="col-sm-8">
                                    <input name="k_pendengaran" type="text" class="form-control" id="k_pendengaran" required maxlength="100">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="k_penglihatan" class="col-sm-4 col-form-label">Penglihatan</label>
                                <div class="col-sm-8">
                                    <input name="k_penglihatan" type="text" class="form-control" id="k_penglihatan" required maxlength="100">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="k_gigi" class="col-sm-4 col-form-label">Gigi</label>
                                <div class="col-sm-8">
                                    <input name="k_gigi" type="text" class="form-control" id="k_gigi" required maxlength="100">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="id_kelas" class="col-sm-4 col-form-label">Kelas</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="id_kelas" name="id_kelas">
                                        <?php foreach ($data_kelas as $data) : ?>
                                            <option value="<?php echo $data['id_kelas'] ?>"><?php echo $data['id_kelas'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="<?php echo base_url('data_siswa') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>