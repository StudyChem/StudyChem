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
			'class' => $class,
			'roleid' => 1
			);
		$this -> db -> insert('student',$data);
		return 1;
	}

	public function sendMail($emailid) 
	{
		$RegistrationKey = rand();
		$emailConfig = Array( 'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'studychem1@gmail.com',
            'smtp_pass' => 'studychem123',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1');
				$this -> load -> library('email', $emailConfig);
				$this->email->set_newline("\r\n");
				$this -> email -> from('studychem1@gmail.com', 'StudyChem');
			    $this->email->to($emailid);
                $this->email->subject("Thanks for Registration.");
                $this->email->message("Dear Student,<br />Kindly verify your account by clicking the link below.<br /><br /><a href = '" . base_url() . "home/activate/{$RegistrationKey}'>Click Here To Activate</a><br /><br />Please Do Not Respond back to this E-mail as this is Auto Generated E-mail.<br /><br />Regards,<br />StudyChem Team.");
                $this->email->send();
        $this -> db -> where('email',$emailid);
        $arra = array('registrationKey' => $RegistrationKey
        			   );
        $this -> db -> update('student',$arra);

	}
	public function activateAccount($RegistrationKey) 
	{
        $this->db->where('registrationKey', $RegistrationKey);
        $getResult = $this->db->get('student');
        if ($getResult->num_rows == 1) 
        {
            $row = $getResult->row();
            $row->isActivated = 1;
            $this->db->where('registrationKey', $row->registrationKey);
            $this->db->update('student', $row);
        }
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