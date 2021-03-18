<?php
use Phppot\Member;
if (! empty($_POST["signup-btn"])) {
    require_once './Model/Member.php';
    $member = new Member();
    $registrationResponse = $member->registerMember();
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








<HTML>
<HEAD>
<TITLE>User Registration</TITLE>
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
				<a href="login.php">Login</a>
			</div>
			<div class="">
				<form name="sign-up" action="" method="post"
					onsubmit="return signupValidation()">
					<div class="signup-heading">Registration</div>


				<?php
    if (! empty($registrationResponse["status"])) {
        ?>
                    <?php
        if ($registrationResponse["status"] == "error") {
            ?>
				    <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        } else if ($registrationResponse["status"] == "success") {
            ?>
                    <div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        }
        ?>
				<?php
    }
    ?>


				<div class="error-msg" id="error-msg"></div>
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
								Email<span class="required error" id="email-info"></span>
							</div>
							<input class="input-box-330" type="email" name="email" id="email">
						</div>
					</div>

					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="signup-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="signup-password" id="signup-password">
						</div>
					</div>


					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Confirm Password<span class="required error"
									id="confirm-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="confirm-password" id="confirm-password">
						</div>
					</div>


					<div class="row">
						<input class="btn" type="submit" name="signup-btn"
							id="signup-btn" value="Sign up">
					</div>
				</form>
			</div>
		</div>
	</div>


  <!-- Footer html code-->


  		<footer class="footer-distributed">

  		<div class="footer-left">

  		<h3>Look<span>Good</span></h3>

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
      Lookgood is an online clothing site where you can find any type of clothing.
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
function signupValidation() {
	var valid = true;

	$("#username").removeClass("error-field");
	$("#email").removeClass("error-field");
	$("#password").removeClass("error-field");
	$("#confirm-password").removeClass("error-field");

	var UserName = $("#username").val();
	var email = $("#email").val();
	var Password = $('#signup-password').val();
    var ConfirmPassword = $('#confirm-password').val();
	var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

	$("#username-info").html("").hide();
	$("#email-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (email == "") {
		$("#email-info").html("required").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (email.trim() == "") {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (!emailRegex.test(email)) {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000")
				.show();
		$("#email").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#signup-password-info").html("required.").css("color", "#ee0000").show();
		$("#signup-password").addClass("error-field");
		valid = false;
	}
	if (ConfirmPassword.trim() == "") {
		$("#confirm-password-info").html("required.").css("color", "#ee0000").show();
		$("#confirm-password").addClass("error-field");
		valid = false;
	}
	if(Password != ConfirmPassword){
        $("#error-msg").html("Both passwords must be same.").show();
        valid=false;
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
