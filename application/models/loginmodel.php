<?php
class LoginModel extends CI_Model {
	public function SignIn() {
		$this -> db -> where("email", $_POST['username']);
		$this -> db -> where("password", (($_POST['password'])));
		$queryData = $this -> db -> get("student");
		if ($queryData -> num_rows == 1)
		 {
			$row = $queryData -> row();	
			$data = array("email" => $row -> email, "isLoggedIn" => TRUE, "roleid" => $row -> roleid,"name" => $row -> name, "class" => $row -> class, "password" => $row -> password);
			$this -> session -> set_userdata($data);		
			return 1;
		}
				
		else 
		{
			return -1;
		}
		
	}
}