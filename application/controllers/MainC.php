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
        $sec2 = $this->WorkM->gets('homeSec2');
        $sec3 = $this->WorkM->gets('homeSec3');
        $this->load->view('public/home',compact('data','sec2','sec3'));
    }

    public function Cul()
    {
        $this->load->model('WorkM');
        $data = $this->WorkM->getculturepage();
        $this->load->view('public/Culture',compact('data','sec2'));
    }
    
    public function Dest()
    {
        $this->load->model('WorkM');
        $data = $this->WorkM->GetS('destpage');
        $this->load->view('public/Destination',compact('data'));
    }

    public function AboutUs()
    {
        $this->load->view('public/AboutUs');
    }

    

}


?>