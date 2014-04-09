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
	public function removeTopic($id)
	{
		$this -> db -> where('id',$id);
		$array = array('show' => 0);
		$this -> db -> update('topic',$array);
		$this -> class9();
	}
	public function showTopic($id)
	{
		$this -> db -> where('id',$id);
		$array = array('show' => 1);
		$this -> db -> update('topic',$array);
		$this -> class9();
	}

	public function deleteTopic($id) 
	{
		$this -> db -> where('id',$id);
		$this -> db -> delete('topic');
		$this -> class9();
	}
	public function viewTopic($id)
	{
		$teacher = $this -> session -> userdata('email');
        $this -> db -> where('teacher',$teacher);
        $this -> db -> where('id',$id);
        
        $topics = $this -> db -> get('topic');
        $topics = $topics -> row();
        $data1['title'] = $topics -> topic;
        $data1['theory'] = $topics -> theory;
        $data1['id'] = $topics -> id;
        $this -> load -> view('header');
        $this -> load -> view('topic',$data1);
	}
	public function editTopic($id)
	{
		$teacher = $this -> session -> userdata('email');
        $this -> db -> where('teacher',$teacher);
        $this -> db -> where('id',$id);
        
        $topics = $this -> db -> get('topic');
        $topics = $topics -> row();
        $data1['title'] = $topics -> topic;
        $data1['theory'] = $topics -> theory;
        $data1['id'] = $topics -> id;
        $this -> load -> view('header');
        $this -> load -> view('teacher/editTopic',$data1);
	}
	public function edit_topic($id)
	{
		$teacher = $this -> session -> userdata('email');
        $theory = $_POST['area1'];
		$topic =$_POST['topic'];
		$this -> db -> where('id',$id);
		$this -> db -> where('teacher',$teacher);
		$array = array("topic" => $topic,
					   "theory" => $theory);
		$this -> db -> update('topic',$array);
		$this -> viewTopic($id);
	}	
	
	public function addNewTopic()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$this -> load -> view('teacher/newTopic');
	}

	public function addTopic()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$theory = $_POST['area1'];
		$topic =$_POST['topic'];
		$email = $this -> session -> userdata('email');
		
		$this->db->where('topic',$topic);
		$this->db->where('teacher',$email);
		$query = $this->db->get('topic');
		$count = $query->num_rows();
		if($count ===0){
		$array = array("teacher" => $email,
					   "topic" => $topic,
					   "theory" => $theory);
		$this -> db -> insert('topic',$array);
		}
		$this -> db -> where('email',$this -> session -> userdata('email'));
		$data = $this -> db -> get('class9');
		$row = $data -> row();
		$topic1['periodic'] = $row -> periodic;
		$topic1['chemical'] = $row -> chemical;
		$topic1['mixture'] = $row -> mixture;
		$topic1['melting'] = $row -> melting;
		$topic1['solution'] = $row -> solution;
		$topic1['boiling'] = $row -> boiling;
		$topic1['exothermic'] = $row -> exothermic;
		$success['tag'] = "Topic added successfully";
		$this -> load -> view('header');
		$this -> load -> view('teacher/class9',$topic1 	 	);

		
		
		//$this -> load -> view('header');
		//$this -> load -> view('teacher/class9');

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
		$date = $_POST['attdate'];
		//echo $date;
		$_SESSION['date'] = $date;
		$student = $_POST['emailid'];
		
		if(strtotime($_SESSION['date'])!='0000-00-00')
		{
		if(isset($_POST['present'])){
				$students['attend'] = "Marked";
				$present = $_POST['present'];
				$this -> db -> where('student',$student);
				$this -> db -> where('date1',$date);
				$number = $this -> db -> get('stuhasattend');
				if($number-> num_rows() == 0){
				$array = array('student' => $student, 'date1' => $date, 'value' => 1,
								'teacher' => $email);
				$this -> db -> insert('stuhasattend',$array);}
				else{
				$this -> db -> where('student',$student);
				$this -> db -> where('date1',$date);
				$array = array('student' => $student, 'date1' => $date, 'value' => 1,
								'teacher' => $email);
				$this -> db -> update('stuhasattend',$array);
				}
				
		}
		else if(isset($_POST['absent'])){
				$absent = $_POST['absent'];
				$this -> db -> where('student',$student);
				$this -> db -> where('date1',$date);
				$number = $this -> db -> get('stuhasattend');
				if($number-> num_rows() == 0){
				$array = array('student' => $student, 'date1' => $date, 'value' => 0,
								'teacher' => $email);
				$this -> db -> insert('stuhasattend',$array);}
				else{
				$this -> db -> where('student',$student);
				$this -> db -> where('date1',$date);
				$array = array('student' => $student, 'date1' => $date, 'value' => 0,
								'teacher' => $email);
				$this -> db -> update('stuhasattend',$array);
				}
		}
		}
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$data = $this -> db -> get('teacherClass');
		$students['data'] = $data;
		
		$this -> load -> view('header');
		$this -> load -> view('teacher/attendance',$students);
	}
	
	public function quiz_upload() 
	{	
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$this -> load -> helper('url');
		$this -> load -> library('session');
		$this -> load -> library("form_validation");
		$this -> form_validation -> set_rules("quiznumber", "Quiz Number", "required|numeric|trim|xss_clean");
		$this -> form_validation -> set_rules("quizname", "Quiz Name ", "required|trim|xss_clean");
		$this -> form_validation -> set_rules("quizdes", "Quiz Description ", "required|trim|xss_clean");
		$this -> form_validation -> set_rules("duration", "Quiz Duration ", "required|numeric|trim|xss_clean");
		$this -> form_validation -> set_rules("startdate", "Start Date ", "required|trim|xss_clean");
		$this -> form_validation -> set_rules("enddate", "Last Date ", "required|trim|xss_clean");
		
		$email = $this -> session -> userdata('email');
		$quizname = $_POST['quizname'];
		$quizdes = $_POST['quizdes'];
		//$num_qsn = $_POST['noofqsns'];
		$duration = $_POST['duration'];
		$startdate = $_POST['startdate'];
		$enddate = $_POST['enddate'];
		//$code = $_POST['code'];
		$quiznumber = $_POST['quiznumber'];
		
		if ($this -> form_validation -> run() == FALSE) {
			
		}
		else if( strtotime($enddate)<strtotime($startdate)){
			$quiz['dateissue']="End date cannot be less than start date";
		}
		else{
		$query = $this->db->get_where('quiz_table', array('quiznumber' => $quiznumber,'teacher' => $email)); 
        $count= $query->num_rows();  
		if($count === 0){
		$array  = array('teacher' => $email, 'quizname' => $quizname,
						'quizdes' => $quizdes,
						
						'duration' => $duration,
						'startdate' => $startdate,
						'enddate' => $enddate,
						
						'quiznumber' => $quiznumber
						
						);
		$this->db->insert('quiz_table', $array);}

		else if($count > 0){
		$array  = array('teacher' => $email, 'quizname' => $quizname,
						'quizdes' => $quizdes,
						
						'duration' => $duration,
						'startdate' => $startdate,
						'enddate' => $enddate,
						
						'quiznumber' => $quiznumber
						
						);
		$this->db->update('quiz_table', $array);}
		$quiz['title'] = "Quiz Number";
		$quiz['quizno'] = $quiznumber;
		$quiz['title1'] = "successfully added";
		
		}

		
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$data = $this -> db -> get('quiz_table');
		$quiz['data'] = $data;
		$this -> load -> view('header');
		$this -> load -> view('teacher/quiz',$quiz);
	}
	public function qsn_add1(){
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$this -> load -> view('header');
		$quizid = $_POST['quizid'];
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$this -> db -> where('quizid',$quizid);
		
		$data = $this -> db -> get('problem');
		$quiz['data'] = $data;
		$quiz['quizid'] = $quizid;
		$this -> load -> view('header');
		$this -> load -> view('teacher/qsn_add',$quiz);
		
		
	
	}
	public function qsn_add() 
	{	
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$this -> load -> helper('url');
		$this -> load -> library('session');
		$this -> load -> library("form_validation");
		$this -> form_validation -> set_rules("qsnnumber", "Question Number", "required|numeric|trim|xss_clean");
		$this -> form_validation -> set_rules("question1", "Question ", "required|trim|xss_clean");
		$this -> form_validation -> set_rules("opta", "Option A ", "required|trim|xss_clean");
		$this -> form_validation -> set_rules("optb", "Option B ", "required|trim|xss_clean");
		$this -> form_validation -> set_rules("optc", "Option C ", "required|trim|xss_clean");
		$this -> form_validation -> set_rules("optd", "Option D ", "required|trim|xss_clean");
		$this -> form_validation -> set_rules("cans", "Correct Answer ", "required|trim|xss_clean");
		$this -> form_validation -> set_rules("marks", "Marks ", "required|numeric|trim|xss_clean");
		
		$email = $this -> session -> userdata('email');
		$quiz_id = $_POST['quizid'];
		$qsnnum = $_POST['qsnnumber'];
		$question = $_POST['question1'];
		$opta = $_POST['opta'];
		$optb = $_POST['optb'];
		$optc = $_POST['optc'];
		$optd = $_POST['optd'];
		$cans = $_POST['cans'];
		$marks = $_POST['marks'];
		if ($this -> form_validation -> run() == FALSE) {
			//$this -> load -> view('header');
			//$this->load->view("settings", $Error);
		}
		else if( $cans != $opta && $cans != $optb && $cans != $optc && $cans != $optd ){
		
			$quiz["Invalid1"] = "Invalid Ans. Please Choose either from Option A,B,C or D";
		}
		else{
		$query = $this->db->get_where('problem', array('ques_num' => $qsnnum, 'quizid' => $quiz_id , 'teacher' => $email)); 
        $count= $query->num_rows();  
		if($count === 0){
		$array  = array('teacher' => $email, 'quizid' => $quiz_id,
						'ques_num' => $qsnnum,
						'ques' => $question,
						'opta' => $opta,
						'optb' => $optb,
						'optc' => $optc,
						'optd' => $optd,
						'correctans' => $cans,
						'marks' => $marks
						);
		$this->db->insert('problem', $array);}
		$quiz['title'] = "Question Number" ;
		$quiz['ques'] = $qsnnum;
		$quiz['title1'] ="successfully added";
		}
		
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$this -> db -> where('quizid',$quiz_id);
		$data = $this -> db -> get('problem');
		$quiz['data'] = $data;
		$quiz['quizid'] = $quiz_id;
		
		$this -> load -> view('header');
		$this -> load -> view('teacher/qsn_add',$quiz);
	}
	
	public function qsn_del() 
	{	
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		
		$quizid = $_POST['quizid'];
		$ques_num = $_POST['ques_num'];
		
		
		
		$array  = array('teacher' => $email, 'quizid' => $quizid,
						'ques_num' => $ques_num
						
						);
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$this -> db -> where('quizid',$quizid);
		$this -> db -> where('ques_num',$ques_num);
		$this -> db -> delete('problem',$array);
		
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$this -> db -> where('quizid',$quizid);
		$data = $this -> db -> get('problem');
		$quiz['data'] = $data;
		$quiz['quizid'] = $quizid;
		$quiz['titledel'] = "Question Number";
		$quiz['delete'] = $ques_num;
		$quiz['titledel1'] = "successfully deleted";
		$this -> load -> view('header');
		$this -> load -> view('teacher/qsn_add',$quiz);
	}
	
	public function quiz_del() 
	{	
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		
		$quizid = $_POST['quizid'];
		$this -> db -> where('quizid',$quizid);
		$data = $this->db->get('quiz_table');
		$res = $data->row();
		$quiznum = $res-> quiznumber;
		
		$array  = array('teacher' => $email, 'quizid' => $quizid
						
						
						);
						
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$this -> db -> where('quizid',$quizid);
		
		$this -> db -> delete('problem',$array);
		
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$this -> db -> where('quizid',$quizid);
		
		$this -> db -> delete('quiz_table',$array);
		
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$data = $this -> db -> get('quiz_table');
		$quiz['data'] = $data;
		
		$quiz['titledel'] = "Quiz Number";
		$quiz['quizdel'] = $quiznum;
		$quiz['titledel1'] = "successfully deleted";
		
		$this -> load -> view('header');
		$this -> load -> view('teacher/quiz',$quiz);
		
		
	}
	
	
	public function showattendance() 
	{	
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$date = $_POST['showdate'];
		$_SESSION['date2'] = $date;
		
		
		
		
		$this -> db -> where('teacher',$email);
		$this -> db -> where('date1',$date);
		$data2 = $this -> db -> get('stuhasattend');
		$students['showdate']= $date;
		$students['data1']= $data2;
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
	
	public function quiz() 
	{
		
		$error = null;
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$data = $this -> db -> get('quiz_table');
		$quiz['data'] = $data;
		$this -> load -> view('header');
		$this -> load -> view('teacher/quiz',$quiz);
	
		
	}
	
	public function editQuestion(){
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$quizid = $_POST['quizid'];
		$ques_num = $_POST['ques_num'];
		
		
		
		
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$this -> db -> where('quizid',$quizid);
		//$this -> db -> where('ques_num',$ques_num);
		
		
		$data = $this -> db -> get('problem');
		
		
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$this -> db -> where('quizid',$quizid);
		$this -> db -> where('ques_num',$ques_num);
		
		
		$data2 = $this -> db -> get('problem');
		
		$data3 = $data2->row();
		$quiz['data'] = $data;
		$quiz['data2'] = $data2;
		$quiz['quizid'] = $quizid;
		
		$quiz['question1'] = $data3->ques;
		$quiz['opta'] = $data3->opta;
		$quiz['optb'] = $data3->optb;
		$quiz['optc'] = $data3->optc;
		$quiz['optd'] = $data3->optd;
		$quiz['cans'] = $data3->correctans;
		$quiz['marks'] = $data3->marks;
		$quiz['edit']= 1;
		//$ques_num = $_POST['ques_num'];
		$quiz['ques_num2']= $ques_num;
		$this -> load -> view('header');
		$this -> load -> view('teacher/qsn_add',$quiz);
		
	
	
	}
	
	public function update_qsn(){
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		$this -> load -> helper('url');
		$this -> load -> library('session');
		$this -> load -> library("form_validation");
		//$this -> form_validation -> set_rules("qsnnumber", "Question Number", "required|numeric|trim|xss_clean");
		$this -> form_validation -> set_rules("question2", "Question ", "required|trim|xss_clean");
		$this -> form_validation -> set_rules("opta1", "Option A ", "required|trim|xss_clean");
		$this -> form_validation -> set_rules("optb2", "Option B ", "required|trim|xss_clean");
		$this -> form_validation -> set_rules("optc3", "Option C ", "required|trim|xss_clean");
		$this -> form_validation -> set_rules("optd4", "Option D ", "required|trim|xss_clean");
		$this -> form_validation -> set_rules("cans1", "Correct Answer ", "required|trim|xss_clean");
		$this -> form_validation -> set_rules("marks1", "Marks ", "required|numeric|trim|xss_clean");
		
		
		
		
		$quizid = $_POST['quizid'];
		$ques_num = $_POST['ques_num'];
		$email = $this -> session -> userdata('email');
		$question = $_POST['question2'];
		$opta = $_POST['opta1'];
		$optb = $_POST['optb2'];
		$optc = $_POST['optc3'];
		$optd = $_POST['optd4'];
		$cans = $_POST['cans1'];
		$marks = $_POST['marks1'];
		
		
		if ($this -> form_validation -> run() == FALSE) {
			//$this -> load -> view('header');
			//$this->load->view("settings", $Error);
		}
		else if( $cans != $opta && $cans != $optb && $cans != $optc && $cans != $optd ){
		
			$quiz["Invalid1"] = "Invalid Ans. Please Choose either from Option A,B,C or D";
		}
		else {
		$this -> db -> where('teacher',$email);
		$this -> db -> where('quizid',$quizid);
		$this -> db -> where('ques_num',$ques_num);
		
		
		$array  = array('teacher' => $email, 'quizid' => $quizid,
						'ques_num' => $ques_num,
						'ques' => $question,
						'opta' => $opta,
						'optb' => $optb,
						'optc' => $optc,
						'optd' => $optd,
						'correctans' => $cans,
						'marks' => $marks
						);
		$this->db->update('problem', $array);
		$quiz['titleupd'] = "Question Number" ;
		$quiz['quest'] = $ques_num;
		$quiz['titleupd1'] ="successfully updated";
		}
		
		
		$email = $this -> session -> userdata('email');
		$this -> db -> where('teacher',$email);
		$this -> db -> where('quizid',$quizid);
		
		$data = $this -> db -> get('problem');
		$quiz['data'] = $data;
		$quiz['quizid'] = $quizid;
		$quiz['ques_num'] = $ques_num;
		
		
		
		$this -> load -> view('header');
		$this -> load -> view('teacher/qsn_add',$quiz);
		
	
	
	}
	
	public function viewStudent()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		
		$this -> load -> view('header');
		$stdemail =  $_POST['stdemail'];
		$senddata['name'] = $stdemail;
		
		$this->db->where('email',$stdemail);
		$data = $this->db->get('student');
		$row = $data->row();
		$senddata['name'] = $row->name;
		$senddata['class'] = $row->class;
		$this->db->where('student',$stdemail);
		$data2 = $this->db->get('submission');
		$senddata['data2'] = $data2;
		
		$this->db->where('student',$stdemail);
		$data3 = $this->db->get('stuhasattend');
		$senddata['data3'] = $data3;
		
		$datent = "0000-00-00";

		$this->db->where('date1 !=',$datent);
		$this->db->where('student',$stdemail);
		//$this->db->where('value', 1);
		$this->db->select('Monthname(date1) as month1, SUM(CASE WHEN value = 1 THEN 1 ELSE 0 END ) as total1 ,SUM(CASE WHEN value = 0 THEN 1 ELSE 0 END ) as total2,COUNT(Month(date1)) as total3');
		
		$this->db->group_by('month1'); 
		//$this->db->order_by('total1', 'desc');
		
		$query = $this->db->get('stuhasattend'); 
		
		
		//$this->db->where('student',$stdemail);
		//$this->db->select('Monthname(date1) as month2, COUNT(Month(date1)) as total2');
		//$this->db->from('stuhasattend b');
		//$this->db->group_by('month2'); 
		//$this->db->order_by('total2', 'desc');
		//$this->db->join('a', 'a.month1 = b.month2');
		
		//SELECT Monthname(date1) as month1,
       //Count(CASE WHEN up = 1 THEN 1 ELSE 0 END) AS UpCount,
       //Count(CASE WHEN down = 2 THEN 1 ELSE 0 END) AS DownCount
    //FROM stuhasattend
    //GROUP BY 'month1'
		
		
			
			
		$senddata['data4'] = $query;
		
			
			$query = $this->db->get('stuhasattend'); 
			
			
		//$senddata['data5'] = $query;
		
		$this -> load -> view('header');
		$this -> load -> view('teacher/viewStudent',$senddata);
		
		
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
		$this -> load -> view('teacher/dashboard',$sendData);
	}

	public function removeStudent() 
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
		$email1 = $this -> session -> userdata('email');
		$email = $_POST['removeEmail'];
		$this -> db -> where('student',$email);
		$data = $this -> db -> get('teacherClass');

		$this->db->where('teacher',$email1);
		$this->db->where('student',$email);
		$this->db->delete('stuhasattend');
		
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
		
		$this -> load -> helper('url');
		$this -> load -> library('session');
		$this -> load -> library("form_validation");
		$this -> form_validation -> set_rules("assgname", "Asssignmet Name", "required|trim|xss_clean");
		$this -> form_validation -> set_rules("assmsg", "Asssignment Description", "required|trim|xss_clean");
		$this -> form_validation -> set_rules("startdate", "Upload Date", "required|trim|xss_clean");
		$this -> form_validation -> set_rules("lastdate", "Last Date  of Submission ", "required|trim|xss_clean");
		//$this -> form_validation -> set_rules("userfile", "Upload file cannot be empty ", "required|trim|xss_clean");
		
		$this -> load -> view('header');
		$config['upload_path'] = $_SERVER['DOCUMENT_ROOT'] . "/StudyChem/uploads";
		$config['allowed_types'] = 'pdf|doc';
		$config['max_size']	= '15000';
		$email = $this->session->userdata('email');
		$assgname =  $_POST['assgname'];
		$assmsg =  $_POST['assmsg'];
		$startdate =  $_POST['startdate'];
		$lastdate =  $_POST['lastdate'];
		$this->load->library('upload', $config);

		if ($this -> form_validation -> run() == FALSE) {
			
		}
		else if( strtotime($lastdate)<strtotime($startdate)){
			$sendData['dateissue']="End date cannot be less than start date";
		}
		
		else{
		$query = $this->db->get_where('upload', array('assgname' => $assgname)); 
        $count= $query->num_rows();    //counting result from query
		if ($count > 0){
		$sendData['title'] = "Assignment already added";
		}
		
		if ($count == 0)
		{ 
			if ( !$this->upload->do_upload() )
			{
				//echo $this->upload->display_errors();
				$error2 = $this->upload->display_errors();
				//$senddata[] = array('error' => $this->upload->display_errors());
				$sendData['error1'] =  $error2;
				
			}
			else
			{
				$sdata = $this->upload->data();
				$senddata = array('upload_data' => $this->upload->data());
				$sendData['title1'] = "Assignment is successfully added into your class!";
				$sdata = $this->upload->data();
				$path = $sdata['file_path'] .$sdata['file_name']; 
				$array = array( 'assgname' => $assgname, 'assmsg' => $assmsg,
				'startdate' => $startdate, 'lastdate' => $lastdate ,'path' => $path,
				'teacher' => $email
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