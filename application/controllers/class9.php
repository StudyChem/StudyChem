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

	public function exo_endo() 
	{
			$this -> load -> view('header');

		$this -> load -> view('exo_endo');
	}
	public function exo_endo_procedure() 
	{
			$this -> load -> view('header');

	
		$this -> load -> view('exo_endo_procedure');
	}
	public function exo_simulation() 
	{
			$this -> load -> view('header');

		$this -> load -> view('exo_simulation');
	}
	public function endo_simulation() 
	{
			$this -> load -> view('header');

		$this -> load -> view('endo_simulation');
	}
	

	public function boiling_point() 
	{
			$this -> load -> view('header');

		$this -> load -> view('boiling_point');
	}
	public function boiling_point_procedure() 
	{
			$this -> load -> view('header');

	
		$this -> load -> view('boiling_point_procedure');
	}
	public function boiling_point_simulation() 
	{
			$this -> load -> view('header');

		$this -> load -> view('boiling_point_simulation');
	}
		public function mixture_compound() 
	{
			$this -> load -> view('header');

		$this -> load -> view('mixture_compound');
	}
	public function chemical_reactions() 
	{
			$this -> load -> view('header');

		$this -> load -> view('chemical_reactions');
	}
	public function crxn_procedure() 
	{
			$this -> load -> view('header');

		$this -> load -> view('crxn_procedure');
	}
	public function crxn_simulation() 
	{
			$this -> load -> view('header');

		$this -> load -> view('crxn_simulation');
	}
	public function melting_point() 
	{
			$this -> load -> view('header');

		$this -> load -> view('melting_point');
	}
	public function mp_procedure() 
	{
			$this -> load -> view('header');

		$this -> load -> view('mp_procedure');
	}
	public function mp_simulation() 
	{
			$this -> load -> view('header');

		$this -> load -> view('mp_simulation');
	}
	


	public function solutions() 
	{
			$this -> load -> view('header');

		$this -> load -> view('solutions');
	}
	public function solutions_procedure() 
	{
			$this -> load -> view('header');
	
		$this -> load -> view('solutions_procedure');
	}
	public function solutions_simulation() 
	{
			$this -> load -> view('header');

		$this -> load -> view('solutions_simulation');
	}
		
}	

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
