<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	 

	public function index()
	{
		
		if(isset($_POST['submit']))
		{
			$username=$this->input->post('uname');
			$pwd=$this->input->post('pwd');
			
		$result=$this->crud->selectbymultipcolumn('login',array('username'=>$uname,'pwd'=>$pwd));
		
		if(count($result)>=0)
		{
			// echo "<script>
			// window.location.href='admin/dashboard';
			// </script>";
			
			$this->session->set_userdata('uname',$result[0]->username);
			
			redirect('admin/dashboard');
		}
		
		}
			
		$this->load->view('admin/index');
	}
	
	public function dashboard()
	{
		//$this->checkadminlogin();
		
		$this->load->view('admin/dashboard');
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		
		redirect('admin/index');
	}
	
	public function checkadminlogin()
	{
        
       //$data=$this->session->userdata('uname');		
         
		 if(empty($data))
		 {
			 redirect('admin/index');
		 }
	
	}
	
	public function site_setting()
	{
		$this->load->view('admin/site_setting/edit_setting');
	}
	

}
