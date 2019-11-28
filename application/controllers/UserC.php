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
        $this->load->model('WorkM');
        $UserData = $this->WorkM->Gets('users');
        $Page['title'] = "Admin Area | Dashboard";
        $Page['data'] = $this->load->view('private/dashboard',compact('UserData'),True);
        $this->load->view('private/Base',compact('Page'));

    }

    public function View($k)
    {
        $this->load->model('WorkM');
        $UserData = $this->WorkM->Gets($k);  
        $C = 0;
        $Page['title'] = $k;   
        $Page['data'] = $this->load->view('private/View',compact('UserData','k','C'),True);
        $this->load->view('private/Base',compact('Page'));
    }


    public function Change($k)
    {
        $this->load->model('WorkM');
        $UserData = $this->WorkM->Gets($k);  
        $C = 1;
        $Page['title'] = $k;   
        $Page['data'] = $this->load->view('private/View',compact('UserData','k','C'),True);
        $this->load->view('private/Base',compact('Page'));
    }

    public function FinalChange($k)
    {
        $this->load->model('WorkM');
        $UserData = $this->WorkM->Gets($k);  

        
        $C = 0;
        $Page['title'] = $k;   
        $Page['data'] = $this->load->view('private/View',compact('UserData','k','C'),True);
        $this->load->view('private/Base',compact('Page'));
    }
    
    
    public function LoadAdd($k)
    {   
        $up=0; 
        $this->load->model('WorkM');
        $UserData = $this->WorkM->Gets($k);  
        $Page['title'] = $k;   
        $Page['data'] = $this->load->view('private/Form',compact('UserData','k','up'),True);
        $this->load->view('private/Base',compact('Page'));
    }

    public function loadEdit($k,$id)
    {   
        $this->load->model('WorkM');
        $up=1;
        $UserData =  $this->WorkM->GetRow($k,$id);
        $Page['title'] = $k;   
        $Page['data'] = $this->load->view('private/Form',compact('UserData','k','up'),True);
        $this->load->view('private/Base',compact('Page'));
    }

    public function Add($k)
    {   

     
        if(isset($_POST['Name']))
        {
            $data['name'] = $this->input->post('Name');
        }
        if(isset($_POST['Checkbox']))
        {
            $data['active'] = $this->input->post('Checkbox');
            
            if(null!==($this->input->post('Checkbox'))) {
                    $data['active'] = '1';
            } else {
                   $data['active'] = '0';
            }
        }

       if(isset($_POST['Descripition']))
        {    
            $data['des'] = $this->input->post('Descripition');                
        }
        
        if(isset($_POST['Username']))
        {    
            $data['username'] = $this->input->post('username');                
        }  

        if(isset($_POST['password']))
        {    
            $data['password'] = $this->input->post('password');                
        }  


        if(isset($_FILES['userfile']))
        {
            $img = $_FILES['userfile']['name'];
            
            if($img == ''){
                $data['img']=''; 
            }else{
                $config['upload_path']          = './assets/images/'.$k ;
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                // $config['max_size']             = 10000;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('userfile'))
                {
                    $this->session->set_flashdata('error', 'Inalid DATA');
                    $this->Add($k);      // $this->load->view('upload_form', $error);
                }
                else
                {
                    $data['img'] = $k."/".$this->upload->data('file_name');
                }
            }
        }
           
        // $this->load->view('upload_success', $data);

        $this->load->model('WorkM');

        if(null!=($this->input->post('Checkbox')))
        {
            
             // print_r("checkbox===1");
                        // $this->WorkM->ConfirmK($k);

            
            if($this->WorkM->ConfirmK($k))
            {
                $this->session->set_flashdata('error', 'Inalid DATA');
                $this->LoadAdd($k);

            }
            else
            {
                if($this->WorkM->InsertK($k,$data)){
                    return $this->View($k);
                    // echo "done";
                    }else{
                    $this->session->set_flashdata('error', 'Inalid DATA');
                    $this->LoadAdd($k);
                    }
            }

        }
        else
        {
            if($this->WorkM->InsertK($k,$data)){
                return $this->View($k);
                // echo "done";
                }else{
                $this->session->set_flashdata('error', 'Inalid DATA');
                $this->LoadAdd($k);
                }
        
        }

        // if($this->WorkM->InsertK($k,$data)){
        // return $this->View($k);
        // // echo "done";
        // }else{
        // $this->session->set_flashdata('error', 'Inalid DATA');
        // $this->LoadAdd($k);
        // }
    }



    public function Edit($k,$id)
    {
        $this->load->model('WorkM');   
       
        if(isset($_POST['Name']))
        {
            $data['name'] = $this->input->post('Name');
        }

        if(isset($_POST['Checkbox']))
        {
            $data['active'] = $this->input->post('Checkbox');
        }


        if(isset($_POST['Descripition']))
        {    
            $data['des'] = $this->input->post('Descripition');                
        }
        
        if(isset($_POST['Username']))
        {    
            $data['username'] = $this->input->post('username');                
        }  

        if(isset($_POST['password']))
        {    
            $data['password'] = $this->input->post('password');                
        }  

        if(null!==($this->input->post('Checkbox'))) 
        {
            $data['active'] = '1';
            
        } else 
        {
            $data['active'] = '0';
        }


        if(isset($_FILES['userfile']))
        {    
            $i = $this->WorkM->GetRow($k,$id);
            $tempImg = $i[0]->img;
            
            $img = $_FILES['userfile']['name'];
            
            if($img == '' or $img == $tempImg){
                $data['img']=$tempImg; 
            }
            else{
            $data['img']=$k."/".$this->UpdateImg('./assets/images/'.$k."/",$tempImg,$k,$id);
            } 
        }



        if($data['active'] == '1')
        {
            if($this->WorkM->ConfirmK($k))
            {
                    print_r("can't select more");
            }
            else
            {
                if($this->WorkM->UpdateK($k,$id,$data))
                {
                    return $this->View($k);
                }else
                {
                    $this->session->set_flashdata('error', 'Inalid DATA');
                    print("select only 3....");
                    $this->Add($k);
                }
            }
    
        }
        else
        {
            if($this->WorkM->UpdateK($k,$id,$data))
                {
                    return $this->View($k);
                }else
                {   
                    $this->session->set_flashdata('error', 'Inalid DATA');
                    print("select only 3....");
                    $this->Add($k);
                }
        }
        
        // if($data[active]==1)
        // {
        //     $res=$this->WorkM->ConfirmK($k);
        //     if($res==3)
        //     {
        //         print_r("only 3 fields should be selected!!!...");
        //     }
        // }
        // else
        // {
        //     if($this->WorkM->UpdateK($k,$id,$data)){
        //         return $this->View($k);
        //     }else{
        //         $this->session->set_flashdata('error', 'Inalid DATA');
        //         // print("select only 3....");
        //         $this->Add($k);
        //     }
        // }
    

            
        
    }
    
    public function Remove($k,$id)
    {
        
            $this->load->model('WorkM');
            $tempImg = ' ';
            $i = $this->WorkM->getRow($k,$id);
            if(isset($i[0]->img)){
                $tempImg = $i[0]->img;
                $this->delImg('./assets/images/'.$k."/".$tempImg);
            }
           
            if($this->WorkM->Deletek($k,$id)){
                 // Delete image data 
                $this->View($k);
            }else{
                return false;
            }
           
            
        
    }

    
public function UpdateImg($path,$tempImg,$k,$id){
    $config['upload_path']          = $path;
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 100000000;
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('userfile'))
    {
        $this->session->set_flashdata('error', $this->upload->display_errors());
        $this->loadEdit($k,$id);      // $this->load->view('upload_form', $error);
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


    // public function loadAddUsers()
    // {   
    //     $up=0; 
    //     $this->load->view('private/AddUsers',compact('up'));
    // }

    // public function loadEditUsers($id)
    // {   
    //     $this->load->model('WorkM','user');
    //     $query = $this->db->where(['id'=>$id])->get('users');
    //     $UserData = $query->result();
    //     $up=1;
    //     $this->load->view('private/AddUsers',compact('UserData','up'));
    // }

    // public function AddUser()
    // {
    //     $un = $this->input->post('username');
    //     $pw = $this->input->post('password');
        
    //     $data = array(
    //         'username' => $un,
    //         'password' => $pw
    //     );
    //     $this->load->model('WorkM');
    //     if($this->WorkM->InsertK('users',$data)){
    //         return $this->ViewUsers();
    //     }else{
    //         $this->session->set_flashdata('error', 'Inalid DATA');
    //         $this->Adduser();
    //     }
    // }

    // public function EditUsers($id)
    // {
    //     $un = $this->input->post('username');
    //     $pw = $this->input->post('password');

    //     $data = array(
    //         'username' => $un,
    //         'password' => $pw
    //     );

    //     $this->load->model('WorkM');
    //     if($this->WorkM->UpdateK('users',$id,$data)){
    //         return $this->ViewUsers();
    //     }else{
    //         $this->session->set_flashdata('error', 'Inalid DATA');
    //         $this->Adduser();
    //     }
    // }

    // public function RemoveUsers($id)
    // {
    //     $this->load->model('WorkM');
    //     // $this->WorkM->DeleteUser($id);
    //     if($this->WorkM->DeleteK('users',$id)){
    //         $this->ViewUsers();
    //     }else{
    //         return false;
    //     }
    // }
    



// other - functions

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