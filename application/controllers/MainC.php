<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MainC extends CI_Controller{
    public function __construct()  
    {
        parent::__construct();
        
    }

    public function index()
    {   
        $this->load->model('WorkM');
        $data = $this->WorkM->getMain();
        $this->load->view('public/home',compact('data'));
        


    }

    public function Cul()
    {
        $this->load->model('WorkM');
        $data = $this->WorkM->getculturepage();
        $this->load->view('public/Culture',compact('data'));
    }

    public function Dest()
    {
        $this->load->view('public/Destination');
    }
    public function AboutUs()
    {
        $this->load->view('public/AboutUs');
    }

    

}


?>