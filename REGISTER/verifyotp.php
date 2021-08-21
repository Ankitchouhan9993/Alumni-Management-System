<?php
error_reporting(0);
include("connection.php");
session_start();
$email=$_SESSION['temp_email'];
?>
    <style>
        *{  
            text-align: center;
            background-color: -webkit-linear-gradient(left, #3931af, #00c6ff);
   
        }
        .container{
            padding: 10px;
            border: 1px solid green;
            background-color: yellow;
        }
        btn{
            width: 100%;
        }
        hr{
            margin: 10 40% ;
        }
    </style>
<div class="container">
    <h1>OTP validation</h1>
    <hr>
    <form action="verify.php" method="post" >
        
        Email: <input type="email" name="email" value="<?php echo "$email"; ?>" readonly>
        <br><br>
        OTP: <input type="text" name="otp" id="otp" placeholder="Enter otp"><br><br>
        <button type="submit" class="btn">submit</button>
    </form>
</div>
