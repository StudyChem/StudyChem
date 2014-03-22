<?php
class RegisterModel extends CI_Model {
	public function signup() {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$pass = $_POST['password_confirmation'];
		if($password!= $pass) {
			return 0;
		}
		$class = $_POST['class'];
		$data = array(
			'name' => $name,
			'email' => $email,
			'password' => $password,
			'class' => $class
			);

		$this -> db -> insert('student',$data);
		return 1;
	}
		
}