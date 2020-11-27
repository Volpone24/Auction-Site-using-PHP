<?php
session_start();
if(!isset($_SESSION['username']))
header('location:login.php');
?>
<html>
<head>
 <title>Home page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body {
  font-family: "Lato", sans-serif;
  text-align:center;
}

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 6px 6px 10px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">

  <a href="ProductEntry.html">Auction item</a>
  <a href="categories.php">Items</a>
  <a href="user.php">User</a>
  <a href="logout.php">Logout</a>
  
</div>

<div class="main">


<br>
<h2 style="margin-left: 50px;">Welcome <?php echo $_SESSION['username'];?> to the online auction site</h2>
<h3 style="margin-left: 50px;">Sell and Bid to your hearts content!</h3><br>
<p style="font-size:20px;">Click on Auction item to put up items for auction</p>
<p style="font-size:20px;">Click on Items to browse the different items for bidding.</p>
</div>
   
</body>
</html>
