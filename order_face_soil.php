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

?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

	p {font-family: 'Kanit', sans-serif;
	   font-size: 18px;
	  }
	h1,h2,h3,h4,h5,h6 {
		font-family: 'Kanit', sans-serif;
						 }
	a {font-family: 'Kanit', sans-serif;
   font-size: 14px;
	}
  </style>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>หน้าดิน</title>
		<link rel="icon" href="img/Fevicon.png" type="image/png">
	<link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
		<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
		<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="vendors/nice-select/nice-select.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style1.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
</head>
<body>
	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
        <div class="w3-top">
			<div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
			  
			  <!-- Right-sided navbar links. Hide them on small screens -->
			  <div class="w3-right w3-hide-small">
			    <a href="user.php" class="w3-bar-item w3-button"><font face="Kanit" >หน้าสั่งสินค้า</font></a>
				<a href="logout.php" class="w3-bar-item w3-button"><font face="Kanit">ล็อคเอาท์</font></a>
			  </div>
			</div>
		  </div>
    
  </header>
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="owl-carousel owl-theme s_Product_carousel">
						<div class="single-prd-item">
							<br><br><br><br>

							<img class="img-fluid" src="images/category/face_soil.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
				<form role="form" action="action_soil.php?user_name=<?php echo $_SESSION['user_name']; ?>" method="post" name="updateform">
				<h3><font face="Kanit" font size="6">หน้าดิน</font></h3>
						<div class="s_product_text">
							<h5><div class="form-group"><h5>
							<label for="name">Name</label>
							<label >: <?php echo $row['name'] ?></label>
							<input type="hidden" name="name" placeholder=""  class="form-control" value="<?php echo $row['name'] ?>" />
							<span class="text-danger"></span>
						</div>
							<div class="form-group">
							<label for="name">ID</label>
							<label >: <?php echo $row['user_name'] ?></label>
							<input type="hidden" name="user_name" placeholder=""  class="form-control" value="<?php echo $row['user_name'] ?>" />
							<span class="text-danger"></span>
						</div>
						<?php
                  		$query = "SELECT * FROM `edit_order` WHERE 1";
                  		$result = mysqli_query($conn, $query);

                  		while ($row = mysqli_fetch_array($result)) { ?>
						<h2><?php echo $row['face_soil']; ?> ฿</h2>
						<input type="hidden" name="face_soil" placeholder=""  class="form-control" value="<?php echo $row['face_soil'] ?>" />
               
                		<?php }?>
						<div class="form-group" style="font-family: 'Kanit', sans-serif; font-size: 16px;">
							<label for="name"></label>
							<select class="form-control" name="type" required class="form-control">
								<option face="Kanit" value="หน้าดิน" >หน้าดิน</option>
							</select>
							<span class="text-danger"></span>
						</div>
						<br>
						<h5><a><font face="Kanit" font size="4">กรุณากรอกวัน - เวลาที่สั่ง</font></a></h5>
						<p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" required="" placeholder="Date and time"  name="date_o" value="2020-02-21 :"></p>
						<h5><font face="Kanit" font size="4">กรุณากรอกวัน - เวลาที่ส่ง</font></h5>
						<p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" required="" placeholder="Date and time" name="date_s" value="2020-02-21 :"></p>
						<h5><font face="Kanit" font size="4">กรุณากรอกสถานที่ส่ง</font></h5>
						<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="สถานที่ส่ง" required="" name="place"></p>
						
						<div class="product_count">
							<label for="qty">จำนวน:</label>
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
							 class="increase items-count" type="button"><i class="ti-angle-left"></i></button>
							<input type="number" name="number_n" id="sst" size="2" maxlength="12" value="1" title="Quantity:" class="input-text qty">
						</div>
						<button type="submit" name="update" class="btn btn-info" onclick="return confirm('คุณต้องการสั่งสินค้าหรือไม่ ?')";>ยืนยันคำสั่งซื้อ</button>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->
  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>