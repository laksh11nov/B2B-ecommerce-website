<?php

class Product_Model extends CI_Model {
    
    public function read($condition=null)
    {
        $this->db->select('p.*,c.category_slug,c.category_name');
        $this->db->from('product p');
        $this->db->join('category c','p.category_id=c.category_id','inner');

        if($condition!=null)        
        {
            if(isset($condition['category_id']))
            {
                if(strlen($condition['category_id'])>0)   
                    $this->db->where('p.category_id',$condition['category_id']);        
            }
            if(isset($condition['category_slug']))
            {
                if(strlen($condition['category_slug'])>0)   
                    $this->db->where('c.category_slug',$condition['category_slug']);        
            }
            if(isset($condition['product_id']))
            {
                if(strlen($condition['product_id'])>0)   
                    $this->db->where('p.product_id',$condition['product_id']);        
            }
            if(isset($condition['product_slug']))
            {
                if(strlen($condition['product_slug'])>0)   
                    $this->db->where('p.product_slug',$condition['product_slug']);        
            }
            if(isset($condition['product_name']))
            {
                if(strlen($condition['product_name'])>0)   
                    $this->db->like('p.product_name',$condition['product_name']);        
            }

        }
        $dataset = $this->db->get();
        return($dataset);
    }

  

}
