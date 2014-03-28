<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* This controllers is for general topics 
/* of the chemistry.
/****************************************/

class general extends CI_Controller {

	// Default Constructor
	function __construct()
   	{
        // this is your constructor
		
		
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
    }
	
    /*Rediects to the home page of general topic */
	public function index()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
		$this -> load -> view('header');
		$this -> load -> view('general');
	}

	/* Loads jmol */
	public function jmol()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
		$this -> load -> view('header');
		$this -> load -> view('jmol');
	}


	public function molecule()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('benzene');
	}

	/* Loads benzene molecule */
	public function benzene()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('benzene');
	}
	public function butadiene()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('butadiene');
	}
	public function butane()
	{	
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('butane');
	}
	public function cyclohexane()
	{	
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('cyclohexane');
	}
	public function cysteine()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('cysteine');
	}
	public function diamond()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('diamond');
	}
	public function dimer()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('dimer');
	}
	public function dinitro()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('dinitro');
	}
	public function ethane()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('ethane');
	}
	public function ethanol()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('ethanol');
	}
	public function ethylene()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('ethylene');
	}
	public function fullerene()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('fullerene');
	}
	public function glutamic_acid()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('glutamic_acid');
	}
	public function glutamine()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('glutamine');
	}
	public function glycine()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('glycine');
	}
	public function graphite()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('graphite');
	}
	public function heptane()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('heptane');
	}
	public function hexane()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('hexane');
	}
	public function histidine()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('histidine');
	}
	public function ice()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('ice');
	}
	public function ice_tetra()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('ice_tetra');
	}
	public function pyrene()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$this -> load -> view('molecule');
		$this -> load -> view('pyrene');
	}
	public function periodic_table() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$this -> load -> view('periodic_table');
	}
	public function mixture_compound() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$this -> load -> view('mixture_compd');
	}
	
	public function periodic_simulation() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$this -> load -> view('periodic_simulation');
	}
	public function periodic_procedure() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$this -> load -> view('periodic_procedure');
	}
	public function eqn_balancer()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$this -> load -> view('eqn_balancer');
	}
	
}	
