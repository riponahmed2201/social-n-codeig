<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


  // function __construct()
  // {
  //     parent::__construct();
  //     $this->load->model('tbl_users');
  // }

    public function show_register_page()
    {
            $data = array();
            $data['title'] = "User Registration Page"; // for dynamic title
            $data['maint_content'] = $this->load->view('pages/registration_page','',TRUE); // load for home page
            $this->load->view('master',$data);
    }

    public function show_login_page()
    {
            $data = array();
            $data['title'] = "User Login Page"; // for dynamic title
            $data['maint_content'] = $this->load->view('pages/login_page','',TRUE); // load for home page
            $this->load->view('master',$data);
          }

    public function register_form_validation()
    {
  //   $this->load->helper('form');
  // //  $$this->load->library('form_validation');
  //   $this->form_validation->set_rules('member_ship','Member Ship','required');
  //   $this->form_validation->set_rules('full_name','Full Name','required');
  //   $this->form_validation->set_rules('email','Email Address','required');
  //   $this->form_validation->set_rules('username','User Name','required');
  //   $this->form_validation->set_rules('password','Password','required');
  //   $this->form_validation->set_rules('country','Country','required');
  //   $this->form_validation->set_rules('package_info','Package Info','required');

    // if ($this->form_validation->run() == FALSE)
    //              {
    //                return redirect('User/register_form_validation');
    //              }
                 // else
                 // {
                 //         $this->User_Model->save_user_info();
                 // }
              $this->User_model->register();
              $sdata = array();
              $sdata['message'] = 'Your Information Successfully Added!';
              $this->session->set_userdata($sdata);
              redirect('Welcome');

}

      public function login_check()
      {
              $email = $this->input->post('email',TRUE);
              $password = $this->input->post('password',TRUE); // akhane o md5 function check korte parbo md5($this->input->post('password',TRUE)); ai vabe then print_r($password); kore check kore dekhbo hoi kina
              $result = $this->User_model->user_login_check($email,$password);

         if ($result) {
              $data = array();
              $data['message'] = 'You Successfully Login!';
           // $data['id'] = $result->id; // $result valiable ar moddhe sob data ache oi khan thake amra sudhu id ta nilam ai line a ak jaigai thake value nite hole -> operator use korte hobe.
           // $data['name'] = $result->name;
              $this->session->set_userdata($data);
              redirect('Welcome/job_board');
         }
         else {
               $data = array();
               $data['message'] = ' Your Email or Password Invalid!';
               $this->session->set_userdata($data);
               redirect('User/show_login_page');
         }
      }

}
