<?php
	class Model_students extends CI_Model{
		function __construct(){
			parent::__construct(); //call the Model constructor.
		}

		function getStudentList(){
			$query = $this->db->query('SELECT * FROM students');
			//echo var_dump($query->result_array()); //troubleshooting somehting.
			return $query->result_array();

		}

		function addStudent($sdata){
			if($this->db->insert("students", $sdata)){
				return true;
			}
		}

		function editStudent($data, $old_rno){
			$this->load->database();
			$this->db->where('rno', $old_rno);
			if($this->db->update('students', $data)){
				return true;
			}
		}

		function deleteStudent($rno){
			if($this->db->delete('students', "rno = ".$rno)) return true;
		}
	}

?>