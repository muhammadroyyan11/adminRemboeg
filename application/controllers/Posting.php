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
        $data['title'] = "Data Posting Artikel";
        $data['posting'] = $this->base_model->get('posting')->result();
        $this->template->load('template', 'posting/data', $data);
    }

    public function add()
    {
        $data['title'] = "Buat Artikel Baru";
        $data['kategori'] = $this->base_model->getOrder('kartikel')->result();
        $this->template->load('template', 'posting/add', $data);
    }

    public function proses()
    {
        $this->db->insert('posting', array(
            'judul' => $this->input->post('judul'),
            'seo_judul' => slugify($this->input->post('judul')),
            // 'konten' => $this->input->post('konten'),
            // 'description' => $this->input->post('description'),
            // 'status' => $this->input->post('status'),
            // 'id_user' => userdata('id_user')
        ));

        // var_dump($this->db->affected_rows())

        if ($this->db->affected_rows()) {
            $this->data = array(
                'status' => true,
                'message' => "Data berhasil disimpan"
            );
        } else {
            $this->data = array(
                'status' => false,
                'message' => "Gagal saat menyimpan data!"
            );
        }
    }
}
