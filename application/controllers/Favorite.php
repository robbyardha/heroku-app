<?php

class Favorite extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth/index');
            $this->session->set_flashdata('users', '<div class="alert alert-danger mt-2 mb-2" role="alert">
                <strong> Please Login First!, Dont Cheating!</strong> </div>');
            // redirect('auth/index');
        }
        $this->load->model('Favorite_model');
        // CURL
        $url = "http://hero.ardhacodes.com/hero.json";
        // $url = file_get_contents(base_url('assets/content/hero.json'));
        // var_dump($url);
        // die;
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($resp, true);
    }

    public function index()
    {

        $data['title'] = "HEROKU - APPS";
        $data['username_id'] = $this->session->userdata('username_id');
        $data['userdatasess'] = $this->session->userdata();
        $data['fav'] = $this->Favorite_model->getFavhero();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('favorite/index', $data);
        $this->load->view('layout/footerbar', $data);
        $this->load->view('layout/footer', $data);
    }
}
