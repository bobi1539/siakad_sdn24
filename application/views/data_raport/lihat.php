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
                <h3 class="text-center mb-5">RAPOR DAN PROFIL PESERTA DIDIK</h3>

                <div class="row">
                    <div class="col-md-3">
                        <h6>Nama Peserta Didik</h6>
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
                        <h6>NIS</h6>
                    </div>
                    <div class="col-md-3">
                        <h6>: <?php echo $nilai_siswa['nis'] ?></h6>
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
                        <h6>Nama Sekolah</h6>
                    </div>
                    <div class="col-md-3">
                        <h6>: <?php echo $nilai_siswa['n_sekolah'] ?></h6>
                    </div>
                    <div class="col-md-3">
                        <h6>Tahun</h6>
                    </div>
                    <div class="col-md-3">
                        <h6>: <?php echo date('Y') ?></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <h6>Alamat Sekolah</h6>
                    </div>
                    <div class="col-md-3">
                        <h6>: <?php echo $nilai_siswa['a_sekolah'] ?></h6>
                    </div>
                    <div class="col-md-3">
                        <h6>Tahun Pelajaran</h6>
                    </div>
                    <div class="col-md-3">
                        <h6>: <?php echo $nilai_siswa['t_pelajaran'] ?></h6>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-12">
                        <h5>A. Kopetensi Sikap</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th colspan="2" class="text-center">Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Sikap Spiritual</td>
                                    <td><?php echo $nilai_siswa['s_spiritual'] ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>Sikap Sosial</td>
                                    <td><?php echo $nilai_siswa['s_sosial'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-12">
                        <h5>B. Kopetensi Pengetahuan Dan Keterampilan</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th rowspan="2" class="text-center">No</th>
                                    <th rowspan="2" class="text-center">Mata Pelajaran</th>
                                    <th colspan="3" class="text-center">Pengetahuan</th>
                                    <th colspan="3" class="text-center">Keterampilan</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Nilai</th>
                                    <th class="text-center">Predikat</th>
                                    <th class="text-center">Deskripsi</th>
                                    <th class="text-center">Nilai</th>
                                    <th class="text-center">Predikat</th>
                                    <th class="text-center">Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($nilai_siswa_array as $data) : ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $data['nama_pelajaran'] ?></td>
                                        <td><?php echo $data['p_nilai'] ?></td>
                                        <td><?php echo $data['p_predekat'] ?></td>
                                        <td><?php echo $data['p_deskripsi'] ?></td>
                                        <td><?php echo $data['k_nilai'] ?></td>
                                        <td><?php echo $data['k_predikat'] ?></td>
                                        <td><?php echo $data['k_deskripsi'] ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-12">
                        <h5>C. Saran-saran</h5>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td><?php echo $nilai_siswa['saran'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-12">
                        <h5>D. Tinggi Dan Berat Badan</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th rowspan="2" class="text-center">No</th>
                                    <th rowspan="2" class="text-center">Aspek Yang Dinilai</th>
                                    <th colspan="2" class="text-center">Semester</th>
                                </tr>
                                <tr>
                                    <th class="text-center">1</th>
                                    <th class="text-center">2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">Tinggi Badan</td>
                                    <td class="text-center">
                                        <?php echo $nilai_siswa['semester'] == '1' ? $nilai_siswa['t_badan'] : '' ?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $nilai_siswa['semester'] == '2' ? $nilai_siswa['b_badan'] : '' ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-center">Berat Badan</td>
                                    <td class="text-center">
                                        <?php echo $nilai_siswa['semester'] == '1' ? $nilai_siswa['t_badan'] : '' ?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $nilai_siswa['semester'] == '2' ? $nilai_siswa['b_badan'] : '' ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-md-12">
                        <h5>E. Kondisi Kesehatan</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aspek Fisik</th>
                                    <th class="text-center">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">Pendengaran</td>
                                    <td><?php echo $nilai_siswa['k_pendengaran'] ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-center">Penglihatan</td>
                                    <td><?php echo $nilai_siswa['k_penglihatan'] ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="text-center">Gigi</td>
                                    <td><?php echo $nilai_siswa['k_gigi'] ?></td>
                                </tr>

                            </tbody>
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
    <script>
        // window.print();
    </script>
<?php endif; ?>