<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'manage');

$q="select * from account";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
<title>View records</title>
<link rel="stylesheet" href="viewStyle.css" />
</head>
<body>
<div class="header">
<a href="member.php"><input type="submit" value="Home page" /></a>
<p align="center"><font size=30px weight="bold">Your records are below:</br></font></p>
</div>



<table id="view_table">
   <tr>
	<th>Index</th>
	<th>Day</th>
	<th>Month</th>
	<th>Year</th>
	<th>Purchase</th>
	<th>Sale</th>
	<th>Profit</th>
	<th>Loss</th>
	
   </tr>

<?php
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['day']; ?></td>
<td><?php echo $row['month']; ?></td>
<td><?php echo $row['year']; ?></td>
<td><?php echo $row['purchase']; ?></td>
<td><?php echo $row['sale']; ?></td>
<td><?php echo $row['profit']; ?></td>
<td><?php echo $row['loss']; ?></td>
</tr>



<?php
}

?>


</table>


</body>
</html>