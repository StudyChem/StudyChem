<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* This controller contains the functionalities 
/* of the student account.
/*********************************************/

class Student extends CI_Controller {
	function __construct()
   	{
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
    }
	
	public function assignments() 
	{
		
		$error = null;
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('student',$email);
		$data1 = $this -> db -> get('teacherClass');
		
		$teacher = $data1 -> row();
		$email = $teacher -> teacher;
		$this -> db -> where('teacher',$email);
		$data = $this -> db -> get('addassignment');
		$sendData['data'] = $data;
		$this -> load -> view('header');
		$this -> load -> view('assignments',$sendData);
	}
	
	public function download($assgname)
	{
		$this -> output -> set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
		$this -> output -> set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this -> output -> set_header('Cache-Control: post-check=0, pre-check=0', false);
		$this -> output -> set_header('Pragma: no-cache');
		
		if ($this -> session -> userdata('isLoggedIn') && $this -> session -> userdata('roleid') == 1) {
			$this -> db -> where('assgname',$assgname);
			$data = $this -> db -> get('upload');
			$data = $data -> row();
			$filePath = $data -> path;
			
			$getFile = explode("/", $filePath);
			$name = end($getFile);
			$this -> load -> helper('download');
			$data = file_get_contents($filePath);
			force_download($name, $data);		
		} else {
			$this -> session -> sess_destroy();
			redirect(base_url() . "Home/Login");
		}
	
	}
	public function index()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$this -> load -> model('studentmodel');
		$this -> load -> view('header');
		$this->load->view('home');
		
	}
	public function quiz($req) 
	{
		$error = null;
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$quizid = 7;
		$this->db->where('quizid',$quizid);
		$data = $this -> db -> get('problem');
		
		$count = $data->num_rows();
		$this->db->where('quizid',$quizid);
		$this->db->where('ques_num',$req);
		
		$data = $this -> db -> get('problem');
		$sendData['data'] = $data;
		$sendData['count'] = $count;
		$this -> load -> view('header');
		$this -> load -> view('quiz',$sendData);
		
	}
	
	public function settings() 
	{	
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$this -> load -> view('settings');
	}	

	public function changePassword() {
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
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
	$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
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
			$success["valid1"] = "Your settings are successfully updated!";
			$this -> load -> view('header');
			$this -> load -> view("settings",$success);
			//redirect('home/login');
		}
		

	}
	
	function do_upload()
	{
		
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$config['upload_path'] = $_SERVER['DOCUMENT_ROOT'] . "/StudyChem/submission";
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$config['max_size']	= '2048';
		
		
		$assgname =  $_POST['assgname1'];
		$email = $this->session->userdata('email');
		$this -> db -> where('student',$email);
		$data1 = $this -> db -> get('teacherClass');
		
		$data = $data1-> row();
		$teacher = $data->teacher;
		$subdate =  $_POST['subdate1'];
		
		$this->load->library('upload', $config);

		$query = $this->db->get_where('submission', array('assgname' => $assgname)); 
        $count= $query->num_rows();    //counting result from query
		if ($count > 0){
				if ( !$this->upload->do_upload() )
				{
				$senddata = array('error' => $this->upload->display_errors());
				}
				else{
				$sendData['title'] = "Assignment already added";
				$sdata = $this->upload->data();
				$senddata = array('upload_data' => $this->upload->data());
				$sendData['title1'] = "Assignment is successfully submitted!";
				$sdata = $this->upload->data();
				$path = $sdata['file_path'] .$sdata['file_name']; 
				$this -> db -> where('teacher',$teacher);
				$this -> db -> where('assgname',$assgname);
				$this -> db -> where('student',$email);
				
				$array1 = array('assgname' => $assgname, 'teacher' => $teacher,
				'student' => $email, 'subdate' => $subdate ,'path' => $path
				);
				
				$this -> db -> update('submission',$array1);
				$sendData['title'] = "Assignment is successfully submitted!";
				}
		}
		
		if ($count == 0)
		{ 
			if ( !$this->upload->do_upload() )
			{
				$senddata = array('error' => $this->upload->display_errors());
			}
			else
			{
				$sdata = $this->upload->data();
				$senddata = array('upload_data' => $this->upload->data());
				$sendData['title1'] = "Assignment is successfully submitted!";
				$sdata = $this->upload->data();
				$path = $sdata['file_path'] .$sdata['file_name']; 
				$array = array('assgname' => $assgname, 'teacher' => $teacher,
				'student' => $email, 'subdate' => $subdate ,'path' => $path
				);
				$this -> db -> insert('submission',$array);
				$sendData['title'] = "Assignment is successfully submitted!";
			}
		}
		
		
		$this -> db -> where('teacher',$teacher);
		$data = $this -> db -> get('addassignment');
		$sendData['data'] = $data;
		$this -> load -> view('assignments',$sendData);
	}
	
	public function timeline() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('student',$email);
		$data = $this -> db -> get('teacherClass');
		if($data -> num_rows() == 1) 
		{
			$row = $data -> row();
			$teacher = $row -> teacher;
			$sendData['data'] = $teacher;
			$this -> load -> view('header');
			$this -> load -> view('timeline',$sendData);
		}
	}
	
	
}