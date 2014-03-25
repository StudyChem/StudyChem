<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
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
	public function signup()
	{
		$this -> load -> view('header');
		$this->load->view('signup');
	}

	public function register() {
		$Error["Invalid"] = NULL;
		$this -> load -> helper('url');
		$this -> load -> library('session');
		$this -> load -> library("form_validation");
		$this -> form_validation -> set_rules("name", "Name", "required|trim|min_length[4]|xss_clean");
		$this -> form_validation -> set_rules("password", "Password", "required|min_length[3]|trim|xss_clean");
		$this -> form_validation -> set_rules("password_confirmation", "password Confirmation", "required|min_length[3]|trim|xss_clean");
		$this -> form_validation -> set_rules("class", "Class", "required|numeric|trim|xss_clean");
		$this -> form_validation -> set_rules("email", "Email", "required|valid_email|trim|xss_clean");


		if ($this -> form_validation -> run() == FALSE) {
			$this -> load -> view('header');
			$this->load->view("signup", $Error);
		}
		else if($_POST['class']!=9 && $_POST['class']!='10')
		{
			$Error["Invalid"] = "Invalid class. Please type class '9' or '10'";
			$this -> load -> view('header');
			$this->load->view("signup",$Error);
		}
		else {
			$this -> load -> model("registermodel");
			$res = $this -> registermodel -> signup();
			if($res == 0) {
				$Error["Invalid"] = "Passwords doesn't match";
				$this->load -> view('header');
				$this->load->view('signup',$Error);
			}
			else
			redirect('home/login');
		}
		

	}
	public function login()
	{
				$this -> load -> view('header');

		$this->load->view('login');
	}
	public function signin() {
		$Error["Invalid"] = NULL;
		$this -> load -> helper('url');
		$this -> load -> library('session');
		$this -> load -> library("form_validation");
		$this -> form_validation -> set_rules("username", "username", "required|trim|email|xss_clean");
		$this -> form_validation -> set_rules("password", "password", "required|trim|xss_clean");
		if ($this -> form_validation -> run() == FALSE) {
			$this -> load -> view('header');

			$this->load->view("login", $Error);
		} else {
			$this -> load -> model("loginmodel");
			$res = $this -> loginmodel -> SignIn();
			if ($res == 1) {
				redirect(site_url('student'));			
			} else if ($res == -1) {	
				$Error["Invalid"] = "Incorrect username/password";
						$this -> load -> view('header');
				$this->load->view("login",$Error);
			} else {
				$this -> load -> view('header');

				$this->load->view("login");
			}
		}
	}

	public function logout() {
		$this -> load -> helper('url');
		$this -> load -> library('session');
		$this -> session -> sess_destroy();
		redirect(base_url(), 'refresh');
	}
	
}
