<?php
class LoginModel extends CI_Model {
	public function SignIn() {
		$this -> db -> where("email", $_POST['username']);
		$this -> db -> where("password", (($_POST['password'])));
		$queryData = $this -> db -> get("student");
		if ($queryData -> num_rows == 1)
		 {
			$row = $queryData -> row();	
			$data = array("username" => $row -> email, "isLoggedIn" => TRUE, "roleid" => 1);
			$this -> session -> set_userdata($data);
					
			return 1;
		}
				
		else 
		{
			return -1;
		}
		
	}
}