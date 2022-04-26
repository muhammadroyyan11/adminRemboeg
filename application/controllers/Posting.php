<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Base_model', 'base');
    }

    public function index()
    {
        $data['title'] = "Data Posting Blog";
        $data['posting'] = $this->base_model->get('posting')->result();
        $this->template->load('template', 'posting/data', $data);
    }

    public function add()
    {
        $data['title'] = "Buat Artikel Baru";
        $this->template->load('template', 'barang/add', $data);
    }

  
}
