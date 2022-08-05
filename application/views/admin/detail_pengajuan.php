<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card my-3 shadow">
            <div class="card-header">
                <h4 class="text-center">Detail Pengajuan : <?php echo $data_pengajuan['nama_dokumen'] ?></h4>
            </div>
            <div class="card-body">
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <h5>Data Pengajuan</h5>
                        <table>
                            <tr>
                                <td width="200">No Pengajuan</td>
                                <td>:</td>
                                <td><?php echo $data_pengajuan['no_pengajuan'] ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Pengajuan</td>
                                <td>:</td>
                                <td><?php echo date('d-m-Y', strtotime($data_pengajuan['tanggal_pengajuan'])) ?></td>
                            </tr>
                            <tr>
                                <td>Keperluan</td>
                                <td>:</td>
                                <td><?php echo $data_pengajuan['keperluan'] ?></td>
                            </tr>
                            <form action="<?php echo base_url('admin/update_status_pengajuan') ?>" method="POST">
                                <tr>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td>
                                        <input type="hidden" name="no_pengajuan" value="<?php echo $data_pengajuan['no_pengajuan'] ?>">
                                        <div class="form-group">
                                            <select name="status" id="status" class="form-control">
                                                <option value="<?php echo $data_pengajuan['status'] ?>">
                                                    <?php echo $data_pengajuan['status'] ?>
                                                </option>
                                                <option value="belum_diterima">belum_diterima</option>
                                                <option value="diterima">diterima</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button type="submit" class="btn btn-sm btn-primary">Update Status</button>
                                    </td>
                                </tr>
                            </form>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row mt-3">
                    <div class="col-lg-8">
                        <h5>Data Orang Yang Mengajukan</h5>
                        <table>
                            <tr>
                                <td width="200">NIK Penduduk</td>
                                <td>:</td>
                                <td><?php echo $data_pengajuan['nik_penduduk'] ?></td>
                            </tr>
                            <tr>
                                <td>Nama Penduduk</td>
                                <td>:</td>
                                <td><?php echo $data_pengajuan['nama_penduduk'] ?></td>
                            </tr>
                            <tr>
                                <td>No KK</td>
                                <td>:</td>
                                <td><?php echo $data_pengajuan['no_kk'] ?></td>
                            </tr>
                            <tr>
                                <td>Nama Jorong</td>
                                <td>:</td>
                                <td><?php echo $data_pengajuan['nama_jorong'] ?></td>
                            </tr>
                            <tr>
                                <td>Tempat / Tgl Lahir</td>
                                <td>:</td>
                                <td><?php echo $data_pengajuan['tempat'] ?>, <?php echo date('d-m-Y', strtotime($data_pengajuan['tanggal_lahir'])) ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td><?php echo $data_pengajuan['jenis_kelamin'] ?></td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td>:</td>
                                <td><?php echo $data_pengajuan['pendidikan'] ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?php echo $data_pengajuan['alamat'] ?></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td><?php echo $data_pengajuan['pekerjaan'] ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="text-center">KTP</h6>
                                    </div>
                                    <div class="card-body">
                                        <a class="btn btn-primary col-lg-12 btn-sm" href="<?php echo base_url('admin/download_file/') . $data_pengajuan['ktp'] ?>">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mt-3">
                                    <div class="card-header">
                                        <h6 class="text-center">KK</h6>
                                    </div>
                                    <div class="card-body">
                                        <a class="btn btn-primary btn-sm col-lg-12" href="<?php echo base_url('admin/download_file/') . $data_pengajuan['kk'] ?>">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row mt-2">
                    <div class="col-lg-12">
                        <h6>Data Anggota Keluarga</h6>
                        <table class="table table-bordered">
                            <tr>
                                <td>NIK</td>
                                <td>Nama</td>
                                <td>Tempat/Tgl Lahir</td>
                                <td>Jenis Kelamin</td>
                                <td>Pendidikan</td>
                                <td>Alamat</td>
                                <td>Pekerjaan</td>
                                <td>Hubungan</td>
                            </tr>
                            <?php foreach ($data_keluarga as $data) : ?>
                                <?php if ($data['status_di_keluarga'] != 'pengaju') : ?>
                                    <tr>
                                        <td><?php echo $data['nik_penduduk'] ?></td>
                                        <td><?php echo $data['nama_penduduk'] ?></td>
                                        <td><?php echo $data['tempat'] . ',' . date('d-m-Y', strtotime($data['tanggal_lahir'])) ?></td>
                                        <td><?php echo $data['jenis_kelamin'] ?></td>
                                        <td><?php echo $data['pendidikan'] ?></td>
                                        <td><?php echo $data['alamat'] ?></td>
                                        <td><?php echo $data['pekerjaan'] ?></td>
                                        <td><?php echo $data['status_di_keluarga'] ?></td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach ?>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <a href="<?php echo base_url('admin/tampil_pengajuan') ?>" class="btn btn-secondary">Kembali</a>

                        <a href="<?php echo base_url('admin/print_pengajuan/') . $data_pengajuan['no_pengajuan'] ?>" class="btn btn-primary float-right" target="_blank">Cetak</a>

                        <a onclick="return confirm('Yakin data dihapus?')" href="<?php echo base_url('admin/hapus_pengajuan/') . $data_pengajuan['no_pengajuan'] ?>" class="btn btn-danger mr-3 float-right">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row my-3">
    <div class="col-lg-6">
        <?php if ($hasil) : ?>
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="text-center">Dokumen Hasil Telah Di Upload</h4>
                </div>
            </div>
        <?php else : ?>
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="text-center">Upload Hasil Yang Sudah Disetujui</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('admin/upload_hasil_pengajuan') ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" value="<?php echo $data_pengajuan['no_pengajuan'] ?>" name="no_pengajuan">
                        <div class="form-group">
                            <input type="file" name="file_hasil" class="form-control-file" required>
                        </div>
                        <button class="btn btn-primary" type="submit">Upload</button>
                    </form>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>