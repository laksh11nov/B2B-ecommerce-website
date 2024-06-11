<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Category_model');
	}

	public function index()
	{
		$data=array();
		$data['main_content']='about-us';
		$data['base_url']= base_url();
		$data['result_category'] = $this->Category_model->read()->result();

		$this->load->view('common/template',$data);
	}
	
}
