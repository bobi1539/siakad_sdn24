<div class="row p-4 justify-content-center">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center"> Data Pelajaran</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <a href="<?php echo base_url('data_pelajaran/tambah') ?>" class="btn btn-primary mb-3">
                    tambah data
                </a>

                <a href="<?php echo base_url('data_pelajaran/print_data') ?>" class="btn btn-info mb-3" target="_blank">
                    print data
                </a>

                <div class="table-responsive">
                    <table class="table table-hover " id="tabel-data">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col">Nama Pelajaran</th>
                                <th scope="col">Id Kelas</th>
                                <th scope="col">NIP</th>
                                <th scope="col" class="text-center">Aksi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data_pelajaran as $data) : ?>
                                <tr>
                                    <th class="text-center" scope="row"><?php echo $no++ ?></th>
                                    <td><?php echo $data['nama_pelajaran'] ?></td>
                                    <td><?php echo $data['id_kelas'] ?></td>
                                    <td><?php echo $data['nip'] ?></td>
                                    <td class="text-center" width="10">
                                        <a class="btn mr-2 btn-sm btn-primary" href="<?php echo base_url('data_pelajaran/edit/') . $data['id_pelajaran'] ?>">
                                            ubah
                                        </a>
                                    </td>
                                    <td class="text-center" width="10">
                                        <a onclick="return confirm('Yakin data dihapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('data_pelajaran/hapus/') . $data['id_pelajaran'] ?>">
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