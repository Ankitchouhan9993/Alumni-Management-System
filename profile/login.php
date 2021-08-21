<?php 
error_reporting(0);
session_start();
if(isset($_SESSION['login_email'])){
    header("Location:profile.php");
}
else
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width="", initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body{
            margin:0;
            padding:0;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Login</h1>
    <form action="setsession.php" method="post">
        <label for="email">Email : </label>
        <input type="email" name="email" id="email" placeholder ="Enter your email Id" required>
        <br>
        <br>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password" placeholder="Enter password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
<?php } ?>