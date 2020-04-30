<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	
	session_start();

	// เชื่อต่อดาต้าเบส
	include_once 'dbconnect.php';

	if (isset($_SESSION['user_name'])){
		if ($_SESSION['user_name']=="") {
			header("Location: mm_user.php");
		} else{
		header("Location: user.php");
	}
    }
	// เช็คล็อคอิน
	if (isset($_POST['login'])) {
		$id = mysqli_real_escape_string($conn,$_POST['id']);
		$passwd = mysqli_real_escape_string($conn,$_POST['password']);

		$query = "SELECT * FROM members WHERE 
				  user_name ='" . $id . "' AND 
				  password ='" . md5($passwd) . "'";
		$result = mysqli_query($conn, $query);
		
		if ($row = mysqli_fetch_array($result)) {
			
			$_SESSION['user_name'] = $row['user_name'];
			$_SESSION['name'] = $row['name'];
			header("location: user.php");
			
			
		} 
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Truck</title>
 <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Business Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
	
	<!-- css files -->
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

<div class="signupform">
	<div class="container">
		<!-- main content -->
		<div class="agile_info">
			<div class="w3l_form">
				<div class="left_grid_info">
					<h1>TRUCK 6 wheel truck</h1>
					<p> <marquee behavior="alternate">บริการถมดิน,หิน,ทราย ถมที่ต่าง ๆ</marquee> </p>
					<img src="images/truck.jpg" alt="" />
				</div>

			</div>
			<div class="w3_info">
				<h2>Login to your Account</h2>
				<p>Enter your details to login.</p>
				<form action="#" method="post">
					<label>ID Phone</label>
					<div class="input-group">
						<span class="fa fa-envelope" aria-hidden="true"></span>
						<input type="text" name="id" placeholder="Enter ID" required=""> 
					</div>
					<label>Password</label>
					<div class="input-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<input type="Password" name="password" placeholder="Enter Password" required="">
					</div> 
					<span style="color: red">
							<?php 
								if (isset($error_msg)) {
									echo $error_msg;
								}
							?>
					</span>
					<br>
					
						<button class="btn btn-danger btn-block" type="submit" name="login" value="Login">Login</button >                
				</form>
				<p class="account1">Dont have an account? <a href="Register.php">Register here</a></p>
				<br><br><br>
				<br><br><br>
				<br><br>
				
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="home.html" class="btn btn-danger btn-block">HOME</a>
			</div>
			
		</div>
		<!-- //main content -->
	</div>
	<!-- footer -->
	<div class="footer">
		<p>&copy; 2019 Business login form. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="blank">W3layouts</a></p>
	</div>
	<!-- footer -->
</div>
	
</body>
</html>