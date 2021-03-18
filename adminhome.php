<?php

//include ('image_class.php');

//$obj_image=new Image();
/*
if(@$_POST['Submit'])
{

  $obj_image->name=str_replace("'","''", $_POST['txt_image_name']);
  $obj_image->description=str_replace("'","''", $_POST['txt_image_description']);
  $obj_image->price=str_replace("'","''", $_POST['txt_image_price']);
  $obj_image->image=str_replace("'","''", $_FILES['txt_image']);





  $obj_image->insert_into_image();
}*/

session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
  
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}





?>

<html>
<head>

  <link rel = "stylesheet" href="styles.css"/>

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

<div class="navbar">
  <a href="#news">Add Vehicles</a>
    <a href="login.php">Sell Vehicle</a>
    <a href="login.php">Contact us</a>
  <a href="adminregistration.php">Add Admin</a>
    <a href="logout.php">Log out</a>
</div>




</div>
</div>
</center>

<br>
<br>



	<div class="phppot-container">

	<center>	<div class="page-content">Welcome <?php echo $username;?></div></center>
	</div>


</HTML>
