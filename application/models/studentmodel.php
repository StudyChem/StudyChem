<?php
class StudentModel extends CI_Model {
	public function getTeacher() {
		$this -> db -> where("student", $this -> session -> userdata('email'));
		$data = $this -> db -> get("teacherClass");
		if ($data -> num_rows == 0)
		{
			return "default";
		}
				
		else if ($data -> num_rows ==1)
		{
			$row = $data -> row();
			return $row -> teacher;
		}
		else {
			return "default";
		}
		
	}
}