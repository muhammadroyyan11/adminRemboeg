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
        $data['posting'] = $this->base_model->get_join()->result();
        $this->template->load('template', 'posting/data', $data);
    }

    public function add()
    {
        if(!$_POST){
			$input = (object) $this->base_model->getDefaultValues();
		}else{
			$input = (object) $this->input->post(null, true);
		}
        $data['title'] = "Buat Artikel Baru";
        $data['kategori'] = $this->base_model->getOrder('kartikel')->result();
        $data['input'] = $input;

        $this->template->load('template', 'posting/add', $data);
    }

    public function insertdata()
	{
		// $tanggal = date("Y-m-d");
		// $login = userdata('id_user');

		$config['upload_path']          = './assets/img/uploads/artikel/';
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
            $judul = $this->input->post('judul');
            $seo = slugify($this->input->post('judul'));
            $konten = $this->input->post('konten');
            $featured =$this->input->post('featured');
            $choice = $this->input->post('choice');
            $thread = $this->input->post('thread');
            $id_kartikel = $this->input->post('kategori');
            $isActive = 1;
            $date = date('Y-m-d');

			// $tittle = $this->input->post('tittle_twibbon', TRUE);
			// $deskripsi = $this->input->post('deskripsi', TRUE);
			// $date = date("Y-m-d h:i:sa");
			// $id_user = userdata('id_user');

			$data = array(
				'judul' => $judul,
                'seo_judul' => $seo,
                'konten' => $konten,
                'featured' => $featured,
                'choice' => $choice,
                'thread' => $thread,
                'gambar_name' => $gambar,
                'id_kartikel' => $id_kartikel,
                'isActive' => $isActive,
                'date' => $date
			);
			// var_dump($data);
		} else {

			$gambar = $this->upload->data();
			$gambar =  md5($gambar['file_name']);
            $judul = $this->input->post('judul');
            $seo = slugify($this->input->post('judul'));
            $konten = $this->input->post('konten');
            $featured =$this->input->post('featured');
            $choice = $this->input->post('choice');
            $thread = $this->input->post('thread');
            $id_kartikel = $this->input->post('kategori');
            $isActive = 1;
            $date = date('Y-m-d');

			$data = array(
				
				'judul' => $judul,
                'seo_judul' => $seo,
                'konten' => $konten,
                'featured' => $featured,
                'choice' => $choice,
                'thread' => $thread,
                'gambar_name' => $gambar,
                'id_kartikel' => $id_kartikel,
                'isActive' => $isActive,
                'date' => $date
				
			);

			// var_dump($data);
			$this->base_model->insert('posting', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil Ditambahkan! </div>');

			redirect('admin/posting');
		}
	}

    public function delete($getId)
    {
        // $id = encode_php_tags($getId);
        if ($this->base_model->delete('posting', 'id_posting', $getId)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('admin/posting');
    }
}
