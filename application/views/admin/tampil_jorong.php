<div class="row p-4 justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center"> Data Jorong Di Nagari Koto Tangah</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <table class="table table-hover" id="tabel-jorong">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col">Kode Jorong</th>
                            <th scope="col">Nama Jorong</th>
                            <th scope="col">Kepala Jorong</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data_jorong as $data) : ?>
                            <tr>
                                <th class="text-center" scope="row"><?php echo $no++ ?></th>
                                <td><?php echo $data['kode_jorong'] ?></td>
                                <td><?php echo $data['nama_jorong'] ?></td>
                                <td><?php echo $data['kepala_jorong'] ?></td>
                                <td class="text-center">

                                    <a class="mr-2 btn btn-sm btn-primary" href="<?php echo base_url('jorong/edit/') . $data['kode_jorong'] ?>">
                                        <i class="fas fa-pen"></i>
                                    </a>

                                    <a onclick="return confirm('Yakin data dihapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('jorong/hapus/') . $data['kode_jorong'] ?>">
                                        <i class="fas fa-trash"></i>
                                    </a>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>