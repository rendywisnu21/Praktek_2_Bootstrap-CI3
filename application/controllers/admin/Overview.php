<!-- File C_overview.php ini berfungsi untuk me-load file views/overview.php yang berisi
template SB Admin 2 sebagai contohnya -->

<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/overview");
	}
}