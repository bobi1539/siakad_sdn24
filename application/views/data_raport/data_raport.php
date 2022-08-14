<div class="row p-4 justify-content-center">
    <div class="col">
        <div class="row my-3">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="text-center"> Raport dan Profil Peserta Didik</h5>
                    </div>
                    <div class="card-body">

                        <?php echo $this->session->tempdata('pesan') ?>
                        <div class="table-responsive">
                            <table class="table table-hover " id="tabel-data">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">No</th>
                                        <th scope="col">NIS</th>
                                        <th scope="col">Nama Siswa</th>
                                        <th scope="col">Semester</th>
                                        <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($data_siswa as $data) : ?>
                                        <tr>
                                            <th class="text-center" scope="row"><?php echo $no++ ?></th>
                                            <td><?php echo $data['nis'] ?></td>
                                            <td><?php echo $data['nama_siswa'] ?></td>
                                            <form action="<?php echo base_url('data_raport/lihat/' . $data['nis']) ?>" method="POST" target="_blank">
                                                <td>
                                                    <select class="form-control" id="semester" name="semester">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                    </select>
                                                </td>
                                                <td class="text-center" width="10">
                                                    <button class="btn mr-2 btn-sm btn-primary">
                                                        lihat
                                                    </button>
                                                </td>
                                            </form>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="text-center"> Daftar Nilai Seluruh Siswa</h5>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('data_raport/lihat_nilai_seluruh_siswa') ?>" method="POST" target="_blank">
                            <div class="form-group row">
                                <label for="id_kelas" class="col-sm-4 col-form-label">kelas</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="id_kelas" name="id_kelas">
                                        <?php foreach ($data_kelas as $data) : ?>
                                            <option value="<?php echo $data['id_kelas'] ?>"><?php echo $data['id_kelas'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="semester" class="col-sm-4 col-form-label">Semester</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="semester" name="semester">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Lihat</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>