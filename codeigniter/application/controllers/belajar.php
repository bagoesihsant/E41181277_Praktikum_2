<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * Berfungsi untuk mengontrol Code Igniter untuk memunculkan view tertentu
 * atau mengambil data menggunakan model tertentu
 */

class Belajar extends CI_Controller {
    
    /**
     * Function construct adalah fungsi yang pertama kali dipanggil
     * ketika controller berjalan
     */
	function __construct(){
		parent::__construct();
		
	}

    /**
     * Fungsi yang secara otomatis akan dipanggil oleh Controller jika
     * dalam URL Code Igniter tidak didefinisikan fungsi apa yang dipanggil
     */
	public function index(){
		echo "ini method index pada controller belajar";
	}

    /**
     * Fungsi ini berfungsi untuk mengirim data dari controller menuju view
     * yang bernama view_belajar melalui variabel data dalam bentuk array
     */
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