




<html>



<head>
    <div class="bg">
  <title> CarMart </title>
  <link rel = "stylesheet" href="styles.css"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <meta name="viewport" content="width=device=width, initial-scale=1,user-scaleable=no">

 <div class="header">

   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

               <img class="logo1" src="images/logo1.png" alt="">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
</div>

</head>


<body>


<center>

<nav class="navbar navbar-defailt navbar-fixed-top">
<div class="container">

  <ul class="nav navbar-nav">

<!-- Dropdown menue-->

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="#news">News</a>

<div class="navbar">
  <a href="#news">Buy Vehicle</a>
    <a href="login.php">Sell Vehicle</a>
    <a href="login.php">Contact us</a>
  <a href="#news">About us</a>
    <a href="login.php">Log in</a>
</div>





</div>
</div>
</center>

<br>
<br>
<br>

<!-- Slide Show-->

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
		<p><a href="mailto:support@company.com">CarMart@gmail.com</a></p>
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
</body>
</html>
