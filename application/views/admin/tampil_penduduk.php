<div class="row my-5 justify-content-center">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center"> Data Penduduk Nagari Koto Tangah</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <a href="<?php echo base_url('penduduk/tambah_penduduk') ?>" class="btn btn-primary my-3">Tambah Penduduk</a>

                <table class="table table-hover table-responsive" id="tabel-penduduk">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No KK</th>
                            <th scope="col">Nama Jorong</th>
                            <th scope="col">Kepala Jorong</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Pendidikan</th>
                            <th scope="col">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data_penduduk as $data) : ?>
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
                                <td><?php echo $data['alamat'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>