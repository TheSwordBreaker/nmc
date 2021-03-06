<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WorkM extends CI_Model
{

    



    public function GetRow($tablename, $id)
    {
        $query = $this->db->where('id', $id)->get($tablename);
        $result = $query->result();
        return $result;
    }



    public function rollback_tra()
    {
        $this->db->trans_rollback();
        
        
    }

    public function start_tra()
    {
        $this->db->trans_start();
    }

    public function commit_tra()
    {
        $this->db->trans_complete();
        
    }
    public function Change($tablename, $id)
    {
        if ($this->db->set('active', 0)->update($tablename)) {
            if ($this->db->set('active', 1)->where_in('id', $id)->update($tablename)) {
                return true;
            } else {
                $this->session->set_flashdata('error', 'something went wrong');
                return false;
            }
        } else {
            $this->session->set_flashdata('error', 'something went wrong');
            return false;
        }
    }


    public function GetNumRow($table)
    {
        $query = $this->db->get($table);
        $result = $query->num_rows();
        return $result;
    }

    public function GetAll($table, $limit, $offest = 0)
    {
        $query = $this->db->limit($limit, $offest)
            ->get($table);
        $result = $query->result();
        return $result;
    }

    public function GetName($Name)
    {
        $query = $this->db->like('name', $Name);

        $result = $query->get('destination')->result();
        $result += $query->like('name', $Name)->get('foodstuff')->result();
        return $result;
    }

    public function related($Name)
    {
        $query = $this->db->like('name', $Name);

        $result = $query->get('destpage')->result();
        $result += $query->like('name', $Name)->get('Culturepage')->result();
        
        $result[0]->id;
        return $result;
    }

    
//Changes by Shaurya

    public function t_rows($tablename)
    {
        $no=$this->db->count_all($tablename);
        return $no;
    }

     public function Gets($tablename)
    {
        $query = $this->db->get($tablename);
        $result = $query->result();
        return $result;
    }

    public function fetch_row($query)
    {
        if ($query != '') {
            $query = $this->db->query("SELECT id,name,des,img from destination union all SELECT id,name,des,img from foodstuff  WHERE `name` LIKE '%" . $query . "%' ESCAPE '!' ");

            // print_r($result);
            // return false;
            return $query->num_rows();
        }
    }
    public function fetch_limit($search, $limit, $offset = 0)
    {
        if ($offset == "") {
            $offset = 0;
        }
        $query = "";
        //     if($search != '' && $offset == ''){
        //         $query = $this->db->query("SELECT id,name,img from destpage UNION SELECT id,name,img from culturepage WHERE `name` LIKE '%".$search."%' ESCAPE '!' LIMIT ".$limit);
        //     }


        if ($search != '') {
            $query = $this->db->query("SELECT id,name,des,img from destination UNION  SELECT id,name,des,img from foodstuff  WHERE `name` LIKE '%" . $query . "%' ESCAPE '!' ");
        }

        return $query->result();
    }


    public function InsertK($tablename, $data)
    {
        if ($this->db->insert($tablename, $data)) {
            return true;
        } else {
            return false;
        }
    }
    public function DeleteK($tablename, $id)
    {
        if ($this->db->where('id', $id)->delete($tablename)) {
            return true;
        } else {
            return false;
        }
    }

    public function UpdateK($tablename, $id, $data)
    {
        $this->db->where('id', $id);
        if ($this->db->update($tablename, $data)) {
            return true;
        } else {
            return false;
        }
    }


    public function ConfirmK($tablename)
    {
        $this->db->select_sum('active');
        $this->db->from($tablename);
        $query = $this->db->get();
        $res = $query->result();
        // print_r($res[0]->active);
        // if ($res[0]->active == 3) {
        //     return true;
        // } else {
        //     if ($res[0] < 3) { }
        // }
    }




    public function CheckUserName($un, $pw)
    {
        $query = $this->db->where(['username' => $un])->get('users');
        $d = $query->result();
        if ($query->num_rows()) {
            echo $d[0]->password;
           
            // if( password_verify($pw, $d[0]->password)) {
            //     $this->session->set_userdata('username', $d[0]->username, 'id', $d[0]->id);
            //     return true;
            // } else {
            //     $this->session->set_flashdata('error', 'Inalid password');
            //     return false;
            // }
            if(password_verify($pw,$d[0]->password) ) {
                $this->session->set_userdata('username', $d[0]->username, 'id', $d[0]->id);
                return true;
            } else {
                return false;
            }
            // if ($pw == $d[0]->password) {
            //     $this->session->set_userdata('username', $d[0]->username, 'id', $d[0]->id);
            //     return true;
            // } else {
            //     return false;
            // }
        } else {
            return false;
        }
    }
}
