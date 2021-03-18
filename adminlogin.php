<?php
use Phppot\adminMember;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/adminmember.php';
    $member = new adminMember();
    $loginResult = $member->loginAdminMember();
}
?>

<html>
<head>
    <div class="bg">
  <title> CarMart </title>
  <link rel = "stylesheet" href="styles.css"/>
    <link rel = "stylesheet" href="logincss.css"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <meta name="viewport" content="width=device=width, initial-scale=1,user-scaleable=no">

 <div class="header2">



   <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

               <img class="logo1" src="images/logo1.png" alt="">
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
  <a href="adminhome.php">Home</a>
  <a href="#news">News</a>
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







<HTML>
<HEAD>
<TITLE>Admin Login</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">

			</div>
			<div class="signup-align">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading">Admin Login</div>


				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }
        ?>


				<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="login-password" id="login-password">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="login-btn"
							id="login-btn" value="Login">
					</div>

  <a href="login.php">Im a Customer?</a>
				</form>
			</div>
		</div>
	</div>


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

	<script>
function loginValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
</div>
</BODY>
</HTML>
