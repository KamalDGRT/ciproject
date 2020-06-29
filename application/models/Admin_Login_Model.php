<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Admin_Login_Model extends CI_Model {


public function validatelogin($username,$password){

$query=$this->db->where(['userName'=>$username,'password'=>$password]);
	$account=$this->db->get('tbladmin')->row();
	if($account!=NULL){

return $account->id;
}
return NULL;
}
}

