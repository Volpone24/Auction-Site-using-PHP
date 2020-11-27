<?php
session_start();
$id = $_SESSION['username'];
$newpass = $_POST["newpassword"];
$con = mysqli_connect("localhost", "root", "", "auction");
if(count($_POST)>0) {
$result = mysqli_query($con,"SELECT * from users WHERE username='" . $id . "'");
$row=mysqli_fetch_array($result);
if($_POST["password"] == $row["password"] ) {
mysqli_query($con,"UPDATE users set password='$newpass' WHERE username='$id'");
$message = "Password Changed Sucessfully";
} else{
 $message = "Password is not correct";
}

echo $message;
}
?>

<!--  && $_POST["newPassword"] == $row["confirmPassword"] -->