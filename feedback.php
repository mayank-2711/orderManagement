<!DOCTYPE html>
<html>
<head>
	<title>Share Feedback</title>
</head>
<body style="background-position: center;
  background-repeat: no-repeat;
  background-size: cover;" background="https://thumbs.dreamstime.com/b/feedback-word-hanging-rope-orange-background-d-illustration-77381446.jpg">
<center><h1 style="font-family: courier;font-size: 100px; margin: 0px; padding-top: -10px; color: #f32f19e0; background-color: #0000009e;">Dine n Wine</h1></center>
	<center style="border-radius: 5px;  font-size: 15px; font-family: 'Comic Sans MS', cursive, sans-serif; margin-right: 30%; margin-left: 30%; background-color: #02cdf59c; color: #000000;"><h1>Please share your valuable feedback</h1></center>
	<br><br><br><center>
	<form action="feedback.php" method="POST" style="border-radius: 5px;  font-size: 20px; font-family: 'Comic Sans MS', cursive, sans-serif; margin-right: 30%; margin-left: 30%; background-color: #0000005e; color: #000000;">
		<table>
			<tr>
				<td>
					<label>E-mail</label>
				</td>
				<td>
					<input type="email" name="email">
				</td>
			</tr>
		<tr>
		<td><label>Food Quality:</label></td>
		<td><input type="radio" name="fdqlty" value="poor">Poor
		<input type="radio" name="fdqlty" value="average">Average
		<input type="radio" name="fdqlty" value="good">Good
		<input type="radio" name="fdqlty" value="excellent">Excellent</td>
	</tr>
	<tr>
		<td><label>Service:</label></td>
		
		<td>
		<input type="radio" name="srvc" value="poor">Poor
		<input type="radio" name="srvc" value="average">Average
		<input type="radio" name="srvc" value="good">Good
	    <input type="radio" name="srvc" value="excellent">Excellent</td>
	</tr>
	<tr>
		<td><label>Cleaniness:</label></td>
		<td>
		<input type="radio" name="cln" value="poor">Poor
		<input type="radio" name="cln" value="average">Average
		<input type="radio" name="cln" value="good">Good
		<input type="radio" name="cln" value="excellent">Excellent</td>
	</tr>
	<tr>
		<td>Comment</td>
		<td><textarea name="comment" rows="5" cols="40"></textarea></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="submit"></td>
	</tr>
	</table>
	</form></center>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
	$con=mysqli_connect('localhost','root','','restro');
	if (!$con) {
	   die("Connection failed");
	}
	$email=$_POST['email'];
	$cln=$_POST['cln'];
	$srvc=$_POST['srvc'];
	$fdqlty=$_POST['fdqlty'];
	$cmt=$_POST['comment'];
	
	
	$sql= "INSERT INTO feedback (email,fdqlty,srvc,cln,comment) VALUES('$email','$fdqlty','$srvc','$cln','$cmt')";
	$chk = mysqli_query($con , $sql);
		if($chk)
			echo " ";
		else
			echo " INSERTION FAILED";
}
?>