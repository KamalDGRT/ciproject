<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class User_Login_Model extends CI_Model {


public function validatelogin($emailid,$password,$status){

$query=$this->db->where(['emailId'=>$emailid,'userPassword'=>$password]);
	$account=$this->db->get('tblusers')->row();
	if($account!=NULL){
 $dbstatus=$account->isActive;


//verifying status
if( $dbstatus==$status){
return $account->id;
} else {
return NULL;
$this->session->set_flashdata('error', 'Your accounis is not active contact admin');
redirect('user/login');
}
}
return NULL;
}
}

