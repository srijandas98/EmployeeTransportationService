<!DOCTYPE html>
<html>
<head>
	<title>RBI Guidelines</title>
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
            <div class="panel-heading" align="center"><b>Please go through the RBI Guidelines</b></div>
	            <div class="panel-body">
	            	<form method="post" action="<?php echo base_url(); ?>login/logout">
	            		<div class="form-group">
                        	<ol>
                        		<li>The RBI sets various rules and regulations to be followed by every bank and customer. The proof of details of the customer has to be collected and reviewed for maintaining an account in the respective banks.</li>
                        		<li>Any individual found to be compromising with the Cyber security perspective of the institution shall be entitled to various section as per the IT Act.</li>
                        		<li>Banks may provide Internet Banking facility to a customer only at his/her option based on specific written or authenticated electronic requisition along with a positive acknowledgement.</li>
                        		<li>Register your mobile number and email with your bank to get instant alerts.</li>
                        		<li>If you get an alert about a transaction that you have not initiated or authorised, you can immediately take it up with your bank.</li>
                        		<li>Change your online banking password and PIN. Block your ATM card, Credit Card, Prepaid Card immediately, if it is lost or stolen.</li>
                        		<li>Avoid banking through public, open or free networks.</li>
                        	</ol>
                    	</div>
                    	<div class="form-group">
                        <input type="submit" name="logout" value="Logout" class="btn btn-info" />
                    </div>
	            	</form>
	            </div>
        	</div>
   		</div>
</body>
</html>