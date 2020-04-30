<?php 
	session_start();
	include_once 'dbconnect.php';

	$query = "SELECT * FROM members ORDER BY user_name DESC";
    $result = mysqli_query($conn, $query);


    if (isset($_GET['no'])){
		$no = $_GET['no'];
		$query2 = "SELECT * FROM buy_orders 
				WHERE no =" .$no;
		$result2 = mysqli_query($conn, $query2);
		$row2 = mysqli_fetch_array($result2);
	} 
   
	if (isset($_SESSION['user_name'])){
        $id = $_SESSION['user_name'];
        $query = "SELECT * FROM members 
                WHERE user_name =" .$id;
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
    } else {
            header("Location: index.php");
        }

		if (isset($_POST['update'])) {
			$name = $row['name'];
			$id = $row['user_name'];
			$amount = $_POST['amount'];
			$price = $row2['price'];
			$volume = $row2['volume'] - $amount;
			$total = $row['balance'] - ($amount*$price);
			$no = $row2['no'];
			$cash = $amount * $volume;

		if (volume>=0) {
		
		if ($total>=0) {
			$query4 = "UPDATE members SET
				user_name = '" . $id . "',
				balance = '" . $total . "'
				WHERE user_name = " . $id;

			$result4 = mysqli_query($conn, $query4);

			$id_sell = $row2['user_name'];;
        	$query6 = "SELECT * FROM members 
                WHERE user_name =" .$id_sell;
        	$result6 = mysqli_query($conn, $query6);
        	$row6 = mysqli_fetch_array($result6);
        	$total_cash = $cash + $row6['balance'];

        	$query7 = "UPDATE members SET
				user_name = '" . $id_sell . "',
				balance = '" . $total_cash . "'
				WHERE user_name = " . $id_sell;

		if ($volume==0) {
			$query3 = "DELETE FROM buy_orders 
                  WHERE no = " . $no;
        	$result3 = mysqli_query($conn, $query3);
       		 header("Location: mm_user.php");
		} else{
			$query5 = "UPDATE buy_orders SET
				volume = '" . $volume . "',
				WHERE no = " . $no;

			$result5 = mysqli_query($conn, $query4);
		}

		header("Location: user.php");

							} 
		else {
			$message = "Your balance is not enough.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	} else{
		$message = "Volume is not enough.";
			echo "<script type='text/javascript'>alert('$message');</script>";
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
			<a class="navbar-brand" href="index.php">PHP Simple CRUD</a>
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
			<form role="form" action="buy_purchase.php?no=<?php echo $row['no']; ?>" method="post" name="updateform">
				<fieldset>
					<legend>Purchase</legend>

          <!--14.display old info in text fields -->
					<div class="form-group">
						<label for="name">Name</label>
						<label >: <?php echo $row['name'] ?></label>
						<span class="text-danger"></span>
					</div>

					<div class="form-group">
						<label for="name">ID</label>
						<label >: <?php echo $row['user_name'] ?></label>
						<span class="text-danger"></span>
					</div>

					<div class="form-group">
						<label for="name">Your Balance</label>
						<label >: <?php echo $row['balance'] ?></label>
						<span class="text-danger"></span>
					</div>

					<div class="form-group">
						<label for="name">Your Poker coins</label>
						<label >: <?php echo $row['poker_coins'] ?></label>
						<span class="text-danger"></span>
					</div>

					<div class="form-group">
						<label for="name">Order Detail</label>
						<span class="text-danger"></span>
					</div>

					<div class="form-group">
						<label for="name">Order No</label>
						<label >: <?php echo $row2['no'] ?></label>
						<span class="text-danger"></span>
					</div>

					<div class="form-group">
						<label for="name">Volume</label>
						<label >: <?php echo $row2['volume'] ?></label>
						<span class="text-danger"></span>
					</div>

					<div class="form-group">
						<label for="name">Price</label>
						<label >: <?php echo $row2['price'] ?></label>
						<span class="text-danger"></span>
					</div>

					<div class="form-group">
						<label for="name">How much do you want?</label>
						<input type="text" name="amount" placeholder="Input volume" minlength="" required class="form-control" />
						<span class="text-danger"></span>
					</div>

					<div class="form-group">
						<input type="submit" name="update" value="Purchase" class="btn btn-primary" />
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