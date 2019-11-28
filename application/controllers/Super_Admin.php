<?php
defined('BASEPATH') OR exit('No direct script access allowed');


  class Super_Admin extends CI_Controller {


   public function __construct(){
     parent::__construct();
     $admin_id = $this->session->userdata('id');
     if ($admin_id == NULL)
     {
       redirect('Admin','refresh');
     }
   }



  public function index()
    {
      $this->load->view('admin/admin_master');
    }

  public function admin_logout()
  {
    $this->session->unset_userdata('id');
    $this->session->unset_userdata('name');
    $data = array();
    $data['message'] = 'You Successfully Logout';
    $this->session->set_userdata($data);
    redirect('Admin');
  }

  }
