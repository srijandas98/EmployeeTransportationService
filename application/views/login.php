<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                ?>
                <form method="post" action="<?php echo base_url(); ?>login/validation">
                    <div class="form-group">
                        <label>Enter Email Address</label>
                        <input type="email" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                    </div>
                    <div class="form-group">
                        <label>Enter Password</label>
                        <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                    </div>
                    <div class="form-group">
                        <div class = "g-recaptcha" data-sitekey = "6LdMzs0UAAAAAOOymPdtugLV1oSqEt9Qy1gfI7Ep"></div>
                        <span class="text-danger"><?php echo form_error('g-recaptcha'); ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" value="Login" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>register">Register</a>
                        <a style = "margin-left: 75%" href="<?php echo base_url();?>login/forgot_password">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

