<div class="row p-4 justify-content-center">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center"> Data User</h4>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered ">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col" class="text-center">Username</th>
                                <th scope="col" class="text-center">NIP</th>
                                <th scope="col" class="text-center">Nama</th>
                                <th scope="col" class="text-center">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data_user as $data) : ?>
                                <tr>
                                    <th class="text-center" scope="row"><?php echo $no++ ?></th>
                                    <td class="text-center"><?php echo $data['username'] ?></td>
                                    <td class="text-center"><?php echo $data['nip'] ?></td>
                                    <td class="text-center"><?php echo $data['nama_guru'] ?></td>
                                    <td class="text-center"><?php echo $data['role_id'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.print();
</script>