<div class="row p-4 justify-content-center">
    <div class="col-md-10">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center"> Data Dokumen</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>

                <div class="table-responsive">
                    <table class="table table-hover" id="tabel-dokumen">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col">Nama Dokumen</th>
                                <th scope="col">Syarat</th>
                                <th scope="col">Lama Pembuatan</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data_dokumen as $data) : ?>
                                <tr>
                                    <th class="text-center" scope="row"><?php echo $no++ ?></th>
                                    <td><?php echo $data['nama_dokumen'] ?></td>
                                    <td><?php echo $data['syarat'] ?></td>
                                    <td><?php echo $data['lama_pembuatan'] ?></td>
                                    <td class="text-center">
                                        <a class="btn mr-2 btn-sm btn-primary" href="<?php echo base_url('dokumen/edit/') . $data['kode_dokumen'] ?>">
                                            <i class="fas fa-pen"></i>
                                        </a>

                                        <a onclick="return confirm('Yakin data dihapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('dokumen/hapus/') . $data['kode_dokumen'] ?>">
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
</div>