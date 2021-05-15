
<!DOCTYPE html>
<html>
<head>
 <title>Complete User Registration and Login System in Codeigniter</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>
 <div class="container">
  <br />
  <h3 align="center"></h3>
  <br />
  <div class="panel panel-default">
   <div class="panel-heading" align="center"><b>Complete User Registration and Login System For Internet Banking</b></div>
   <div class="panel-body">
    <?php
      if($this->session->flashdata('message'))
        {
          echo '<div class="alert alert-success">
                  '.$this->session->flashdata("message").'
                </div>';
        }
    ?>
    <form method="post" action="<?php echo base_url(); ?>register/validation">
     <div class="form-group">
      <label>Enter Your Account</label>
      <input type="number" id = "user_account" name="user_account" class="form-control" value="<?php echo set_value('user_account'); ?>" />
      <span class="text-danger"><?php echo form_error('user_account'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Your 10 digit mobile number</label>
      <input type="number" name="user_number" class="form-control" value="<?php echo set_value('user_number'); ?>" />
      <span class="text-danger"><?php echo form_error('user_number'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Your Valid Email Address</label>
      <input type="email" id = "user_email" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
      <span class="text-danger"><?php echo form_error('user_email'); ?></span>
     </div>
     <div class="form-group">
      <label>Set Password</label>
      <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
      <span class="text-danger"><?php echo form_error('user_password'); ?></span>
     </div>
     <div class="form-group">
      <input type="submit" name="register" value="Register" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>Login">Login</a>
     </div>
    </form>
   </div>
  </div>
 </div>
</body>
</html>

