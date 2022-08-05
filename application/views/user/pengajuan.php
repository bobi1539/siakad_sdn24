<div class="row my-4">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Pengajuan</h1>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <a href="<?php echo base_url('user/tambah_pengajuan') ?>" class="btn btn-primary mb-3">Tambah Data Pengajuan</a>

                <div class="table-responsive">
                    <table class="table table-bordered" id="tabel-pengajuan">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Pengajuan</th>
                                <th>Nama Dokumen</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Status</th>
                                <th>Ktp</th>
                                <th>KK</th>
                                <th class="text-center">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($pengajuan as $data) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data['no_pengajuan'] ?></td>
                                    <td><?php echo $data['nama_dokumen'] ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($data['tanggal_pengajuan'])) ?></td>
                                    <td>
                                        <?php echo $data['status'] ?>
                                    </td>
                                    <td>
                                        <a onclick="return confirm('Yakin download?')" href="<?php echo base_url('user/download_file/' . $data['ktp']) ?>" class="btn btn-primary btn-sm">Download</a>
                                    </td>
                                    <td>
                                        <a onclick="return confirm('Yakin download?')" href="<?php echo base_url('user/download_file/' . $data['kk']) ?>" class="btn btn-primary btn-sm">Download</a>
                                    </td>
                                    <td class="text-center">
                                        <a target="_blank" href="<?php echo base_url('user/print_pengajuan/') . $data['no_pengajuan'] ?>" class="btn btn-primary btn-sm">Print</a>

                                        <a href="<?php echo base_url('user/hapus_pengajuan/') . $data['no_pengajuan'] ?>" onclick="return confirm('Yakin data dihapus?')" class="btn btn-danger btn-sm">Hapus</a>
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