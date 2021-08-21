<?php 
error_reporting(0);
session_start();
if($_SESSION['email']!=""){
header("Location:REGISTER/dashboard.php");
}
else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>SISTec Alumni Portal</title>
	<link rel="stylesheet" type="text/css" href="regi.css">
</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="logo.png">
			</div>
			<ul>
				<li><a href="page.php">Home</a></li>
				<li><a href="https://www.sistec.ac.in">About</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Gallery </a></li>
				<li><a href="#">Events </a></li>
				<!-- <li><a href="#"> </a></li>
				<li><a href="#">Gallery </a></li> -->
			</ul> 
		</div>
		<div class="title">
			<marquee direction = "left" ><h1>Welcome To SISTec Alumni Portal</h1></marquee>

		</div>
		<div class="button">
			<a href="regi.php" class="btn"> Registation</a>
			<a href="login.php" class="btn">LOGIN</a>
			
		</div>
	</header>
	<section id="footer">
		<div class="container">
			<small>@copyright SISTec Alumni Portal</small>
		</div>
	</section>
</body>
</html>
<?php } ?>