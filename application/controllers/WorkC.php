<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class WorkC extends CI_Controller{

    public function __construct()  
    {
        parent::__construct();
        if($this->session->userdata('username'))
        {
            redirect('UserC');
        }
    }

    public function index()
    {
        $this->load->view('public/Login');
    }
    
    public function AuthUser() 
    {
        $un = $this->input->post('username');
        $pw = $this->input->post('password');

        $this->load->model('WorkM');

        if($this->WorkM->CheckUserName($un,$pw)){
            redirect('UserC');
        }else {
            redirect('WorkC');
        }
    }

    
    
    
    



}


?>