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
  <title>หิน</title>
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
          <a href="home.html" class="w3-bar-item w3-button"><font face="Kanit">หน้าแรก</font></a>
          <a href="user.php" class="w3-bar-item w3-button"><font face="Kanit" >หน้าสั่งสินค้า</font></a>
          <a href="logout.php" class="w3-bar-item w3-button"><font face="Kanit">ล็อคเอาท์</font></a>
        </div>
      </div>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->

  <main class="site-main">

    <!-- ================ trending product section start ================= -->  
    <section class="section-margin  calc-60px"  >
      <div class="container">
        <div class="section-intro pb-60px">
        <form role="form" action="action_soil.php?user_name=<?php echo $_SESSION['user_name']; ?>" method="post" name="updateform">
          <p>PRODUCT</p>
          <h2><span class="section-intro__style"><font face="Kanit" font size="5">หิน</font></span></h2>
        </div>
        <div class="row" align="center">
          <div class="col-md-6 col-lg-4 col-xl-3" >
            <div class="card text-center card-product" >
              <div class="card-product__img">
                <img class="card-img" src="images/product/kook_rock.jpg" alt="">
                <ul class="card-product__imgOverlay">
                  
                </ul>
              </div>
              <div class="card-body">
                
                <h4 class="card-product__title"><a onclick="rock_kook(<?php echo $row['user_name']; ?>)">หินคลุก</a></h4>
                <?php

                    $query = "SELECT * FROM `edit_order` WHERE 1";
                    $result = mysqli_query($conn, $query);
                        
                    while ($row1 = mysqli_fetch_array($result)) { ?>
                    <p class="card-product__price"><?php echo $row1['kook_rock']; ?> ฿</p>
                <?php }?>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="images/product/te_rock.jpg" alt=""  >
                <ul class="card-product__imgOverlay">
                 
                </ul>
              </div>
              <div class="card-body">
                
                <h4 class="card-product__title"><a onclick="rock_te(<?php echo $row['user_name']; ?>)">หิน1,หิน2(3/4)</a></h4>
                <?php
                
                    $query1 = "SELECT * FROM `edit_order` WHERE 1";
                    $result1 = mysqli_query($conn, $query1);
                        
                    while ($row2 = mysqli_fetch_array($result1)) { ?>
                    <p class="card-product__price"><?php echo $row2['34_rock']; ?> ฿</p>
                <?php }?>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="images/product/ked_rock.jpg" alt="" >
                <ul class="card-product__imgOverlay">
                  
                </ul>
              </div>
              <div class="card-body">
                
                <h4 class="card-product__title"><a onclick="rock_ked(<?php echo $row['user_name']; ?>)">หิน3/8</a></h4>
                <?php
                
                    $query1 = "SELECT * FROM `edit_order` WHERE 1";
                    $result1 = mysqli_query($conn, $query1);
                        
                    while ($row3 = mysqli_fetch_array($result1)) { ?>
                    <p class="card-product__price"><?php echo $row3['38_rock']; ?> ฿</p>
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
    function rock_kook(user_name) {
            window.location.href = "order_kook_rock.php?user_name=" + user_name;
    }
    function rock_te(user_name) {
            window.location.href = "order_te_rock.php?user_name=" + user_name;
    }
    function rock_ked(user_name) {
            window.location.href = "order_ked_rock.php?user_name=" + user_name;
    }

 </script>
</body>
</html>