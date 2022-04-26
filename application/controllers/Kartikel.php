<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kartikel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        date_default_timezone_set('Asia/Jakarta');
        // // $this->load->model('Auth_model', 'auth');
        // $this->load->model('Admin_model', 'admin');
        $this->load->model('Base_model', 'base');
    }

    public function index()
    {
        $data['title'] = "Kategori Artikel";
        $data['kartikel'] = $this->base_model->get('kartikel')->result();
        $this->template->load('template', 'kartikel/data', $data);
    }

  
}
