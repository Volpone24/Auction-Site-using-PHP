<?php
session_start();
if(!isset($_SESSION['username']))
header('location:login.php');
$db = mysqli_connect("localhost", "root", "", "auction");
$_SESSION['price']=$_POST['bprice'];
$price=$_SESSION['price'];
$pid=$_SESSION['productname'];
$biduser=$_SESSION['username'];
$query = mysqli_query( $db,"UPDATE prod Set bid_price = '$price', bid_user='$biduser' WHERE prod_name='$pid'");
header('location:home.php');
?>

