<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trangchu extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	public function index()
	{
		$data['header'] = 'header_home';
		$data['content'] = 'trangchu';
		$this->load->view('index', $data);
	}
}
