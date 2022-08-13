<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center mt-3">Data Guru</h2>
            <h4 class="mb-3 text-center">SDN 24 Biaro Tahun <?php echo date('Y') ?></h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama Guru</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Tgl Lahir</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data_guru as $data) : ?>
                        <tr>
                            <th class="text-center" scope="row"><?php echo $no++ ?></th>
                            <td><?php echo $data['nip'] ?></td>
                            <td><?php echo $data['nama_guru'] ?></td>
                            <td><?php echo $data['jabatan'] ?></td>
                            <td><?php echo $data['tanggal_lahir'] ?></td>
                            <td><?php echo $data['tempat_lahir'] ?></td>
                            <td><?php echo $data['alamat'] ?></td>
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