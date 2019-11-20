<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WorkM extends CI_Model
{
    public function getRow($id,$tablename=null){
        $query = $this->db->where('id',$id)->get($tablename);
        $result = $query->result();
        return $result;
    }
    public function gets($tablename)
    {
        $query = $this->db->get($tablename);
        $result = $query->result();
        return $result;
    }
    public function InsertK($tablename,$data)
    {
        if ($this->db->insert($tablename, $data)) {
            return true;
        } else {
            return false;
        }
    }
    public function DeleteK($tablename,$id)
    {
        if ($this->db->where('id', $id)->delete($tablename)) {
            return true;
        } else {
            return false;
        }
    }

    public function UpdateK($tablename,$data,$id)
    {
        $this->db->where('id', $id);
        if ( $this->db->update($tablename, $data)) {
            return true;
        } else {
            return false;
        }
    }




    public function CheckUserName($un, $pw)
    {
        $query = $this->db->where(['username' => $un])->get('users');
        $d = $query->result();
        if ($query->num_rows()) {
            if ($pw == $d[0]->password) {
                $this->session->set_userdata('username', $d[0]->username, 'id', $d[0]->id);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

   









    
    public function getMain()
    {
        $query = $this->db->get('homepage');
        $result = $query->result();
        return $result;
    }

    public function getUsers()
    {
        $query = $this->db->get('users');
        $result = $query->result();
        return $result;
    }

    public function getculturepage()
    {
        $query = $this->db->get('culturepage');
        $result = $query->result();
        return $result;
    }

    // public function getculture1page()
    // {
    //     $query = $this->db->get('culturepage');
    //     $result = $query->result();
    //     return $result;
    // }



    public function UpdateUser($id, $un, $pw)
    {
        $data = array(
            'username' => $un,
            'password' => $pw
        );
        
        $this->db->where('id', $id);
       
        if ( $this->db->update('users', $data)) {
            // echo "done";
            return true;
        } else {
            // echo "not done";
            return false;
        }
    }

    public function DeleteUser($id)
    {

        if ($this->db->where('id', $id)->delete('users')) {
            // echo "done";
            return true;
        } else {
            // echo "not done";
            return false;
        }
    }

    public function InsertHomePage($data)
    {
        if ($this->db->insert('HomePage', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function InsertCulturePage($data)
    {
        if ($this->db->insert('CulturePage', $data)) {
            return true;
        } else {
            return false;
        }
    }


    public function UpdateHomePage($data,$id)
    {
       
        
        $this->db->where('id', $id);
       
        if ( $this->db->update('HomePage', $data)) {
            // echo "done";
            return true;
        } else {
            // echo "not done";
            return false;
        }
    }

    public function UpdateCulturePage($data,$id)
    {
       
        
        $this->db->where('id', $id);
       
        if ( $this->db->update('CulturePage', $data)) {
            // echo "done";
            return true;
        } else {
            // echo "not done";
            return false;
        }
    }

    public function DeleteHomePage($id)
    {

        if ($this->db->where('id', $id)->delete('Homepage')) {
            // echo "done";
            return true;
        } else {
            // echo "not done";
            return false;
        }
    }

    public function DeleteCulturePage($id)
    {

        if ($this->db->where('id', $id)->delete('Culturepage')) {
            // echo "done";
            return true;
        } else {
            // echo "not done";
            return false;
        }
    }


    public function getDestpage()
    {
        $query = $this->db->get('desattractions');
        $result = $query->result();
        return $result;
    }


    public function InsertgetDestpage($data)
    {
        if ($this->db->insert('desattractions', $data)) {
            return true;
        } else {
            return false;
        }
    }
    public function InsertgetDestpage1($data)
    {
        if ($this->db->insert('desattractions', $data)) {
            return true;
        } else {
            return false;
        }
    }

    
    
    
    


    public function UpdategetDestpage($data,$id)
    {
       
         
         $this->db->where('id', $id);
       
        if ( $this->db->update('desattractions', $data)) {
            // echo "done";
            return true;
        } else {
            // echo "not done";
            return false;
        }
    }
    //update($table = '', $set = NULL, $where = NULL, $limit = NULL)

    public function DeletegetDestpage($id)
    {

        if ($this->db->where('id', $id)->delete('desattractions')) {
            // echo "done";
            return true;
        } else {
            // echo "not done";
            return false;
        }
    }
}
