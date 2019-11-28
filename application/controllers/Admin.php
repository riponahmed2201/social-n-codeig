<?php
defined('BASEPATH') OR exit('No direct script access allowed');


  class Admin extends CI_Controller {

    public function __construct(){
      parent::__construct();
      $admin_id = $this->session->userdata('id');
      if ($admin_id != NULL)
      {
        redirect('Super_Admin','refresh');
      }
    }


    public function index()
    {
      $this->load->view('admin/admin_login');
    }

    public function admin_login_check()
    {
       $email = $this->input->post('email',TRUE);
       $password = $this->input->post('password',TRUE); // akhane o md5 function check korte parbo md5($this->input->post('password',TRUE)); ai vabe then print_r($password); kore check kore dekhbo hoi kina
       $result = $this->Admin_model->check_admin_info($email,$password);

       if ($result) {
         $data = array();
         $data['id'] = $result->id; // $result valiable ar moddhe sob data ache oi khan thake amra sudhu id ta nilam ai line a ak jaigai thake value nite hole -> operator use korte hobe.
         $data['name'] = $result->name;
         $this->session->set_userdata($data);
         redirect('Super_Admin');
       }
       else {
         $data = array();
         $data['message'] = ' Your Email or Password Invalid!';
         $this->session->set_userdata($data);
         redirect('Admin');
       }
    }

  }
