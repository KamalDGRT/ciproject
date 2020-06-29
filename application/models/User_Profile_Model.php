<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_Profile_Model extends CI_Model{

public function getprofile($userid){
	$query=$this->db->select('firstName,lastName,emailId,mobileNumber,regDate')
                ->where('id',$userid)
                ->from('tblusers')
                ->get();
  return $query->row();  
}

public function update_profile($fname,$lname,$mnumber,$userid){
$data = array(
               'firstName' =>$fname,
               'lastName' => $lname,
               'mobileNumber' => $mnumber
            );

$sql_query=$this->db->where('id', $userid)
                ->update('tblusers', $data); 


}


}