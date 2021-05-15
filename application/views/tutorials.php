<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Video Tutorials</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
    };
    </script>    
</head>
<body>

<div class="container">
<!-- Video Gallery - START -->
<div class="container-fluid pb-video-container">
    <div class="col-md-10 col-md-offset-1">
        
        <div class="row pb-row" style="margin-top: 10%;">
            <div class="col-md-4 pb-video">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9TRR6lHviQc"></iframe>
                </div>
                <label class="form-control label-warning text-center">Phishing Attack</label>
            </div>
            <div class="col-md-4 pb-video">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aEmF3Iylvr4"></iframe>
                </div>                
                <label class="form-control label-warning text-center">How To Create A Strong Password</label>
            </div>
            <div class="col-md-4 pb-video">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/G-iOEBGb3jg"></iframe>
                </div>
                <label class="form-control label-warning text-center">Debit Or Credit Card Frauds</label>
            </div>
            <!--<div class="col-md-4 pb-video">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src=""></iframe>
                </div>
                <label class="form-control label-warning text-center">Tutorial 4</label>
            </div>
            <div class="col-md-4 pb-video">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src=""></iframe>
                </div>
                <label class="form-control label-warning text-center">Tutorial 5</label>
            </div>
            <div class="col-md-4 pb-video">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src=""></iframe>
                </div>
                <label class="form-control label-warning text-center">Tutorial 6</label>
            </div>-->
        </div>

        <form method="POST" action="<?php echo base_url();?>question">
            <div class="col-md-2">
                <input type="submit" name="re-test" value="Re-Test" class="btn btn-info" style="width:100%;" />
            </div>
        </form>
        <form method="POST" action="<?php echo base_url();?>login/logout">
            <div class="col-md-2">
                <input type="submit" name="re-test" value="Logout" class="btn btn-info" style="width:100%;" />
            </div>
        </form>

    </div>
</div>

<style>
    .pb-video-container {
        padding-top: 20px;
        font-family: Lato;
    }

    .pb-video {
        border: 1px solid #e6e6e6;
        padding: 5px;
    }

    .pb-video:hover {
            background: #2c3e50;
        }

  .pb-row {
        margin-bottom: 10px;
    }
</style>

<!-- Video Gallery - END -->

</div>

</body>
</html>
