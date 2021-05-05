<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    }
}

function isAdmin()
{
    $ci = get_instance();
    if ($ci->session->userdata('role_id') == '2') {
        redirect('auth/blocked');
    }
}
