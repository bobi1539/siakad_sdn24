<?php if ($laporan) : ?>
    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Laporan Data Penduduk Nagari Koto Tangah</h3>
                <h6 class="text-center">Tahun : <?php echo date('Y') ?></h6>
                <table style="font-size: 14px;" class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama Penduduk</th>
                        <th>No KK</th>
                        <th>Jorong</th>
                        <th>Kepala Jorong</th>
                        <th>Tempat/ Tgl Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Pendidikan</th>
                        <th>Alamat</th>
                        <th>Pekerjaan</th>
                    </tr>
                    <?php $no = 1;
                    foreach ($laporan as $data) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data['nik_penduduk'] ?></td>
                            <td><?php echo $data['nama_penduduk'] ?></td>
                            <td><?php echo $data['no_kk'] ?></td>
                            <td><?php echo $data['nama_jorong'] ?></td>
                            <td><?php echo $data['kepala_jorong'] ?></td>
                            <td><?php echo $data['tempat'] . ' / ' . date('d-m-Y', strtotime($data['tanggal_lahir'])) ?></td>
                            <td><?php echo $data['jenis_kelamin'] ?></td>
                            <td><?php echo $data['pendidikan'] ?></td>
                            <td><?php echo $data['alamat'] ?></td>
                            <td><?php echo $data['pekerjaan'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </div>
    </div>
<?php else : ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-body my-5">
                    <h2 class="text-center">Data tidak ditemukan</h2>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>