<div class="row p-4 justify-content-center">
    <div class="col-md-12">

        <div class="card shadow mt-3">
            <div class="card-header">
                <h4 class="text-center"> Data Nilai</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <div class="row">
                    <div class="col-md-8">
                        <div class="card-body border mb-3">
                            <form action="<?php echo base_url('data_nilai/tambah') ?>" method="POST">
                                <div class="form-group row">
                                    <label for="id_kelas" class="col-sm-4 col-form-label">Id Kelas</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" id="id_kelas" name="id_kelas">
                                            <?php foreach ($data_kelas as $data) : ?>
                                                <option value="<?php echo $data['id_kelas'] ?>">
                                                    <?php echo $data['id_kelas'] ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <button type="submit" class="col-sm-4 btn btn-primary mb-3">
                                        tambah data nilai
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover " id="tabel-data">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col">Id Nilai</th>
                                <th scope="col">NIS</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Pelajaran</th>
                                <th scope="col" class="text-center">Aksi</th>
                                <!-- <th></th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data_nilai as $data) : ?>
                                <tr>
                                    <th class="text-center" scope="row"><?php echo $no++ ?></th>
                                    <td><?php echo $data['id_nilai'] ?></td>
                                    <td><?php echo $data['nis'] ?></td>
                                    <td><?php echo $data['nama_siswa'] ?></td>
                                    <td><?php echo $data['nama_pelajaran'] ?></td>
                                    <!-- <td class="text-center" width="10">
                                        <a class="btn mr-2 btn-sm btn-primary" href="<?php echo base_url('data_nilai/edit/') . $data['id_nilai'] ?>">
                                            lihat
                                        </a>
                                    </td> -->
                                    <td class="text-center" width="10">
                                        <a onclick="return confirm('Yakin data dihapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('data_nilai/hapus/') . $data['id_nilai'] ?>">
                                            hapus
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="text-center"> Lihat Nilai Tengah Semester</h5>
                    </div>
                    <div class="card-body">

                        <?php echo $this->session->tempdata('pesan') ?>
                        <div class="table-responsive">
                            <table class="table table-hover " id="tabel-data-2">
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
                                            <form action="<?php echo base_url('data_nilai/lihat_nilai_siswa') ?>" method="POST" target="_blank">
                                                <input type="hidden" name="nis" value="<?php echo $data['nis'] ?>">
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
    </div>
</div>