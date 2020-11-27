<?php
session_start();
if(!isset($_SESSION['username']))
header('location:login.php');
$connection =mysqli_connect("localhost", "root", ""); 
$db = mysqli_select_db($connection,"auction");
$_SESSION['productname']=$_GET['p'];
$pid=$_SESSION['productname'];

?>
<html>
<head> <title> Place your bid </title>
<style>
     button[type=submit] {
      
      background-color:#4682B4;
      color: white;
      padding: 14px 20px;
      border: none
     
    }
    table {
  border-collapse: collapse;
  width: 100%;
  margin-left:auto; 
   margin-right:auto;

}

form{
  padding-left: 650px;
}

th, td {
  text-align: left;
  padding: 8px;
  font-size: 100%;
  
  
}

tr:nth-child(even){background-color: #f2f2f2}

th {
	
  color: black;
 
}
    
    </style>

</head>
<body>
    <table style="width:600px" border="1">

<?php

//MySQL Query to read data
$query = mysqli_query( $connection,"select * from prod where prod_name='$pid'");
while ($row = mysqli_fetch_assoc($query)) {
  $_SESSION['price'] = $row['bid_price']
    ?>
    <tr>
    <th> Product Name:</th>
    <td>
<?php
echo $row['prod_name'];
?> </td></tr>

<tr>

<th> Starting bid</th><td>
<?php
echo $row['prod_price'];
?> </td></tr><tr>
<th> 
Highest bid:
</th><td>
<?php
echo $row['bid_price'];
?> </td></tr>
<th> Bid End Date</th><td>
<?php
echo $row['end_date'];
?> </td></tr>
<tr>
<th> Bid End Date</th><td>
<?php
echo $row['end_date'];
?> </td></tr><tr>
<th> 
Product put up by
</th><td>
<?php
echo $row['user'];
?> </td></tr>
<tr>
<th> 
Highest Bidder
</th><td>
<?php
echo $row['bid_user'];
?> </td></tr>
<?php
}
?>
</table>
<br><br><br>


<form  method="post" action="payment.php"   enctype="multipart/form-data"  >
Enter your bid <br>
<input type="number" id="bprice" name="bprice" min="<?php echo $_SESSION['price'] ?>" required/> <br><br>
<button type=submit  name="bid" >Place bid</button>

</form>
<a href="home.php">Return home</a><br>
<a href="logout.php">LOGOUT</a><br><br>
</body>
</html>