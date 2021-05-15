
<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <div class="container">
        <br />
        <h3 align="center"></h3>
        <br />
        <div class="panel panel-default">
            <div class="panel-heading" align="center"><b>Please Enter The Details To Reset The Password</b></div>
            <div class="panel-body">
                <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                ?>
                <form method="post" action="<?php echo base_url();?>login/forgot_validate">
                    <div class="form-group">
                        <label>Enter Email Address</label>
                        <input type="email" required name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                    </div>
                    <div class="form-group">
                        <label>Enter New Password</label>
                        <input type="password" required name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                    </div>
                    <div class="form-group">
                        <div class = "g-recaptcha" data-sitekey = "6LdMzs0UAAAAAOOymPdtugLV1oSqEt9Qy1gfI7Ep"></div>
                        <span class="text-danger"><?php echo form_error('g-recaptcha'); ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" value="Reset Password" class="btn btn-info"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url();?>login">Login</a>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

