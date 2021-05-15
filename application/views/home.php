<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.carousel-inner .item{ 
   height: 550px; 
   background-size:cover;
   background-position: center center;
}
</style>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	 
		<a class="navbar-brand" href="#">&nbsp;&nbsp; ABC Bank</a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav"style="float:right;">
      <li><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Facilities<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://localhost:8080/CodeIgniter/index.php/guidelines">Apply For Net Banking</a></li>
          <li><a href="http://localhost:8080/CodeIgniter/index.php/graph">Check Graph</a></li>
        </ul>
      </li>
      <li><a href="#">Who Are We ?</a></li>
      <li><a href="#">Contact Us</a></li>
  	</div>
  </div>
</nav>


 <div class="container">
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example" data-slide-to="1"></li>
    <li data-target="#carousel-example" data-slide-to="2"></li>
	<li data-target="#carousel-example" data-slide-to="3"></li>
	<li data-target="#carousel-example" data-slide-to="4"></li>	
  </ol>

  <div class="carousel-inner">
    <div class="item active">
      <a href="#"><img src="https://previews.123rf.com/images/rawpixel/rawpixel1703/rawpixel170317195/73791587-internet-banking-transaction-financial-icon.jpg" /></a>
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <a href="#"><img src="https://blog.ipleaders.in/wp-content/uploads/2017/02/banking.jpg" /></a>
      <div class="carousel-caption">
        
       
      </div>
    </div>
    <div class="item">
      <a href="#"><img src="https://medici-prod.s3-us-west-2.amazonaws.com/uploads/smebankdigital.jpg" /></a>
      <div class="carousel-caption">
        
        
      </div>
    </div>
	<div class="item">
      <a href="#"><img src="https://www.360factors.com/blog/wp-content/uploads/2020/01/img-predictive-technology-360factors.jpg" /></a>
      <div class="carousel-caption">
       
        
      </div>
    </div>
	<div class="item">
      <a href="#"><img src="https://www.acquia.com/sites/acquia.com/files/styles/desktop_full_content_width_1x/public/images/2018-12/GettyImages-473687780%20%281%29.jpg?itok=qYF_O8u2" /></a>
      <div class="carousel-caption">
       
      </div>
    </div>
</div>

  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
</div>
</body>
</html>