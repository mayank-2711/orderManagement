<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<link href='https://fonts.googleapis.com/css?family=Aleo' rel='stylesheet'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Autour One' >
</head>
<body style="background-position: center;
  background-repeat: no-repeat;
  background-size: cover;" background="https://uauth.unextt.com/admin/assets/img/login-bg.jpg">
	<center><h1 style="font-family: courier;font-size: 100px; margin: 0px; padding-top: -10px; color: #f32f19e0; background-color: #0000009e;">Dine n Wine</h1></center>
	<center style="font-size: 35px; font-family: 'Lucida Console', Courier, monospace;color: #ffffff; background-color: #0000009e;">Total Orders</center><br>
	<center><?php include 'navadm.php'; ?></center>
	<?php
$con=mysqli_connect('localhost','root','','restro');
	if (!$con) {
	   die("Connection failed");
	}

	$sql = "SELECT * FROM orders ORDER BY id"; 
$result = $con->query($sql); 
$con->close();  
?><br><br>
<table align="center" border="5px" style="color: #ffb100;border-color: #6f3d09;font-size: 18px;text-align: center;background-color: #0000009e;">
	<tr>
		<th>Table code</th>
		<th>Dish</th>
		<th>No. of servings</th>
		<th>Total Cost</th>
		<th>Coupon code</th>
		<th>Password</th>
		<th>Check</th>
	</tr>
	<?php   // LOOP TILL END OF DATA  
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                <td><?php echo $rows['tablecode'];?></td> 
                <td><?php echo $rows['dish'];?></td> 
                <td><?php echo $rows['no'];?></td> 
                <td><?php echo $rows['totalcost'];?></td> 
                <td><?php echo $rows['cpncd'];?></td> 
                <td><?php echo $rows['pswd'];?></td> 
                <td><?php echo $rows['chck'];?></td> 
            </tr> 
            <?php 
                } 
             ?> 
</table>
</body>
</html>