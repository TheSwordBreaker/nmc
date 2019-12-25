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
        // $pw = $this->input->post('password');
        
        $pw = $this->input->post('password');
        echo $pw."<br>";
        // $pw = password_hash($this->input->post('password'),1);
        echo $pw."<br>";;

        $this->load->model('WorkM');

        if($this->WorkM->CheckUserName($un,$pw)){
            redirect('UserC');
            echo "Done";
        }else {
            
            redirect('WorkC');
            // echo " not Done";
        }
    }


    
    //Users - end

//Homepage - Start

//     public function ViewHomePage()
//     {
//         $this->load->model('WorkM');
//         $UserData = $this->WorkM->Gets('homepage');
//         $this->load->view('private/ViewHomePage',compact('UserData'));
//     }

//     public function loadAddHomePage()
//     {   
//         $up=0;
//         $this->load->view('private/AddHomePage',compact('up'));
//     }

//     public function loadEditHomePage($id)
//     {   
//         $this->load->model('WorkM');
//         $query = $this->db->where(['id'=>$id])->get('homepage');
//         $UserData = $query->result();
//         $up=1;
//         $this->load->view('private/AddHomePage',compact('UserData','up'));
//     }

//     public function AddHomePage()
//     {
//         $na = $this->input->post('Name');
//         $de = $this->input->post('Descripition');
       
//         $config['upload_path']          = './assets/images/homepage';
//         $config['allowed_types']        = 'gif|jpg|png|jpeg';
//         // $config['max_size']             = 10000;
//         // $config['max_width']            = 1024;
//         // $config['max_height']           = 768;

//         $this->load->library('upload', $config);
//         if ( ! $this->upload->do_upload('userfile'))
//         {
//             $this->session->set_flashdata('error', 'Inalid DATA');
//             $this->AddHomePage();      // $this->load->view('upload_form', $error);
//         }
//         else
//         {
//               $im = $this->upload->data('file_name');
//                 $data = array(
//                                 'img ' => $im,
//                                 'name' => $na,
//                                 'des'  => $de);
//                 // $this->load->view('upload_success', $data);

//                 $this->load->model('WorkM');

//                 if($this->WorkM->InsertK('homepage',$data)){
//                     return $this->ViewHomePage();
//                     // echo "done";
//                 }else{
//                     $this->session->set_flashdata('error', 'Inalid DATA');
//                     $this->AddHomePage();
//                 }
//         }
//     }

    


//     public function EditHomePage($id)
//     {
//         $this->load->model('WorkM');
        
//         $i = $this->WorkM->GetRow('homepage',$id);
//         $tempImg = $i[0]->img;
//         $na = $this->input->post('Name');
//         $de = $this->input->post('Descripition');
//         $img = $_FILES['userfile']['name'];
        
//         $data = array(  'name' => $na,
//                         'des'  => $de ,
//                         'img'  => ''   );
//                         // echo $img;
//                         // echo $tempImg;
                        
//         if($img == '' or $img == $tempImg){
//             $data['img']=$tempImg; 
//         }
//        else{
//         $data['img']=$this->UpdateImg('./assets/images/homepage/',$tempImg);
//        } 
                
//         if($this->WorkM->UpdateK('homepage',$id,$data)){
//             return $this->ViewHomePage();
//         }else{
//             $this->session->set_flashdata('error', 'Inalid DATA');
//             $this->AddHomePage();
//         }
        
        
        
        
//     }
    
//     public function RemoveHomePage($id)
//     {
        
//             $this->load->model('WorkM');
//             $i = $this->WorkM->getRow('homepage',$id);
//             $tempImg = $i[0]->img;
           
//             if($this->WorkM->Deletek('homepage',$id)){
//                  // Delete image data 
//                  $this->delImg('./assets/images/homepage/'.$tempImg);
//                 $this->ViewHomePage();
//             }else{
//                 return false;
//             }
           
            
        
//     }

// //Homepage - end


// //Culture - start

//     public function loadAddCulturePage()
//     {   
//         $up=0;
//         $Page['title'] = "Culture" ;
//         $Page['data'] = $this->load->view('private/example',compact('up'),True);
//         $this->load->view('private/Base',compact('Page'));
//         // $this->load->view('private/AddCulturePage',compact('up'));
//     }

//     public function loadEditCulturePage($id)
//     {   
//         $this->load->model('WorkM');
//         $query = $this->db->where(['id'=>$id])->get('CulturePage');
//         $UserData = $query->result();
//         $up=2;
//         $this->load->view('private/AddCulturePage',compact('UserData','up'));
//     }

//     public function AddCulturePage()
//     {
//         $na = $this->input->post('Name');
        
       
//         $config['upload_path']          = './assets/images/culturepage';
//         $config['allowed_types']        = 'gif|jpg|png|jpeg';
//         // $config['max_size']             = 10000;
//         // $config['max_width']            = 1024;
//         // $config['max_height']           = 768;

//         $this->load->library('upload', $config);
//         if ( ! $this->upload->do_upload('userfile'))
//         {
//             $this->session->set_flashdata('error', 'Inalid DATA');
//             $this->AddCulturePage();      // $this->load->view('upload_form', $error);
//         }
//         else
//         {
//               $im = $this->upload->data('file_name');
//                 $data = array(
//                                 'img ' => $im,
//                                 'name' => $na );
//                 // $this->load->view('upload_success', $data);

//                 $this->load->model('WorkM');

//                 if($this->WorkM->InsertK('CulturePage',$data)){
//                     return $this->ViewCulturePage();
//                     // echo "done";
//                 }else{
//                     $this->session->set_flashdata('error', 'Inalid DATA');
//                     $this->AddCulturePage();
//                 }
//         }
//     }

//     public function EditCulturePage($id)
//     {
//         $this->load->model('WorkM');
//         $i = $this->WorkM->getRow('culturepage',$id);
//         $tempImg = $i[0]->img;

//         $na = $this->input->post('Name');
//         $img = $_FILES['userfile']['name'];


//         $data = array(  'name' => $na,
//                         'img'  => ''   );
        
//         if($img == '' or $img == $tempImg){
//             $data['img']=$tempImg; 
//         }
//         else{   
            
//             $data['img']=$this->UpdateImg('./assets/images/culturepage/',$tempImg);
            
//         }
//         if($this->WorkM->UpdateK('CulturePage',$id,$data)){
//             return $this->ViewCulturePage();
//         }else{
//             $this->session->set_flashdata('error', 'Inalid DATA');
//             $this->AddCulturePage();
//         }
//     }
    
//     public function RemoveCulturePage($id)
//     {
        
        
//         $this->load->model('WorkM');
//         $i = $this->WorkM->getRow('culturepage',$id);
//         $tempImg = $i[0]->img;
        
//         if($this->WorkM->DeleteK('CulturePage',$id)){
//             // Delete image data 
//             $this->delImg('./assets/images/culturepage/'.$tempImg); 
//             $this->ViewCulturePage();
//             }else{
//                 return false;
//             }
           

            
        
//     }

// //Culture - End
   
   
// // DestPage - Start 

   

//     public function loadAddDestpage()
//     {   
//         $up=0;
//         $this->load->view('private/AddDestpage',compact('up'));
//     }

//     public function loadEditDestpage($id)
//     {   
//         $this->load->model('WorkM');
//         $query = $this->db->where(['id'=>$id])->get('destpage');
//         $UserData = $query->result();
//         $up=1;
//         $this->load->view('private/AddDestpage',compact('UserData','up'));
//     }

//     public function AddDestpage()
//     {
//         $na = $this->input->post('Name');
//         $de = $this->input->post('Descripition');
        
       
//         $config['upload_path']          = './assets/images/despage';
//         $config['allowed_types']        = 'gif|jpg|png';
//         // $config['max_size']             = 10000;
//         // $config['max_width']            = 1024;
//         // $config['max_height']           = 768;

//         $this->load->library('upload', $config);
//         if ( ! $this->upload->do_upload('userfile'))
//         {
//             $this->session->set_flashdata('error', 'Inalid DATA');
//             $this->AddHomePage();      // $this->load->view('upload_form', $error);
//         }
//         else
//         {
//               $im = $this->upload->data('file_name');
//                 $data = array(
                                
//                                 'img ' => $im,
//                                 'name' => $na,
//                                 'des'  => $de);
//                 // $this->load->view('upload_success', $data);

//                 $this->load->model('WorkM');

//                 if($this->WorkM->InsertK('destpage',$data)){
//                     return $this->ViewDestpage();
//                     // echo "done";
//                 }else{
//                     $this->session->set_flashdata('error', 'Inalid DATA');
//                     $this->AddDestpage();
//                 }
//         }
//     }
 
//     public function EditDestpage($id)
//     {
//         $this->load->model('WorkM');
        
//         $i = $this->WorkM->GetRow('destpage',$id);
//         $tempImg = $i[0]->img;

//         $na = $this->input->post('Name');
//         $de = $this->input->post('Descripition');
//         $img = $_FILES['userfile']['name'];

//         $data = array('img ' => '',
//                     'name' => $na,
//                     'des'  => $de);
       
//         if($img == '' or $img == $tempImg){
//             $data['img']=$tempImg; 
//         }
//        else
//        {
//            $data['img']=$this->UpdateImg('./assets/images/despage/',$tempImg);
//        }
    
//         if($this->WorkM->UpdateK('destpage',$id,$data)){
//             return $this->ViewDestpage();
//         }else{
//             $this->session->set_flashdata('error', 'Inalid DATA');
//             $this->AddDestpage();
//         }
//     }

//     public function RemoveDestpage($id)
//     {
//         $this->load->model('WorkM');
//         $i = $this->WorkM->GetRow('destpage',$id);
//         $tempImg = $i[0]->img;
        
//         if($this->WorkM->DeleteK('destpage',$id)){
//                 // Delete image data 
//             $this->delImg('./assets/images/despage/'.$tempImg); 
//             $this->ViewDestpage();
//         }else{
//             return false;
//         }            
//     }

// // Destpage - end

    
    
    
    



}


?>