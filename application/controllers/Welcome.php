<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


//   this is a default controller and in this controller including all frontend design page show.


	public function index()
	{
		$data = array();
		$data['title'] = "Home Page"; // for dynamic title
		$data['maint_content'] = $this->load->view('pages/home_page','',TRUE); // load for home page
		$this->load->view('master',$data);
	}

	public function contact()
	{
		$data = array();
		$data['title'] = 'Contact Page';
		$data['maint_content'] = $this->load->view('pages/contact_page','',TRUE);
		$this->load->view('master',$data);
	}

	public function about()
	{
		$data = array();
		$data['title'] = 'About Page';
		$data['maint_content'] = $this->load->view('pages/about_page','',TRUE);
		$this->load->view('master',$data);
	}

	public function company()
	{
		$data = array();
		$data['title'] = 'Comapny Page';
		$data['maint_content'] = $this->load->view('pages/company_page.php','',TRUE);
		$this->load->view('master',$data);
	}

	public function company_details()
	{
		$data = array();
		$data['title'] = 'Comapny Details Page';
		$data['maint_content'] = $this->load->view('pages/company_details_page.php','',TRUE);
		$this->load->view('master',$data);
	}

	public function job_board()
	{
		$data = array();
		$data['title'] = 'Job Board Page';
		$data['maint_content'] = $this->load->view('pages/job_board_page.php','',TRUE);
		$this->load->view('master',$data);
	}

	public function job_board_details()
	{
		$data = array();
		$data['title'] = 'Job Board Details Page';
		$data['maint_content'] = $this->load->view('pages/job_board_details.php','',TRUE);
		$this->load->view('master',$data);
	}

	public function login_register()
	{
		$data = array();
		$data['title'] = 'Login Register Page';
		$data['maint_content'] = $this->load->view('pages/login_register_page.php','',TRUE);
		$this->load->view('master',$data);
	}

	public function pricing()
	{
		$data = array();
		$data['title'] = 'Pricing Page';
		$data['maint_content'] = $this->load->view('pages/pricing_page.php','',TRUE);
		$this->load->view('master',$data);
	}

	public function professional()
	{
		$data = array();
		$data['title'] = 'Professional Page';
		$data['maint_content'] = $this->load->view('pages/professional_page.php','',TRUE);
		$this->load->view('master',$data);
	}

	public function professional_details()
	{
		$data = array();
		$data['title'] = 'Professional Details Page';
		$data['maint_content'] = $this->load->view('pages/professional_details_page.php','',TRUE);
		$this->load->view('master',$data);
	}

}
