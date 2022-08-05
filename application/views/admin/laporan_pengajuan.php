<?php if ($laporan) : ?>
    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-lg-12">
                <?php if ($tanggal != '' && $bulan != '' && $tahun != '') : ?>
                    <h3 class="text-center">Laporan Pengajuan Per Hari</h3>
                    <h6 class="text-center">Tanggal : <?php echo $tanggal ?>, Bulan : <?php echo $bulan ?>, Tahun <?php echo $tahun ?></h6>
                <?php elseif ($bulan != '' && $tahun != '') : ?>
                    <h3 class="text-center">Laporan Pengajuan Per Bulan</h3>
                    <h6 class="text-center">Bulan : <?php echo $bulan ?>, Tahun <?php echo $tahun ?></h6>
                <?php elseif ($tahun != '') : ?>
                    <h3 class="text-center">Laporan Pengajuan Per Tahun</h3>
                    <h6 class="text-center">Tahun <?php echo $tahun ?></h6>
                <?php endif; ?>

                <table style="font-size: 14px;" class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>No Pengajuan</th>
                        <th>Tgl Pengajuan</th>
                        <th>Keperluan</th>
                        <th>NIK</th>
                        <th>Nama Penduduk</th>
                        <th>No KK</th>
                        <th>Dokumen</th>
                    </tr>
                    <?php $no = 1;
                    foreach ($laporan as $data) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data['no_pengajuan'] ?></td>
                            <td><?php echo date('d-m-Y', strtotime($data['tanggal_pengajuan'])) ?></td>
                            <td><?php echo $data['keperluan'] ?></td>
                            <td><?php echo $data['nik_penduduk'] ?></td>
                            <td><?php echo $data['nama_penduduk'] ?></td>
                            <td><?php echo $data['no_kk'] ?></td>
                            <td><?php echo $data['nama_dokumen'] ?></td>
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