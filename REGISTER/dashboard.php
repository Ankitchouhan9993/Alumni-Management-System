<?php
error_reporting(0);
include("connection.php");
session_start();
if($_SESSION['email']!="")
{   $email=$_SESSION['email'];
    $fetchdata=mysqli_query($conn,"SELECT * FROM `registeralumni` where email='$email'");
    $data=mysqli_fetch_assoc($fetchdata); 
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>SISTec Alumni Portal</title>
	<link rel="stylesheet" type="text/css" href="../regi.css">
</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="logo.png">
			</div>
			<ul>
				<li><a href="dashboard.php">Home</a></li>
				<li><a href="https://www.sistec.ac.in">About</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Gallery </a></li>
				<li><a href="#">Events </a></li>
			</ul> 
		</div>
		<div class="title">
			<marquee direction = "left" ><h1>Welcome To SISTec Alumni Portal</h1></marquee>

		</div>

        <div class="details">
            <h1>your Credentials</h1>
            Name: <?php echo $data['name'];?>
            <br>
            Email:<?php echo $data['email'];?>
        </div>
		<div class="button">
			<a href="../profile/profile.php" class="btn"> view profile</a>
		</div>
	</header>

        <section id="footer">
            <div class="container">
                <small>@copyright SISTec Alumni Portal</small>
            </div>
        </section>

</body>
</html>
<?php }else{header("Location:../index.php");}?>