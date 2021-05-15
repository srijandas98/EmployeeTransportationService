<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Internet Banking Details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<script type="text/javascript">
    	alert('Oops...!!! Looks Like You didnt cleared the Eligibility Test');
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
	    	<div class="panel-heading">Choose Any Option
	    	</div>		    
		    	<!--<div class="panel-body">-->
		    		<div class="table-responsive">		    			
		    			<table class ="table table-ordered">
		    				<th></th>
		    				<tr>
		    					<form method="POST" action="<?php echo base_url();?>result/testfailing">
		    						<td>Please Watch Video Tutorials And Give Re-Test</td>
		    						<td>		    						
		    							<div class="form-group">
            								<input type="submit" name="button1" value="Watch Tutorials" class="btn btn-info" />
            							</div>
		    						</td>
		    					</form>
		    				</tr>
		    				<tr>
		    					<form method="POST" action="<?php echo base_url();?>question">
		    						<td>Give Re-Test</td>
		    						<td>		    						
		    							<div class="form-group">
            								<input type="submit" name="button2" value="Re-Test" class="btn btn-info" style="width:36%;" />
            							</div>
		    						</td>
		    					</form>
		    				</tr>
		    			</table>		    			
		    		</div>
		    	</div>
		    </div>	
		</div>
	</div>
</body>
</head>
</html>		    			