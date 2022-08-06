<?php if ($nilai_siswa == null) : ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3 class="text-center">Data nilai tidak ada</h3>
            </div>
        </div>
    </div>
<?php else : ?>
    <div class="container mt-3 mb-3" style="border-style: solid; border-width:thin;">
        <div class="row mt-5 mb-5">
            <div class="col">
                <h3 class="text-center mb-5">RAPOR PENILAIAN TENGAH SEMESTER (PTS) PESERTA DIDIK</h3>

                <div class="row">
                    <div class="col-md-3">
                        <h6>Nama Peserta</h6>
                    </div>
                    <div class="col-md-3">
                        <h6>: <?php echo $nilai_siswa['nama_siswa'] ?></h6>
                    </div>
                    <div class="col-md-3">
                        <h6>Kelas</h6>
                    </div>
                    <div class="col-md-3">
                        <h6>: <?php echo $nilai_siswa['id_kelas'] ?></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <h6>NIS/NISN</h6>
                    </div>
                    <div class="col-md-3">
                        <h6>: <?php echo $nilai_siswa['nis'] . "/" . $nilai_siswa['nisn'] ?></h6>
                    </div>
                    <div class="col-md-3">
                        <h6>Semester</h6>
                    </div>
                    <div class="col-md-3">
                        <h6>: <?php echo $nilai_siswa['semester'] ?></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <h6>KBM</h6>
                    </div>
                    <div class="col-md-3">
                        <h6>: 70</h6>
                    </div>
                    <div class="col-md-3">
                        <h6>Tahun Pelajaran</h6>
                    </div>
                    <div class="col-md-3">
                        <h6>: <?php echo $nilai_siswa['t_pelajaran'] ?></h6>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <h5>KOPETENSI PENGETAHUAN</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center" class="text-center" rowspan="2">No</th>
                                    <th class="text-center" rowspan="2">Muatan Pembelajaran</th>
                                    <th class="text-center" colspan="2">Pengetahuan</th>
                                    <th class="text-center" rowspan="2">Ket</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Nilai</th>
                                    <th class="text-center">Predikat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                $jumlah_nilai = 0;
                                foreach ($nilai_siswa_array as $data) : ?>
                                    <tr>
                                        <td width="20"><?php echo $no++ ?></td>
                                        <td><?php echo $data['nama_pelajaran'] ?></td>
                                        <td class="text-center"><?php echo $data['p_nilai'] ?></td>
                                        <td class="text-center"><?php echo $data['p_predekat'] ?></td>
                                        <td class="text-center" width="400"><?php echo $data['p_deskripsi'] ?></td>
                                    </tr>
                                    <?php $jumlah_nilai += $data['p_nilai'] ?>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="text-center" colspan="2">Jumlah Nilai Prestasi</td>
                                    <td class="text-center"><?php echo $jumlah_nilai ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-center" colspan="2">Rata-rata</td>
                                    <td class="text-center"><?php echo $jumlah_nilai / count($nilai_siswa_array) ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <h6 class="text-center">Mengetahui</h5>
                    <div class="row">
                        <div class="col-md-4">
                            <h6 class="text-center">Orang Tua Wali</h6>
                            <br><br><br><br>
                            <h6 class="text-center">(.......................)</h6>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-center">Kepala Sekolah</h6>
                            <br><br><br><br>
                            <h6 class="text-center">Emi Murniati, S.Pd.SD</h6>
                            <h6 class="text-center">NIP:196701101990092001</h6>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-center">Biaro, <?php echo date('d-m-Y') ?></h6>
                            <br><br><br><br>
                            <h6 class="text-center">Teti Angreni, S.Pd</h6>
                            <h6 class="text-center">Nuptk:6445755658300013</h6>
                        </div>
                    </div>
            </div>
        </div>
    </div>
<?php endif; ?>