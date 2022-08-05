<div class="row my-4">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Data Hasil</h4>
            </div>
            <div class="card-body">
                <?php echo $this->session->tempdata('pesan') ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="tabel-hasil">
                        <thead>
                            <tr>
                                <th>No Pengajuan</th>
                                <th>NIK</th>
                                <th>Nama Penduduk</th>
                                <th>Nama Dokumen</th>
                                <th class="text-center">Dokumen Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($hasil as $data) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $data['no_pengajuan'] ?></td>
                                    <td><?php echo $data['nik_penduduk'] ?></td>
                                    <td><?php echo $data['nama_penduduk'] ?>admin</td>
                                    <td><?php echo $data['nama_dokumen'] ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo base_url('user/download_file_hasil/') . $data['dokumen'] ?>" class="btn btn-sm btn-primary">Download</a>
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