<!DOCTYPE html>
<html>
<head>
	<title>Order Now</title>
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Autour One' >

</head>
<body>
	<body style="background-position: center;
  background-repeat: no-repeat;
  background-size: cover;" background="https://englishlive.ef.com/blog/wp-content/uploads/sites/2/2014/07/dont-be-a-word-bore-hungry.jpg">
<center><h1 style="font-family: courier;font-size: 100px; margin: 0px; color: #f32f19e0; background-color: #0000009e;">Dine n Wine</h1></center>
	<center style="font-size: 30px; font-family: 'Lucida Console', Courier, monospace;color: #ffffff; background-color: #0000009e;">your one stop destination for your belly</center>
			<center><?php include 'nav.php';?></center>
						<p style="font-family: 'Autour One'; text-align: center;background-color: #e0f50296; border-radius: 5px;  font-size: 22px; margin-right: 300px;margin-left: 300px;">Stop craving...<br>
			Start ordering...</p>
			<p style="font-family: 'Autour One'; text-align: center;background-color: #e0f50296; border-radius: 5px;  font-size: 22px; margin-right: 300px;margin-left: 300px; color: #ff0000">
			    Time to choose for your belly...
			</p>
			<form style="border-radius: 5px; background-color: #efe3105c; margin-left: 300px; margin-right: 300px;" method="post" action="ordernow.php">
				<table align="center" style="font-family: 'Autour One';text-align: center; background-color: #ffffff00; " cellspacing="5px">
					<tr>
						<th colspan="4" style="font-size: 50px;">
							Menu
						</th>
					</tr>
					<tr>
						<th>Sl. No.</th>
						<th>Dishes</th>
						<th>Price</th>
						<th>No. of Servings</th>
					</tr>
					<tr>
						<td>1.</td>
						<td>abc</td>
						<td>10</td>
						<td><input type="number" value="0" min="0" max="10" name="a"></td>
					</tr>
					<tr>
						<td>2.</td>
						<td>abc</td>
						<td>10</td>
						<td><input type="number" value="0" min="0" max="10" name="b"></td>
					</tr>
					<tr>
						<td>3.</td>
						<td>abc</td>
						<td>10</td>
						<td><input type="number" value="0" min="0" max="10" name="c"></td>
					</tr>
					<tr>
						<td>4.</td>
						<td>abc</td>
						<td>10</td>
						<td><input type="number" value="0" min="0" max="10" name="d"></td>
					</tr>
					<tr>
						<td>5.</td>
						<td>abc</td>
						<td>10</td>
						<td><input type="number" value="0" min="0" max="10" name="e"></td>
					</tr>
					<tr>
						<td>6.</td>
						<td>abc</td>
						<td>10</td>
						<td><input type="number" value="0" min="0" max="10" name="f"></td>
					</tr>
					<tr>
						<td>7.</td>
						<td>abc</td>
						<td>10</td>
						<td><input type="number" value="0" min="0" max="10" name="g"></td>
					</tr>
					<tr>
						<td colspan="2">Apply coupon code</td>
						<td colspan="2"><input type="text" name="cpncd"></td>
					</tr>
					<tr>
						<td colspan="2">Table code</td>
						<td colspan="2"><input type="text" name="tblcd"></td>
					</tr>
					<tr>
						<td colspan="2">Password</td>
						<td colspan="2"><input type="Password" name="pswd"></td>
					</tr>
					<tr>
						<th colspan="2"><input type="submit" name="plcorder" value="Place Order"></th>
						<th colspan="2"><input type="submit" name="bill" value="Calculate Bill"></th>
					</tr>
				</table>
			</form>



<p style="border-radius: 5px; background-color: #efe3105c; margin-left: 300px; margin-right: 300px; font-family: 'Autour One';text-align: center; font-size: 35px;" ><?php
if (isset($_POST['bill'])){
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$f=$_POST['f'];
$g=$_POST['g'];
$s=$a*10+$b*10+$c*10+$d*10+$e*10+$f*10+$g*10;
if($_POST['cpncd']==9876){
	$s=0.9*$s;
}
echo "total= Rs. $s";
}
elseif (isset($_POST['plcorder'])) {
	$con=mysqli_connect('localhost','root','','restro');
	if (!$con) {
	   die("Connection failed");
	}
	else{
		$a=$_POST['a'];
		$b=$_POST['b'];
		$c=$_POST['c'];
		$d=$_POST['d'];
		$e=$_POST['e'];
		$f=$_POST['f'];
		$g=$_POST['g'];
		$ta=10*($_POST['a']);
		$tb=10*$_POST['b'];
		$tc=10*$_POST['c'];
		$td=10*$_POST['d'];
		$te=10*$_POST['e'];
		$tf=10*$_POST['f'];
		$tg=10*$_POST['g'];
		$t=$_POST['tblcd'];
		$cpn=$_POST['cpncd'];
		$pswd=$_POST['pswd'];
		$sql= "INSERT INTO orders (tablecode,dish,no,totalcost,cpncd,pswd,chck) VALUES('$t','abc',$a,'$ta','$cpn','$pswd','N'),
			('$t','abc',$b,'$tb','$cpn','$pswd','N'),
			('$t','abc',$c,'$tc','$cpn','$pswd','N'),
			('$t','abc',$d,'$td','$cpn','$pswd','N'),
			('$t','abc',$e,'$te','$cpn','$pswd','N'),
			('$t','abc',$f,'$tf','$cpn','$pswd','N'),
			('$t','abc',$g,'$tg','$cpn','$pswd','N')";
		$sql2= "DELETE FROM orders WHERE no=0;";	

		
		$chk = mysqli_query($con , $sql);
		if($chk)
			echo "DATA INSERTED";
		else
			echo " INSERTION FAILED";
		$chk2 = mysqli_query($con , $sql2);
		if($chk2)
			echo "DATA INSERTED";
		else
			echo " INSERTION FAILED";
		

	}
}



?>
</p>
</body>
</html>
