<div class="row p-4 justify-content-center">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center"> Data Pegawai Nagari Koto Tangah</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <div class="table-responsive">
                    <table class="table table-hover " id="tabel-pegawai">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col">No Pegawai</th>
                                <th scope="col">Nama Pegawai</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data_pegawai as $data) : ?>
                                <tr>
                                    <th class="text-center" scope="row"><?php echo $no++ ?></th>
                                    <td><?php echo $data['no_pegawai'] ?></td>
                                    <td><?php echo $data['nama_pegawai'] ?></td>
                                    <td><?php echo $data['jabatan'] ?></td>
                                    <td><?php echo $data['jenis_kelamin'] ?></td>
                                    <td class="text-center">
                                        <?php if ($this->session->userdata('no_pegawai') != $data['no_pegawai']) : ?>
                                            <a onclick="return confirm('Yakin data dihapus?')" class="btn mr-2 btn-sm btn-danger" href="<?php echo base_url('admin/hapus_pegawai/') . $data['no_pegawai'] ?>">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        <?php endif; ?>
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