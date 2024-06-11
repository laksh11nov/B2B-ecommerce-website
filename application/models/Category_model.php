<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	public function read($condition=null) 
	{		
		if($condition!=null)
		{
            foreach ($condition as $key => $value) 
            {
                $this->db->where($key,$value);
            }
			// put where conditions
		}
        $dataset = $this->db->get('category');
        return $dataset;
    }
    public function getCategoryIdBySlug($category_slug) {
        
        $category_id = $this->db->get_where('category', array('category_slug' => $category_slug))->row()->category_id;
        return $category_id;
    }


}
