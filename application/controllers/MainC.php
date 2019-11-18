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
        $data = $this->WorkM->Gets('homepage');
        $sec3 = $this->WorkM->Gets('homeSec3');
        $sec2 = $this->WorkM->Gets('homeSec2');
        $this->load->view('public/home',compact('data','sec2','sec3'));
    }

    public function FoodStuff()
    {
        $this->load->model('WorkM');
        $data = $this->WorkM->Gets('culturepage');
        $this->load->view('public/Culture',compact('data','sec2'));
    }
    
    public function Dest()
    {
        $this->load->model('WorkM');
        $data = $this->WorkM->GetS('destpage');
        $this->load->view('public/Destination',compact('data'));
    }
    
    public function Cul()
    {
        $this->load->model('WorkM');
        // $data = $this->WorkM->Gets('culturepage');
        $data = $this->WorkM->GetS('destpage');
        // $this->load->view('public/Culture',compact('data','sec2'));
        $this->load->view('public/FoodStuff',compact('data','sec2'));
    }

    public function Cul2()
    {
        $this->load->model('WorkM');
        // $data = $this->WorkM->Gets('culturepage');
        $data = $this->WorkM->GetS('destpage');
        // $this->load->view('public/Culture',compact('data','sec2'));
        $this->load->view('public/FoodStuff copy',compact('data','sec2'));
    }



    public function AboutUs()
    {
        $this->load->view('public/AboutUs');
    }

    public function DestPlace()
    {
        $this->load->view('public/BaseDest.php');
    }

    

}


?>