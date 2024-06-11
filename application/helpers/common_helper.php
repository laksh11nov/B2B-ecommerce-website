<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function send_mail($mail_data)
{
    $CI =& get_instance();

    $CI->load->library('email');
            
    $from = 'lakshaysanhotra1@gmail.com';

    $config = array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.gmail.com',
        'smtp_port' => 465,
        'smtp_timeout' => 30,
        'smtp_user' => 'mauryavikas4665@gmail.com',
        'smtp_pass' => 'zjrzgupwetpqcfvo',
        'charset' => 'utf-8',
        'newline' => "\r\n",
        'mailtype' => 'html',
        'validation' => TRUE
    );

    $CI->email->initialize($config);
    $CI->email->set_mailtype("html");
    $CI->email->from($from);
    $CI->email->to($mail_data['to']);
    $CI->email->subject($mail_data['subject']);
    $CI->email->message($mail_data['message']);

    $r = $CI->email->send();

    return $r;
}
?>
