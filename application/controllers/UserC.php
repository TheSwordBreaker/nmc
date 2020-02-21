<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserC extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('MainC');
        }
    }

    // Menu - Start

    public function index()
    {
        // $this->load->view('private/example');
        $this->load->model('WorkM');
        $k = 0;
        $UserData = $this->WorkM->Gets('users');
        $Page['title'] = "Admin Area | Dashboard";
        $Page['data'] = $this->load->view('private/dashboard', compact('UserData', 'k'), True);
        $this->load->view('private/Base', compact('Page'));
    }

    public function View($k)
    {
        $this->load->model('WorkM');
        $UserData = $this->WorkM->Gets($k);
        $C = 0;
        $Page['title'] = $k;
        $Page['data'] = $this->load->view('private/View', compact('UserData', 'k', 'C'), True);
        $this->load->view('private/Base', compact('Page'));
    }

    public function Change($k)
    {
        $this->load->model('WorkM');
        $data = $this->WorkM->Gets($k);
        $C = 1;
        $this->WorkM->start_tra();
        $Page['title'] = $k;
        $Page['data'] = $this->load->view('private/View', compact('data', 'k', 'C'), True);
        $this->load->view('private/Base', compact('Page'));
    }

    public function loadAdd($k)
    {
        $up = 0;
        $this->load->model('WorkM');
        $UserData = $this->WorkM->Gets($k);
        $Page['title'] = $k;
        $Page['data'] = $this->load->view('private/Form', compact('UserData', 'k', 'up'), True);
        $this->load->view('private/Base', compact('Page'));
    }

    public function loadEdit($k, $id)
    {
        $this->load->model('WorkM');
        $up = 1;
        $UserData =  $this->WorkM->GetRow($k, $id);
        $Page['title'] = $k;
        $Page['data'] = $this->load->view('private/Form', compact('UserData', 'k', 'up'), True);
        $this->load->view('private/Base', compact('Page'));
    }


    public function loadChange($k)
    {
        $this->load->model('WorkM');
        $this->WorkM->start_tra();
        redirect('UserC/Change/' . $k);
    }

    public function rollBack($k)
    {
        $this->load->model('WorkM');
        $this->WorkM->rollback_tra();
        redirect('UserC/View/' . $k);
    }

    public function finalChange($k)
    {
        $this->load->model('WorkM');

        if (isset($_POST['submit'])) {

            if (!empty($_POST['check_list'])) {

                $id = $_POST['check_list'];
                if ($this->WorkM->Change($k, $id)) {
                    $this->WorkM->commit_tra();
                    redirect('UserC/View/' . $k);
                } else {
                    echo "Not done";
                }
            } else {
                echo "<b>Please Select Atleast One Option.</b>";
            }
        }
    }



    public function Add($k)
    {
        $this->load->model('WorkM');
        if (isset($_POST['Name'])) {
            $data['name'] = $this->input->post('Name');
            $this->form_validation->set_rules('Name', 'Name', 'required|max_length[20]|min_length[1]');
        }

        if (isset($_POST['link'])) {
            $data['link'] = $this->input->post('link');
        }

        if (isset($_POST['Descripition'])) {
            $des = $this->input->post('Descripition');
            $des = html_escape($des);
            $data['des'] = $this->security->xss_clean($des);
            $this->form_validation->set_rules('Descripition', 'Description', 'required');
        }

        if (isset($_POST['username'])) {
            $data['username'] = $this->input->post('username');
            $this->form_validation->set_rules('username','UserName','required');
            // $data['password'] = $this->input->post('password');
            $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $this->form_validation->set_rules('password','password','required');
        }

        if (isset($_FILES['userfile'])) {
            $img = $_FILES['userfile']['name'];

            if ($img == '') {
                $data['img'] = '';
            } else {
                $config['upload_path']          = './assets/images/' . $k;
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                // $config['max_size']             = 10000;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('userfile')) {
                    $this->session->set_flashdata('error', 'cant upload');
                    redirect('UserC/loadAdd/' . $k);      // $this->load->view('upload_form', $error);
                } else {
                    $data['img'] = $k . "/" . $this->upload->data('file_name');
                }
            }
            if (empty($_FILES['userfile']['name'])) {
                $this->form_validation->set_rules('userfile', 'image', 'required');
            }
        }
        
         if ($this->form_validation->run()) {
            if ($this->WorkM->InsertK($k, $data)) {
                 redirect('UserC/Change/' . $k);
                
                
            } else {
                $this->session->set_flashdata('error', 'CAN\'T INSERT');
                redirect('UserC/loadAdd/' . $k);
            }
        } else {
            $this-> error_display1($k); 
            
        }

    }
    public function function_alert($msg,$k,$id){

        $this->session->set_flashdata('error', $msg);
        redirect('UserC/loadEdit/' . $k .'/' .$id);
        }
    public function error_display($k,$id)
    {  
       
       if(form_error('Name')!=NULL){

        $this->function_alert(form_error('Name'),$k,$id);
        }
       elseif(form_error('Descripition')!=NULL){
        $this->function_alert(form_error('Descripition'),$k,$id);
        }
        elseif(form_error('userfile')!=NULL){
            $this->function_alert(form_error('userfile'),$k,$id);
        }
        elseif(form_error('username')!=NULL){
            $this->function_alert(form_error('username'),$k,$id);
        }
        elseif(form_error('password')!=NULL){
            $this->function_alert(form_error('password'),$k,$id);
        }
    }
    public function function_alert1($msg,$k){

        $this->session->set_flashdata('error', $msg);
        redirect('UserC/loadAdd/' . $k);
        }
    public function error_display1($k)
    {  
       
       if(form_error('Name')!=NULL){

        $this->function_alert1(form_error('Name'),$k);
        }
       elseif(form_error('Descripition')!=NULL){
        $this->function_alert1(form_error('Descripition'),$k);
        }
        elseif(form_error('userfile')!=NULL){
            $this->function_alert1(form_error('userfile'),$k);
        }
        elseif(form_error('username')!=NULL){
            $this->function_alert1(form_error('username'),$k);
        }
        elseif(form_error('password')!=NULL){
            $this->function_alert1(form_error('password'),$k);
        }
    }

    public function Edit($k, $id)
    {
        $this->load->model('WorkM');

        if (isset($_POST['Name'])) {
            $data['name'] = $this->input->post('Name');
            $this->form_validation->set_rules('Name','Name','required|max_length[20]|min_length[1]');
        }

        if (isset($_POST['Descripition'])) {
            $data['des'] = $this->input->post('Descripition');
            $this->form_validation->set_rules('Descripition','Description','required');
        }

        if (isset($_POST['link'])) {
            $data['link'] = $this->input->post('link');
        }

        if (isset($_POST['username'])) {
            $data['username'] = $this->input->post('username');
            $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            echo "<script>console.log(" + $data['password'] + ")<script>";
            $this->form_validation->set_rules('username','user name','required');
        }

        if (isset($_POST['password'])) {
            // $data['password'] = $this->input->post('password');
            $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            echo "console.log(" + $data['password'] + ")";
            $this->form_validation->set_rules('password','password','required');
        }

        if (isset($_FILES['userfile'])) {
            $i = $this->WorkM->GetRow($k, $id);
            $tempImg = $i[0]->img;

            $img = $_FILES['userfile']['name'];

            if ($img == '' or ($k . "/" . $img) == $tempImg) {
                $data['img'] = $tempImg;
            } else {
                $data['img'] = $k . "/" . $this->UpdateImg($tempImg, $k, $id);
            }
            // if(empty($_FILES['userfile']['name']))
            //     {
            //   $this->form_validation->set_rules('userfile','image','required');
            //     }
        }
        if($this->form_validation->run())
        {
        if ($this->WorkM->UpdateK($k, $id, $data)) {
            redirect('UserC/View/' . $k);
              
        } else {
            $this->session->set_flashdata('error', 'Inalid DATA');
            redirect('UserC/loadEdit/' . $k);
        }
        }
        else{
            $this-> error_display($k, $id);            
        }
    }
    public function Remove($k, $id)
    {

        $this->load->model('WorkM');
        $tempImg = ' ';
        $i = $this->WorkM->getRow($k, $id);
        if (isset($i[0]->img)) {
            $tempImg = $i[0]->img;
            $this->delImg($k . "/" . $tempImg);
        }

        if ($this->WorkM->Deletek($k, $id)) {
            // Delete image data 
            redirect('UserC/Change/' . $k);
        } else {
            return false;
        }
    }
       public function UpdateImg($tempImg, $k, $id)
    {
        $config['upload_path']          = './assets/images/' . $k . "/";
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100000000;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('userfile')) {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            $this->loadEdit($k, $id);      // $this->load->view('upload_form', $error);
        } else {
            $this->delImg($tempImg);
            $im = $this->upload->data('file_name');
            return $im;
        }
    }

    public function DelImg($tempImg)
    {
        if (file_exists('./assets/images/' . $tempImg)) {
            unlink('./assets/images/' . $tempImg);
        } else {
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect('MainC');
        // $this->session->unset_userdata('id');
    }

}
