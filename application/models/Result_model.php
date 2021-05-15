<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Result_model extends CI_Model
{
  function search_leafvalue()
  {
    $this->db->select('leaf_score');
    $this->db->from('basic_details');
    $this->db->where('account_no',$this->session->userdata('acc_no'));
    $query1 = $this->db->get();
    return $query1->result();
  }
  function search_obj()
  {
    $this->db->select('obj_res');
    $this->db->from('objective_result');
    $this->db->where('acc_no',$this->session->userdata('acc_no'));
    $query2 = $this->db->get();
    return $query2->result();
  }
  function search_sub()
  {
    $this->db->select('sub_res');
    $this->db->from('subjective_result');
    $this->db->where('acc_no',$this->session->userdata('acc_no'));
    $query3 = $this->db->get();
    return $query3->result();
  }
  function insert_pwd($final_percentage)
  {
      $this->db->where('account_no', $this->session->userdata('acc_no'));
      $query1 = $this->db->get('basic_details');
      if($final_percentage >= 65) //if test pass then
      {
          if($query1->num_rows() > 0) //if customer is already present
          {
            foreach ($query1->result() as $row)
            {
                $data = [
                  'percentage' => $final_percentage,
                  'status' => 'pass'              
                ];
                $this->db->where('account_no',$this->session->userdata('acc_no'));
                $this->db->update('basic_details',$data);
            }
          }          
          $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&*';
          $generated_pwd = substr(str_shuffle($permitted_chars),0,8);
          $data = [
                    'pwd' => $generated_pwd
                  ];
          $this->db->where('account_no',$this->session->userdata('acc_no'));
          $this->db->update('bank_database',$data);
          return 'pass'; 

      }
      else  //if test fail then
      {
        if($query1->num_rows() > 0) //if customer is already present
        {
            foreach ($query1->result() as $row)
            {
                $data = [
                  'percentage' => $final_percentage,
                  'status' => 'fail'              
                ];
                $this->db->where('account_no',$this->session->userdata('acc_no'));
                $this->db->update('basic_details',$data);
            }
        }
        return 'fail';
      }
  }

  function fetch_final_details()
  { 
    $this->db->select('*');
    $this->db->from('bank_database');
    $this->db->where('account_no',$this->session->userdata('acc_no'));
    $query4 = $this->db->get();
    return $query4;  
  }

  function fetch_graph_details()
  {
    $this->db->select('leaf_score,percentage');
    //$this->db->groupby('leaf_score');
    $this->db->order_by('percentage','ASC');
    $query5 = $this->db->get('basic_details');
    return $query5->result();
  }
  
}
?>