<div class="row p-4 justify-content-center">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="text-center">Lihat Nilai Siswa</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('data_nilai/lihat_nilai_siswa') ?>" method="POST" target="_blank">

                            <div class="form-group row">
                                <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="nis" name="nis">
                                        <?php foreach ($data_siswa as $data) : ?>
                                            <option value="<?php echo $data['nis'] ?>">
                                                <?php echo "Nis : " . $data['nis'] . ", Nama : " . $data['nama_siswa'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary float-right">Lihat</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow mt-3">
            <div class="card-header">
                <h4 class="text-center"> Data Nilai</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <a href="<?php echo base_url('data_nilai/tambah') ?>" class="btn btn-primary mb-3">
                    tambah data nilai
                </a>

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

    </div>
</div>