<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* This controller contains the topics
/* of class 9 chemistry.
/*************************************/

class Class9 extends CI_Controller {
	function __construct()
   	{
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
    }
	
	public function topic($topic) 
	{
		$student = $this -> session -> userdata('email');
        $this -> db -> where('student',$student);
        $data = $this -> db -> get('teacherClass');
        $data = $data -> row();
        $teacher = $data -> teacher;
        $this -> db -> where('teacher',$teacher);
        $this -> db -> where('id',$topic);
        
        $topics = $this -> db -> get('topic');
        $topics = $topics -> row();
        $data1['title'] = $topics -> topic;
        $data1['theory'] = $topics -> theory;
        $this -> load -> view('header');
        $this -> load -> view('topic',$data1);

	}
	public function index()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
	
		$this -> load -> model('studentmodel');
		$email = $this -> studentmodel -> getTeacher();
		if($email == "default") 
		{
			$topic['title'] = "You are not yet enrolled in any class!";
			$topic['periodic'] = 1;
			$topic['chemical'] = 1;
			$topic['mixture'] = 1;
			$topic['melting'] = 1;
			$topic['solution'] = 1;
			$topic['boiling'] = 1;
			$topic['exothermic'] = 1;
		}
		else 
		{
			$this -> db -> where('email',$email);
			$data = $this -> db -> get('student');
			$row = $data -> row();
			$name = $row -> name;
			$topic['title'] = "Welcome! You are enrolled in ". $name ."'s class!";
			$this -> db -> where('email',$email);
			$data = $this -> db -> get('class9');
			$row = $data -> row();
			$topic['periodic'] = $row -> periodic;
			$topic['chemical'] = $row -> chemical;
			$topic['mixture'] = $row -> mixture;
			$topic['melting'] = $row -> melting;
			$topic['solution'] = $row -> solution;
			$topic['boiling'] = $row -> boiling;
			$topic['exothermic'] = $row -> exothermic;
		}
		$this -> load -> view('header');
		$this-> load-> view('class9',$topic);
	}

	public function periodic_table() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
	
		$this -> load -> view('header');
		$this -> load -> view('periodic_table');
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

	public function exo_endo() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
	
		$this -> load -> view('header');
		$this -> load -> view('exo_endo');
	}
	public function exo_endo_procedure() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
	
		$this -> load -> view('header');
		$this -> load -> view('exo_endo_procedure');
	}
	public function exo_simulation() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
	
		$this -> load -> view('header');
		$this -> load -> view('exo_simulation');
	}
	public function endo_simulation() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
	
		$this -> load -> view('header');
		$this -> load -> view('endo_simulation');
	}
	

	public function boiling_point() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
	
		$this -> load -> view('header');
		$this -> load -> view('boiling_point');
	}
	public function boiling_point_procedure() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
	
		$this -> load -> view('header');
		$this -> load -> view('boiling_point_procedure');
	}
	public function boiling_point_simulation() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
	
		$this -> load -> view('header');
		$this -> load -> view('boiling_point_simulation');
	}
	public function mixture_compound() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
	
		$this -> load -> view('header');
		$this -> load -> view('mixture_compound');
	}
	public function chemical_reactions() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
	
		$this -> load -> view('header');
		$this -> load -> view('chemical_reactions');
	}
	public function crxn_procedure() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
	
		$this -> load -> view('header');
		$this -> load -> view('crxn_procedure');
	}
	public function crxn_simulation() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
	
		$this -> load -> view('header');
		$this -> load -> view('crxn_simulation');
	}
	public function melting_point() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
	
		$this -> load -> view('header');
		$this -> load -> view('melting_point');
	}
	public function mp_procedure() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache"); 
	
		$this -> load -> view('header');
		$this -> load -> view('mp_procedure');
	}
	public function mp_simulation() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache"); 
	
		$this -> load -> view('header');
		$this -> load -> view('mp_simulation');
	}
	
	public function solutions() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache"); 
	
		$this -> load -> view('header');
		$this -> load -> view('solutions');
	}
	public function solutions_procedure() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$this -> load -> view('solutions_procedure');
	}
	public function solutions_simulation() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$this -> load -> view('solutions_simulation');
	}

	public function mixcmpd_simulation() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$this -> load -> view('mixcmpd_simulation');
	}	
		public function mixcmpd_procedure() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$this -> load -> view('mixcmpd_procedure');
	}
		public function exothermic() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$this -> load -> view('exothermic');
	}
		public function endothermic() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$this -> load -> view('endothermic');
	}
}	
