<!DOCTYPE html>
<html>
<head>
 <title>Subjective Quiz</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
    history.pushState(null, null, location.href);
      window.onpopstate = function () {
          history.go(1);
    };
  </script>
<style>  
  input[type=text] {
  border: none;
  border-bottom: 2px solid grey;
  width: 100%;

}
</style>

</head>

<body>
 <div class="container">
  <div class="panel panel-default" style="margin-top: 5%;">
    <div class="panel-heading">Subjective Quiz</div>
    <form method="POST" autocomplete = "off" action="<?php echo site_url('question/submit_subjective');?>">
      <div class="panel-body">
        <table class ="table table-ordered">
        <ol type = "1">
          <tr>
            <td><li><label>What is the full form of CVV ?</label></li></td>
            <td><input type="text" name="cvv" id = "cvv" required></input></td>
          </tr>
          <tr>
            <td><li><label>Identify the correct URL and re-write the same.</label>
              <ul>              
              <li>
                <label>http://www.f@cebook.com/login.php</label>
              </li>
              <li>
                <label>http://www.faceb00k.com/login.php</label>
              </li>
              <li>
                <label>http://www.facebook.com/login.php</label>
              </li>
              </ul>  
            </li></td>
            <td><input type="text" name="url" id = "url" required></input></td>
          </tr>
          <tr>
            <td><li><label>Do bank officials ever call and ask for debit/credit details/to share the OTP? Yes/No</label></li></td>
            <td><input type="text" name="card" id = "card" required></input></td>
          </tr>

        </ol>
        </table>
      </div>
      <div class="form-group" style="margin-left: 20px;">
      <input type="submit" value="Submit" class="btn btn-info" />
     </div>
    </form>          
  </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function () {
    //Disable cut copy paste
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
   
    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });
});
</script> 
</body>
</html>

