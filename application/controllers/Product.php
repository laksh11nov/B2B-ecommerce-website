<?php
class Product extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Category_model');
        $this->load->model('Product_Model');
    }

    
    public function category($category_slug) 
    {

        $condition_c=array();
        $condition_c['category_slug']=$category_slug;
        $data['row'] = $this->Category_model->read($condition_c)->row();


        $data['base_url'] = base_url();
        $data['result_category'] = $this->Category_model->read()->result();



        // getting product as per category slug
        $condition_p=array();
        $condition_p['category_id']=$data['row']->category_id;
        $data['result_product'] = $this->Product_Model->read($condition_p)->result();

        $data['main_content'] = 'product';
        $this->load->view('common/template', $data);
    }


    public function info($category_slug,$product_slug) {
        $data['main_content'] = 'product-info';

        $data['category_slug']=$category_slug;

        $data['base_url'] = base_url();
        $data['result_category'] = $this->Category_model->read()->result();


        $condition_p=array();
        $condition_p['product_slug']=$product_slug;
        $data['row'] = $this->Product_Model->read($condition_p)->row();
        

        $this->load->view('common/template', $data);
    }
}
?>

