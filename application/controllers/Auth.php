<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required',
            [
                'required' => 'Username is required!',
            ]
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            [
                'required' => 'Password is required!'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "HEROKU - APPS - LOGIN";
            $this->load->view('layout/header', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('layout/footer', $data);
        } else {
            $this->func_login();
        }
    }
    public function register()
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|is_unique[users.username]',
            [
                'required' => 'Email is required!',
                'is_unique' => 'Email already registered',
            ]
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|is_unique[users.email]|valid_email',
            [
                'required' => 'Email is required!',
                'is_unique' => 'Email already registered',
                'valid_email' => 'Email not valid',
            ]
        );

        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',
            [
                'required' => 'Name is Required!'
            ]
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[6]|matches[passwordconfirm]',
            [
                'required' => 'Password is required!',
                'min_length' => 'Password minimum 6 characters',
                'matches' => 'Password not same'
            ]
        );
        $this->form_validation->set_rules(
            'passwordconfirm',
            'Password Confirmation',
            'required|trim|min_length[6]|matches[password]',
            [
                'required' => 'Password Confirmation is required!',
                'min_length' => 'Password minimum 6 characters',
                'matches' => 'Password not same'
            ]
        );
        $this->form_validation->set_rules(
            'terms',
            'Terms',
            'required',
            [
                'required' => 'Terms is required!',
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "HEROKU - APPS - REGISTER";
            $this->load->view('layout/header', $data);
            $this->load->view('auth/register', $data);
            $this->load->view('layout/footer', $data);
        } else {
            date_default_timezone_set('Asia/Jakarta');
            $now = date('Y-m-d H:i:s');
            $data = [
                'username' => htmlspecialchars($this->input->post('username')),
                'email' => htmlspecialchars($this->input->post('email')),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'nama' => htmlspecialchars($this->input->post('nama')),
                'is_active' => 1,
                'created_date' => $now,
                'terms' => htmlspecialchars($this->input->post('terms')),
            ];
            $this->db->insert('users', $data);
            $this->session->set_flashdata('users', '<div class="alert alert-success mt-2 mb-2" role="alert">
			Registration Account <strong> Success! </strong> Please Login! </div>');
            redirect('auth/index');
        }
    }
    private function func_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $username = $this->db->get_where('users', ['username' => $username])->row_array();
        if ($username) {
            if ($username['is_active'] == 1) {
                if (password_verify($password, $username['password'])) {
                    unset($username['password']);
                    $data = [
                        'username' => $username['username'],
                        'email' => $username['email'],
                        'nama' => $username['nama'],
                        'username_id' => $username['id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('heroku/index');

                    // if ($username['role_id'] == 1) {
                    //     redirect('admin/administrator');
                    // } elseif ($username['role_id'] == 2) {
                    //     redirect('admin/administrator');
                    // } else {
                    //     redirect('board/dashboard');
                    // }
                } else {
                    $this->session->set_flashdata('users', '<div class="alert alert-danger mt-2 mb-2" role="alert">
                    <strong> Username/Password is wrong </strong> </div>');
                    redirect('auth/index');
                }
            } else {
                $this->session->set_flashdata('users', '<div class="alert alert-danger mt-2 mb-2" role="alert">
                <strong> Username is not active!, Please contact Administrator!  </strong> </div>');
                redirect('auth/index');
            }
        } else {
            $this->session->set_flashdata('users', '<div class="alert alert-danger mt-2 mb-2" role="alert">
            <strong> Username does not exist! </strong> </div>');
            redirect('auth/index');
            // redirect('auth');
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('akun_id');
        $this->session->all_userdata();
        $this->session->set_flashdata('users', '<div class="alert alert-success mb-2 mt-2" role="alert">
        You has been <strong>Logged out </strong> </div>');
        redirect('auth/index');
    }
}
