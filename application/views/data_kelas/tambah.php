<div class="row m-4 justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center">Input Data Kelas</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <form action="<?php echo base_url('data_kelas/tambah_aksi') ?>" method="POST">
                    <div class="form-group row">
                        <label for="id_kelas" class="col-sm-4 col-form-label">ID Kelas</label>
                        <div class="col-sm-8">
                            <input name="id_kelas" type="text" class="form-control" id="id_kelas" required maxlength="2">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nip" class="col-sm-4 col-form-label">NIP</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="nip" name="nip">
                                <?php foreach($data_guru as $data): ?>
                                    <option value="<?php echo $data['nip'] ?>"><?php echo $data['nip'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="wali_kelas" class="col-sm-4 col-form-label">Wali Kelas</label>
                        <div class="col-sm-8">
                            <input name="wali_kelas" type="text" class="form-control" id="wali_kelas" required maxlength="30">
                        </div>
                    </div>
                    
                    <a href="<?php echo base_url('data_kelas') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>