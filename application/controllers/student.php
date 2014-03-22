<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {
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
	
	public function signin() {
		$Error["Invalid"] = NULL;
		$this -> load -> helper('url');
		$this -> load -> library('session');
		$this -> load -> library("form_validation");
		$this -> form_validation -> set_rules("username", "username", "required|trim|email|xss_clean");
		$this -> form_validation -> set_rules("password", "password", "required|trim|xss_clean");
		if ($this -> form_validation -> run() == FALSE) {
			echo "adad";
			$this->load->view("login", $Error);
		} else {
			$this -> load -> model("loginmodel");
			$res = $this -> loginmodel -> SignIn();
			if ($res == 1) {
				redirect(site_url('student'));			
			} else if ($res == -1) {	
				$Error["Invalid"] = "Incorrect username/password";
				$this->load->view("login",$Error);
			} else {
				$this->load->view("login");
			}
		}
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
