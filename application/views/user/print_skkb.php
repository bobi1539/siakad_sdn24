<div class="container my-5">
    <img class="img-logo" src="<?php echo base_url('assets/img/asd.png') ?>" alt="">
    <h6 class="text-center">PEMERINTAH KABUPATEN AGAM</h6>
    <h5 class="text-center">KECAMATAN TILATANG KAMANG</h5>
    <h2 class="text-center font-weight-bold">NAGARI KOTO TANGAH</h2>
    <p class="text-center">Alamat : Jalan Raya Pekan Kamis Kode Pos 26152 Telp. 0752.7446341</p>
    <hr class="mt-0">
    <h3 class="text-center" style="text-decoration: underline;"> <b>SURAT KETERANGAN KELAKUAN BAIK</b>
    </h3>
    <p>1. Yang bertanda tangan dibawah ini Walinagari Koto Tangah Kecamatan Tilatang Kamang dengan ini menerangkan bahwa :</p>
    <table width="800">
        <tr>
            <td>A</td>
            <td>Nama</td>
            <td>:</td>
            <td class="font-weight-bold">
                <?php echo $pengaju['nama_penduduk'] ?>
            </td>
        </tr>
        <tr>
            <td>B</td>
            <td>Nik</td>
            <td>:</td>
            <td>
                <?php echo $pengaju['nik_penduduk'] ?>
            </td>
        </tr>
        <tr>
            <td>C</td>
            <td>Tempat/Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $pengaju['tempat'] ?>, <?php echo date('d-m-Y', strtotime($pengaju['tanggal_lahir'])) ?></td>
        </tr>
        <tr>
            <td>D</td>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <?php echo $pengaju['jenis_kelamin'] ?>
            </td>
        </tr>
        <tr>
            <td>E</td>
            <td>Pekerjaan</td>
            <td>:</td>
            <td>
                <?php echo $pengaju['pekerjaan'] ?>
            </td>
        </tr>
        <tr>
            <td>F</td>
            <td>Alamat</td>
            <td>:</td>
            <td>
                <?php echo $pengaju['alamat'] ?>
            </td>
        </tr>
    </table>
    <br>
    <p>Menurut sepengetahuan kami nama yang tersebut diatas berkelakuan baik, tidak pernah dihukum, tidak terlibat minum-minuman keras dan narkoba, tidal pernah terlibat Organisasi Terlarang serta tidak pernah melanggar Peraturan Perundang-undangan lainnya. </p>
    <p>2. Berhubungan maksud yang bersangkutan <b><?php echo strtoupper($pengajuan['keperluan']) ?></b>, diminta yang berwenang agar memberikan bantuan serta fasilitas sebagaimana mestinya.</p>
    <p>3. Demikian surat keterangan ini dibuat untuk dapat dipergunakan seperlunya.</p>
    <table class="ml-4 mt-3 mb-5">
        <tr>
            <td></td>
            <td width="450"></td>
            <td>Pekan Kamis, <?php echo date('d-M-Y', strtotime($pengajuan['tanggal_pengajuan'])) ?></td>
        </tr>
        <tr>
            <td></td>
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
            <td></td>
            <td></td>
            <td class="font-weight-bold">RAHMADYAN HIDAYAT</td>
        </tr>
    </table>

</div>
<script>
    window.print();
</script>