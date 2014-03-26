<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class general extends CI_Controller {
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
		$this-> load-> view('general');
	}

	public function jmol()
	{
		$this -> load -> view('header');

		$this -> load -> view('jmol');
	}
	public function molecule()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('benzene');
	}
	public function benzene()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('benzene');
	}
	public function butadiene()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('butadiene');
	}
	public function butane()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('butane');
	}
	public function cyclohexane()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('cyclohexane');
	}
	public function cysteine()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('cysteine');
	}
	public function diamond()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('diamond');
	}
	public function dimer()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('dimer');
	}
	public function dinitro()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('dinitro');
	}
	public function ethane()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('ethane');
	}
	public function ethanol()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('ethanol');
	}
	public function ethylene()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('ethylene');
	}
	public function fullerene()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('fullerene');
	}
	public function glutamic_acid()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('glutamic_acid');
	}
	public function glutamine()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('glutamine');
	}
	public function glycine()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('glycine');
	}
	public function graphite()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('graphite');
	}
	public function heptane()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('heptane');
	}
	public function hexane()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('hexane');
	}
	public function histidine()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('histidine');
	}
	public function ice()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('ice');
	}
	public function ice_tetra()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('ice_tetra');
	}
	public function pyrene()
	{
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('pyrene');
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
	public function eqn_balancer()
	{
			$this -> load -> view('header');

		$this -> load -> view('eqn_balancer');
	}
	
}	

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
