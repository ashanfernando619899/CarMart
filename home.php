<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>

<center>
  <link rel = "stylesheet" href="styles.css"/>
  <link rel = "stylesheet" href="styles_chome.css"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<nav class="navbar navbar-defailt navbar-fixed-top">
<div class="container">

  <ul class="nav navbar-nav">

<!-- Dropdown menue-->

<div class="navbar">
  <a href="home.php">Home</a>
  <a href="#news">News</a>

<div class="navbar">
  <a href="#news">Buy Vehicle</a>
    <a href="login.php">Sell Vehicle</a>
    <a href="login.php">Contact us</a>
  <a href="#news">About us</a>
    <a href="logout.php">Log out</a>
</div>





</div>
</div>
</center>

<div class="phppot-container">
  <div class="page-content">Welcome <?php echo $username;?></div>
</div>

<br>
<br>





<HTML>
  <div class="chome">
<HEAD>
<TITLE>Welcome</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
<link rel = "stylesheet" href="styles_chome.css"/>
</HEAD>
<BODY>
  <div class="cbody">



    <div class="grid">
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./images/car1.jfif"  />
          <div class="card-content">
            <h1 class="card-header">Nissan</h1>
            <p class="card-text">
              XXXXXXXXXXXXXXXXXXXX<BR>
                XXXXXXXXXXXXXXXXXXXX<BR>
                  XXXXXXXXXXXXXXXXXXXX<BR>
                    XXXXXXXXXXXXXXXXXXXX<BR>
            </p>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="images/car2.jpg"  />
          <div class="card-content">
            <h1 class="card-header">Ford</h1>
            <p class="card-text">
              XXXXXXXXXXXXXXXXXXXX<BR>
                XXXXXXXXXXXXXXXXXXXX<BR>
                  XXXXXXXXXXXXXXXXXXXX<BR>
                    XXXXXXXXXXXXXXXXXXXX<BR>
            </p>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./images/car3.jpg" alt="Maldives" />
          <div class="card-content">
            <h1 class="card-header">Toyota</h1>
            <p class="card-text">
              XXXXXXXXXXXXXXXXXXXX<BR>
                XXXXXXXXXXXXXXXXXXXX<BR>
                  XXXXXXXXXXXXXXXXXXXX<BR>
                    XXXXXXXXXXXXXXXXXXXX<BR>
            </p>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
    </div>
</div>

<br>
<br>

<br>
<br>

</div>

<br>
<br>

<br>
<br>





<!-- Slide show code ===========================================================================-->


<div class="slideshow-container">

   <div class="mySlides fade">
     <div class="numbertext">1 / 3</div>
     <img src="images/slide1.png" style="width:100%">

   </div>

   <div class="mySlides fade">
     <div class="numbertext">2 / 3</div>
     <img src="images/slide2.png" style="width:100%">

   </div>

   <div class="mySlides fade">
     <div class="numbertext">3 / 3</div>
     <img src="images/slide7.jpg" style="width:100%">

   </div>

   <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
   <a class="next" onclick="plusSlides(1)">&#10095;</a>

   </div>
   <br>

   <div style="text-align:center">
     <span class="dot" onclick="currentSlide(1)"></span>
     <span class="dot" onclick="currentSlide(2)"></span>
     <span class="dot" onclick="currentSlide(3)"></span>
   </div>

   <script>
   var slideIndex = 1;
   showSlides(slideIndex);

   function plusSlides(n) {
     showSlides(slideIndex += n);
   }

   function currentSlide(n) {
     showSlides(slideIndex = n);
   }

   function showSlides(n) {
     var i;
     var slides = document.getElementsByClassName("mySlides");
     var dots = document.getElementsByClassName("dot");
     if (n > slides.length) {slideIndex = 1}
     if (n < 1) {slideIndex = slides.length}
     for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";
     }
     for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" active", "");
     }
     slides[slideIndex-1].style.display = "block";
     dots[slideIndex-1].className += " active";
   }

</script>

</BODY>


<!-- Footer html code-->


		<footer class="footer-distributed">

		<div class="footer-left">

		<h3>Car<span>Mart</span></h3>

		<p class="footer-links">
		<a href="#">Home</a>
	·
		<a href="#">About</a>
	·
		<a href="#">Contact</a>
		</p>


		</div>

		<div class="footer-center">

		<div>
		<i class="fa fa-map-marker"></i>
		<p><span>no 3 st Annes road Jaela</span> Gampaha, Srilanka</p>
		</div>

		<div>
		<i class="fa fa-phone"></i>
		<p>+011 2236439</p>
		</div>

		<div>
		<i class="fa fa-envelope"></i>
		<p><a href="mailto:support@company.com">lookgood@gmail.com</a></p>
		</div>

		</div>

		<div class="footer-right">

		<p class="footer-company-about">
		<span>About the company</span>
    CarMart is an online store where you can buy or sell any type of vehicle.
		</p>

		<div class="footer-icons">

		<a href="#"><i class="fa fa-facebook"></i></a>
		<a href="#"><i class="fa fa-twitter"></i></a>
		<a href="#"><i class="fa fa-linkedin"></i></a>
		<a href="#"><i class="fa fa-github"></i></a>

		</div>

		</div>

		</footer>
</div>

</HTML>
