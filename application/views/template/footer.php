<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script src="<?php echo base_url('assets/js/main.js') ?>"></script>

<script>
    $(document).ready(function() {
        $('#tabel-data').DataTable();
        $('#tabel-data-2').DataTable();
        $('#tabel-penduduk').DataTable();
        $('#tabel-pegawai').DataTable();
        $('#tabel-data-keluarga').DataTable();
        $('#tabel-pengajuan').DataTable();
        $('#tabel-hasil').DataTable();
    });
</script>

</body>

</html>