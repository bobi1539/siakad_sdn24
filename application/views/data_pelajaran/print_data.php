<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mt-3 text-center">Data Pelajaran</h2>
            <h4 class="mb-3 text-center">SDN 24 Biaro Tahun <?php echo date('Y') ?></h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col">Nama Pelajaran</th>
                        <th scope="col" class="text-center">Id Kelas</th>
                        <th scope="col" class="text-center">NIP</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data_pelajaran as $data) : ?>
                        <tr>
                            <th class="text-center" scope="row"><?php echo $no++ ?></th>
                            <td><?php echo $data['nama_pelajaran'] ?></td>
                            <td class="text-center"><?php echo $data['id_kelas'] ?></td>
                            <td class="text-center"><?php echo $data['nip'] ?></td>
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