<div class="row m-4 justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center">Edit Data Pelajaran</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <form action="<?php echo base_url('data_pelajaran/edit_aksi') ?>" method="POST">
                    <div class="form-group row">
                        <label for="id_pelajaran" class="col-sm-4 col-form-label">ID Pelajaran</label>
                        <div class="col-sm-8">
                            <input name="id_pelajaran" type="text" class="form-control" id="id_pelajaran" required maxlength="30" readonly value="<?php echo $data_pelajaran['id_pelajaran'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama_pelajaran" class="col-sm-4 col-form-label">Nama Pelajaran</label>
                        <div class="col-sm-8">
                            <input name="nama_pelajaran" type="text" class="form-control" id="nama_pelajaran" required maxlength="18" value="<?php echo $data_pelajaran['nama_pelajaran'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_kelas" class="col-sm-4 col-form-label">Id Kelas</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="id_kelas" name="id_kelas">
                                <?php foreach($data_kelas as $data): ?>
                                    <option value="<?php echo $data['id_kelas'] ?>" <?php echo $data['id_kelas'] == $data_pelajaran['id_kelas'] ? 'selected' : '' ?> ><?php echo $data['id_kelas'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nip" class="col-sm-4 col-form-label">NIP</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="nip" name="nip">
                                <?php foreach($data_guru as $data): ?>
                                    <option value="<?php echo $data['nip'] ?>" <?php echo $data['nip'] == $data_pelajaran['nip'] ? 'selected' : '' ?>><?php echo $data['nip'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    
                    <a href="<?php echo base_url('data_pelajaran') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>