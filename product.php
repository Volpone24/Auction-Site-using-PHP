<?php
  session_start();
  if(!isset($_SESSION['username']))
  header('location:login.php');
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "auction");
  $user=$_SESSION['username'];

  if (isset($_POST['submit'])) {
	  $name=$_POST['prod_name'];
	  $price=$_POST['prod_price'];
	  $start_date=$_POST['startdate'];
	  $end_date=$_POST['enddate'];


	$sql = "INSERT INTO prod ( prod_name,prod_price,start_date,end_date,bid_price,user,bid_user ) 
	VALUES ('$name', '$price','$start_date','$end_date','$price','$user','$user')";
	// execute query
	mysqli_query($db, $sql);

	echo "Item put up to auction";?>
	<br><a href="home.php">Return to home</a><br>
	<a href="logout.php">LOGOUT</a>
<?php
}



  $result = mysqli_query($db, "SELECT * FROM prod");
?>