<?php 

/**
 * 
 * File ini berfungsi untuk mengambil, mengubah, dan menghapus 
 * data dari Database.
 * 
 */
class M_data extends CI_Model{


	// Fungsi ini berfungsi untuk mengambil data dari tabel user.
	function ambil_data(){
		return $this->db->get('user');
	}
}