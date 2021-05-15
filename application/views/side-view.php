<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>We Need Your Details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<body>
	
	<div class="container">
		
		<div class="panel panel-default" style="margin-top: 5%">
	    	<div class="panel-heading" style="text-align: center"><b>Check Your Details</b></div>		    
		    	<div class="panel-body">
			    	<div class="table-responsive">
			    		<table class ="table table-ordered">
			    			<?php
			    				if($fetched_data->num_rows() > 0)
			    				{
			    					foreach ($fetched_data->result() as $row)
			    					{
			    				?>
			    					<tr>
			    						<td>Account Number</td>
			    						<td><?php echo $row->account_no;?></td>
			    					</tr>
			    					<tr>
			    						<td>Account Type</td>
			    						<td><?php echo $row->account_type;?></td>
			    					</tr>
			    					<tr>
			    						<td>Account Holder's Name</td>
			    						<td><?php echo $row->customer_name;?></td>
			    					</tr>
			    					<tr>
			    						<td>IFSC Code</td>
			    						<td><?php echo $row->IFSC;?></td>
			    					</tr>
			    					<tr>
			    						<td>Internet Banking Status</td>
			    						<td><?php echo $row->status;?></td>
			    					</tr>
			    				<?php
			    					}		    						
			    				}
			    				else
			    				{
			    			?>
			    					<tr>
			    						<td colspan="3">No Data Found</td>
			    					</tr>
			    			<?php
			    				}
			    			?>
			    		</table>	
			    	</div>	
			     	<div class="form-group">
			     		<form method = "POST" action="<?php echo base_url();?>basic_details">     			
			     			<input type="submit" name="next" value="Next" class="btn btn-info" />
			     				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	            			<a href="<?php echo base_url(); ?>login/logout">Logout</a>		     			
			     		</form>  
	                </div>
               </div>	 
		    </div>
		              
	  	</div>
	</div>
</body>
</html>