<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trangchu extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	public function index()
	{
		$data['title'] = 'Trang tổng quan';
		$data['content'] = 'admin/home/trangchu';
		$this->load->view('admin/index', $data);
	}
}
