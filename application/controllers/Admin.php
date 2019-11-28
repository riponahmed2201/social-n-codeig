<?php
defined('BASEPATH') OR exit('No direct script access allowed');


  class Admin extends CI_Controller {

    public function login()
    {
      $this->load->view('admin/admin_login');
    }

    public function admin_login_check()
    {
       $email = $this->input->post('email',TRUE);
       $password = $this->input->post('password',TRUE); // akhane o md5 function check korte parbo md5($this->input->post('password',TRUE)); ai vabe then print_r($password); kore check kore dekhbo hoi kina
       $result = $this->Admin_model->check_admin_info($email,$password);

       if ($result) {
         echo "ok";;
         // redirect('Super_Admin');
       }
       else {
         echo "no";
         // redirect('Admin');
       }
    }

  }
