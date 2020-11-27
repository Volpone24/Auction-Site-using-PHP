<?php
session_start();
if(!isset($_SESSION['username']))
header('location:login.php');
$db = mysqli_connect("localhost", "root", "", "auction");
$pid=$_SESSION['productname'];
$query = mysqli_query( $db,"DELETE FROM prod where prod_name = '$pid'");
header('location:user.php');
?>

