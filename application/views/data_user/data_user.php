<div class="row p-4 justify-content-center">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center"> Data User</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <a href="<?php echo base_url('data_user/tambah') ?>" class="btn btn-primary mb-3">
                    tambah data
                </a>

                <a href="<?php echo base_url('data_user/print_data') ?>" class="btn btn-info mb-3" target="_blank">
                    print data
                </a>

                <div class="table-responsive">
                    <table class="table table-hover " id="tabel-data">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col" class="text-center">Username</th>
                                <th scope="col" class="text-center">NIP</th>
                                <th scope="col" class="text-center">Nama</th>
                                <th scope="col" class="text-center">Role</th>
                                <th scope="col" class="text-center">Aksi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data_user as $data) : ?>
                                <tr>
                                    <th class="text-center" scope="row"><?php echo $no++ ?></th>
                                    <td class="text-center"><?php echo $data['username'] ?></td>
                                    <td class="text-center"><?php echo $data['nip'] ?></td>
                                    <td class="text-center"><?php echo $data['nama_guru'] ?></td>
                                    <td class="text-center"><?php echo $data['role_id'] ?></td>
                                    <td class="text-center" width="50">
                                        <a class="btn mr-2 btn-sm btn-primary" href="<?php echo base_url('data_user/ganti_password/') . $data['username'] ?>">
                                            ganti password
                                        </a>
                                    </td>
                                    <td class="text-center" width="10">
                                        <a onclick="return confirm('Yakin data dihapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('data_user/hapus/') . $data['username'] ?>">
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