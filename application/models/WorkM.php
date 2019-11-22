<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WorkM extends CI_Model
{
    public function GetRow($tablename,$id){
        $query = $this->db->where('id',$id)->get($tablename);
        $result = $query->result();
        return $result;
    }

    public function GetName($tablename,$Name){
        $query = $this->db->where('name',$Name)->get($tablename);
        $result = $query->result();
        return $result;
    }

    public function Gets($tablename)
    {
        $query = $this->db->get($tablename);
        $result = $query->result();
        return $result;
    }

    public function fetch($query)
    {
        if($query != '')
        {
        $query = $this->db->like('name', $query)
                            ->order_by('id', 'DESC')
                            ->get('destpage');
        $result = $query->result();
        return $result;
        }
        

        
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

    public function UpdateK($tablename,$id,$data)
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


} 