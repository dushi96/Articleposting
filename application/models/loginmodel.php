<?php

class Loginmodel extends CI_Model{

	public function login_valid($username,$password){

		//$q=$this->db->query('SELECT *FROM users where uname=$username and pword=$password');
		$q=$this->db->where(['uname'=>$username,'pword'=>$password])
		            ->get('users');
		if( $q->num_rows())
		{
			return $q->row()->id;
		}else{

			return false;
		}
	}
}