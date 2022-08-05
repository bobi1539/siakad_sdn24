<div class="row m-4 justify-content-center">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center">Edit Data Siswa</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>
                
                <form action="<?php echo base_url('data_siswa/edit_aksi') ?>" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="nis" class="col-sm-4 col-form-label">NIS</label>
                                <div class="col-sm-8">
                                    <input name="nis" type="text" class="form-control" id="nis" required maxlength="4" value="<?php echo $data_siswa['nis'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama_siswa" class="col-sm-4 col-form-label">Nama Siswa</label>
                                <div class="col-sm-8">
                                    <input name="nama_siswa" type="text" class="form-control" id="nama_siswa" required maxlength="100" value="<?php echo $data_siswa['nama_siswa'] ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                            <option value="Laki-laki" <?php echo $data_siswa['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                                            <option value="Perempuan" <?php echo $data_siswa['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" required maxlength="100" value="<?php echo $data_siswa['tanggal_lahir'] ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="n_ayah" class="col-sm-4 col-form-label">Nama Ayah</label>
                                <div class="col-sm-8">
                                    <input name="n_ayah" type="text" class="form-control" id="n_ayah" required maxlength="100" value="<?php echo $data_siswa['n_ayah'] ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="p_ayah" class="col-sm-4 col-form-label">Pekerjaan Ayah</label>
                                <div class="col-sm-8">
                                    <input name="p_ayah" type="text" class="form-control" id="p_ayah" required maxlength="100" value="<?php echo $data_siswa['p_ayah'] ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_telpon" class="col-sm-4 col-form-label">No Telpon</label>
                                <div class="col-sm-8">
                                    <input name="no_telpon" type="text" class="form-control" id="no_telpon" required maxlength="100" value="<?php echo $data_siswa['no_telpon'] ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <input name="alamat" type="text" class="form-control" id="alamat" required maxlength="100" value="<?php echo $data_siswa['alamat'] ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="t_badan" class="col-sm-4 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-8">
                                    <input name="t_badan" type="text" class="form-control" id="t_badan" required maxlength="100" value="<?php echo $data_siswa['t_badan'] ?>">
                                </div>
                            </div>

                            <h5 class="mt-4">KONDISI KESEHATAN</h5>
                            <div class="form-group row">
                                <label for="k_pendengaran" class="col-sm-4 col-form-label">Pendengaran</label>
                                <div class="col-sm-8">
                                    <input name="k_pendengaran" type="text" class="form-control" id="k_pendengaran" required maxlength="100" value="<?php echo $data_siswa['k_pendengaran'] ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="k_penglihatan" class="col-sm-4 col-form-label">Penglihatan</label>
                                <div class="col-sm-8">
                                    <input name="k_penglihatan" type="text" class="form-control" id="k_penglihatan" required maxlength="100" value="<?php echo $data_siswa['k_penglihatan'] ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="k_gigi" class="col-sm-4 col-form-label">Gigi</label>
                                <div class="col-sm-8">
                                    <input name="k_gigi" type="text" class="form-control" id="k_gigi" required maxlength="100" value="<?php echo $data_siswa['k_gigi'] ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="id_kelas" class="col-sm-4 col-form-label">Kelas</label>
                                <div class="col-sm-8">
                                <select class="form-control" id="id_kelas" name="id_kelas">
                                    <?php foreach($data_kelas as $data): ?>
                                        <option value="<?php echo $data['id_kelas'] ?>" <?php echo $data['id_kelas'] == $data_siswa['id_kelas'] ? 'selected' : '' ?> ><?php echo $data['id_kelas'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                    <label for="nisn" class="col-sm-4 col-form-label">NISN</label>
                                    <div class="col-sm-8">
                                        <input name="nisn" type="text" class="form-control" id="nisn" required value="<?php echo $data_siswa['nisn'] ?>">
                                    </div>
                                </div>
                            <br><br><br><br>
                            <div class="form-group row" style="margin-top: 14px;">
                                <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" required value="<?php echo $data_siswa['tempat_lahir'] ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="n_ibu" class="col-sm-4 col-form-label">Nama Ibu</label>
                                <div class="col-sm-8">
                                    <input name="n_ibu" type="text" class="form-control" id="n_ibu" required value="<?php echo $data_siswa['n_ibu'] ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="p_ibu" class="col-sm-4 col-form-label">Pekerjaan Ibu</label>
                                <div class="col-sm-8">
                                    <input name="p_ibu" type="text" class="form-control" id="p_ibu" required value="<?php echo $data_siswa['p_ibu'] ?>">
                                </div>
                            </div>

                            <br><br><br><br>
                            <div class="form-group row" style="margin-top: 10px;">
                                <label for="b_badan" class="col-sm-4 col-form-label">Berat Badan</label>
                                <div class="col-sm-8">
                                    <input name="b_badan" type="text" class="form-control" id="b_badan" required value="<?php echo $data_siswa['b_badan'] ?>">
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