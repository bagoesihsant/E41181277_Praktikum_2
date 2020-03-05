<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
	}

	function index()
	{
		$this->load->view('view_form_validation');
	}

	function download_file()
	{
		$this->load->view('view_download');
	}

	function file_download()
	{
		force_download('gambar/Screenshot-10.png',NULL);
	}

	function custom_library()
	{
		$this->librarytopek->nama_saya();
	}

	function custom_library_input($nama)
	{
		$this->librarytopek->nama_kamu($nama);
	}

	function cek_input()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('konfir_email','Konfirmasi email','required');

		if($this->form_validation->run() != false)
		{
			echo "Form Validation sudah oke";
		}else
		{
			$this->load->view('view_form_validation');
		}

	}

	function belajarUri()
	{
		echo "Ini adalah data ke 1, yaitu : ". $this->uri->segment(1)."</br>";
		echo "Ini adalah data ke 2, yaitu : ". $this->uri->segment(2)."</br>";
		echo "Ini adalah data ke 3, yaitu : ". $this->uri->segment(3)."</br>";
		echo "Ini adalah data ke 4, yaitu : ". $this->uri->segment(4)."</br>";
		echo "Ini adalah data ke 5, yaitu : ". $this->uri->segment(5)."</br>";
		echo "Ini adalah data ke 6, yaitu : ". $this->uri->segment(6)."</br>";
		echo "Ini adalah data ke 7, yaitu : ". $this->uri->segment(7)."</br>";
	}

	function user(){
		$data['user'] = $this->m_data->ambil_data()->result();
		$this->load->view('view_belajar',$data);
	}

}