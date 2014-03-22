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

	public function editProfile() {
		$name = $_POST['name'];
		$email = $this->session ->userdata('email');
		$password = $this->session ->userdata('password');
		$class = $_POST['class'];
		$data = array(
			'name' => $name,
			'email' => $email,
			'password' => $password,
			'class' => $class
			);
		$this -> db -> where('email',$email);
		$this -> db -> update('student',$data);
		$data = array("email" => $email, "isLoggedIn" => TRUE, "roleid" => 1,"name" => $name, "class" => $class, "password" => $password);
		$this -> session -> set_userdata($data);		
		return 1;
	}
		
	public function changePassword() {
		$p1 = $_POST['password'];
		$p2 = $_POST['npassword'];
		$newp = $_POST['ncpassword'];
		if($p1!=$this->session ->userdata('password')) {
			return -1;
		}
		else{
		if($p2 == $newp) {
			$name = $this -> session -> userdata('name');
			$email = $this->session ->userdata('email');
			$password = $newp;
			$class = $this -> session -> userdata('class');
			$data = array(
			'name' => $name,
			'email' => $email,
			'password' => $password,
			'class' => $class
			);
			$this -> db -> where('email',$email);
			$this -> db -> update('student',$data);
			$data = array("email" => $email, "isLoggedIn" => TRUE, "roleid" => 1,"name" => $name, "class" => $class, "password" => $password);
			$this -> session -> set_userdata($data);		
			return 1;
		}
		else {
			return 0;
		}
	}
	}
}