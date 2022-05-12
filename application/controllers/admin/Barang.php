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
        if (!$_POST) {
            $input = (object) $this->base_model->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }
        $data['title'] = "Tambah Barang";
        $data['input'] = $input;
        $data['kategori'] = $this->base_model->getOrderProduk('kproduk')->result();

        $this->template->load('template', 'barang/add', $data);
    }

    public function process()
    {
        // $login = userdata('id_user');

        $this->db->insert('barang', array(
            'name' => $this->input->post('nama_barang'),
            'description' => $this->input->post('description'),
            'status' => $this->input->post('status'),
            'id_kproduk' => $this->input->post('kategori')
            // 'user_id' => userdata('id_user')
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

        redirect('admin/barang');
    }

    public function insertdata()
    {
        // $tanggal = date("Y-m-d");
        // $login = userdata('id_user');

        $config['upload_path']          = './assets/img/uploads/produk/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 5000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            // $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Format gambar bukan PNG. </div>');

            // redirect('campaign/add');
            $gambar = $this->upload->data();
            $gambar =  $gambar['file_name'];

            $name = $this->input->post('nama_barang');
            $desc = $this->input->post('description');
            $status = $this->input->post('status');
            $link = $this->input->post('link_tokped');
            $id_kproduk = $this->input->post('kategori');

            $data = array(
                'name' => $name,
                'description' => $desc,
                'status' => $status,
                'gambar_name' => $gambar,
                'link_tokped' => $link,
                'id_kproduk' => $id_kproduk,
            );
            // var_dump($data);
            $this->base_model->insert('barang', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil Ditambahkan! </div>');
            redirect('admin/barang');
            
        } else {

            $gambar = $this->upload->data();
            $gambar =  $gambar['file_name'];

            $name = $this->input->post('nama_barang');
            $desc = $this->input->post('description');
            $status = $this->input->post('status');
            $link = $this->input->post('link_tokped');
            $id_kproduk = $this->input->post('kategori');

            $data = array(

                'name' => $name,
                'description' => $desc,
                'status' => $status,
                'gambar_name' => $gambar,
                'link_tokped' => $link,
                'id_kproduk' => $id_kproduk,
            );

            // var_dump($data);
            $this->base_model->insert('barang', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil Ditambahkan! </div>');

            redirect('admin/barang');
        }
    }

    public function delete($getId)
    {
        // $id = encode_php_tags($getId);
        if ($this->base_model->delete('barang', 'id_posting', $getId)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('admin/posting');
    }
}
