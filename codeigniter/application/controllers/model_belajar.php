<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
	}

	// Fungsi ini untuk menampilan view_form_validation.php
	function index()
	{
		$this->load->view('view_form_validation');
	}


	/**
	 * Fungsi ini berfungsi untuk mengarahkan pengguna menuju ke view_download.
	*/
	function download_file()
	{
		$this->load->view('view_download');
	}

	/**
	 * Fungsi ini berfungsi untuk menampilkan prompt untuk download file,
	 * dalam beberapa browser, ada kemungkinan prompt / panel ya dan tidak
	 * tidak akan muncul dan file langsung terdownload seperti nama fungsi
	 * yaitu force_download
	*/
	function file_download()
	{
		force_download('gambar/Screenshot-10.png',NULL);
	}

	/**
	 * Fungsi ini berfungsi untuk memanggil method dari library yang dibuat
	 * sendiri oleh pemilik file, nama library adalah librarytopek.
	*/
	function custom_library()
	{
		$this->librarytopek->nama_saya();
	}

	/**
	 * Fungsi ini berfungsi untuk memanggil method dari library yang dibuat
	 * sendiri oleh pemilik file, nama library adalah librarytopek.
	*/
	function custom_library_input($nama)
	{
		$this->librarytopek->nama_kamu($nama);
	}

	/**
	 * Fungsi ini berfungsi untuk melakukan validasi input dari
	 * view_form_validation.php menggunakan method dari
	 * library form_validation dan mengecek apakah hasil dari
	 * validasi benar atau salah.
	 * 
	 * Apabila hasil benar maka akan ditambilkan "Form Validation sudah oke"
	 * Apabila hasil salah maka akan dikembalikan menuju view_form_validation.php.
	 */
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

	/**
	 * Fungsi ini berfungsi untuk menangkap nilai yang diberikan user melalui URL
	 * semakin banyak data yang diberikan user maka semakin tinggi juga angka
	 * yang digunakan dalam fungsi segment() dari library uri.
	 */
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

	/**
	 * Fungsi ini berfungsi untuk mengirim data yang sudah diambil dari
	 * model "m_data" menggunakan method ambil_data() menuju view_belajar.php
	 * melalui variabel data.
	 */
	function user(){
		$data['user'] = $this->m_data->ambil_data()->result();
		$this->load->view('view_belajar',$data);
	}

}