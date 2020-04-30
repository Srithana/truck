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
  <title>ดิน</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style1.css">
</head>
<body>
  
  <!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <div class="w3-top">
      <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
        
        <!-- Right-sided navbar links. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
        <?php if (isset($_SESSION['name'])) { ?>
          <a href="home.html" class="w3-bar-item w3-button"><font face="Kanit">หน้าแรก</font></a>
          <a href="user.php" class="w3-bar-item w3-button"><font face="Kanit" >หน้าสั่งสินค้า</font></a>
          <a href="logout.php" class="w3-bar-item w3-button"><font face="Kanit">ล็อคเอาท์</font></a>
          <?php } else { ?>
          <li><a href="login.php">Login</a></li>
     			  <li><a href="register.php">Sign Up</a></li>
     			  <li class="active"><a href="admin_login.php">Admin</a></li>
          <?php } ?>
          
        </div>
      </div>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->

  <main class="site-main">
 
    <!-- ================ trending product section start ================= -->  
    <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
        <form role="form" action="action_soil.php?user_name=<?php echo $_SESSION['user_name']; ?>" method="post" name="updateform">
          <p>PRODUCT</p>
          <h2><span class="section-intro__style"><font face="Kanit" font size="5">ดิน</font></span></h2>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="images/product/face_soil.jpg" alt="">
                <ul class="card-product__imgOverlay">
                  
                </ul>
              </div>
              <div class="card-body">
                
                <h4 class="card-product__title"><a onclick="soil_face(<?php echo $row['user_name']; ?>)"> หน้าดิน</a></h4>
                <?php
                  $query = "SELECT * FROM `edit_order` WHERE 1";
                  $result = mysqli_query($conn, $query);

                  while ($row1 = mysqli_fetch_array($result)) { ?>
                     <p class="card-product__price" ><?php echo $row1['face_soil']; ?> ฿</p>
               
                <?php }?>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="images/product/dan_soil.jpg" alt="">
                <ul class="card-product__imgOverlay">
                  
                </ul>
              </div>
              <div class="card-body">
                
                <h4 class="card-product__title"><a onclick="soil_dan(<?php echo $row['user_name']; ?>)">ดินดาน</a></h4>
                <?php
                  $query = "SELECT * FROM `edit_order` WHERE 1";
                  $result = mysqli_query($conn, $query);

                  while ($row2 = mysqli_fetch_array($result)) { ?>
                     <p class="card-product__price" ><?php echo $row2['dan_soil']; ?> ฿</p>
               
                <?php }?>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="images/product/red_soil.jpg" alt="">
                <ul class="card-product__imgOverlay">
                  
                </ul>
              </div>
              <div class="card-body">
                
                <h4 class="card-product__title"><a onclick="soil_nu(<?php echo $row['user_name']; ?>)">  ดินลูกรังขี้หนู</a></h4>
                <?php
                  $query = "SELECT * FROM `edit_order` WHERE 1";
                  $result = mysqli_query($conn, $query);

                  while ($row3 = mysqli_fetch_array($result)) { ?>
                     <p class="card-product__price" ><?php echo $row3['kienu_soil']; ?> ฿</p>
                <?php }?>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="images/product/red1_soil.jpg" alt="">
                <ul class="card-product__imgOverlay">
                  
                </ul>
              </div>
              <div class="card-body">
                
                <h4 class="card-product__title"><a onclick="soil_red(<?php echo $row['user_name']; ?>)">ดินลูกรัง</a></h4>
                <?php
                  $query = "SELECT * FROM `edit_order` WHERE 1";
                  $result = mysqli_query($conn, $query);

                  while ($row4 = mysqli_fetch_array($result)) { ?>
                     <p class="card-product__price" ><?php echo $row4['red_soil']; ?> ฿</p>
               
                <?php }?>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="images/product/klongtor_soil.jpg" alt="">
                <ul class="card-product__imgOverlay">
                  
                </ul>
              </div>
              <div class="card-body">
                
                <h4 class="card-product__title"><a onclick="soil_kong(<?php echo $row['user_name']; ?>)">ดินลูกรังคลองต่อ</a></h4>
                <?php
                  $query = "SELECT * FROM `edit_order` WHERE 1";
                  $result = mysqli_query($conn, $query);

                  while ($row5 = mysqli_fetch_array($result)) { ?>
                     <p class="card-product__price" ><?php echo $row5['klongtor_soil']; ?> ฿</p>
                <?php }?>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- ================ trending product section end ================= -->  

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>

  <script>
    function soil_face(user_name) {
            window.location.href = "order_face_soil.php?user_name=" + user_name;
    }
    function soil_dan(user_name) {
            window.location.href = "order_dan_soil.php?user_name=" + user_name;
    }
    function soil_nu(user_name) {
            window.location.href = "order_kienu_soil.php?user_name=" + user_name;
    }
    function soil_red(user_name) {
            window.location.href = "order_red_soil.php?user_name=" + user_name;
    }
    function soil_kong(user_name) {
            window.location.href = "order_klongtor_soil.php?user_name=" + user_name;
    }

 </script>
</body>
</html>