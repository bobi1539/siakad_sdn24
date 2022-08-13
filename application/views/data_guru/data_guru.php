<div class="row p-4 justify-content-center">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center"> Data Guru</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <a href="<?php echo base_url('data_guru/tambah') ?>" class="btn btn-primary mb-3">
                    tambah data
                </a>

                <a href="<?php echo base_url('data_guru/print_data') ?>" class="btn btn-info mb-3" target="_blank">
                    print data
                </a>

                <div class="table-responsive" style="font-size: 12px;">
                    <table class="table table-hover " id="tabel-data">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col">NIP</th>
                                <th scope="col">Nama Guru</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Tgl Lahir</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Alamat</th>
                                <th scope="col" class="text-center">Aksi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data_guru as $data) : ?>
                                <tr>
                                    <th class="text-center" scope="row"><?php echo $no++ ?></th>
                                    <td><?php echo $data['nip'] ?></td>
                                    <td><?php echo $data['nama_guru'] ?></td>
                                    <td><?php echo $data['jabatan'] ?></td>
                                    <td><?php echo $data['tanggal_lahir'] ?></td>
                                    <td><?php echo $data['tempat_lahir'] ?></td>
                                    <td><?php echo $data['alamat'] ?></td>
                                    <td class="text-center" width="10">
                                        <a class="btn mr-2 btn-sm btn-primary" href="<?php echo base_url('data_guru/edit/') . $data['nip'] ?>">
                                            ubah
                                        </a>
                                    </td>
                                    <td class="text-center" width="10">
                                        <a onclick="return confirm('Yakin data dihapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('data_guru/hapus/') . $data['nip'] ?>">
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