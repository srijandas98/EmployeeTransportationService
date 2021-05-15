<html>
<head>
<title>Educational Details</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
</head>
<body>
<div class="container">
  <br />
  <div class="panel panel-default" style="margin-top: 5%;">
    <div class="panel-heading" style="text-align: center;">Select Your Education</div>
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
        <form method="post" action="<?php echo base_url(); ?>basic_details/validation">  
          <div class="form-group">
            <select name="degree" id="degree" class="form-control input-lg" required>
              <option value="" >Select Your Degree</option>
              <?php
                foreach($degree as $row)
                {
                  echo '<option value="'.$row->degree_id.'">'.$row->degree_name.'</option>';
                }
              ?>
            </select>
            <span class="text-danger"><?php echo form_error('degree'); ?></span>
          </div>
          <br />
          <div class="form-group">
              <select name="type" id="type" class="form-control input-lg" required>
              <option value="">Select Your Field</option>
              </select>
              <span class="text-danger"><?php echo form_error('type'); ?></span>
          </div>
          <br />
          <div class="form-group">
              <select name="leaf" id="leaf" class="form-control input-lg" required>
              <option value="">Select Your Field</option>
              </select>
               <span class="text-danger"><?php echo form_error('leaf'); ?></span>
          </div>
          <div class="form-group">
            <input type="submit" name="register" value="Submit" class="btn btn-info" />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo base_url(); ?>login/logout">Logout</a>
          </div>
      </div>
    </div>
  </div> 
</div>     
</body>
</html>
<script>
$(document).ready(function(){
  $('#degree').change(function(){
    var degree_id = $('#degree').val();
    if(degree_id != '')
    {
      $.ajax({
        url:"<?php echo base_url(); ?>basic_details/fetch_type",
        method:"POST",
        data:{degree_id:degree_id},
        success:function(data)
        {
          $('#type').html(data);
          $('#leaf').html('<option value="">Select Your Field</option>');
        }
      });
    }
  else
  {
    $('#type').html('<option value="">Select Your Field</option>');
    $('#leaf').html('<option value="">Select Your Field</option>');
  }
 });

$('#type').change(function(){
  var type_id = $('#type').val();
  if(type_id != '')
    {
      $.ajax({
        url:"<?php echo base_url(); ?>basic_details/fetch_leaf",
        method:"POST",
        data:{type_id:type_id},
        success:function(data)
        {
          $('#leaf').html(data);
        }
      });
    }
  else
  {
    $('#leaf').html('<option value="">Select Your Field</option>');
  }
 });
 
});
</script>