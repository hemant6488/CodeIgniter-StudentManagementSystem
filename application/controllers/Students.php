<?php 
//note: controller filename should start with a capital letter.

	class Students extends CI_Controller{ //CI_Controller is the superclass in codeIgniter. 
		public function index(){
			$this->fetchStudents();
		}

		public function fetchStudents(){
			$this->load->model("model_students");
			$data['title'] = 'Student Management System';
			$data['students'] = $this->model_students->getStudentList();
			//echo var_dump($data['students']);
			$this->load->view('view_students', $data);
		}

		//adding a new student
		public function addStudentView(){
			$this->load->helper('form');
			$this->load->view('view_add_student');
		}

		public function addStudent(){
			$this->load->model("model_students");
			//var_dump($_POST['interests']);
			//imploding interests into 1 string.
			foreach ($_POST['interests'] as $interest){
			        $checkedIntr[] = $interest;
			    }   $finalIntr = implode(',', $checkedIntr);

			//var_dump($finalIntr);

			$data = array('rno' => $this->input->post('rno'),
				'name' => $this->input->post('name'),
				'res_add' => $this->input->post('res_add'),
				'gender' => $this->input->post('gender'),
				'passing_year' => $this->input->post('passing_year'),
				'interests' => $finalIntr
				);
			//var_dump($data);
			$this->model_students->addStudent($data);
			$this->fetchStudents();
	
		}



		//Editing Existing student
		public function editStudentView() { 
	        $this->load->helper('form'); 
	        $rno = $this->uri->segment('3'); //rollnumber from url
	        //var_dump($rno); //troubleshooting
	        $query = $this->db->get_where("students",array("rno"=>$rno));
	        $data['current'] = $query->result();
	        //var_dump($data['records']);
	        $data['old_rno'] = $rno; 
	        $this->load->view('view_edit_student', $data); 
      	} 

      	public function editStudent(){ 
	        $this->load->model('model_students');
	        //var_dump($_POST);

	        //imploding interests again into 1 string.
			foreach ($_POST['interests'] as $interest){
			        $checkedIntr[] = $interest;
			    }   $finalIntr = implode(',', $checkedIntr);
				
	        $data = array('rno' => $this->input->post('rno'),
				'name' => $this->input->post('name'),
				'res_add' => $this->input->post('res_add'),
				'gender' => $this->input->post('gender'),
				'passing_year' => $this->input->post('passing_year'),
				'interests' => $finalIntr
				);

	        $old_rno = $this->input->post('old_rno'); 
	        $this->model_students->editStudent($data, $old_rno);
			$this->fetchStudents();
      } 
  		

  	 	public function deleteStudent(){
  	 		$this->load->model('model_students');
  	 		$rno = $this->uri->segment('3');
  	 		$this->model_students->deleteStudent($rno);
  	 		$this->fetchStudents(); //render the refreshed list.
  	 	}

	}

?>