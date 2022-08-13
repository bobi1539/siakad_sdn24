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
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="text-center"> Daftar Nilai Siswa</h5>
                    </div>
                    <div class="card-body">

                        <?php echo $this->session->tempdata('pesan') ?>

                        <a href="<?php echo base_url('data_raport/tambah') ?>" class="btn btn-primary mb-3">
                            tambah data
                        </a>

                        <a href="<?php echo base_url('data_guru/print_data') ?>" class="btn btn-info mb-3" target="_blank">
                            print data
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>