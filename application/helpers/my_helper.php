<?php

define("TU", "TU");
define("WALI_KELAS", "WALI KELAS");


function isLogin()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        pesan('Anda belum login', 'danger');
        redirect('login');
    }
}

function pesan($pesan, $type)
{
    $ci = get_instance();
    $ci->session->set_tempdata('pesan', '<div class="alert alert-' . $type . ' alert-dismissible fade show" role="alert">
        ' . $pesan . '        
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>', 2);
}
