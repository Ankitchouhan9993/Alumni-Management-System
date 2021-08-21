<?php
error_reporting(0);
include('connection.php');
$email = $_POST['email'];
$pass = $_POST['password'];
$fetchdata = mysqli_query($conn, "SELECT * FROM `registeralumni` where email='$email'");
if ($fetchdata) {
    $data = mysqli_fetch_assoc($fetchdata);
    if ($data['email'] != $email) {
        echo "email is not registered, please register first. <a href='../regi.php'>click here to register</a>";
    } else if (sha1($pass) != $data['password']) {
        echo "invalid password <a href='../login.php'>Try Again</a>";
    } else if($data['active']==1) {
        session_start();
        $_SESSION['email'] = $email;
        header("Location:../REGISTER/dashboard.php");
    }
    else{
        $fetchdata = mysqli_query($conn, "DELETE FROM `registeralumni` where email='$email'");
        if($fetchdata){
            echo "you are not verified, please register yourself";
            ?>
            <a href="../regi.php">Try again</a>
            <?php
        }
        else{
            echo "please try yourself register after some time";
        }
    }
}
