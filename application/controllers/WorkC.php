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
        $this->load->view('public/Loginpage');
    }


    
    
    public function AuthUser() 
    {
        $un = $this->input->post('username');
        $pw = $this->input->post('password');
        $this->load->model('WorkM');

        $this->load->library('form_validation');
        if($this->form_validation->run('add_rules'))
        {
            
            if($this->WorkM->CheckUserName($un,$pw)){
                redirect('UserC');
               }
            elseif(($this->WorkM->CheckUserName($un,$pw))==false)
            {
                
                $this->session->set_flashdata('error', 'Username /Password is wrong');
                
                $this->load->view('public/Loginpage');
            }
        }
        else{
            $this->load->view('public/Loginpage');
        }
    
        }
    //Users - end
    }

?>