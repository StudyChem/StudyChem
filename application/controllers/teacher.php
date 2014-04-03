<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* This controller contains the features of the 
/* Teacher account.
/*********************************************/

class Teacher extends CI_Controller {
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
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$this->load->view('home');
	}
	public function addNews()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$head = $_POST['heading'];
		$cont = $_POST['cont'];
		$date = date('Y-m-d H:i:s');
		$email = $this -> session -> userdata('email');
		$data = array('teacher' => $email,
					  'heading' => $head,
					  'content' => $cont,
					  'date' => $date
					 );
		$this -> db -> insert('news',$data);
		redirect('teacher/timeline');
	}

	public function timeline() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$data = $this -> db -> get('news');
		$sendData['data'] = $data; 
		$this -> load -> view('header');
		$this -> load -> view('teacher/timeline',$sendData);
	}
	public function quiz() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$data = $this -> db -> get('news');
		$sendData['data'] = $data; 
		$this -> load -> view('header');
		$this -> load -> view('teacher/quiz',$sendData);
	}
	public function dashboard() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$data = $this -> db -> get('teacherClass');
		$students['data'] = $data;
		$this -> load -> view('header');
		$this -> load -> view('teacher/dashboard',$students);
	}
	
	public function attendance() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$data = $this -> db -> get('teacherClass');
		$students['data'] = $data;
		$this -> load -> view('header');
		$this -> load -> view('teacher/attendance',$students);
	}
	
	public function markattend() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$data = $this -> db -> get('teacherClass');
		$students['data'] = $data;
		$this -> load -> view('header');
		$this -> load -> view('teacher/attendance',$students);
	}
	
	
	public function assignments() 
	{
		
		$error = null;
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$data1 = $this -> db -> get('addassignment');
		$students['data'] = $data1;
		$this -> load -> view('header');
		$this -> load -> view('teacher/assignments',$students);
	
		
	}
	
	public function addStudent() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$email = $_POST['addEmail'];
		$this -> db -> where('email',$email);
		$data = $this -> db -> get('student');

		if($data -> num_rows()==0) {
			$sendData['title'] = "Sorry! No such Student Exist. Try another E-mail address!";
		}
		else {
			$row  = $data -> row();
			$array = array('teacher' => $this -> session ->userdata('email'),
						   'student' => $row -> email
						   );
			$this -> db -> insert('teacherClass',$array);
			$sendData['title'] = "Student is successfully added into your class!";
		}
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$data = $this -> db -> get('teacherClass');
		$sendData['data'] = $data;
		$this -> load -> view('header');
		$this -> load -> view('teacher/assignments',$sendData);
	}

	public function removeStudent() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$email = $_POST['removeEmail'];
		$this -> db -> where('student',$email);
		$data = $this -> db -> get('teacherClass');

		if($data -> num_rows()==0) {
			$sendData['title1'] = "Sorry! No such Student Exist. Try another E-mail address!";
		}
		else {
			$row  = $data -> row();
			$array = array('teacher' => $this -> session ->userdata('email'),
						   'student' => $row -> student
						   );
			$this -> db -> delete('teacherClass',$array);
			$sendData['title1'] = "Student is successfully removed from your class!";
		}
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$data = $this -> db -> get('teacherClass');
		$sendData['data'] = $data;
		$this -> load -> view('header');
		$this -> load -> view('teacher/dashboard',$sendData);
	}
	public function settings() 
	{	
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$this -> load -> view('settings');
	}	
	
	public function do_upload1() 
	{
		
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
		{
		$fileName = $_FILES['userfile']['name'];
		$tmpName  = $_FILES['userfile']['tmp_name'];
		$fileSize = $_FILES['userfile']['size'];
		$fileType = $_FILES['userfile']['type'];
		
		$fp      = fopen($tmpName, 'r');
		$content = fread($fp, filesize($tmpName));
		$content = addslashes($content);
		fclose($fp);
		$assgname =  $_POST['assgname'];
		$assmsg =  $_POST['assmsg'];
		$startdate =  $_POST['startdate'];
		$lastdate =  $_POST['lastdate'];
		
		if(!get_magic_quotes_gpc())
		{
		$fileName = addslashes($fileName);
		}
		//include 'library/config.php';
		//include 'library/opendb.php';
		
		
		$query = $this->db->get_where('upload', array('assgname' => $assgname)); 
        $count= $query->num_rows();    //counting result from query
		if ($count >= 0){
		$sendData['title'] = "Assignment already added";
		}
		
		if ($count === 0){
		
		$array = array('name' => $fileName, 'size'  => $fileSize, 'type' => $fileType, 'content' => $content,'assgname' => $assgname, 'assmsg' => $assmsg,
		'startdate' => $startdate, 'lastdate' => $lastdate
						   
						   );
		
		$this -> db -> insert('upload',$array);
		$sendData['title'] = "Assignment is successfully added into your class!";
		}
		
		$assgname = $_POST['assgname'];
		$this -> db -> where('assgname',$assgname);
		$data1 = $this -> db -> get('upload');
		
		$query = $this->db->get_where('addassignment', array('assgname' => $assgname)); 
        $count= $query->num_rows();   
		
		if($data1 -> num_rows()==0) {
			$sendData['title1'] = "Sorry! No such assginment Exist. Try another E-mail address!";
		}
		else if($count === 0){
			$row  = $data1 -> row();
			$array1 = array('teacher' => $this -> session ->userdata('email'),
						   'assgname' => $assgname
						   );
			$this -> db -> insert('addassignment',$array1);
			
		}
		
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$data = $this -> db -> get('addassignment');
		$sendData['data'] = $data;
		$this -> load -> view('teacher/assignments',$sendData);
		} 
	}	
	
	function do_upload()
	{
		
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$config['upload_path'] = $_SERVER['DOCUMENT_ROOT'] . "/StudyChem/uploads";
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$config['max_size']	= '2048';
		
		$assgname =  $_POST['assgname'];
		$assmsg =  $_POST['assmsg'];
		$startdate =  $_POST['startdate'];
		$lastdate =  $_POST['lastdate'];
		$this->load->library('upload', $config);

		$query = $this->db->get_where('upload', array('assgname' => $assgname)); 
        $count= $query->num_rows();    //counting result from query
		if ($count >= 0){
		$sendData['title'] = "Assignment already added";
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
				$sendData['title1'] = "Assignment is successfully added into your class!";
				$sdata = $this->upload->data();
				$path = $sdata['file_path'] .$sdata['file_name']; 
				$array = array( 'assgname' => $assgname, 'assmsg' => $assmsg,
				'startdate' => $startdate, 'lastdate' => $lastdate ,'path' => $path
				);
		
				$this -> db -> insert('upload',$array);
				$sendData['title'] = "Assignment is successfully added into your class!";
			}
		}
		$assgname = $_POST['assgname'];
		$this -> db -> where('assgname',$assgname);
		$data1 = $this -> db -> get('upload');
		$query = $this->db->get_where('addassignment', array('assgname' => $assgname)); 
        $count= $query->num_rows();   
		if($data1 -> num_rows()==0) {
			$sendData['title1'] = "Sorry! No such assginment Exist!";
		}
		else if($count === 0){
			$row  = $data1 -> row();
			$array1 = array('teacher' => $this -> session ->userdata('email'),
						   'assgname' => $assgname
						   );
			$this -> db -> insert('addassignment',$array1);
		}
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$data = $this -> db -> get('addassignment');
		$sendData['data'] = $data;	
		$this -> load -> view('teacher/assignments',$sendData);
	}

	public function download($assgname)
	{
		$this -> output -> set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
		$this -> output -> set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this -> output -> set_header('Cache-Control: post-check=0, pre-check=0', false);
		$this -> output -> set_header('Pragma: no-cache');
		
		if ($this -> session -> userdata('isLoggedIn') && $this -> session -> userdata('roleid') == 2) {
			$this -> load -> model('studentmodel');
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
	public function add_periodic() {
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("periodic" => 1);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);

	}

	public function remove_periodic() {
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("periodic" => 0);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);
	}
	public function add_chemical() {
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("chemical" => 1);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);

	}

	public function remove_chemical() {
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("chemical" => 0);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);
	}
	public function add_mixture() {
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("mixture" => 1);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);

	}

	public function remove_mixture() {
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("mixture" => 0);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);
	}
	public function add_melting() {
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("melting" => 1);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);

	}

	public function remove_melting() {
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("melting" => 0);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);
	}

	public function add_solution() {
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("solution" => 1);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);

	}

	public function remove_solution() {
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("solution" => 0);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);
	}

	public function add_boiling() {
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("boiling" => 1);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);

	}

	public function remove_boiling() {
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("boiling" => 0);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);
	}

	public function add_exothermic() {
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("exothermic" => 1);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);

	}

	public function remove_exothermic() {
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('email',$email);
		$data = array("exothermic" => 0);
		$this -> db -> update('class9',$data);
		
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);
	}

	public function class9() {
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic['periodic'] = $row -> periodic;
		$topic['chemical'] = $row -> chemical;
		$topic['mixture'] = $row -> mixture;
		$topic['melting'] = $row -> melting;
		$topic['solution'] = $row -> solution;
		$topic['boiling'] = $row -> boiling;
		$topic['exothermic'] = $row -> exothermic;
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic);
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
			$success["valid"] = "Your settings are successfully updated!";
			$this -> load -> view('header');
			$this -> load -> view("settings",$success);
			//redirect('home/login');
		}
		

	}
	
	
}