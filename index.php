<?php 
//index.php
$connect = mysqli_connect("localhost", "root", "", "manage");
$query = "SELECT * FROM account";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ year:'".$row["year"]."', profit:".$row["profit"].", purchase:".$row["purchase"].", sale:".$row["sale"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>


<!DOCTYPE html>
<html>
 <head>
  <title>chart</title>

<style type="text/css">
body
{
	background:url(bo.jpg);
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
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <div class="header">
<a href="member.php"><input type="submit" value="Home page" /></a>
<p align="center"><font size=30px weight="bold"><?php echo " Bar charts of Purchase,sale and profit based on year"; ?></br></font></p> 
   <br /><br />
   <div id="chart"></div>
  </div>
 </body>
</html>

<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'year',
 ykeys:['profit', 'purchase', 'sale'],
 labels:['Profit', 'Purchase', 'Sale'],
 hideHover:'auto',
 stacked:true
});
</script>