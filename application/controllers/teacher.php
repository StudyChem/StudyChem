<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teacher extends CI_Controller {
	function __construct()
   	{
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
    }
	
	public function index()
	{
		$this -> load -> view('header');
		$this->load->view('home');
	}
	
	public function settings() 
	{	
		$this -> load -> view('header');
		$this -> load -> view('settings');
	}	

	public function add_periodic() {
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("periodic" => 1);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);

	}

	public function remove_periodic() {
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("periodic" => 0);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);
	}
	public function add_chemical() {
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("chemical" => 1);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);

	}

	public function remove_chemical() {
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("chemical" => 0);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);
	}
	public function add_mixture() {
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("mixture" => 1);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);

	}

	public function remove_mixture() {
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("mixture" => 0);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);
	}
	public function add_melting() {
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("melting" => 1);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);

	}

	public function remove_melting() {
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("melting" => 0);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);
	}
	public function add_solution() {
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("solution" => 1);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);

	}

	public function remove_solution() {
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("solution" => 0);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);
	}
	public function add_boiling() {
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("boiling" => 1);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);

	}

	public function remove_boiling() {
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("boiling" => 0);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);
	}

	public function add_exothermic() {
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("exothermic" => 1);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);

	}

	public function remove_exothermic() {
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("exothermic" => 0);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);
	}

	public function class9() {
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);
	}

	public function changePassword() {
		$Error["Invalid1"] = NULL;
		$this -> load -> helper('url');
		$this -> load -> library('session');
		$this -> load -> library("form_validation");
		$this -> load -> model('registermodel');
		$res = $this -> registermodel -> changePassword();
		if($res==1) {
			$this -> load -> view('header');
			$succ["validpass"] = "Your password is successfully changed.";
			$this -> load -> view('settings',$succ);

		} 	
		if($res==-1) {
			$this -> load -> view('header');
			$Error["Invalid1"] = "Incorrect current password";
			$this -> load -> view('settings',$Error);
		}
		if($res==0) {
			$this -> load -> view('header');
			$Error["Invalid1"] = "Passwords doesn't match.";
			$this -> load -> view('settings',$Error);
		}

	}

	public function editProfile() {
		$Error["Invalid"] = NULL;
		$this -> load -> helper('url');
		$this -> load -> library('session');
		$this -> load -> library("form_validation");
		$this -> form_validation -> set_rules("name", "Name", "required|trim|min_length[4]|xss_clean");
		$this -> form_validation -> set_rules("class", "Class", "required|numeric|trim|xss_clean");

		if ($this -> form_validation -> run() == FALSE) {
			$this -> load -> view('header');
			$this->load->view("settings", $Error);
		}
		else if($_POST['class']!=9 && $_POST['class']!='10')
		{
			$Error["Invalid"] = "Invalid class. Please type class '9' or '10'";
			$this -> load -> view('header');
			$this->load->view("settings",$Error);
		}
		else {
			$this -> load -> model("registermodel");
			$res = $this -> registermodel -> editProfile();
			$success["valid"] = "Your settings are successfully updated!";
			$this -> load -> view('header');
			$this -> load -> view("settings",$success);
			//redirect('home/login');
		}
		

	}
	
	
}