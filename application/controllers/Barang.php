<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Auth_model', 'auth');
        $this->load->model('Base_model', 'base');
    }

    public function index()
    {
        // var_dump(userdata('nama'));
        $data['title'] = "Barang";
        $data['barang'] = $this->base_model->get('barang')->result();
        $this->template->load('template', 'barang/data', $data);
    }

    public function add()
    {
        $data['title'] = "Tambah Barang";

        // Mengenerate ID Barang
        $kode_terakhir = $this->base->getMax('barang', 'id_barang');
        $kode_tambah = substr($kode_terakhir, -6, 6);
        $kode_tambah++;
        $number = str_pad($kode_tambah, 6, '0', STR_PAD_LEFT);
        $data['id_barang'] = userdata('nama') . $number;
        
        $this->template->load('template', 'barang/add', $data);
    }

    public function process()
    {
        // $login = userdata('id_user');

        $this->db->insert('barang', array(
            'name' => $this->input->post('nama_barang'),
            'description' => $this->input->post('description'),
            'status' => $this->input->post('status'),
            // 'user_id' => userdata('id_user')
            'id_user' => userdata('id_user')
        ));

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

        redirect('barang');
    }
}
