<?php
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: http://192.168.29.197/login_project/index.html");
    exit;
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "SYSTEM";
    $to = $_SESSION["emailid"];
    $subject = "Reset password";
    $message = "http://192.168.29.197/login_project/forgetPass/create_pass.php";
    $headers = "From:";
    mail($to,$subject,$message, $headers);
    echo "The email message was sent. Check your email and click on the link.";
?>
