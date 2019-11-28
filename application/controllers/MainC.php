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
        $this->load->view('public/Home',compact('data','sec2','sec3'));
    }


    public function Search()
    {
        $this->load->model('WorkM');
        if($this->input->post('query'))
        {
         $query = $this->input->post('query');
        }
        $result = $this->WorkM->fetch($query);
        
        $Page = $this->WorkM->GetRow('pages',5);
        $Page['data'] =  $this->load->view('public/Search',compact('result'),True);
        $this->load->view('public/Base',compact('Page'));
    
    }

    public function FoodStuff()
    {
        $this->load->model('WorkM');
        $data = $this->WorkM->Gets('culturepage');
        $Page = $this->WorkM->GetRow('pages',5);
        $Page['data'] = $this->load->view('public/FoodStuff',compact('data'),True);
        $this->load->view('public/Base',compact('Page'));
    }
    
    public function Dest($Name=NULL)
    {
        $this->load->model('WorkM');
        if($Name == Null)
        {    
            $data = $this->WorkM->GetS('destpage');
            $Page = $this->WorkM->GetRow('pages',2);
            $Page['data'] = $this->load->view('public/Dest',compact('data'),True);
            $this->load->view('public/Base',compact('Page'));
        }else{
            $data = $this->WorkM->GetName('destpage',$Name);
            $Page = $this->WorkM->GetRow('pages',2);
            $Page['data'] = $this->load->view('public/Blog',compact('data'),True);
            $this->load->view('public/Base',compact('Page'));
        }

    }
    
   

    public function Culture()
    {
        $this->load->model('WorkM');
        $sec1 = $this->WorkM->Gets('culsec1');
        $sec2 = $this->WorkM->Gets('culsec2');
        $sec3 = $this->WorkM->Gets('culsec3');
        $Page = $this->WorkM->GetRow('pages',3);
        $Page['data'] = $this->load->view('public/Culture',compact('sec1','sec2','sec3'),True);
        $this->load->view('public/Base',compact('Page'));     
    }

    


    public function AboutUs()
    {
        $this->load->model('WorkM');
        $Page = $this->WorkM->GetRow('pages',4);
        $Page['data'] = $this->load->view('public/AboutUs',"" ,True);
        $this->load->view('public/Base',compact('Page'));
      
    }

  

    

}


?>