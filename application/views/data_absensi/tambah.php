<div class="row m-4 justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center">Input Data Absensi</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <form action="<?php echo base_url('data_absensi/tambah_aksi') ?>" method="POST">
                    <!-- <div class="form-group row">
                        <label for="id_absen" class="col-sm-4 col-form-label">ID Absen</label>
                        <div class="col-sm-8">
                            <input name="id_absen" type="text" class="form-control" id="id_absen" required maxlength="10">
                        </div>
                    </div> -->

                    <div class="form-group row">
                        <label for="tanggal_absen" class="col-sm-4 col-form-label">Tanggal Absen</label>
                        <div class="col-sm-8">
                            <input name="tanggal_absen" type="date" class="form-control" id="tanggal_absen" required maxlength="18">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nip" class="col-sm-4 col-form-label">NIP</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="nip" name="nip">
                                <?php foreach ($data_guru as $data) : ?>
                                    <option value="<?php echo $data['nip'] ?>"><?php echo $data['nip'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nis" class="col-sm-4 col-form-label">NIS</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="nis" name="nis">
                                <?php foreach ($data_siswa as $data) : ?>
                                    <option value="<?php echo $data['nis'] ?>"><?php echo $data['nis'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_pelajaran" class="col-sm-4 col-form-label">ID Pelajaran</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="id_pelajaran" name="id_pelajaran">
                                <?php foreach ($data_pelajaran as $data) : ?>
                                    <option value="<?php echo $data['id_pelajaran'] ?>"><?php echo $data['id_pelajaran'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="keterangan" class="col-sm-4 col-form-label">Keterangan</label>
                        <div class="col-sm-8">
                            <input name="keterangan" type="text" class="form-control" id="keterangan" required maxlength="50">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="semester" class="col-sm-4 col-form-label">Semester</label>
                        <div class="col-sm-8">
                            <input name="semester" type="text" class="form-control" id="semester" required maxlength="30">
                        </div>
                    </div>

                    <a href="<?php echo base_url('data_absensi') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>