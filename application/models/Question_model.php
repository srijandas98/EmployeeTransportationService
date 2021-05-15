<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question_model extends CI_Model
{
	  public function findAll()
  	{
  		return $this->db->get('question')->result();
  	}

  	public function findAnswersByQuestion($questionID)
  	{
  		$this->db->where('question_id',$questionID);
  		return $this->db->get('answer')->result();
  	}
  	public function findAnswersIdCorrect($questionID)
  	{
  		$this->db->where('question_id',$questionID);
  		$this->db->where('correct', 1);
  		return $this->db->get('answer')->row()->id;
  	}
    public function insert_obj($ObjResult)
    {
      $this->db->where('acc_no',$this->session->userdata('acc_no'));
      $new_query = $this->db->get('objective_result');
      if($new_query->num_rows() > 0)
      {
        foreach ($new_query->result() as $row)
        {
            $data = [
              'obj_res' => $ObjResult
            ];
            $this->db->where('acc_no',$this->session->userdata('acc_no'));
            $this->db->update('objective_result',$data);
            return 'Database Updated Successfully';     //customers who give re-test
        }
      }
      else
      {
            $data = array(
            'acc_no' => $this->session->userdata('acc_no'),
            'obj_res' => $ObjResult
            );
            $this->db->insert('objective_result', $data);
            return 'New Record Inserted Successfully';  //new customers
      }

      
    }
    public function fetch_expected_ans()
    {
      return $this->db->get('subjectiveans')->result(); 
    }
    public function insert_subj($SubjResult)
    {

      $this->db->where('acc_no',$this->session->userdata('acc_no'));
      $new_query = $this->db->get('subjective_result');
      if($new_query->num_rows() > 0)
      {
        foreach ($new_query->result() as $row)
        {
            $data = [
              'sub_res' => $SubjResult
            ];
            $this->db->where('acc_no',$this->session->userdata('acc_no'));
            $this->db->update('subjective_result',$data);
            return 'Database Updated Successfully';     //customers who give re-test
        }
      }
      else
      {  
        $data = array(
          'acc_no' => $this->session->userdata('acc_no'),
          'sub_res' => $SubjResult
        );
        $this->db->insert('subjective_result', $data);  //new customers
      }
  }
}  
?> 