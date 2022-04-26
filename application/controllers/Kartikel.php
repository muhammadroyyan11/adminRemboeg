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

    public function add()
    {
        // echo $this->input->post('categori');

        $this->db->insert('kartikel', array(
            'nama' => $this->input->post('namaKategori'),
            // 'stok' => str_replace(',', '', $this->input->post('stok')),
            // 'harga' => str_replace(',', '', $this->input->post('harga'))
            // 'description' => $this->input->post('description'),
            // // 'user_id' => userdata('id_user')
            // 'id_user' => userdata('id_user'),
            // 'category' => $this->input->post('categori')
        ));

        if ($this->db->affected_rows()) {
            $this->data = array(
                'status' => true,
                'message' => "Data berhasil disimpan"
            );
            set_pesan('Data berhasil di simpan');
        } else {
            $this->data = array(
                'status' => false,
                'message' => "Gagal saat menyimpan data!"
            );
            set_pesan('Gagal saat menyimpan data', false);
        }

        redirect('kartikel');
    }

    public function delete($id)
    {
        $where = array('id_barang' => $id);
        $this->base_model->del('barang', $where);
        redirect('sepatu');
    }
}
