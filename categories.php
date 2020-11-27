<?php
  session_start();
  if(!isset($_SESSION['username']))
  header('location:login.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Items:</title>
<style>
body{
	background-color: teal;
	font-family:verdana;
}
.grid-container {
  display: grid;
  grid-gap: 50px 100px;
  grid-template-columns: auto auto auto;
  background-color: teal;
  padding: 10px;
}

.grid-item {
  background-color: powderblue;
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}

img{
	width: 280px;
	height: 180px;
}
</style>
</head>
<body>

<h1>Categories:</h1>
<a href="home.php">Return home</a><br>
<a href="logout.php">LOGOUT</a>

<div class="grid-container">
  <div class="grid-item"><img src="electronics.jpg"><br><a href="productlist.php?c=Electronics">Items List</a></div> 
</div>


</body>
</html>