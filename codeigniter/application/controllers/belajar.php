<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
	}

	public function index(){
		echo "ini method index pada controller belajar";
	}

	public function halo(){
        $data = array(
            'nama' => 'Bagoes Ihsan Taufiqurrahman',
            'usia' => '20 Tahun',
            'alamat' => 'Jln. Sriwijaya No.68',
            'ttl' => 'Situbondo, 17 Juli 2000',
            'no_telp' => '082331588636'
        );
        $this->load->view('view_belajar',$data);
    }
}