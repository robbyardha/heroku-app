<?php

class Heroku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // CURL
        $url = "http://hero.ardhacodes.com/hero.json";
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
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('heroku/index', $data);
        $this->load->view('layout/footer', $data);
    }

    public function detail($id)
    {
        $data['title'] = "HEROKU - APPS";
        $url = "http://hero.ardhacodes.com/hero.json";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($resp, true);
        $data['result'] = $result[$id];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('heroku/detail', $data);
        $this->load->view('layout/footer', $data);
    }
}
