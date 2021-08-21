<?php
error_reporting(0);
include("connection.php");
session_start();
$email=$_SESSION['temp_email'];
$otp = $_POST['otp'];
$sql="SELECT * FROM `registeralumni` WHERE email='$email'";
$q=mysqli_query($conn,$sql);
    if($q){
    $data=mysqli_fetch_assoc($q);
    if($data['otp']==$otp){
    $sqlnew="UPDATE `registeralumni` SET `active` = '1' WHERE `registeralumni`.`email` = '$email'";
    $n=mysqli_query($conn,$sqlnew);
    if($n){
        ?>
          <script>
          alert("your email is verified .......redirecting to dashboard...");
          </script>
          <?php
          $_SESSION['email']=$email;
          header("Location:dashboard.php");
    }
    else{
        ?>
        <script>
            alert('connection error, please after some time later');
        </script>
        <?php
    }
}
else{
    ?>
    <script>
        alert('invalid otp');
    </script>
    <?php
    header("Location:verifyotp.php?email='.$email'");
}
    } else {
      echo "Error:" . $sql . "<br>" . $conn->error;
    }
?>