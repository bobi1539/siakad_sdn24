<div class="container my-5">
    <img class="img-logo" src="<?php echo base_url('assets/img/asd.png') ?>" alt="">
    <h6 class="text-center">PEMERINTAH KABUPATEN AGAM</h6>
    <h5 class="text-center">KECAMATAN TILATANG KAMANG</h5>
    <h2 class="text-center font-weight-bold">NAGARI KOTO TANGAH</h2>
    <p class="text-center">Alamat : Jalan Raya Pekan Kamis Kode Pos 26152 Telp. 0752.7446341</p>
    <hr class="mt-0">
    <h4 class="text-center" style="text-decoration: underline;"> <b>SURAT KETERANGAN TIDAK MAMPU </b>
    </h4>

    <p>1. Yang bertanda tangan dibawah ini Walinagari Koto Tangah Kecamatan Tilatang Kamang dengan ini menerangkan bahwa :</p>

    <table width="800">
        <?php foreach ($penduduk as $data) : ?>
            <?php if ($data['status_di_keluarga'] == 'pengaju') : ?>
                <tr>
                    <td>a.</td>
                    <td width="300">Nama</td>
                    <td>:</td>
                    <td class="font-weight-bold">
                        <?php echo $data['nama_penduduk'] ?>
                    </td>
                </tr>
                <tr>
                    <td>b.</td>
                    <td>Nik</td>
                    <td>:</td>
                    <td>
                        <?php echo $data['nik_penduduk'] ?>
                    </td>
                </tr>
                <tr>
                    <td>c.</td>
                    <td>Tempat/Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <?php echo $data['tempat'] ?>, <?php echo date('d-m-Y', strtotime($data['tanggal_lahir'])) ?>
                    </td>
                </tr>
                <tr>
                    <td>d.</td>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?php echo $data['jenis_kelamin'] ?></td>
                </tr>
                <tr>
                    <td>e.</td>
                    <td>Pendidikan</td>
                    <td>:</td>
                    <td>
                        <?php echo $data['pendidikan'] ?>
                    </td>
                </tr>
                <tr>
                    <td>f.</td>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <?php echo $data['alamat'] ?>
                    </td>
                </tr>
                <tr>
                    <td>g.</td>
                    <td>KPS/KKS</td>
                    <td>:</td>
                    <td>-</td>
                </tr>
            <?php endif; ?>
        <?php endforeach ?>
    </table>
    <br>

    <p>Adalah anak dari :</p>
    <table width="800">
        <?php foreach ($penduduk as $data) : ?>
            <?php if ($data['status_di_keluarga'] == 'ayah') : ?>
                <tr>
                    <td>a.</td>
                    <td width="300">Nama</td>
                    <td>:</td>
                    <td class="font-weight-bold">
                        <?php echo $data['nama_penduduk'] ?>
                    </td>
                </tr>
                <tr>
                    <td>b.</td>
                    <td>Nik</td>
                    <td>:</td>
                    <td>
                        <?php echo $data['nik_penduduk'] ?>
                    </td>
                </tr>
                <tr>
                    <td>c.</td>
                    <td>Tempat/Tanggal Lahir</td>
                    <td>:</td>
                    <td><?php echo $data['tempat'] ?>, <?php echo date('d-m-Y', strtotime($data['tanggal_lahir'])) ?></td>
                </tr>
                <tr>
                    <td>d.</td>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <?php echo $data['jenis_kelamin'] ?>
                    </td>
                </tr>
                <tr>
                    <td>e.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>
                        <?php echo $data['pekerjaan'] ?>
                    </td>
                </tr>
                <tr>
                    <td>f.</td>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <?php echo $data['alamat'] ?>
                    </td>
                </tr>
            <?php endif ?>
        <?php endforeach ?>
    </table>
    <br>
    <p>Menurut sepengetahuan kami nama yang tersebut diatas termasuk keluarga Kurang Mampu/Miskin yang <b>TIDAK TERDAFTAR DALAM DATA BASE GAKIN.</b> </p>
    <p>2. Sehubungan yang bersangkutan UNTUK PENGURSAN BEASISWA, diminta yang berwenang agar memberikan bantuan serta fasilitas sebagaimana mestinya.</p>
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