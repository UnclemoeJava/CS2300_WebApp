<?php
	session_start(); // Starting Session
?>

<!DOCTYPE html>
<html xml:lang="en">

<head>
  <title>CS2300 Grading System</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <!-- <link rel="stylesheet" type="text/css" href="css/style.css" /> -->
  <link href="css/style2.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
</head>

<body>
	
	<div id="main">
		<h1>Login to the Grading System!</h1>
		<div id="login">
			<h2>Login Form</h2>
			<form action="" method="post">
				<label>UserName :</label>
				<input id="name" name="username" placeholder="username" type="text">
				<label>Password :</label>
				<input id="password" name="password" placeholder="**********" type="password">
				<input name="submit" type="submit" value=" Login ">
				<span><?php echo $error; ?></span>
			</form>
		</div>
	</div>
   

  
</body>
</html>
