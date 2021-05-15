<?php
class Register_model extends CI_Model
{
 function insert($data)
 {
    $this->db->where('account_no', $this->input->post('user_account'));
    $query = $this->db->get('bank_database');
    if($query->num_rows() > 0)
    {
      $this->db->insert('registration', $data);
      return "insert successfully";
    }
    else
    {
      return "Incorrect Account Number Or Email Address";
    }
  
 }

 function verify_email($key)
 {
  $this->db->where('verification_key', $key);
  $this->db->where('is_email_verified', 'no');
  $query1 = $this->db->get('registration');
  if($query1->num_rows() > 0)
  {
    foreach ($query1->result() as $row1)
    {
       $this->db->select('account_no');
       $this->db->where('account_no',$row1->acc_no);
       $query2 = $this->db->get('bank_database');
       if($query2->num_rows() > 0)      //if account number in registration table is present in bank_database
       {
            $data = array(
            'is_email_verified'  => 'yes'
            );
            $this->db->where('verification_key', $key);
            $this->db->update('registration', $data);
            return 'Verified';
       }
       else
       {
          return 'No Such Account Number Found';
       }
    } 
  }
  else
  {
   return "Incorrect Verification Key";
  }
 }
}

?>