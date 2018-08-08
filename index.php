<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/slider.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Portfolio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">PROJECTS</a></li>
        <!--<li><a href="#">About</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Contact</a></li>-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://www.pixabits.co.nf/profile"><span class="glyphicon glyphicon-log-in"></span> Contact Edgar</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h1>MANUAL IMAGE SLIDER PROJECT #ID0040</h1>      
    <p>In this project we are designing a manual image slider. We shall be using HTML, CSS and JavaScript </p>
  </div>
</div>
 
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
      <div class="w3-content w3-display-container">
          <img class="mySlides" src="images/cat_1.jpg" style="width:100%">
          <img class="mySlides" src="images/cat_2.jpg" style="width:100%">
          <img class="mySlides" src="images/cat_3.jpg" style="width:100%">
          <img class="mySlides" src="images/cat_4.jpg" style="width:100%">

          <button class="w3-button w3-black w3-display-left btnRight" onclick="plusDivs(-1)">&#10094;</button>
          <button class="w3-button w3-black w3-display-right btnLeft" onclick="plusDivs(1)">&#10095;</button>
      </div>
    </div>
    <div class="col-sm-3"></div>
  </div>

</div>


<br><br>

<footer class="container-fluid text-center stick-bottom">
  <p><a href="http://www.pixabits.co.nf/profile"> Copyright  2018  Edgar Tinkamanyire Edgar </a></p>
</footer>
<script>
  var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";  
      }
      x[slideIndex-1].style.display = "block";  
    }
</script>

</body>

</body>
</html>
