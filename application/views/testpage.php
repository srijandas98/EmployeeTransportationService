<html>
<head>
<title>Let's Start The Quiz</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    history.pushState(null, null, location.href);
      window.onpopstate = function () {
          history.go(1);
    };
  </script>
  <style>
  	a:visited:after{
  		content: "\2713";
  	}
  </style>

</head>
<body>
<div class="container">
  <br />
  <div class="panel panel-default" style="margin-top: 5%;">
    <div class="panel-heading">Please Click On The Links To Start The Test</div>
      <div class="panel-body">
        <form method = "POST" action = "<?php echo base_url();?>result">
      	<div class="table-responsive">
		    <table class ="table table-ordered">
		    	<tr>
		    		<td>Objective Questions</td>
		    		<td><a href="<?php echo base_url(); ?>question/objectiveQ">Click Here To Start The Test</a></td>
		    	</tr>
		    	<tr>
		    		<td>Subjective Questions</td>
		    		<td><a href="<?php echo base_url(); ?>question/subjectiveQ">Click Here To Start The Test</a></td>
		    	</tr>
		    	<tr>
		    		<td></td>
		    		<td><div class="form-group">
      					<input type="submit" class="btn btn-info" value="Finish Test" />
     				</div>
     				</td>
		    	</tr>
		    </table>	
		  </div>		
      </form>
      </div>
    </div>
  </div> 
</div>     
</body>
</html>