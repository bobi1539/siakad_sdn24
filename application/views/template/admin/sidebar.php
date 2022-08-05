<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url("dashboard") ?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <!-- <i class="fas fa-laugh-wink"></i> -->
            </div>
            <div class="sidebar-brand-text mx-3">SI SDN 24</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <!-- <li class="nav-item <?= $aktif == 'dashboard' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url("dashboard") ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li> -->

        <li class="nav-item <?php echo $aktif == 'data_kelas' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo base_url("data_kelas") ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Data Kelas</span>
            </a>
        </li>

        <li class="nav-item <?php echo $aktif == 'data_guru' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo base_url("data_guru") ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Data Guru</span>
            </a>
        </li>

        <li class="nav-item <?php echo $aktif == 'data_pelajaran' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo base_url("data_pelajaran") ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Data Pelajaran</span>
            </a>
        </li>

        <li class="nav-item <?php echo $aktif == 'data_siswa' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo base_url("data_siswa") ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Data Siswa</span>
            </a>
        </li>
        
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

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

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                            <?= $this->session->userdata('full_name') ?>
                        </span>
                        <i class="fa fa-user"></i>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logout_modal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">