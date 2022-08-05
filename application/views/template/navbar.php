<div class="bg-primary">

    <nav class="navbar navbar-expand-lg navbar-dark bg-utama">
        <div class="container">
            <a class="navbar-brand" href="#">Wali Nagari</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item <?php echo $aktif == 'home' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?php echo base_url('beranda') ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php echo $aktif == 'dokumen' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?php echo base_url('beranda/document') ?>">Document</a>
                    </li>

                    <?php if ($this->session->userdata('role_id')) : ?>
                        <?php if ($this->session->userdata('role_id') == 'admin') : ?>
                            <li class="nav-item <?php echo $aktif == 'profil' ? 'active' : '' ?>">
                                <a class="nav-link" href="<?php echo base_url('admin') ?>">Profil</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item <?php echo $aktif == 'user' ? 'active' : '' ?>">
                                <a class="nav-link" href="<?php echo base_url('user') ?>">Profil</a>
                            </li>
                        <?php endif; ?>

                    <?php else : ?>
                        <li class="nav-item <?php echo $aktif == 'login' ? 'active' : '' ?>">
                            <a class="nav-link" href="<?php echo base_url('login') ?>">Login</a>
                        </li>
                    <?php endif; ?>

                </ul>
            </div>
    </nav>
</div>
</div>