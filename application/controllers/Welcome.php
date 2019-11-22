<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$data = array();
		$data['title'] = "Home Page"; // for dynamic title
		$data['maint_content'] = $this->load->View('pages/home_page','',TRUE); // load for home page
		$this->load->view('master',$data);
	}

	public function contact()
	{
		$data = array();
		$data['title'] = 'Contact Page';
		$data['maint_content'] = $this->load->View('pages/contact_page','',TRUE);
		$this->load->view('master',$data);
	}

	public function about()
	{
		$data = array();
		$data['title'] = 'About Page';
		$data['maint_content'] = $this->load->View('pages/about_page','',TRUE);
		$this->load->view('master',$data);
	}

	public function company()
	{
		$data = array();
		$data['title'] = 'Comapny Page';
		$data['maint_content'] = $this->load->View('pages/company_page.php','',TRUE);
		$this->load->view('master',$data);
	}

	public function company_details()
	{
		$data = array();
		$data['title'] = 'Comapny Details Page';
		$data['maint_content'] = $this->load->View('pages/company_details_page.php','',TRUE);
		$this->load->view('master',$data);
	}

}
