<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

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
	
	
	public function addpost()
	{
		if(isset($_POST['submit']))
		{
			
		   date_default_timezone_set('Asia/Kolkata');
		   
		   $data['categary_id']=$this->input->post('catpost');
		   $data['post_taital']=$this->input->post('titleurl');
		   $data['post_url']=$this->input->post('posturl');
		   $data['post_description']=$this->input->post('description');
		   $data['created_at']=date('Y-m-d H:i:s');
		   
		  $result=$this->crud->insert('posts',$data);
		  
		    redirect('posts/allpost');
		   
		}
		
		$data['cat']=$this->crud->fatchAlldata('category');
		$this->load->view('admin/post/Add_post',$data);
		
	}
	
	
	public function allpost()
	{
		
	$data['alldatapost']=$this->crud->fatchAlldata('posts');
		
		$this->load->view('admin/post/All_post',$data);
	}
	
	public function delete()
	{
		$args=func_get_args();
		
		$this->crud->delete('posts',$args[0]);
		
		redirect('posts/allpost'); 
	}
	
	
public function edit()
{
		$args=func_get_args();

        if(isset($_POST['submit']))
       {
			
	      date_default_timezone_set('Asia/Kolkata');
		   
	      $data['categary_id']=$this->input->post('catpost');
          $data['post_taital']=$this->input->post('titleurl');
           $data['post_url']=$this->input->post('posturl');
	      $data['post_description']=$this->input->post('description');
          $data['updates_at']=date('Y-m-d H:i:s');
		   
         $result=$this->crud->update('posts',$data,$args[0]);
		 
		   redirect('posts/allpost'); 
       }
	   		
	$data['editdata']=$this->crud->selectbycolumn('posts','id',$args[0]);
	
	$data['cat']=$this->crud->fatchAlldata('category');
	
	$this->load->view('admin/post/edit_post',$data);
}
	

}
