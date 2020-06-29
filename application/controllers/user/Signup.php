<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Signup extends CI_Controller {
	
public function index(){
$this->form_validation->set_rules('firstname','First Name','required|alpha');
$this->form_validation->set_rules('lastname','Last  Name','required|alpha');
$this->form_validation->set_rules('emailid','Email id','required|valid_email|is_unique[tblusers.emailId]');
$this->form_validation->set_rules('mobilenumber','Mobile Number','required|numeric|exact_length[10]');
$this->form_validation->set_rules('password','Password','required|min_length[6]');
$this->form_validation->set_rules('confirmpassword','Confirm Password','required|min_length[6]|matches[password]');
if($this->form_validation->run()){
$fname=$this->input->post('firstname');
$lname=$this->input->post('lastname');
$emailid=$this->input->post('emailid');
$mnumber=$this->input->post('mobilenumber');
$password=$this->input->post('password');
$password=$this->input->post('dob');
$password=$this->input->post('pincode');
$status=1;
$this->load->model('Signup_Model');
$this->Signup_Model->insert($fname,$lname,$emailid,$mnumber,$password,$status,$dob,$pincode);
} else {
$this->load->view('user/signup');
}	

}

}