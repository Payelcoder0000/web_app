<?php
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$purchase=$_POST['purchase'];
$sale=$_POST['sale'];
$profit=$_POST['profit'];
$loss=$_POST['loss'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'manage');

$q="INSERT INTO account (day,month,year,purchase,sale,profit) values($day,$month,$year,$purchase,$sale,$profit)";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body
{
	background:url(pp.jpg);
	margin: 0;
	padding: 0;
	background-size: cover;
}

.header
{
height:100px;
top:0%;
left:0%;
padding:0;
margin:0;
}
.header a:link,visited,hover
{
text-decoration:none;
top:0px;;
float:right;
}
.header input[type="submit"]
{
	border: none;
	outline: none;
	height: 30px;
	color: #fff;
	font-size: 16px;
	font-weight:bold;
	background: black;
	cursor: pointer;
	border-radius: 20px;
}
.header input[type="submit"]:hover
{
	border-color:black;
	background: #efed40;
	color: #262626;
}


</style>
<title>Insertion</title>
</head>
<body>

<div class="header">
<a href="member.php"><input type="submit" value="Home page" /></a>
<p align="center"><font size=30px weight="bold"><?php if($status==1) echo " Congrats!! Record(s) inserted"; else echo "Insertion Failed"; ?></br></font></p>
</div>

</body>
</html>