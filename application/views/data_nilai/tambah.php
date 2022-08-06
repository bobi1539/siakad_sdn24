<div class="row m-4 justify-content-center">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="text-center">Input Data Nilai</h4>
            </div>
            <div class="card-body">

                <?php echo $this->session->tempdata('pesan') ?>
                
                <form action="<?php echo base_url('data_nilai/tambah_aksi') ?>" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="id_nilai" class="col-sm-4 col-form-label">Id Nilai</label>
                                <div class="col-sm-8">
                                    <input name="id_nilai" type="text" class="form-control" id="id_nilai" required maxlength="4">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nis" class="col-sm-4 col-form-label">NIS</label>
                                <div class="col-sm-8">
                                <select class="form-control" id="nis" name="nis" onclick="clickNis()">
                                    <?php foreach($data_siswa as $data): ?>
                                        <option value="<?php echo $data['nis'] ?>">
                                            <?php echo $data['nis'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="id_pelajaran" class="col-sm-4 col-form-label">Id Pelajaran</label>
                                <div class="col-sm-8">
                                <select class="form-control" id="id_pelajaran" name="id_pelajaran">
                                    <?php foreach($data_pelajaran as $data): ?>
                                        <option value="<?php echo $data['id_pelajaran'] ?>"><?php echo $data['id_pelajaran'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="n_sekolah" class="col-sm-4 col-form-label">Nama Sekolah</label>
                                <div class="col-sm-8">
                                    <input name="n_sekolah" type="text" class="form-control" id="n_sekolah" required maxlength="100">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="a_sekolah" class="col-sm-4 col-form-label">Alamat Sekolah</label>
                                <div class="col-sm-8">
                                    <input name="a_sekolah" type="text" class="form-control" id="a_sekolah" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="t_pelajaran" class="col-sm-4 col-form-label">Tahun Pelajaran</label>
                                <div class="col-sm-8">
                                    <input name="t_pelajaran" type="text" class="form-control" id="t_pelajaran" required maxlength="100">
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6 class="mt-4">KOPETENSI SIKAP</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="s_spiritual" class="col-sm-4 col-form-label">Sikap Spiritual</label>
                                <div class="col-sm-8">
                                    <input name="s_spiritual" type="text" class="form-control" id="s_spiritual" required maxlength="100">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="s_sosial" class="col-sm-4 col-form-label">Sikap Sosial</label>
                                <div class="col-sm-8">
                                    <input name="s_sosial" type="text" class="form-control" id="s_sosial" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6 class="mt-4">KOPETENSI PENGETAHUAN DAN KETERAMPILAN</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>PENGETAHUAN</h6>
                            <div class="form-group row">
                                <label for="p_nilai" class="col-sm-4 col-form-label">Nilai</label>
                                <div class="col-sm-8">
                                    <input name="p_nilai" type="text" class="form-control" id="p_nilai" required maxlength="2">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="p_predekat" class="col-sm-4 col-form-label">Predikat</label>
                                <div class="col-sm-8">
                                    <input name="p_predekat" type="text" class="form-control" id="p_predekat" required maxlength="1">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="p_deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                                <div class="col-sm-8">
                                    <input name="p_deskripsi" type="text" class="form-control" id="p_deskripsi" required maxlength="100">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>KETERAMPILAN</h6>
                            <div class="form-group row">
                                <label for="k_nilai" class="col-sm-4 col-form-label">Nilai</label>
                                <div class="col-sm-8">
                                    <input name="k_nilai" type="text" class="form-control" id="k_nilai" required maxlength="2">
                                </div>
                            </div>
                            <div class="form-group row" style="margin-top: 10px;">
                                <label for="k_predikat" class="col-sm-4 col-form-label">Predikat</label>
                                <div class="col-sm-8">
                                    <input name="k_predikat" type="text" class="form-control" id="k_predikat" required maxlength="1">
                                </div>
                            </div>

                            <div class="form-group row" style="margin-top: 10px;">
                                <label for="k_deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                                <div class="col-sm-8">
                                    <input name="k_deskripsi" type="text" class="form-control" id="k_deskripsi" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h6>Saran</h6>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input name="saran" type="text" class="form-control" id="saran" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6>TINGGI DAN BERAT BADAN</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="tinggi" class="col-sm-4 col-form-label">Tinggi</label>
                                <div class="col-sm-8">
                                    <input name="tinggi" type="text" class="form-control" id="tinggi" readonly value="<?php echo $data_siswa[0]['t_badan'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="berat" class="col-sm-4 col-form-label">Berat</label>
                                <div class="col-sm-8">
                                    <input name="berat" type="text" class="form-control" id="berat" readonly value="<?php echo $data_siswa[0]['b_badan'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6>KONDISI KESEHATAN</h6>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="pendengaran" class="col-sm-6 col-form-label">Pendengaran</label>
                                <div class="col-sm-6">
                                    <input name="pendengaran" type="text" class="form-control" id="pendengaran" readonly value="<?php echo $data_siswa[0]['k_pendengaran'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="penglihatan" class="col-sm-6 col-form-label">Penglihatan</label>
                                <div class="col-sm-6">
                                    <input name="penglihatan" type="text" class="form-control" id="penglihatan" readonly value="<?php echo $data_siswa[0]['k_penglihatan'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="gigi" class="col-sm-6 col-form-label">Gigi</label>
                                <div class="col-sm-6">
                                    <input name="gigi" type="text" class="form-control" id="gigi" readonly value="<?php echo $data_siswa[0]['k_gigi'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6>KETIDAKHADIRAN</h6>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="ket_sakit" class="col-sm-6 col-form-label">Sakit</label>
                                <div class="col-sm-6">
                                    <input name="ket_sakit" type="text" class="form-control" id="ket_sakit" required maxlength="10">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="ket_izin" class="col-sm-6 col-form-label">Izin</label>
                                <div class="col-sm-6">
                                    <input name="ket_izin" type="text" class="form-control" id="ket_izin" required maxlength="10">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="ket_alpha" class="col-sm-6 col-form-label">Alpha</label>
                                <div class="col-sm-6">
                                    <input name="ket_alpha" type="text" class="form-control" id="ket_alpha" required maxlength="10">
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6>PRESTASI</h6>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="jenis" class="col-sm-6 col-form-label">Jenis</label>
                                <div class="col-sm-6">
                                    <input name="jenis" type="text" class="form-control" id="jenis" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="keterangan" class="col-sm-6 col-form-label">Keterangan</label>
                                <div class="col-sm-6">
                                    <input name="keterangan" type="text" class="form-control" id="keterangan" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <a href="<?php echo base_url('data_nilai') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

    function clickNis(){
        let selectNis = document.getElementById("nis");

        let tinggi = document.getElementById("tinggi");
        let berat = document.getElementById("berat");
        let pendengaran = document.getElementById("pendengaran");
        let penglihatan = document.getElementById("penglihatan");
        let gigi = document.getElementById("gigi");

        let nisValue = selectNis.options[selectNis.selectedIndex].value;
        let url = "<?php echo base_url("data_nilai/get_siswa/") ?>" + nisValue;
        fetch(url)
                .then(response => response.json())
                .then(data => {
                    tinggi.value = data.t_badan,
                    berat.value = data.b_badan,
                    pendengaran.value = data.k_pendengaran,
                    penglihatan.value = data.k_penglihatan,
                    gigi.value = data.k_gigi
                });
    }
    
</script>