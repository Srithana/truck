<?php 
	session_start();
	include_once 'dbconnect.php';
	if (isset($_SESSION['user_name'])){
    } else {
            header("Location: index.php");
        }

	if (isset($_GET['user_name'])){
		$id = $_GET['user_name'];
		$query = "SELECT * FROM members 
				WHERE user_name =" .$id;
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($result);
	} else {
            header("Location: index.php");
        }

	if (isset($_POST['update'])) {

		$name = $_POST['order_no'];
		$id = $_POST['order_name'];
		$password = $_POST['order_user_name'];
		$cmpassword = $_POST['order_type'];
		$email = $_POST['order_number_n'];
		$bank = $_POST['order_date_a'];
		$bankno = $_POST['order_date_s'];
        $banknoo = $_POST['order_place'];


		$query = "UPDATE order SET
				no = '" . $name . "',
				name = '" . $id . "',
				user_name = '" . md5($password) . "',
				type = '" . $cmpassword . "',
				number_n = '" . $email . "',
                date_a = '" . $bank . "',
                date_s = '" . $bankno . "',
				place = '" . $banknoo . "'
				WHERE no = " . $id;

		if (mysqli_query($conn, $query)){
			header("Location: mm_user.php");
		} 
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update User</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="mm_user.php">Poker Thailand</a>
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1">
     		<ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['name'])) { ?>
                    <li><p class="navbar-text">Signed in as <?php echo $_SESSION['name']; ?></p></li>
				    <li><a href="logout.php">Log Out</a></li>
                <?php } else { ?>
     			    <li><a href="login.php">Login</a></li>
     			    <li><a href="register.php">Sign Up</a></li>
     			    <li class="active"><a href="admin_login.php">Admin</a></li>
                <?php } ?>
     		</ul>
     	</div>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="update_user.php?user_name=<?php echo $row['user_name']; ?>" method="post" name="updateform">
				<fieldset>
					<legend>Update</legend>

          <!--14.display old info in text fields -->
					<div class="form-group">
						<label for="name">ลำดับ</label>
						<input type="text" name="order_no" placeholder="Enter Full Name" required class="form-control" 
						value="<?php echo $row['no'] ?>" />
						<span class="text-danger"></span>
					</div>

					<div class="form-group">
						<label for="name">ชื่อ</label>
						<input type="text" name="order_name" placeholder="Enter ID" required class="form-control" 
						value="<?php echo $row['name'] ?>" />
						<span class="text-danger"></span>
					</div>

					<div class="form-group">
						<label for="name">User_name</label>
						<input type="text" name="order_user_name" placeholder="Email" required class="form-control" 
						value="<?php echo $row['user_name'] ?>" />
						<span class="text-danger"></span>
					</div>

					<div class="form-group">
						<label for="name">ประเภท</label>
						<input type="text" name="order_type" placeholder="Bank" required class="form-control" 
						value="<?php echo $row['type'] ?>" />
						<span class="text-danger"></span>
					</div>

					<div class="form-group">
						<label for="name">จำนวน</label>
						<input type="text" name="order_number_n" placeholder="Bank" required class="form-control" 
						value="<?php echo $row['number_n'] ?>" />
						<span class="text-danger"></span>
					</div>

					<div class="form-group">
						<label for="name">วันที่สั่ง</label>
						<input type="password" name="order_date_a" placeholder="Password" minlength="6" required class="form-control" />
						<span class="text-danger"></span>
					</div>

					<div class="form-group">
						<label for="name">วันที่ส่ง</label>
						<input type="password" name="order_date_s" placeholder="Confirm Password" minlength="6" required class="form-control" />
						<span class="text-danger"></span>
					</div>

                    <div class="form-group">
						<label for="name">สถานที่</label>
						<input type="password" name="order_place" placeholder="Confirm Password" minlength="6" required class="form-control" />
						<span class="text-danger"></span>
					</div>

					<div class="form-group">
						<input type="submit" name="update" value="Update" class="btn btn-success" />
					</div>
				</fieldset>
			</form>
			<!--display message -->
			<span class="text-success"></span>
			<span class="text-danger"></span>
		</div>
	</div>
</div>
</body>
</html>