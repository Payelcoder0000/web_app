<!doctype html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>

<script
    type="text/javascript"
    async defer
    src="//assets.pinterest.com/js/pinit.js"
></script>
<a href="https://www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark">
</a>














	<nav id="navigation">
               	 <ul id="nav">
	
                    <li><a href="contact.php">Contact</a></li>
	<li><a href="news.php">News</a></li>
               	 </ul>
            	</nav>

            	<div id="banner">  
	  <p>Oeconomicus</p>           
            	</div>
		
           	 <div id="content_area">  
          	  <p></br>We help you to calculate daily expenditure and make your life a less complex</p></p>                   	 
<div class="loginBox">
<form action="" method="POST">
<p id="p1">Username</p><input type="text" name="user"" placeholder="Enter username"><br />
<p id="p1">Password</p> <input type="password" name="pass"" placeholder="••••••"><br />	
<input type="submit" value="Login" name="submit" />
<p><a href="register.php"><input type="register" value="Sign up" name="register"/></a></p>
</form>
<p>
<?php

if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('user_registration') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($query))
	{
	$dbusername=$row['username'];
	$dbpassword=$row['password'];
	}

	if($user == $dbusername && $pass == $dbpassword)
	{
	session_start();
	$_SESSION['sess_user']=$user;

	/* Redirect browser */
	header("Location: member.php");
	}
	} else {
	echo "Invalid username or password!";
	}

} else {
	echo "All fields are required!";
}
}
?>
</div>
</p>
</body>
</html>