<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller yang berfungsi untuk uji coba saja
 */

class Selamat extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('html');
	}

	// Fungsi ini untuk menampilkan view_selamat.php
	public function index(){
		$this->load->view('view_selamat');
	}
}