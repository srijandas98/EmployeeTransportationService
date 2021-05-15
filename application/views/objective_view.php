<!DOCTYPE html>
<html>
<head>
 <title>Objective Quiz</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 <script type="text/javascript">
    history.pushState(null, null, location.href);
      window.onpopstate = function () {
          history.go(1);
    };
  </script>

</head>

<body>
 <div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Quiz</div>
    <form method="POST" action="<?php echo site_url('question/submit_objective');?>">
      <div class="panel-body">
        <ol type = "1">
          <?php 
            foreach ($questions as $question){?>
            <li>
              <?php echo $question->content;?>
              <input type="hidden" name="questionIds[]" value="<?php echo $question->id?>">
              <ol style= "list-style-type: none;">
                <?php foreach ($this->QuestionModel->findAnswersByQuestion($question->id) as $answer) {?>
                <li >
                  <input type="radio" required name="question_<?php echo $question->id;?>" value="<?php echo $answer->id;?>">
                  <?php echo $answer->content; ?>
                </li>
                <?php }?>
              </ol>

            </li>

          <?php }?>
        </ol>
      </div>
      <div class="form-group" style="margin-left: 20px;">
      <input type="submit" value="Submit" class="btn btn-info" />
     </div>
    </form>          
  </div>
</div>
 </div> 
</body>
</html>

