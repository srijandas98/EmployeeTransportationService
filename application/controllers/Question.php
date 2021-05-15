<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends CI_Controller
{
	  public function __construct()
    {
      parent::__construct();
      if((!($this->session->userdata('acc_no'))) || (!($this->session->userdata('is_otp_verified'))))
      {
          $data = $this->session->all_userdata();
          foreach($data as $row => $rows_value)
          {
              $this->session->unset_userdata($row);
          }
          redirect('login');
      }
      $this->load->model('question_model');
      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->helper('security');

    }
    public function index()
    {
      $this->QuestionModel->insert_subj('0');   //whenever we start the test we start with 0% score
      $this->QuestionModel->insert_obj('0');    //also whenever the customer gives re-test it starts with 0%.
      $this->load->view('testpage');
    }
    public function objectiveQ()
  	{
  		$data['questions'] = $this->QuestionModel->findAll();
  		$this->load->view('objective_view',$data);
  	}
    public function subjectiveQ()
    {
      $this->load->view('subjective_view');
    }
  	public function submit_objective()
  	{
  		$score = 0;
  		foreach ($_POST['questionIds'] as $questionId) {
  			if($this->QuestionModel->findAnswersIdCorrect($questionId) == $_POST['question_'.$questionId])
  			{
  				$score++; 
  			}       
  			//echo $score;
  		}
      $percentage = ($score/5)*100;
      $this->QuestionModel->insert_obj($percentage);  		
  		$this->load->view('testpage');
  	}

    public function submit_subjective()
    {
      $this->form_validation->set_rules('cvv','cvv','required');
      $this->form_validation->set_rules('url','url','required');
      $this->form_validation->set_rules('card','card','required');
      if($this->form_validation->run())
      {
        $data = $this->QuestionModel->fetch_expected_ans();
        $user_ans = array(
          'ans1' => $this->input->post('cvv', TRUE),
          'ans2' => $this->input->post('url', TRUE),
          'ans3' => $this->input->post('card', TRUE)
        );

        $my_values = array();
        foreach($data as $row)
        {
           $my_values[] = $row->ExpectedAns;
        }      
           
        similar_text($user_ans['ans1'], $my_values[0],$percent1);
        similar_text($user_ans['ans2'], $my_values[1],$percent2);
        similar_text($user_ans['ans3'], $my_values[2],$percent3);
        //echo $percent1.' '.$percent2.' '.$percent3;
        $avg_percent = ($percent1 + $percent2 + $percent3)/3;
        //echo $avg_percent;
        $this->QuestionModel->insert_subj($avg_percent);
        $this->load->view('testpage');

      }

    }
}
?> 