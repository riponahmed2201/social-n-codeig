<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
    class User_model extends CI_Model
    {

      public function register()
      {
        // echo "OK";
        $data = array();
        $data['member_ship'] = $this->input->post('member_ship',TRUE);
        $data['full_name'] = $this->input->post('full_name',TRUE);
        $data['email'] = $this->input->post('email',TRUE);
        $data['username'] = $this->input->post('username',TRUE);
        $data['password'] = md5($this->input->post('password',TRUE));
        $data['country'] = $this->input->post('country',TRUE);
        $data['package_info'] = $this->input->post('package_info',TRUE);
        $this->db->insert('tbl_users',$data);
      }

      public function user_login_check($email,$password)
      {

 // echo "ok";
 // exit;
          $this->db->select('*');
          $this->db->from('tbl_users');
          $this->db->where('email',$email);
          $this->db->where('password',md5($password));
          $query  =  $this->db->get();  // akta data ante hole row() function use korbo and sob gula data ante hole result() function use korbo;
          $result = $query->row();
          return $result;

           //  echo "<pre>";
           // print_r($query);
      }


    }


?>
