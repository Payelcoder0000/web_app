<?php
$size=sizeof($_POST);
$records=$size/8;
for($i=1;$i<=$records;$i++)
{
$index1="id".$i;
$id[$i]=$_POST[$index1];
$index2="day".$i;
$day[$i]=$_POST[$index2];
$index3="month".$i;
$month[$i]=$_POST[$index3];
$index4="year".$i;
$year[$i]=$_POST[$index4];
$index5="purchase".$i;
$purchase[$i]=$_POST[$index5];
$index6="sale".$i;
$sale[$i]=$_POST[$index6];
$index7="profit".$i;
$profit[$i]=$_POST[$index7];
$index8="loss".$i;
$loss[$i]=$_POST[$index8];
}

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'manage');
for($i=1;$i<=$records;$i++)
{
$q="update account SET day=$day[$i],month=$month[$i],year=$year[$i],purchase=$purchase[$i],sale=$sale[$i],profit=$year[$i],loss=$loss[$i] where id=$id[$i]";
mysqli_query($con,$q);
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
<title>Updation</title>
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
</head>
<body>
<div class="header">
<a href="member.php"><input type="submit" value="Home page" /></a>
<p align="center"><font size=30px weight="bold"><?php echo " Congrats!! Record(s) updated"; ?></br></font></p>
</div>
</body>
</html>