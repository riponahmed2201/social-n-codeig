<?php
defined('BASEPATH') OR exit('No direct script access allowed');


  class Super_Admin extends CI_Controller {

  public function index()
    {
      $this->load->view('admin/admin_master');
    }
  }
