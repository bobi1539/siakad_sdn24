<div class="row p-4 justify-content-center">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center"> Data Siswa</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <a href="<?php echo base_url('data_siswa/tambah') ?>" class="btn btn-primary mb-3">
                    tambah data
                </a>

                <a href="<?php echo base_url('data_siswa/print_data') ?>" class="btn btn-info mb-3" target="_blank">
                    print data
                </a>

                <div class="table-responsive">
                    <table class="table table-hover " id="tabel-data" style="font-size: 12px;">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col">NIS</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Kelas</th>
                                <th scope="col" class="text-center">Aksi</th>
                                <th></th>
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
                                    <td><?php echo $data['tanggal_lahir'] ?></td>
                                    <td><?php echo $data['tempat_lahir'] ?></td>
                                    <td><?php echo $data['alamat'] ?></td>
                                    <td><?php echo $data['id_kelas'] ?></td>
                                    <td class="text-center" width="10">
                                        <a class="btn mr-2 btn-sm btn-primary" href="<?php echo base_url('data_siswa/edit/') . $data['nis'] ?>">
                                            ubah
                                        </a>
                                    </td>
                                    <td class="text-center" width="10">
                                        <a onclick="return confirm('Yakin data dihapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('data_siswa/hapus/') . $data['nis'] ?>">
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