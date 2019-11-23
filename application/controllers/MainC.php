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
        $sec3 = $this->WorkM->Gets('homeSec10');
        $sec2 = $this->WorkM->Gets('homeSec2');
        $this->load->view('public/home',compact('data','sec2','sec3'));
    }


    public function Search()
    {
        $this->load->model('WorkM');
        if($this->input->post('query'))
        {
            $query = $this->input->post('query');
        }
        return redirect("MainC/SerachResult/$query");
    }
    
    
    

    public function FoodStuff()
    {
        $this->load->model('WorkM');
        $sec1 = $this->WorkM->Gets('foodsec1');
        $sec2 = $this->WorkM->Gets('foodsec2');
        $sec3 = $this->WorkM->Gets('foodsec3');
        $sec4 = $this->WorkM->Gets('foodsec4');
        $Page = $this->WorkM->GetRow('pages',5);

        $Page['data'] = $this->load->view('public/FoodStuff',compact('sec1','sec2','sec3','sec4'),True);

        $this->load->view('public/Base',compact('Page'));
    }
    
    public function Dest()
    {
        $this->load->model('WorkM');
           
            $data = $this->WorkM->GetS('destpage');
            $Page = $this->WorkM->GetRow('pages',2);
            $Page['data'] = $this->load->view('public/Dest',compact('data'),True);
            $this->load->view('public/Base',compact('Page'));
    }

    public function Places($Name=NULL)
    {
        $this->load->model('WorkM');
            $data = $this->WorkM->GetName($Name);
            $Page = $this->WorkM->GetRow('pages',2);
            $Page['data'] = $this->load->view('public/Blog',compact('data'),True);
            $this->load->view('public/Base',compact('Page'));
    }
    
    public function Cul()
    {
        $this->load->model('WorkM');
        // $data = $this->WorkM->Gets('culturepage');

        //$data = $this->WorkM->GetS('destpage');
        //$this->load->view('public/Cul',compact('data','sec2'));

        $data = $this->WorkM->GetS('destpage');
        $this->load->view('public/Culture',compact('data'));

        // $this->load->view('public/FoodStuff',compact('data','sec2'));
        $data = $this->WorkM->Gets('culturepage');
        $Page = $this->WorkM->GetRow('pages',3);
        $Page['data'] = $this->load->view('public/FoodStuff',compact('data','sec2'),True);
        $this->load->view('public/Base',compact('Page'));
    }

       public function AboutUs()
    {
        $this->load->model('WorkM');
        $Page = $this->WorkM->GetRow('pages',4);
        $Page['data'] = $this->load->view('public/AboutUs',"" ,True);
        $this->load->view('public/Base',compact('Page'));
      
    }


    public function SerachResult($query)
    {
        $this->load->model('WorkM');
        $data = $this->WorkM->fetch_row($query);
        $config = [
            'base_url'   => base_url('/MainC/SearchResult/'.$query),
            'per_page'   => 8,
            'total_rows' => $data,
            'uri_segment' => 4,
            'full_tag_open' => '<ul class="pagination pagination-info">',
            'full_tag_close' => "</ul>",
            'attributes' => array('class' => 'page-link'),
        ];
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class=" page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class=" page-item">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = 'prev';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = 'next';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active page-item"><a class="page-link">';
        $config['cur_tag_close'] = '<a></li>';

        $this->pagination->initialize($config);
        $offset = $this->uri->segment(4);
       


        $result = $this->WorkM->fetch_limit($data,$config['per_page'],$offset);
        
        $Page = $this->WorkM->GetRow('pages',5);
        $Page['data'] =  $this->load->view('public/Search',compact('result'),True);
        $this->load->view('public/Base',compact('Page'));
    }

    public function All($table)
    {
        $this->load->model('WorkM');

        $config = [
            'base_url'   => base_url('MainC/All/'.$table),
            'per_page'   => 6,
            'total_rows' => $this->WorkM->GetNumRow($table),
            'full_tag_open' => '<ul class="pagination pagination-info">',
            'full_tag_close' => "</ul>",
            'attributes' => array('class' => 'page-link'),
        ];
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class=" page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class=" page-item">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = 'prev';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = 'next';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active page-item"><a class="page-link">';
        $config['cur_tag_close'] = '<a></li>';

        $this->pagination->initialize($config);
        $offset = $this->uri->segment(4);
        $data = $this->WorkM->GetAll($table,$config['per_page'],$offset);





        $Page = $this->WorkM->GetRow('pages',5);
        $Page['data'] = $this->load->view('public/ex',compact('data'),True);
        $this->load->view('public/Base',compact('Page'));
    }

  

    

}


?>