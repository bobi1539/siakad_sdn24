<div class="row">
    <div class="col-lg-12">
        <div class="card shadow my-3">
            <div class="card-header">
                <h2 class="text-center">Data Pengajuan</h2>
            </div>
            <div class="card-body">
                <?php echo $this->session->tempdata('pesan') ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="tabel-pengajuan">
                        <thead>
                            <tr>
                                <th>No Pengajuan</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Tgl Pengajuan</th>
                                <th>Nama Dokumen</th>
                                <th>Keperluan</th>
                                <th class="text-center">Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data_pengajuan as $data) : ?>
                                <tr>
                                    <td><?php echo $data['no_pengajuan'] ?></td>
                                    <td><?php echo $data['nik_penduduk'] ?></td>
                                    <td><?php echo $data['nama_penduduk'] ?></td>
                                    <td><?php echo $data['tanggal_pengajuan'] ?></td>
                                    <td><?php echo $data['nama_dokumen'] ?></td>
                                    <td><?php echo $data['keperluan'] ?></td>
                                    <td><?php echo $data['status'] ?></td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/detail_pengajuan/') . $data['no_pengajuan'] ?>">Lihat</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>