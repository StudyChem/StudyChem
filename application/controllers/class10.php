<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* This controller contains the functionalities
/* of the class 10 chemistry.
/**********************************************/

class Class10 extends CI_Controller {

	/* This is the default constructor */
	function __construct()
   	{
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
    }
	
	/* Loads the home page of class 10th */
	public function index()
	{
		$this -> load -> view('header');
		$this -> load -> view('class10');
	}

	public function det_php() 
	{
		$this -> load -> view('header');
		$this -> load -> view('det_php');
	}
	public function php_procedure() 
	{
		$this -> load -> view('header');
		$this -> load -> view('php_procedure');
	}
	public function php_simulation() 
	{
		$this -> load -> view('header');
		$this -> load -> view('php_simulation');
	}
	public function sd_procedure() 
	{
		$this -> load -> view('header');
		$this -> load -> view('sd_procedure');
	}
	public function sd_simulation() 
	{
		$this -> load -> view('header');
		$this -> load -> view('sd_simulation');
	}
	public function comb_procedure() 
	{
		$this -> load -> view('header');
		$this -> load -> view('comb_procedure');
	}
	public function decom_procedure() 
	{
		$this -> load -> view('header');
		$this -> load -> view('decom_procedure');
	}
	public function comb_simulation() 
	{
		$this -> load -> view('header');
		$this -> load -> view('comb_simulation');
	}
	public function decom_simulation() 
	{
		$this -> load -> view('header');
		$this -> load -> view('decom_simulation');
	}
	public function sd_rxn() 
	{
		$this -> load -> view('header');
		$this -> load -> view('sd_rxn');
	}
	public function com_rxn() 
	{
		$this -> load -> view('header');
		$this -> load -> view('com_rxn');
	}
	public function decom_rxn() 
	{
		$this -> load -> view('header');
		$this -> load -> view('decom_rxn');
	}
	public function acid_bases() 
	{
		$this -> load -> view('header');
		$this -> load -> view('acid_bases');
	}
	public function dd_rxn() 
	{
		$this -> load -> view('header');
		$this -> load -> view('dd_rxn');
	}
	public function acetic_acid() 
	{
		$this -> load -> view('header');
		$this -> load -> view('acetic_acid');
	}
	public function rr_metals() 
	{
		$this -> load -> view('header');
		$this -> load -> view('rr_metals');
	}
	public function cc_soap() 
	{
		$this -> load -> view('header');
		$this -> load -> view('cc_soap');
	}
	public function sap_mak() 
	{
		$this -> load -> view('header');
		$this -> load -> view('sap_mak');
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
