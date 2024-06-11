<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {


	private $photo_path='assets/img/products/';

	public function __construct()
	{
		parent::__construct();



		$this->load->model('Category_model');
	}

	public function index()
	{

		$data=array();

		$data['photo_path']=base_url($this->photo_path);


		$data['main_content']='category';
		$data['base_url']= base_url();
		$data['result_category'] = $this->Category_model->read()->result();

		$this->load->view('common/template',$data);
	}
	
}
