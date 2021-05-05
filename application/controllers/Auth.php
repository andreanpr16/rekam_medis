<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('dashboard');
        }

        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/footer');
        } else {
            // validasinya success
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // jika usernya ada
        if ($user) {
            // jika usernya aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email'     => $user['email'],
                        'role_id'   => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    switch ($user['role_id']) {
                        case 1:
                            redirect('admin/dashboard');
                            break;
                        case 2:
                            redirect('dashboard');
                            break;
                        case 3:
                            redirect('admin/dashboard');
                            break;
                        default:
                            break;
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                    Password anda salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Email anda belum diaktivasi! Silahkan aktivasi!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Email anda belum terdaftar! Silahkan Daftar!</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('dashboard');
        }

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah digunakan!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password anda tidak sama!',
            'min_length' => 'Password anda terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim');
        $this->form_validation->set_rules('asal', 'Kota Asal', 'required|trim');
        $this->form_validation->set_rules('no_telp', 'No Telp/Hp', 'required|trim|min_length[11]|max_length[12]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registration';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama'              => $this->input->post('nama', true),
                'email'             => $this->input->post('email', true),
                'image'             => 'default.jpg',
                'password'          => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'asal'              => $this->input->post('asal', true),
                'no_telp'           => $this->input->post('no_telp', true),
                'role_id'           => 2,
                'is_active'         => 1,
                'date_created'      => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Congratulation! your account has been created. Please Login!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Anda berhasil logout!</div>');
        redirect('auth');
    }

    public function blocked()
    {
        $data['judul'] = 'Access Blocked';
        $this->load->view('templates/header', $data);
        $this->load->view('auth/blocked');
    }
}
