<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Internet Banking Details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<script type="text/javascript">
    	alert('Congratulation...!!! You have cleared the Eligibility Test');
	</script>
	<script type="text/javascript">
		history.pushState(null, null, location.href);
    	window.onpopstate = function () {
        	history.go(1);
    };
	</script>	
<body>
	<div class="container">
		<div class="panel panel-default" style="margin-top: 10%;">
	    	<div class="panel-heading"><center>Click The Button To See Your Internet Banking Details	    	</center></div>	    
		    	<div class="panel-body">
		    		<div class="table-responsive">
		    			<form method="POST" action="<?php echo base_url();?>result/testpassing">	    		<center>	
		    				<div class="form-group">
            					<input type="submit" name="check_details" value="Check Details" class="btn btn-info" />
            				</div>
            				</center>			    					
		    			</form>
		    		</div>
		    	</div>
		    </div>	
		</div>
	</div>
</body>
</head>
</html>		    			