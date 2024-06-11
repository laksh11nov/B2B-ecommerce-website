<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model');
        $this->load->model('Contact_model');
    }

    public function index()
    {
    	$data=array();
        $data['message'] = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        	
            $contact_data = array(
                'fullname' => $this->input->post('fullname'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'message' => $this->input->post('message')
            );

            $flag = $this->Contact_model->save($contact_data);

            if ($flag > 0) {
                $this->load->library('email');

                $mail_data=array();
                $mail_data['subject'] = 'Testing mail CodeIgniter';
                $mail_data['to'] = 'lakshaysanhotra1@gmail.com'; 

            $mail_data['message'] = "Name: " . $this->input->post('fullname') . "<br>";
            $mail_data['message'] .= "Email: " . $this->input->post('email') . "<br>";
            $mail_data['message'] .= "Phone: " . $this->input->post('mobile') . "<br>";
            $mail_data['message'] .= "Message: " . $this->input->post('message');

            // var_dump($mail_data);

            $check = send_mail($mail_data);

                if ($check) {
                    $this->session->set_flashdata('msg', "Mail has been successfully sent.");
                    $this->session->set_flashdata('msg_class', "alert-success");

                } else {
                    $this->session->set_flashdata('msg', "Error sending mail. Please try again later.");
                    $this->session->set_flashdata('msg_class', "alert-danger");
                }
            }
        }

        // Load view
        $data['main_content'] = 'contact-us';
        $data['base_url'] = base_url();
        $data['result_category'] = $this->Category_model->read()->result();
        $this->load->view('common/template', $data);
    }
}
