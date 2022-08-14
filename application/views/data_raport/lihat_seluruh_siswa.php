<?php if ($pelajaran == null) : ?>
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
                <h4 class="text-center">DAFTAR NILAI SDN 24 BIARO</h4>
                <h4 class="text-center mb-5">
                    TAHUN PELAJARAN
                    <?php
                    $mon = date('m');
                    $year = date('Y');
                    if ($mon >= 8) {
                        echo $year . '/' . $year + 1;
                    } else {
                        echo $year - 1 . '/' . $year;
                    }
                    ?>
                </h4>
                <div class="row my-3">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th rowspan="3" class="text-center">No</th>
                                    <th rowspan="3" class="text-center">NIS</th>
                                    <th rowspan="3" class="text-center">Nama Siswa</th>
                                    <th colspan="<?php echo count($pelajaran) ?>" class="text-center">MATA PELAJARAN</th>
                                    <th rowspan="3" class="text-center">Jumlah Nilai</th>
                                    <th rowspan="3" class="text-center">Ket</th>
                                </tr>
                                <tr>
                                    <?php foreach ($pelajaran as $data) : ?>
                                        <th class="text-center">70</th>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <?php foreach ($pelajaran as $data) : ?>
                                        <th class="text-center" width="100"><?php echo $data['nama_pelajaran'] ?></th>
                                    <?php endforeach; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                $jumlah_nilai = 0;
                                $array_nilai = array();
                                $array_nilai2 = array();
                                $array_nilai3 = array();
                                $index = 0;
                                foreach ($nilai_siswa_distinct as $data) : ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td class="text-center"><?php echo $data['nis'] ?></td>
                                        <td class="text-center"><?php echo $data['nama_siswa'] ?></td>
                                        <?php foreach ($pelajaran as $data_pelajaran) : ?>
                                            <td class="text-center">
                                                <?php foreach ($nilai_siswa as $nilai) : ?>
                                                    <?php
                                                    $nilai_pelajaran = $nilai['p_nilai'];
                                                    if ($data['nis'] == $nilai['nis']) {
                                                        if ($data_pelajaran['id_pelajaran'] == $nilai['id_pelajaran']) {
                                                            echo $nilai_pelajaran;
                                                            $jumlah_nilai += $nilai_pelajaran;
                                                            $array_nilai[$no] = $jumlah_nilai;
                                                            $array_nilai3[$index] = $nilai_pelajaran;
                                                            $array_nilai2[$index] = $array_nilai3;
                                                            $index++;
                                                        }
                                                    } ?>
                                                    <?php

                                                    ?>
                                                <?php endforeach ?>
                                            </td>
                                        <?php endforeach ?>
                                        <td class="text-center">
                                            <?php
                                            if ($no == 2) {
                                                echo $array_nilai[$no];
                                            } else {
                                                echo $array_nilai[$no] - $array_nilai[$no - 1];
                                            }
                                            ?>
                                        </td>
                                        <td></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="text-center" colspan="3">Rata-rata</td>
                                    <?php foreach ($pelajaran as $data_pelajaran) : ?>
                                        <td></td>
                                    <?php endforeach; ?>
                                    <td class="text-center"><?php echo round($jumlah_nilai / count($nilai_siswa_distinct), 2) ?></td>
                                    <td>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

                <?php
                echo json_encode($array_nilai2);
                ?>


                <div class="row">

                    <div class="col-md-4">
                        <h6 class="text-center">Diketahui</h6>
                        <h6 class="text-center">Kepala Sekolah</h6>
                        <br><br><br><br>
                        <h6 class="text-center">Emi Murniati, S.Pd.SD</h6>
                        <h6 class="text-center">NIP:196701101990092001</h6>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <h6 class="text-center">Diketahui</h6>
                        <h6 class="text-center">Wali Kelas</h6>
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