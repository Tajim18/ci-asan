<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

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
	
	
	public function addcategory()
	{
		
	   
	   if(isset($_POST['submit']))
	   {
		   date_default_timezone_set('Asia/Kolkata');
		   
		   $data['name']=$this->input->post('name');
		   $data['url']=$this->input->post('url');
		   $data['status']=$this->input->post('status');
		   $data['created_at']=date('Y-m-d H:i:s');	
		   
		   $result=$this->crud->insert('category',$data);
             
			 
			 redirect('category/allcategory');
		   

	   }
		
	  $this->load->view('admin/Category/Add_category');
		
	}
	
	
	public function allcategory()
	{
		
		$data['alldata']=$this->crud->fatchAlldata('category');
		$this->load->view('admin/Category/All_category',$data);
	}
	
	
	public function delete()
	{
		$args=func_get_args();
	
		$this->crud->delete('category',$args[0]);
		
		redirect('category/allcategory');
	}
	
	
	public function edit()
	{
		$args=func_get_args();
		
		if(isset($_POST['submit']))
	   {
		   date_default_timezone_set('Asia/Kolkata');
		   
		   $data['name']=$this->input->post('name');
		   $data['url']=$this->input->post('url');
		   $data['status']=$this->input->post('status');
		   $data['updates_at']=date('Y-m-d H:i:s');
		   
		  
		   $result=$this->crud->update('category',$data,$args[0]);
		   
		   redirect('category/allcategory');

	   }
	   
		$data['editdata']=$this->crud->selectbycolumn('category','id',$args[0]);
		
		$this->load->view('admin/Category/edit_category',$data);
	}

}
