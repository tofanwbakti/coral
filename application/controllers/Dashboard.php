<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Rangkol - Ruang Kolaborasi'
		);
		$this->template->load('template','dashboard_view',$data);
		// $this->load->view('dashboard_view');
	}
}
