<?php

class Heroku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
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
}
