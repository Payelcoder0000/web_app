<?php 
session_start();
if(!isset($_SESSION["sess_user"]))
{
	header("location:login.php");
}
 else {
?>
<!doctype html>
<html>
<head>
<title>Welcome</title>

<link rel="stylesheet" type="text/css" href="mystyle.css" />

</head>
<body>
<div class="header">
<a href="logout.php"><input type="submit" value="logout" /></a>
<h2></br><font size=30px >Welcome, <?php echo $_SESSION['sess_user'];?>!</font></h2>
</div>

<nav id="navigation">
 <ul id="nav">
<li><a href="#">Insert Records</a></li>
<li><a href="view.php">View Records</a></li>
<li><a href="index.php">Record Charts </a></li>
<li><a href="deleteForm.php">Delete Record</a></li>
<li><a href="updateForm.php">Update Records</a></li>
</ul>
</nav>

   <p align="center"><font color="white" size=20px> Please insert your records <font></p>        
 <div class="content_area">
   
<form action="insertion.php" method="post"
<table>
<tr>
<th ><font color="white" size=5px >Day</font></th>
<td><input type="number" name="day" min="1" max="31" required ></td>
</tr>
<tr>
<th><font color="white" size=5px >Month</font></th>
<td><input type="number" name="month" min="1" max="12" required ></td>
</tr>
<tr>
<th><font color="white" size=5px >Year</font></th>
<td><input type="number" name="year" min="1970" max="2034" required ></td>
</tr>

</br></br>
<tr>
<th><font color="white" size=5px >Purchase</font></th>
<td><input type="text" name="purchase" required /></td>
</tr>
</br></br>

<tr>
<th><font color="white" size=5px >Sale</font></th>
<td><input type="text" name="sale" required /></td>
</tr>
</br></br>

<tr>
<th><font color="white" size=5px >Profit</font></th>
<td><input type="text" name="profit" reuired /></td>
</tr>
</br></br>

<tr>
<th><font color="white" size=5px >loss</font></th>
<td><input type="text" name="loss" required /></td>
</tr>
</br></br>

<tr>
<th></th>
<td><p align="center"><input type="submit" value="Insert" /></p></td>
</tr>
</table>
</form>   
</div>
</body>
</html>
<?php
}
?>


