<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class UserC extends CI_Controller{

    public function __construct()  
    {
        parent::__construct();
        if(!$this->session->userdata('username'))
        {
            redirect('MainC');
        }
    }

// Menu - Start

    public function index()
    {
        // $this->load->view('private/example');
        $this->load->model('WorkM','user');
        $UserData = $this->user->Gets('users');
        $this->load->view('private/dashboard',compact('UserData'));
    }

    public function ViewUsers()
    {
        $this->load->model('WorkM','user');
        $UserData = $this->user->Gets('users');     
        $this->load->view('private/ViewUsers',compact('UserData'));
    }

   

    public function ViewDestPage()
    {
        $this->load->model('WorkM');
        $UserData = $this->WorkM->Gets('DestPage');
        $this->load->view('private/ViewDestpage',compact('UserData'));
    }

    public function ViewCulturePage()
    {
        $this->load->model('WorkM');
        $UserData = $this->WorkM->Gets('culturepage');
        $this->load->view('private/ViewCulturePage',compact('UserData'));
    }

    public function ViewFoodPage()
    {
        $this->load->model('WorkM');
        $UserData = $this->WorkM->Gets('foodpage');
        $this->load->view('private/ViewFoodPage',compact('UserData'));
    }


    public function map()
    {
        $this->load->view('private/map.php');
    }
    public function user()
    {
        $this->load->view('private/user.php');
    }
    public function tables()
    {
        $this->load->view('private/tables.php');
    }

// Menu - end   

//users - start


    public function loadAddUsers()
    {   
        $up=0; 
        $this->load->view('private/AddUsers',compact('up'));
    }

    public function loadEditUsers($id)
    {   
        $this->load->model('WorkM','user');
        $query = $this->db->where(['id'=>$id])->get('users');
        $UserData = $query->result();
        $up=1;
        $this->load->view('private/AddUsers',compact('UserData','up'));
    }

    public function AddUser()
    {
        $un = $this->input->post('username');
        $pw = $this->input->post('password');
        
        $data = array(
            'username' => $un,
            'password' => $pw
        );
        $this->load->model('WorkM');
        if($this->WorkM->InsertK('users',$data)){
            return $this->ViewUsers();
        }else{
            $this->session->set_flashdata('error', 'Inalid DATA');
            $this->Adduser();
        }
    }

    public function EditUsers($id)
    {
        $un = $this->input->post('username');
        $pw = $this->input->post('password');

        $data = array(
            'username' => $un,
            'password' => $pw
        );

        $this->load->model('WorkM');
        if($this->WorkM->UpdateK('users',$id,$data)){
            return $this->ViewUsers();
        }else{
            $this->session->set_flashdata('error', 'Inalid DATA');
            $this->Adduser();
        }
    }

    public function RemoveUsers($id)
    {
        $this->load->model('WorkM');
        // $this->WorkM->DeleteUser($id);
        if($this->WorkM->DeleteK('users',$id)){
            $this->ViewUsers();
        }else{
            return false;
        }
    }
    
//Users - end

//Homepage - Start

    public function ViewHomePage()
    {
        $this->load->model('WorkM');
        $UserData = $this->WorkM->Gets('homepage');
        $this->load->view('private/ViewHomePage',compact('UserData'));
    }

    public function loadAddHomePage()
    {   
        $up=0;
        $this->load->view('private/AddHomePage',compact('up'));
    }

    public function loadEditHomePage($id)
    {   
        $this->load->model('WorkM');
        $query = $this->db->where(['id'=>$id])->get('homepage');
        $UserData = $query->result();
        $up=1;
        $this->load->view('private/AddHomePage',compact('UserData','up'));
    }

    public function AddHomePage()
    {
        $na = $this->input->post('Name');
        $de = $this->input->post('Descripition');
       
        $config['upload_path']          = './assets/images/homepage';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        // $config['max_size']             = 10000;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('userfile'))
        {
            $this->session->set_flashdata('error', 'Inalid DATA');
            $this->AddHomePage();      // $this->load->view('upload_form', $error);
        }
        else
        {
              $im = $this->upload->data('file_name');
                $data = array(
                                'img ' => $im,
                                'name' => $na,
                                'des'  => $de);
                // $this->load->view('upload_success', $data);

                $this->load->model('WorkM');

                if($this->WorkM->InsertK('homepage',$data)){
                    return $this->ViewHomePage();
                    // echo "done";
                }else{
                    $this->session->set_flashdata('error', 'Inalid DATA');
                    $this->AddHomePage();
                }
        }
    }

    


    public function EditHomePage($id)
    {
        $this->load->model('WorkM');
        
        $i = $this->WorkM->GetRow('homepage',$id);
        $tempImg = $i[0]->img;
        $na = $this->input->post('Name');
        $de = $this->input->post('Descripition');
        $img = $_FILES['userfile']['name'];
        
        $data = array(  'name' => $na,
                        'des'  => $de ,
                        'img'  => ''   );
                        // echo $img;
                        // echo $tempImg;
                        
        if($img == '' or $img == $tempImg){
            $data['img']=$tempImg; 
        }
       else{
        $data['img']=$this->UpdateImg('./assets/images/homepage/',$tempImg);
       } 
                
        if($this->WorkM->UpdateK('homepage',$id,$data)){
            return $this->ViewHomePage();
        }else{
            $this->session->set_flashdata('error', 'Inalid DATA');
            $this->AddHomePage();
        }
        
        
        
        
    }
    
    public function RemoveHomePage($id)
    {
        
            $this->load->model('WorkM');
            $i = $this->WorkM->getRow('homepage',$id);
            $tempImg = $i[0]->img;
           
            if($this->WorkM->Deletek('homepage',$id)){
                 // Delete image data 
                 $this->delImg('./assets/images/homepage/'.$tempImg);
                $this->ViewHomePage();
            }else{
                return false;
            }
           
            
        
    }

//Homepage - end


//Culture - start

    public function loadAddCulturePage()
    {   
        $up=0;
        $this->load->view('private/AddCulturePage',compact('up'));
    }

    public function loadEditCulturePage($id)
    {   
        $this->load->model('WorkM');
        $query = $this->db->where(['id'=>$id])->get('CulturePage');
        $UserData = $query->result();
        $up=2;
        $this->load->view('private/AddCulturePage',compact('UserData','up'));
    }

    public function AddCulturePage()
    {
        $na = $this->input->post('Name');
        
       
        $config['upload_path']          = './assets/images/culturepage';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        // $config['max_size']             = 10000;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('userfile'))
        {
            $this->session->set_flashdata('error', 'Inalid DATA');
            $this->AddCulturePage();      // $this->load->view('upload_form', $error);
        }
        else
        {
              $im = $this->upload->data('file_name');
                $data = array(
                                'img ' => $im,
                                'name' => $na );
                // $this->load->view('upload_success', $data);

                $this->load->model('WorkM');

                if($this->WorkM->InsertK('CulturePage',$data)){
                    return $this->ViewCulturePage();
                    // echo "done";
                }else{
                    $this->session->set_flashdata('error', 'Inalid DATA');
                    $this->AddCulturePage();
                }
        }
    }

    public function EditCulturePage($id)
    {
        $this->load->model('WorkM');
        $i = $this->WorkM->getRow('culturepage',$id);
        $tempImg = $i[0]->img;

        $na = $this->input->post('Name');
        $img = $_FILES['userfile']['name'];


        $data = array(  'name' => $na,
                        'img'  => ''   );
        
        if($img == '' or $img == $tempImg){
            $data['img']=$tempImg; 
        }
        else{   
            

            $data['img']=$this->UpdateImg('./assets/images/culturepage/',$tempImg);
            
        }
        if($this->WorkM->UpdateK('CulturePage',$id,$data)){
            return $this->ViewCulturePage();
        }else{
            $this->session->set_flashdata('error', 'Inalid DATA');
            $this->AddCulturePage();
        }
    }
    
    public function RemoveCulturePage($id)
    {
        
        
        $this->load->model('WorkM');
        $i = $this->WorkM->getRow('culturepage',$id);
        $tempImg = $i[0]->img;
        
        if($this->WorkM->DeleteK('CulturePage',$id)){
            // Delete image data 
            $this->delImg('./assets/images/culturepage/'.$tempImg); 
            $this->ViewCulturePage();
            }else{
                return false;
            }
           

            
        
    }

//Culture - End
   
   
// DestPage - Start 

   

    public function loadAddDestpage()
    {   
        $up=0;
        $this->load->view('private/AddDestpage',compact('up'));
    }

    public function loadEditDestpage($id)
    {   
        $this->load->model('WorkM');
        $query = $this->db->where(['id'=>$id])->get('destpage');
        $UserData = $query->result();
        $up=1;
        $this->load->view('private/AddDestpage',compact('UserData','up'));
    }

    public function AddDestpage()
    {
        $na = $this->input->post('Name');
        $de = $this->input->post('Descripition');
        
       
        $config['upload_path']          = './assets/images/despage';
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 10000;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('userfile'))
        {
            $this->session->set_flashdata('error', 'Inalid DATA');
            $this->AddHomePage();      // $this->load->view('upload_form', $error);
        }
        else
        {
              $im = $this->upload->data('file_name');
                $data = array(
                                
                                'img ' => $im,
                                'name' => $na,
                                'des'  => $de);
                // $this->load->view('upload_success', $data);

                $this->load->model('WorkM');

                if($this->WorkM->InsertK('destpage',$data)){
                    return $this->ViewDestpage();
                    // echo "done";
                }else{
                    $this->session->set_flashdata('error', 'Inalid DATA');
                    $this->AddDestpage();
                }
        }
    }
 
    public function EditDestpage($id)
    {
        $this->load->model('WorkM');
        
        $i = $this->WorkM->GetRow('destpage',$id);
        $tempImg = $i[0]->img;

        $na = $this->input->post('Name');
        $de = $this->input->post('Descripition');
        $img = $_FILES['userfile']['name'];

        $data = array('img ' => '',
                    'name' => $na,
                    'des'  => $de);
       
        if($img == '' or $img == $tempImg){
            $data['img']=$tempImg; 
        }
       else
       {
           $data['img']=$this->UpdateImg('./assets/images/despage/',$tempImg);
       }
    
        if($this->WorkM->UpdateK('destpage',$id,$data)){
            return $this->ViewDestpage();
        }else{
            $this->session->set_flashdata('error', 'Inalid DATA');
            $this->AddDestpage();
        }
    }

    public function RemoveDestpage($id)
    {
        $this->load->model('WorkM');
        $i = $this->WorkM->GetRow('destpage',$id);
        $tempImg = $i[0]->img;
        
        if($this->WorkM->DeleteK('destpage',$id)){
                // Delete image data 
            $this->delImg('./assets/images/despage/'.$tempImg); 
            $this->ViewDestpage();
        }else{
            return false;
        }            
    }

// Destpage - end


// FoodPage - Start 

   

public function loadAddFoodpage()
{   
    $up=0;
    $this->load->view('private/AddFoodpage',compact('up'));
}

public function loadEditFoodpage($id)
{   
    $this->load->model('WorkM');
    $query = $this->db->where(['id'=>$id])->get('foodpage');
    $UserData = $query->result();
    $up=1;
    $this->load->view('private/AddFoodpage',compact('UserData','up'));
}

public function AddFoodpage()
{
    $na = $this->input->post('Name');
    $de = $this->input->post('Descripition');
    
   
    $config['upload_path']          = './assets/images/foodpage';
    $config['allowed_types']        = 'gif|jpg|png';
    // $config['max_size']             = 10000;
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('userfile'))
    {
        $this->session->set_flashdata('error', 'Inalid DATA');
        $this->AddHomePage();      // $this->load->view('upload_form', $error);
    }
    else
    {
          $im = $this->upload->data('file_name');
            $data = array(
                            
                            'img ' => $im,
                            'name' => $na,
                            'des'  => $de);
            // $this->load->view('upload_success', $data);

            $this->load->model('WorkM');

            if($this->WorkM->InsertK('destpage',$data)){
                return $this->ViewDestpage();
                // echo "done";
            }else{
                $this->session->set_flashdata('error', 'Inalid DATA');
                $this->AddDestpage();
            }
    }
}

public function EditDestpage($id)
{
    $this->load->model('WorkM');
    
    $i = $this->WorkM->GetRow('destpage',$id);
    $tempImg = $i[0]->img;

    $na = $this->input->post('Name');
    $de = $this->input->post('Descripition');
    $img = $_FILES['userfile']['name'];

    $data = array('img ' => '',
                'name' => $na,
                'des'  => $de);
   
    if($img == '' or $img == $tempImg){
        $data['img']=$tempImg; 
    }
   else
   {
       $data['img']=$this->UpdateImg('./assets/images/despage/',$tempImg);
   }

    if($this->WorkM->UpdateK('destpage',$id,$data)){
        return $this->ViewDestpage();
    }else{
        $this->session->set_flashdata('error', 'Inalid DATA');
        $this->AddDestpage();
    }
}

public function RemoveDestpage($id)
{
    $this->load->model('WorkM');
    $i = $this->WorkM->GetRow('destpage',$id);
    $tempImg = $i[0]->img;
    
    if($this->WorkM->DeleteK('destpage',$id)){
            // Delete image data 
        $this->delImg('./assets/images/despage/'.$tempImg); 
        $this->ViewDestpage();
    }else{
        return false;
    }            
}

// Destpage - end



// other - functions

public function UpdateImg($path,$tempImg){
            $config['upload_path']          = $path;
            $config['allowed_types']        = 'gif|jpg|png';
            // $config['max_size']             = 10000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('userfile'))
            {
                $this->session->set_flashdata('error', 'Inalid DATA');
                $this->AddDestpage();      // $this->load->view('upload_form', $error);
            }
            else
            {
                $this->delImg($path.$tempImg);
                $im = $this->upload->data('file_name');
                return $im;
                                    
                    // $this->load->view('upload_success', $data);
            }
    }
    
    public function DelImg($tempImg){
        if( file_exists($tempImg) )
                { 
                    unlink($tempImg); 
                } 
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect('MainC');
        // $this->session->unset_userdata('id');
    }
}


?>

<!--


    public function View  ()
        {
            $this->load->model('WorkM');
            $UserData = $this->WorkM->Gets('  ');
            $this->load->view('private/View ',compact('UserData'));
        }
    public function loadAdd ()
    {   
        $up=0;
        $this->load->view('private/Add ',compact('up'));
    }

    public function loadEdit ($id)
    {   
        $this->load->model('WorkM');
        $query = $this->db->where(['id'=>$id])->get(' ');
        $UserData = $query->result();
        $up=1;
        $this->load->view('private/Add ',compact('UserData','up'));
    }

    public function Add ()
    {
        $na = $this->input->post('Name');
        $de = $this->input->post('Descripition');
        
       
        $config['upload_path']          = './assets/images/despage';
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 10000;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('userfile'))
        {
            $this->session->set_flashdata('error', 'Inalid DATA');
            $this->AddHomePage();      // $this->load->view('upload_form', $error);
        }
        else
        {
              $im = $this->upload->data('file_name');
                $data = array(
                                
                                'img ' => $im,
                                'name' => $na,
                                'des'  => $de);
                // $this->load->view('upload_success', $data);

                $this->load->model('WorkM');

                if($this->WorkM->InsertK(' ',$data)){
                    return $this->View ();
                    // echo "done";
                }else{
                    $this->session->set_flashdata('error', 'Inalid DATA');
                    $this->Add ();
                }
        }
    }
 
    public function Edit ($id)
    {
        $this->load->model('WorkM');
        
        $i = $this->WorkM->GetRow(' ',$id);
        $tempImg = $i[0]->img;

        $na = $this->input->post('Name');
        $de = $this->input->post('Descripition');
        $img = $_FILES['userfile']['name'];

        $data = array('img ' => '',
                    'name' => $na,
                    'des'  => $de);
       
        if($img == '' or $img == $tempImg){
            $data['img']=$tempImg; 
        }
       else
       {
           $data['img']=$this->UpdateImg('./assets/images/despage/',$tempImg);
       }
    
        if($this->WorkM->UpdateK(' ',$id,$data)){
            return $this->View ();
        }else{
            $this->session->set_flashdata('error', 'Inalid DATA');
            $this->Add ();
        }
    }

    public function Remove($id)
    {
        $this->load->model('WorkM');
        $i = $this->WorkM->GetRow('',$id);
        $tempImg = $i[0]->img;
        
        if($this->WorkM->DeleteK('',$id)){
                // Delete image data 
            $this->delImg('./assets/images//'.$tempImg); 
            $this->View();
        }else{
            return false;
        }            
    }

-->