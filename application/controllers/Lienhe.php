<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lienhe extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	public function index()
	{
		$data['header'] = 'header';
		$data['content'] = 'lienhe';
		$this->load->view('index', $data);
	}
}
