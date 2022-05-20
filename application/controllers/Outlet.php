<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outlet extends CI_Controller {

	public function index()
	{
		// $data['galleries'] = $this->restapi->Apiget('https://admin.kofluckroastery.com/api/v1/galleries');
		$this->template->load('client/template', 'client/outlet/outlet');
	}

	public function outlet_view($id)
    {
        // $query = $this->produk_m->get($id);
		// if($query->num_rows() > 0){
		// 	$produk = $query->row();
		// 	$data = array(
		// 		'page' => 'shop_view',
		// 		'row' => $produk
		// 	);
		//$data['galleries'] = $this->restapi->Apiget('http://localhost:8000/api/v1/galleries');

		$data['data'] = $this->restapi->Apiget('https://admin.kofluckroastery.com/api/v1/galleries/'.$id);

		$this->template->load('template', 'outlet/outlet_view', $data);

		// } else {
		// 	echo "<script>alert('Data Tidak Di Temukan');";
        //         echo "window.location='".site_url('outlet')."';</script>";
		// }
	}
}
