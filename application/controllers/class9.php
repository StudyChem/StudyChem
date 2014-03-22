<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Class9 extends CI_Controller {
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

		$this-> load-> view('class9');
	}

	public function periodic_table() 
	{
			$this -> load -> view('header');

		$this -> load -> view('periodic_table');
	}
	public function mixture_compound() 
	{
			$this -> load -> view('header');

		$this -> load -> view('mixture_compd');
	}
	
	public function periodic_simulation() 
	{
			$this -> load -> view('header');

		$this -> load -> view('periodic_simulation');
	}
	public function periodic_procedure() 
	{
			$this -> load -> view('header');

	
		$this -> load -> view('periodic_procedure');
	}
	
}	

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
