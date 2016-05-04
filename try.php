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
	<?php
		$error=''; // Variable To Store Error Message
		if (isset($_POST['submit'])) {
			if (empty($_POST['username']) || empty($_POST['password'])) {
				$error = "Username or Password is invalid";
			}
			else {
				// Define $username and $password
				$username = $_POST['username'];
				$password = $_POST['password'];

				// To protect MySQL injection for Security purpose
				$username = stripslashes($username);
				$password = stripslashes($password);
				$username = mysql_real_escape_string($username);
				$password = mysql_real_escape_string($password);

				// Password hashing
				$hashed_password = password_hash($password, PASSWORD_DEFAULT);

				// $hashed_try = password_hash("iloveu", PASSWORD_DEFAULT);
				// print($hashed_try);

				$_SESSION['login_user'] = $username;
				$_SESSION['login_pass'] = $password;
				$_SESSION['login_hash'] = $hashed_password;

				if(isset($_SESSION['login_user']) && $_SESSION['login_pass']) {
					header("location: home.php");
				}
				else {
					print ("<h3 style='color: red;'>Please Type in Both Username and Password to Log In</h3>");
				}
			}
		}
	?>


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
