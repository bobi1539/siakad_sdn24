<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center mt-3">Data Siswa</h2>
            <h4 class="mb-3 text-center">SDN 24 Biaro Tahun <?php echo date('Y') ?></h4>
            <table class="table table-bordered" style="font-size: 12px;">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data_siswa as $data) : ?>
                        <tr>
                            <th class="text-center" scope="row"><?php echo $no++ ?></th>
                            <td><?php echo $data['nis'] ?></td>
                            <td><?php echo $data['nama_siswa'] ?></td>
                            <td><?php echo $data['jenis_kelamin'] ?></td>
                            <td><?php echo date('d-m-Y', strtotime($data['tanggal_lahir'])) ?></td>
                            <td><?php echo $data['tempat_lahir'] ?></td>
                            <td><?php echo $data['alamat'] ?></td>
                            <td class="text-center"><?php echo $data['id_kelas'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    window.print();
</script>