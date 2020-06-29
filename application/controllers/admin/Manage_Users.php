<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_Users extends CI_Controller {
function __construct(){
parent::__construct();
if(! $this->session->userdata('adid'))
redirect('admin/login');
}

public function index(){
$this->load->model('ManageUsers_Model');
$user=$this->ManageUsers_Model->getusersdetails();
$this->load->view('admin/manage_users',['userdetails'=>$user]);
}

// For particular Record
public function getuserdetail($uid)
{
$this->load->model('ManageUsers_Model');
$udetail=$this->ManageUsers_Model->getuserdetail($uid);
$this->load->view('admin/getuserdetails',['ud'=>$udetail]);
}

public function deleteuser($uid)
{
$this->load->model('ManageUsers_Model');
$this->ManageUsers_Model->deleteuser($uid);
$this->session->set_flashdata('success', 'User data deleted');
redirect('admin/manage_users');
}


}