<?php
  session_start();
  if(!isset($_SESSION['username']))
  header('location:login.php');
?>
<html>
<head>
    
    <title>User</title>
    <style>
        body{
	background-color:#e6e6e6;
}

.wrap1{
    background: linear-gradient(to bottom, #74ebd5 20%, #acb6e5 100%);
	font-family:verdana;
	color:black; 
}

    

    .wrap{
    width:600px;
    margin:auto;
       padding:5px;
    }
    
    form{
    border:1px dotted white;
    background-color:#FFFAF0;
    }

    h3{
    text-align:center;
    background:#4682B4;
    color:white;
    padding:10px;
    border-radius:10px;
    }
    input{
    padding:10px;
    margin:5px;
    border: 1px solid #4682B4;
    border-radius:5px;
    }
    input[type=text], radio,select{
      width: 50%;
      padding: 12px;
      border: 1px solid #4682B4;
      border-radius: 4px;
      margin-top: 6px;
      margin-bottom: 16px;
     
      
    }
    button[type=submit] {
      
      background-color:#4682B4;
      color: white;
      padding: 14px 20px;
      border: none
     
    }
    table{
      width: 600px;
    }
    
    

    </style>
</head>
<body>
    <h1>Hello, <?php echo $_SESSION['username'];?> </h1>

    <form method="post" action="changeuser.php">
        <div class="wrap">
        <table   align="center" width="600">
            <tr><th>Userame:</th>
            <td><?php echo $_SESSION['username']; ?></td></tr>
            <tr></tr><th>Password </th>
            <td><input type="password" id="password" name="password" /><br></td></tr>
            <tr></tr><th>New Password </th>
            <td><input type="password" id="newpassword" name="newpassword" /><br></td></tr>
            
        <table>
        <button type="submit" name="submit" >SUBMIT</button>
        </div>

    </form>


    <?php 
$db = mysqli_connect("localhost", "root", "", "auction");

?>

<h2>Your items </h2>
<?php
$user = $_SESSION['username'];
$list="select * from prod where user='$user' ";
$result=mysqli_query($db,$list);
while ( $rows = $result->fetch_assoc() ) {
	?>
	<a style="text-decoration:none;" href="item-det.php?p=<?php echo $rows['prod_name']?>">
	<div class="wrap1">
	Product name:<?php echo $rows['prod_name']?><br>
	
	Price:<?php echo $rows['prod_price']?><br>
	Bidding start date:<?php echo $rows['start_date']?><br>
	Bidding end date:<?php echo $rows['end_date']?><br><br><hr>
	</div></a>
<?php
}
?>
<a href="home.php">Return home</a><br>
<a href="logout.php">LOGOUT</a><br><br>
</body>
</html>