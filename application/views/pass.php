<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Congratulations</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<script type="text/javascript">
		history.pushState(null, null, location.href);
    	window.onpopstate = function () {
        	history.go(1);
    };
	</script>

	
<body>
	<div class="container">
		<div class="panel panel-default" style="margin-top: 10%;">
	    	<div class="panel-heading" >Please Note Below Details</div>		    
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
							    <td>Generated Password</td>
							    <td><?php echo $row->pwd;?>
							    </td>
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
		    	<form method="post" action="<?php echo base_url();?>result/rbi_guidelines">	      
			     	<div class="form-group">		     		
	                 	<input type="submit" name="rbi-btn" value="Click Here To Read RBI Guidelines" class="btn btn-info" />
	                </div>
	            </form>    
               </div>	 
		    </div>
		              
	  	</div>
	</div>
</body>
</html>