<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-utama sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php echo $aktif == 'profil' ? 'active' : '' ?> ">
            <a class="nav-link" href="<?php echo base_url('user') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>My Account</span>
            </a>
        </li>

        <li class="nav-item <?php echo $aktif == 'pengajuan' ? 'active' : '' ?> ">
            <a class="nav-link" href="<?php echo base_url('user/pengajuan') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Pengajuan</span>
            </a>
        </li>


        <li class="nav-item <?php echo $aktif == 'data_keluarga' ? 'active' : '' ?> ">
            <a class="nav-link" href="<?php echo base_url('user/data_keluarga') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Data Keluarga</span>
            </a>
        </li>

        <li class="nav-item <?php echo $aktif == 'hasil' ? 'active' : '' ?> ">
            <a class="nav-link" href="<?php echo base_url('user/tampil_hasil') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Hasil</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#logout_modal">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Logout</span></a>
        </li>

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">