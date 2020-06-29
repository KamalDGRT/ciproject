<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Change_password extends CI_Controller {
function __construct(){
parent::__construct();
if(! $this->session->userdata('uid'))
redirect('user/login');
}

public function index(){
$this->form_validation->set_rules('currentpassword','Current Password','required|min_length[6]');	
$this->form_validation->set_rules('password','Password','required|min_length[6]');
$this->form_validation->set_rules('confirmpassword','Confirm Password','required|min_length[6]|matches[password]');
if($this->form_validation->run()){
$cpassword=$this->input->post('currentpassword');
$newpassword=$this->input->post('password');
$userid = $this->session->userdata('uid');
$this->load->model('User_Changepassword_Model');
$cpass=$this->User_Changepassword_Model->getcurrentpassword($userid);
echo $dbpass=$cpass->userPassword;

 if($dbpass==$cpassword){
if($this->User_Changepassword_Model->updatepassword($userid,$newpassword))
{
$this->session->set_flashdata('success', 'Password chnaged successfully');
	redirect('user/change_password');
}

} else {
$this->session->set_flashdata('error', 'Current password is wrong. Error!!');
redirect('user/change_password');	
} 
} else {
$this->load->view('user/change_password');
}
}




}