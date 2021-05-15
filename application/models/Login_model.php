<?php
class Login_model extends CI_Model
{
  function can_login($email, $password)
  {
    $this->db->where('email', $email);
    $query = $this->db->get('registration');
    if($query->num_rows() > 0)
    {
      foreach($query->result() as $row)
      {
        if($row->is_email_verified == 'yes')    //here we check if email is verified or not.
        {
            if(password_verify($password, $row->password))  //here we check if the user has entered correct password or not.
            {
                
                //Once the email and password are verified we check whether user has clicked the captcha button or not.
                $key = '6LdMzs0UAAAAAFPrtVKF8XTKJ5AdRwzAo0-zE-kF';
                $response = $_POST['g-recaptcha-response'];
                $remoteip = $_SERVER['REMOTE_ADDR'];
                $url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$key&response=$response&remoteip=$remoteip");
                $recaptcha_status = json_decode($url,TRUE);
                if($recaptcha_status['success'])
                {
                  $this->session->set_userdata('acc_no',$row->acc_no);
                  return '2step';
                }
                else
                  return 'Click The ReCaptcha Button';         
            }
            else
            {
                return 'Incorrect Email ID/Password';
            }
        }
        else
        {
            return 'First verify your Email Address';
        }
      }
    }
    else
    {
      return 'Wrong Email Address';
    }
  }
  public function fetch_details($accID)
  {
      $this->db->where('acc_no', $accID);
      $query = $this->db->get('registration');
      if($query->num_rows() == 1)
      {
          foreach($query->result() as $row)
          {
              $this->db->select('*');
              $this->db->from('bank_database');
              //$this->db->join('bank_database','bank_database.account_no = registration.acc_no');
              $this->db->where('account_no',$row->acc_no);
              $bankdb = $this->db->get();
              return $bankdb;  
          } 
      }
      else
      {
            return 'Could Not Fetch Your Details. Please Contact Bank';
      }   
  }

  public function reset_password($email,$password)
  {
      if((empty($email) || empty($password)) || (empty($email) && empty($password)))
      {
        return "Email & Password are required";
      }
      else
      {  
        $this->db->where('email', $email);
        $query = $this->db->get('registration');
        if($query->num_rows() > 0)
        {
          foreach($query->result() as $row)
          {
            if($row->is_email_verified == 'yes')    //here we check if email is verified or not.
            {
                  $key = '6LdMzs0UAAAAAFPrtVKF8XTKJ5AdRwzAo0-zE-kF';
                  $response = $_POST['g-recaptcha-response'];
                  $remoteip = $_SERVER['REMOTE_ADDR'];
                  $url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$key&response=$response&remoteip=$remoteip");
                  $recaptcha_status = json_decode($url,TRUE);
                  if($recaptcha_status['success'])
                  {
                      $data = [
                        'password' => password_hash($password, PASSWORD_DEFAULT)
                      ];
                      $this->db->where('email',$email);
                      $this->db->update('registration',$data);
                      return 'Password Reset Was Successfull';  
                  }
                  else
                  {
                      return 'Click The ReCaptcha Button'; 
                  }

            }
            else
            {
                  return 'First verify your Email Address';
            }
          }
        }
        else
        {
            return 'Wrong Email Address';
        }
      }     
  }

  public function fetch_mobile($email)
  {
    $this->db->where('email',$email);
    $query = $this->db->get('registration');
    if($query->num_rows() > 0)
    {
      foreach ($query->result() as $row ) {
        return $row->mobile;
      }
    }
  }
}

?>