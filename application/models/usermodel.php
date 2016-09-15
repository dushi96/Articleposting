<?php

class UserModel extends CI_Model {

	public function getUsers()
	{
		/*$host ='localhost';
		$user='root';
		$pass="";
		$db='student';

		$con=mysqli_connect($host,$user,$pass,$db);
		if($con)
			echo 'connected successfully to students database';

		$sql="insert into students (firstname,lastname,id,pssword,email) values ('john','wrng',1,'dfdfd','dsdsd.com')";
		$query=mysqli_query($con,$sql);
		if($query)
			echo 'data inserted';*/
		/*$this->load->database();
		$q = $this->db->query("SELECT * FROM student");

		$result =$q->result();
		echo "<pre>";
		print_r($result);*/
		return [
		     ['firstname'=>'raj','lastname'=>'kumar'],
		     ['firstname'=>'priya','lastname'=>'ria'],
		     ['firstname'=>'ajay','lastname'=>'singh']

		];
	}
}