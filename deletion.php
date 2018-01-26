<?php
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
$index="b".$j;
if(isset($_POST[$index]))
	$b_id[$i]=$_POST[$index];
else
$i--;
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'manage');
for($k=1;$k<=$size;$k++)
{
$q="delete from account where id=".$b_id[$k];
mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Deletion</title>

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
<p align="center"><font size=30px weight="bold"><?php echo " Congrats!! Record(s) deleted"; ?></br></font></p>
</div>

</body>
</html>