<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		
		//$data['alldata']=$this->crud->selectbycolumn('category','id',27);
		
	
		//$data['alldata']=$this->crud->fatchAlldata('posts');
		
		$this->load->view('index',$data);	

	}
	
	
	public function allpage()
	{
		
	   $args=func_get_args();
	   
		$data['alldata']=$this->crud->selectbycolumn('posts','id',$args[0]);
		
		//print_r($data);
		
		$this->load->view('allpage',$data);
	}
	
	
	public function pages()
	{
		  //print_r($args);
	   
	   $datas=$this->uri->segment(3	);
	   
	   $data['fadata']=$this->crud->selectbycolumn('category','id',$datas);
	   
	   $data['alldata']=$this->crud->selectbycolumn('posts','categary_id',$datas);
		
		$this->load->view('pages',$data);
	}
	
	
	
}
