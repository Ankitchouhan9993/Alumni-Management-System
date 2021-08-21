<?php 
error_reporting(0);
session_start();
if($_SESSION['email']!=""){
    header("Location:REGISTER/dashboard.php");
}
else{?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
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
    
  <form method="post" action="REGISTER/register.php">  
  	<div class="t1">
      <h2>Registration</h2>
    </div>  
    <div class="input-group">
      <label>Name</label>
      <input type="text" name="username" placeholder="Enter your name">
    </div>
    <div class="input-group">
      <label>Department</label>
      <select id="Dept" name="Department" >
       <option value="Cse">Computer Science Engineering</option>
       <option value="EE">Electrical Engineering</option>
       <option value="ECE">Electronics and Communication Engineering</option>
       <option value="CE">Civil Engineering</option>
       <option value="ME">Mechanical Engineering</option>
      </select>
    <div class="input-group">
      <label>Batch</label>
      <input type="text" name="batch" placeholder="Enter your Batch">
    </div>
  	<div class="input-group">
  	  <label>Enrollment</label>
  	  <input type="text" name="enrollment" placeholder="Enter your Enrollment">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" placeholder="Enter your email"  required>
  	</div>
	  <div class="input-group">
		<label>Phone</label>
		<input type="tel" name="phone" placeholder="Enter your Number" required>
	  </div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="confirm_password">		
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>	  
</form>
</body>
</html>
<?php } ?>