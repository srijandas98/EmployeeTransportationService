<!DOCTYPE html>
<html>
<head>
    <title>2 Step Authentication</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />    
</head>

<body>
    <div class="container">
        <br />
        <h3 align="center"></h3>
        <br />
        <div class="panel panel-default" style="margin-top: 5%">
            <div class="panel-heading" align="center"><b>2 Step Authentication</b></div>
            <div class="panel-body">
                
                <form method="post" action="<?php echo base_url(); ?>login/verify_otp">
                    <div class="form-group">
                        <label>Enter the OTP sent on your registered mobile number</label>
                        <input type="number" length = '4' required id= "otp" name="otp" class="form-control" value="<?php echo set_value('otp'); ?>" />
                       <span class="text-danger"><?php echo form_error('otp')?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" value="Submit" class="btn btn-info" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
