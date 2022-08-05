<div class="row p-4 justify-content-center">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center"> Data Kelas</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <a href="<?php echo base_url('data_kelas/tambah') ?>" class="btn btn-primary mb-3">
                    tambah data
                </a>

                <div class="table-responsive">
                    <table class="table table-hover " id="tabel-data">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col">Id Kelas</th>
                                <th scope="col">NIP</th>
                                <th scope="col">Wali Kelas</th>
                                <th scope="col" class="text-center">Aksi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data_kelas as $data) : ?>
                                <tr>
                                    <th class="text-center" scope="row"><?php echo $no++ ?></th>
                                    <td><?php echo $data['id_kelas'] ?></td>
                                    <td><?php echo $data['nip'] ?></td>
                                    <td><?php echo $data['wali_kelas'] ?></td>
                                    <td class="text-center" width="10">
                                        <a class="btn mr-2 btn-sm btn-primary" href="<?php echo base_url('data_kelas/edit/') . $data['id_kelas'] ?>">
                                            ubah
                                        </a>
                                    </td>
                                    <td class="text-center" width="10">
                                        <a onclick="return confirm('Yakin data dihapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('data_kelas/hapus/') . $data['id_kelas'] ?>">
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