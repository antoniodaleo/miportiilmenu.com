<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		
		$this->load->view('web/layout/header');
		$this->load->view('welcome');
		$this->load->view('web/layout/footer');

	}
}