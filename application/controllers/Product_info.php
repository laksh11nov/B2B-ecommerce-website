<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_info extends CI_Controller {

	public function index()
	{

		$data=array();
		$data['main_content']='product-info';
		$data['base_url']= base_url();

		$this->load->view('common/template',$data);
	}
	
}
