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
        $data = $this->WorkM->Gets('homesec1');
        $sec2 = $this->WorkM->Gets('homesec2');
        $sec3 = $this->WorkM->Gets('homesec3');
        $sec4 = $this->WorkM->Gets('homesec4');

        $this->load->view('public/Home',compact('data','sec2','sec3','sec4' ));
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
        $Page['navbar'] = $this->WorkM->Gets('navbar');


        $this->load->view('public/Base',compact('Page'));
    }
    
    
    public function Dest()
    {
        $this->load->model('WorkM');    
            $sec1 = $this->WorkM->Gets('destsec1');
            $sec2 = $this->WorkM->Gets('destsec2');
            $sec3 = $this->WorkM->Gets('destsec3');
            $sec4 = $this->WorkM->Gets('destsec4');
            $sec5 = $this->WorkM->Gets('destsec5');
            $sec6 = $this->WorkM->Gets('destsec6');
            $sec7 = $this->WorkM->Gets('destsec7');
            $Page = $this->WorkM->GetRow('pages',2);
            $Page['data'] = $this->load->view('public/Dest',compact('sec1','sec2','sec3','sec4','sec5','sec6','sec7' ),True);
            $Page['navbar'] = $this->WorkM->Gets('navbar');
            $this->load->view('public/Base',compact('Page'));
        

    }
    public function Culture()
    {
        $this->load->model('WorkM');
        $sec1 = $this->WorkM->Gets('culsec1');
        $sec2 = $this->WorkM->Gets('culsec2');
        $sec3 = $this->WorkM->Gets('culsec3');
        $Page = $this->WorkM->GetRow('pages',3);
        $Page['data'] = $this->load->view('public/Culture',compact('sec1','sec2','sec3'),True);
        $Page['navbar'] = $this->WorkM->Gets('navbar');
        $this->load->view('public/Base',compact('Page'));     
    }

    


    public function AboutUs()
    {
        $this->load->model('WorkM');
        $Page = $this->WorkM->GetRow('pages',4);
        $Page['data'] = $this->load->view('public/AboutUs',"" ,True);
        $Page['navbar'] = $this->WorkM->Gets('navbar');
        $this->load->view('public/Base',compact('Page'));
      
    }


    public function Places($Name=NULL)
    {
        $this->load->model('WorkM');
        $N = explode("%20",$Name);
        
            $data = $this->WorkM->GetName($N[0]);


            $Page = $this->WorkM->GetRow('pages',2);
            $Page['data'] = $this->load->view('public/Places',compact('data'),True);
            $Page['navbar'] = $this->WorkM->Gets('navbar');

            $this->load->view('public/Base',compact('Page'));
    }

    public function Search()
    {
        $this->load->model('WorkM');
        if($this->input->post('query'))
        {
            $query = $this->input->post('query');
            $S = explode(" ",$query);
            $S = $S[0];
        }
        return redirect("MainC/SearchResult/$S");
    }
    
    public function SearchResult($query)
    {
        $this->load->model('WorkM');
        $row = $this->WorkM->fetch_row($query);
        $config = [
            'base_url'   => base_url('/MainC/SearchResult/'.$query),
            'per_page'   => 6,
            'total_rows' => $row,
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
       


        $result = $this->WorkM->fetch_limit($query,$config['per_page'],$offset);
        
        $Page = $this->WorkM->GetRow('pages',5);
        $Page['data'] =  $this->load->view('public/Search',compact('result'),True);
        $Page['navbar'] = $this->WorkM->Gets('navbar');
        $this->load->view('public/Base',compact('Page'));
    }


    public function Contact()
    {
        // echo "in contact";
        if (isset($_POST['name'])) {
            $data['name'] = $this->input->post('name');
        }

        if (isset($_POST['email'])) {
            $data['email'] = $this->input->post('email');
        }

        if (isset($_POST['msg'])) {
            $data['msg'] = $this->input->post('msg');
        }

        $k='contact';
        $this->load->model('WorkM');
        if ($this->WorkM->InsertK($k, $data)) {
            return $this->index();
            // echo "done";
        } else {
            $this->session->set_flashdata('error', 'Inalid DATA');
            
        }

    }
  


    public function Feedback()
    {
        // echo "in contact";
        if (isset($_POST['name'])) {
            $data['name'] = $this->input->post('name');
        }

        

        if (isset($_POST['msg'])) {
            $data['msg'] = $this->input->post('msg');
        }

        $k='feedback';
        
        $this->load->model('WorkM');
        if ($this->WorkM->InsertK($k, $data)) {
            return $this->index();

            // echo "done";
        } else {
            $this->session->set_flashdata('error', 'Inalid DATA');
            
        }

    }

    public function All($table)
    {   
        if($table == "destination" ||  $table == "destination" || $table == "destination"){
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
        $config['next_link'] = '>>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '<<';
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
        $Page['data'] = $this->load->view('public/All',compact('data'),True);
        $Page['navbar'] = $this->WorkM->Gets('navbar');

        $this->load->view('public/Base',compact('Page'));
    }else{
            redirect('MainC/All/destination');
    }
        }
   
  

    

}


?>