<div class="container my-5">
    <img class="img-logo" src="<?php echo base_url('assets/img/asd.png') ?>" alt="">
    <h6 class="text-center">PEMERINTAH KABUPATEN AGAM</h6>
    <h5 class="text-center">KECAMATAN TILATANG KAMANG</h5>
    <h2 class="text-center font-weight-bold">NAGARI KOTO TANGAH</h2>
    <p class="text-center">Alamat : Jalan Raya Pekan Kamis Kode Pos 26152 Telp. 0752.7446341</p>
    <hr class="mt-0">
    <h3 class="text-center" style="text-decoration: underline;"> SURAT KETERANGAN PENGHASILAN
    </h3>
    <p>1. Yang bertanda tangan dibawah ini Walinagari Koto Tangah Kecamatan Tilatang Kamang dengan ini menerangkan bahwa :</p>
    <table>
        <?php foreach ($penduduk as $data) : ?>
            <?php if ($data['status_di_keluarga'] == 'pengaju') : ?>
                <tr>
                    <td>A</td>
                    <td width="300">Nama</td>
                    <td>:</td>
                    <td class="font-weight-bold">
                        <?php echo $data['nama_penduduk'] ?>
                    </td>
                </tr>
                <tr>
                    <td>B</td>
                    <td>Nik</td>
                    <td>:</td>
                    <td>
                        <?php echo $data['nik_penduduk'] ?>
                    </td>
                </tr>
                <tr>
                    <td>C</td>
                    <td>Tempat/Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <?php echo $data['tempat'] ?>, <?php echo date('d-m-Y', strtotime($data['tanggal_lahir'])) ?>
                    </td>
                </tr>
                <tr>
                    <td>D</td>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <?php echo $data['jenis_kelamin'] ?>
                    </td>
                </tr>
                <tr>
                    <td>E</td>
                    <td>Pendidikan</td>
                    <td>:</td>
                    <td>
                        <?php echo $data['pendidikan'] ?>
                    </td>
                </tr>
                <tr>
                    <td>F</td>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <?php echo $data['alamat'] ?>
                    </td>
                </tr>
                <tr>
                    <td>G</td>
                    <td>KPS/KKS</td>
                    <td></td>
                    <td></td>
                </tr>
            <?php endif ?>
        <?php endforeach ?>
    </table>
    <br>

    <p>Adalah anak dari :.</p>
    <table class="ml-4 mt-3 mb-5">
        <tr>
            <td>Nama Ayah</td>
            <td>:</td>
            <td class="font-weight-bold" width="300">
                <?php echo $ayah['nama_penduduk'] ?>
            </td>
            <td>Nama Ibu</td>
            <td>:</td>
            <td class="font-weight-bold">
                <?php echo $ibu['nama_penduduk'] ?>
            </td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><?php echo $ayah['pekerjaan'] ?></td>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><?php echo $ibu['pekerjaan'] ?></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td><?php echo $ayah['nik_penduduk'] ?></td>
            <td>NIK</td>
            <td>:</td>
            <td><?php echo $ibu['nik_penduduk'] ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $ayah['alamat'] ?></td>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $ibu['alamat'] ?></td>
        </tr>
    </table>

    <br>
    <p>Menurut sepengetahuan kami nama yang tersebut diatas adalah keluarga <b>Kurang Mampu</b> yang <b>TIDAK TERDAFTAR</b> dalam <b>DATA BASE GAKIN</b> dengan penghasilan rata-rata Orang Tua Rp. 1.000.000,-/ bulan dengan tanggungan keluarga sebanyak 3 (tiga) orang. </p>

    <table border="1" cellpadding="5">
        <tr>
            <td class="font-weight-bold text-center">No</td>
            <td class="font-weight-bold text-center">Nama</td>
            <td class="font-weight-bold text-center">Jenis Kelamin</td>
            <td class="font-weight-bold text-center">Hubungan</td>
            <td class="font-weight-bold text-center">Pendidikan</td>
        </tr>
        <?php $no = 1;
        foreach ($penduduk as $data) : ?>
            <?php if ($data['status_di_keluarga'] != 'pengaju') : ?>
                <tr>
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td><?php echo $data['nama_penduduk'] ?></td>
                    <td class="text-center"><?php echo $data['jenis_kelamin'] ?></td>
                    <td class="text-center"><?php echo $data['status_di_keluarga'] ?></td>
                    <td class="text-center"><?php echo $data['pendidikan'] ?></td>
                </tr>
            <?php endif; ?>
        <?php endforeach ?>
    </table>
    <p>2. Sehubungan yang bersangkutan <b><?php echo strtoupper($pengajuan['keperluan']) ?></b>, diminta yang berwenang agar memberikan bantuan serta fasilitas sebagaimana mestinya.</p>
    <p>3. Demikian surat keterangan ini dibuat untuk dapat dipergunakan seperlunya.</p>
    <table class="ml-4 mt-3 mb-5">
        <tr>
            <td>Mengetahui :</td>
            <td width="250"></td>
            <td>Pekan Kamis, <?php echo date('d-M-Y', strtotime($pengajuan['tanggal_pengajuan'])) ?></td>
        </tr>
        <tr>
            <td>CAMAT TILATANG KAMANG</td>
            <td></td>
            <td>a.n. WALI NAGARI</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Kaur Tata Usaha dan Umum,</td>
        </tr>
        <tr height="100">
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>.................................</td>
            <td></td>
            <td class="font-weight-bold">RAHMADYAN HIDAYAT</td>
        </tr>
    </table>
</div>

<script>
    window.print();
</script>