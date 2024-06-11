<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->model('Category_model');
	}

	public function index()
	{
		$data=array();
		$data['main_content']='home';
		$data['base_url']= base_url();

        $data['result_category'] = $this->Category_model->read()->result();


		$this->load->view('common/template',$data);
	}
	
}
