<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
    class Admin_model extends CI_Model{

    public function check_admin_info($email,$password)
      {

        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('email',$email);
        $this->db->where('password',md5($password));
        $query  =  $this->db->get();  // akta data ante hole row() function use korbo and sob gula data ante hole result() function use korbo;
        $result = $query->row();
        return $result;

        // print_r($result);
      }


    }


?>
