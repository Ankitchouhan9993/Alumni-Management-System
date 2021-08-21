<?php 
error_reporting(0);
session_start();
if($_SESSION['email']!=""){
    header("Location:REGISTER/dashboard.php");
}
else {
    header("Location:page.php");
 }?>