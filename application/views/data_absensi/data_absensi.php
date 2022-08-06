<div class="row p-4 justify-content-center">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center"> Data Absensi</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <a href="<?php echo base_url('data_absensi/tambah') ?>" class="btn btn-primary mb-3">
                    tambah data
                </a>

                <div class="table-responsive">
                    <table class="table table-hover " id="tabel-data">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col">Id Absen</th>
                                <th scope="col">Tanggal Absen</th>
                                <th scope="col">Semester</th>
                                <th scope="col" class="text-center">Aksi</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data_absensi as $data) : ?>
                                <tr>
                                    <th class="text-center" scope="row"><?php echo $no++ ?></th>
                                    <td><?php echo $data['id_absen'] ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($data['tanggal_absen'])) ?></td>
                                    <td><?php echo $data['semester'] ?></td>
                                    <td class="text-center">
                                        <a class="btn mr-2 btn-sm btn-primary" href="<?php echo base_url('data_absensi/tambah_siswa/') . $data['id_absen'] ?>">
                                            tambah siswa
                                        </a>
                                    </td>
                                    <td class="text-center" width="10">
                                        <a class="btn mr-2 btn-sm btn-primary" href="<?php echo base_url('data_absensi/lihat/') . $data['id_absen'] ?>">
                                            lihat
                                        </a>
                                    </td>
                                    <td class="text-center" width="10">
                                        <a onclick="return confirm('Yakin data dihapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('data_absensi/hapus/') . $data['id_absen'] ?>">
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