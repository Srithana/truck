
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	//2.connect with database
	include_once 'dbconnect.php';

	if (isset($_POST['signup'])) {
		// echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // exit();
		//3.save data into members table
		$name = $_POST['member_name'];
		$id = $_POST['member_id'];
		// $id = mysqli_real_escape_string($conn,$_POST['member_id']);
		$password = $_POST['member_password'];
		$cmpassword = $_POST['member_cm_password'];

		if ($password != $cmpassword) {
			$passwd_error = "Password and confirm password don't match!";
		} else {
			$query = "INSERT INTO members(`name`, `user_name`, `password`) VALUES('" . $name . "','" . $id . "','" . md5($password) . "')";
			$result = mysqli_query($conn, $query);

			if ($result){
				$msg_success = "Successfully registered! &nbsp;&nbsp;
				<a href='index.php'>Click here to login</a>";
			}else{
				$msg_error = "Error in registration, please try again!";
			}

			// if ($result) {
				// $msg_success = "Successfully registered! &nbsp;&nbsp;
			// 	<a href='index.php'>Click here to login</a>";
			// } else {
			// 	$msg_error = "Error in registration, please try again!";
			// }
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
				<h2>Register</h2>
				<p>Enter your details to Register.</p>
				<form action="#" method="post">
					<label>Your name</label>
					<div class="input-group">
						<span class="fa fa-envelope" aria-hidden="true"></span>
						<input type="text" name="member_name" placeholder="Enter Your name" required=""> 
					</div>
					<font color="#EE0000" size="2"><div align="right">* ชื่อ - สกุล*</div></font>
					<label>ID Phone</label>
					<div class="input-group">
						<span class="fa fa-envelope" aria-hidden="true"></span>
						<input type="text" name="member_id" placeholder="Enter ID" required="" minlength="6"> 
					</div>
					<font color="#EE0000" size="2"><div align="right">* เบอร์โทรสามารถติดต่อได้ *</div></font>
					<label>Password</label>
					<div class="input-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<input type="Password" name="member_password" placeholder="Enter Password" required="" minlength="6">
					</div> 
					<label>Confirm Password</label>
					<div class="input-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<input type="Password" name="member_cm_password" placeholder="Enter Confirm Password" required="" minlength="6">
					</div>

					<span style="color:red">
						<?php 
							if (isset($passwd_error)) {
								echo $passwd_error;
							}
						?>
					</span>

					<span style="color:red">
						<?php 
							if (isset($msg_error)) {
								echo $msg_error;
						}
						?>

					</span>

					<span style="color:green">
						<?php
							if (isset($msg_success)) {
								echo $msg_success;
							}
						?>
					</span>
					<br>
					<br>
						<button class="btn btn-danger btn-block" name="signup" value="Sign Up">Sign up</button >    
						<br>
						<br>
						<br>
						<a href='index.php'>กลับไปยังหน้าล็อคอิน</a>            
				</form>
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