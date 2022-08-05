<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mt-4">
            <div class="card-header">
                <h1 class="text-center">Data Keluarga</h1>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <a href="<?php echo base_url('user/tambah_data_keluarga') ?>" class="btn btn-primary mb-3">Tambah Data Keluarga</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="tabel-data-keluarga">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nik Penduduk</th>
                                <th>Nama Penduduk</th>
                                <th>No KK</th>
                                <th>Nama Jorong</th>
                                <th>Kepala Jorong</th>
                                <th>Tanggal Lahir</th>
                                <th>Tempat Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Pendidikan</th>
                                <th>Pekerjaan</th>
                                <th>Alamat</th>
                                <th>Status Di Keluarga</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data_keluarga as $data) : ?>
                                <tr>
                                    <th class="text-center" scope="row"><?php echo $no++ ?></th>
                                    <td><?php echo $data['nik_penduduk'] ?></td>
                                    <td><?php echo $data['nama_penduduk'] ?></td>
                                    <td><?php echo $data['no_kk'] ?></td>
                                    <td><?php echo $data['nama_jorong'] ?></td>
                                    <td><?php echo $data['kepala_jorong'] ?></td>
                                    <td><?php echo $data['tanggal_lahir'] ?></td>
                                    <td><?php echo $data['tempat'] ?></td>
                                    <td><?php echo $data['jenis_kelamin'] ?></td>
                                    <td><?php echo $data['pendidikan'] ?></td>
                                    <td><?php echo $data['pekerjaan'] ?></td>
                                    <td><?php echo $data['alamat'] ?></td>
                                    <td><?php echo $data['status_di_keluarga'] ?></td>
                                    <td class="text-center">
                                        <?php if ($this->session->userdata('nik_penduduk') != $data['nik_penduduk']) : ?>
                                            <a href="<?php echo base_url('user/edit_data_keluarga/') . $data['nik_penduduk']  ?>" class="d-block btn btn-primary btn-sm">Edit</a>
                                            <a onclick="return confirm('Yakin data dihapus?')" href="<?php echo base_url('user/hapus_data_keluarga/') . $data['nik_penduduk']  ?>" class="d-block mt-2 btn btn-danger btn-sm">Hapus</a>
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