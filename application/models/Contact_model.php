<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {

   public function save($data){
    $flag = false;
    
    $this->db->insert('contact_form',$data);        
    
    $id = $this->db->insert_id();

    if ($id > 0) {
        $flag = true;
    }

    return $flag;
}
}