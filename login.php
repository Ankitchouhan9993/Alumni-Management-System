<?php 
session_start();
if(isset($_SESSION['login_email'])){
    header("Location:REGISTER/dashboard.php");
}
else
{
	?>
	<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	</header>
    

	<h1>Login</h1>
    <form action="profile/setsession.php" method="post">
		<div class="input-group">
		<label for="email">Email : </label>
		<input type="email" name="email" id="email" placeholder ="Enter your email Id" required>
		</div>
		<div class="input-group">
			<label for="password">Password : </label>
			<input type="password" name="password" id="password" placeholder="Enter password" required><br><br>

		</div>
        <input type="submit" class="btn" value="Login">
    </form>
	<section id="footer">
		<div class="container">
			<small>@copyright SISTec Alumni Portal</small>
		</div>
	</section>
</body>
</html>
<?php }?>