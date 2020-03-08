<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}


	/**
	 * Melakukan percobaan membuat controller baru yang berada dalam sebuah folder
	 * dan melakukan setting pada routes.php dengan mengubah apabila user memilih
	 * fungsi admin maka controller ini akan digunakan
	 */

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/overview");
	}
}