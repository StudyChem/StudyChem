<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* This controller contains the functions 
/* of the home page.
/*******************************************************/                                                     

class Home extends CI_Controller {
	function __construct()
   	{
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
    }
	
	/* Rediects to the home page */
	public function index()
	{
		$this -> load -> view('header');
		$this->load->view('home');
	}

	/* Redirects to the sign-up page */
	public function signup()
	{
		$this -> load -> view('header');
		$this->load->view('signup');
	}

	/* Validation and sign-up process is conducted */
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
			else{
				$this -> load -> model('registermodel');
				$this -> registermodel -> sendMail($_POST['email']);
				$data['message'] = 'We have send you an e-mail in your email account. Please activate your account and then login!';
				$this -> load -> view('header');
				$this -> load -> view('signup',$data);
			}
		}
		

	}

	public function activate($RegistrationKey)
	{
		$this -> load -> model('registermodel');
		$this -> registermodel -> activateAccount($RegistrationKey);
		redirect('home/login');
	} 

	/* Redirects to the login page */
	public function login()
	{
		$this -> load -> view('header');
		$this->load->view('login');
	}

	/* Validation process for the login is conducted */
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
				if($this -> session -> userdata('roleid')==1)
					redirect(site_url('student'));			
				else
					redirect(site_url('teacher'));
			} else if ($res == -1) 
			{	
				$Error["Invalid"] = "Incorrect username/password";
				$this -> load -> view('header');
				$this->load->view("login",$Error);
			} else {
				$this -> load -> view('header');

				$this->load->view("login");
			}
		}
	}

	/* Logouts the user session */
	public function logout() {
		$this -> load -> helper('url');
		$this -> load -> library('session');
		$this -> session -> sess_destroy();
		redirect(base_url(), 'refresh');
	}
	
}
