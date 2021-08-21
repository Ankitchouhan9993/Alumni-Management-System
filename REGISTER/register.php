<?php
error_reporting(0);
$name        = $_POST['username'];
$department  = $_POST['Department'];
$batch       = $_POST['batch'];
$enrollment  = $_POST['enrollment'];
$email       = $_POST['email'];
$password    = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$phone       = $_POST['phone'];

if (!empty($email) || !empty($name) || !empty($department) || !empty($batch) || !empty($enrollment) || !empty($phone) || !empty($password) || !empty($confirm_password)) {

  $host = 'localhost';
  $dbusername = 'root';
  $dbpassword = '';
  $dbname = 'sistec_alumni';

  $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

  if (mysqli_connect_error()) {

    die('Connect Error (' . mysqli_connect_errno() . ')'
      . mysqli_connect_error());
  } elseif ($password != $confirm_password) {
    echo "Password Mismatched";
?>
    <html>

    <body>
      <a href="../regi.html">try again</a>
    </body>

    </html>

    <?php
  } else {
    $reciever = $email;
    $OTP = rand(100000, 999999);
    $subject = "SISTec Alumni Portal";
    $body = "Otp for verification : ".$OTP."\nthankyou for connecting us";
    $sender = "From: SISTec Alumni Portal";
    $checkmail = mail($reciever, $subject, $body, $sender);


    if ($checkmail) { ?>
      <script>
        alert("Otp has been sent to your email");
      </script>
              <?php
              $sql = "INSERT INTO `registeralumni`(`email`, `enrollment`, `name`, `department`, `phone`, `batch`, `password`, `otp`) VALUES ('$email','$enrollment','$name','$department','$phone','$batch',sha1('$password'),$OTP)";
              if ($conn->query($sql)) {
                session_start();
                $_SESSION['temp_email']=$email;
              header("Location:verifyotp.php");
              } else {
                  echo "Error:" . $sql . "<br>" . $conn->error;
                }
            } else {
              echo "error found on sending email";
            }

              $conn->close();
            }
          }
                ?>
         