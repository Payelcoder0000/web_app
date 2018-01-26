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
<title>Update records</title>
<link rel="stylesheet" href="viewStyle.css" />
</head>
<body>

<div class="header">
<a href="member.php"><input type="submit" value="Home page" /></a>
<p align="center"><font size=30px weight="bold">Update records from below:</br></font></p>
</div>


<form action="updation.php" method="post">
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



<td width=20px;><?php echo $row['id']; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
<td><input type="text" name="day<?php echo $i;?>" value="<?php echo $row['day']; ?>" /></td>
<td><input type="text" name="month<?php echo $i;?>" value="<?php echo $row['month']; ?>" /></td>
<td><input type="text" name="year<?php echo $i;?>" value="<?php echo $row['year']; ?>" /></td>
<td><input type="text" name="purchase<?php echo $i;?>" value="<?php echo $row['purchase']; ?>" /></td>
<td><input type="text" name="sale<?php echo $i;?>" value="<?php echo $row['sale']; ?>" /></td>
<td><input type="text" name="profit<?php echo $i;?>" value="<?php echo $row['profit']; ?>" /></td>
<td><input type="text" name="loss<?php echo $i;?>" value="<?php echo $row['loss']; ?>" /></td>
</tr>

<?php
}
?>


</table>

<table id="view">
<td><input type="submit" value="Update" /><td>
</table>
</form>

</body>
</html>