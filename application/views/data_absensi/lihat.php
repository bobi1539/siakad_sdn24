<div class="row p-4 justify-content-center">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center"> Data Absensi Detail</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <a href="<?php echo base_url('data_absensi') ?>" class="btn btn-secondary mb-3">
                    kembali
                </a>

                <div class="row mt-4 mb-2">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Nama Guru</h6>
                            </div>
                            <div class="col-md-6">
                                <h6>: <?php echo $data_absensi['nama_guru'] ?></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>NIP</h6>
                            </div>
                            <div class="col-md-6">
                                <h6>: <?php echo $data_absensi['nip'] ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Kelas</h6>
                            </div>
                            <div class="col-md-6">
                                <h6>: <?php echo $data_absensi['id_kelas'] ?></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Mata Pelajaran</h6>
                            </div>
                            <div class="col-md-6">
                                <h6>: <?php echo $data_absensi['nama_pelajaran'] ?></h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered ">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col">NIS</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Hari dan Tanggal</th>
                                <th scope="col">Ket</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data_siswa as $data) : ?>
                                <tr>
                                    <th class="text-center" scope="row"><?php echo $no++ ?></th>
                                    <td><?php echo $data['nis'] ?></td>
                                    <td><?php echo $data['nama_siswa'] ?></td>
                                    <td><?php echo $data['jenis_kelamin'] ?></td>
                                    <td>
                                        <?php echo date('D, d-m-Y', strtotime($data['tanggal_absen'])) ?>
                                    </td>
                                    <td><?php echo $data['keterangan'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>