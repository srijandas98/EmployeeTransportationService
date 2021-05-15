<!DOCTYPE html>
<html>
<head>
	<title>System Guidelines</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <style>
    body {
        font-family: Helvetica;
    }
    ol {
        counter-reset:myCounter;
        margin-left:0;
        padding-left:5px;
        color: rgb(100,100,100);
      }

      li {
        position: relative;
        padding-left: 3em;
        margin: 0.45em 0;
        list-style: none;
        line-height: 1.8em;
        cursor: pointer;
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
      }

      li:hover {
        color: rgb(0,0,0);
      }

      li:before {
        content:counter(myCounter);
        counter-increment:myCounter;
        position:absolute;
        top:0;
        left:0;
        width: 1.8em;
        height: 1.8em;
        line-height: 1.8em;
        padding:0px;
        color:#fff;
        background:#2980b9;
        font-weight:bold;
        text-align:center;
        border-radius: .9em;
        box-shadow: 0px 1px 4px 0px rgba(0,0,0,0.3);
        z-index: 1;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
      }

      li:hover:before {
        background-color: #2ecc71;
      }

      li li:before{
        background-color: #3498db;
      }

      li:after {
        position: absolute;
        top: 2.1em;
        left: 0.9em;
        width: 2px;
        height: calc(100% - 2em);
        content: '';
        background-color: rgb(203, 203, 203);
        z-index: 0;
      }

      li:hover:after {
        background-color: #2ecc71;
      }
     
    </style>
</head>
<body>
	<div class="container">
        <br />
        <h3 align="center"></h3>
        <br />
        <div class="panel panel-default">
            <div class="panel-heading" align="center"><b>Please read the instruction carefully</b></div>
	            <div class="panel-body">
	            	<form method="post" action="<?php echo base_url();?>login">
	            		<div class="form-group">
                        	<ol>                        		
                                <li>For Using Net Banking Facilities, REGISTER to our System.</li>
                                <li>If already a registered user then Click on to LOGIN.</li>
                               
                                <li>Once the User completes step 1, User will be shown his/her secured Bank Details.</li>
                                <li>User also have to provide their Qualification details for better purpose.</li>                                        
                               
                                <li>For availing Internet Banking facilities, user have to appear for Online Eligibility Test.</li>

                                <li>Based on the user's performance and passing criteria, user will be allowed with secure Internet Banking Credentials.</li>

                                <li>Eligibility Test is a online quiz which consist of subjective and objective questions. There are 15 questions. All the mentioned questions are <strong>MANDATORY*.</strong></li>

                                <li>Once all the questions are attempted, SUBMIT your quiz by clicking <strong>"Finish Test"</strong> button.</li>
                                
                                <li>If user scores above the passing criteria marks, then user is been given his/her Net Banking Credentials for the access to Net Banking Facilities.</li>

                                <li>If user is not able to score above the passing criteria marks, then user is directed to Video tutorial gallery to gain more knowledge and to re-appear for the quiz.</li>                                                             
                        	</ol>
                    	</div>
                    	<div class="form-group">
                        <input type="submit" name="next" value="Next" class="btn btn-info" style="margin-left: 0.5%; width: 7.5%;" />
                        </div>
	            	</form>
	            </div>
        	</div>
   		</div>
</body>
</html>