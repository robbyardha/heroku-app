<?php

class Landing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

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
        $this->load->view('layout/header', $data);
        $this->load->view('landingpage/content/index', $data);
        $this->load->view('layout/footer', $data);
    }
}
