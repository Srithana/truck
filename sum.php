<?php

            if(isset($_POST['sum'])){

                $wide = $_POST['wide'];
                $long = $_POST['long'];
                $deep = $_POST['deep'];
                $total = $wide * $long;
                $deep1 = $deep/100;
                $total1 = $total * $deep1;
                $total2 = $total1 / 6;

                echo $total2;

            }

            ?>
            

<!DOCTYPE html>
<!--
	Resto by GetTemplates.co
	URL: https://gettemplates.co
-->
<html lang="en">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

    p {font-family: 'Kanit', sans-serif;
       font-size: 30px;
      }
    a {font-family: 'Kanit', sans-serif;
       font-size: 14px;
      }
</style>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ติดต่อเรา</title>
    <meta name="description" content="Resto">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#navbar" style = "background-color:#FFF8DC">
	<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
	
	<div class="sidenav-content">
		<p>
			Kuncen WB1, Wirobrajan 10010, DIY
		</p>
		<p>
			<span class="fs-16 primary-color">(+68) 120034509</span>
		</p>
		<p>info@yourdomain.com</p>
	</div>
</div>	<div id="side-search" class="sidenav">
	<a href="javascript:void(0)" id="side-search-close">&times;</a>
	<div class="sidenav-content">
		<form action="">

			<div class="input-group md-form form-sm form-2 pl-0">
			  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
			  <div class="input-group-append">
			    <button class="input-group-text red lighten-3" id="basic-text1">
			    	<i class="fas fa-search text-grey" aria-hidden="true"></i>
			    </button>
			  </div>
			</div>

		</form>
    </div>
    
    <div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">WHERE I WORK</h3>
  <p class="w3-center"><em>I'd love your feedback!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="/w3images/map.jpg" class="w3-image w3-round" style="width:100%">
    </div>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>
	
 	
</div>	<div class="w3-top">
    <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
      <!-- Right-sided navbar links. Hide them on small screens -->
      <div class="w3-right w3-hide-small">
      <a href="home.html" class="w3-bar-item w3-button">หน้าแรก</a>
      <a href="step.html" class="w3-bar-item w3-button">ขั้นตอนการสั่ง</a>
      <a href="sum.php" class="w3-bar-item w3-button">โปรแกรมคำนวณ</a>
      <a href="contact.php" class="w3-bar-item w3-button">ติดต่อเรา</a>
      <a href="index.php" class="w3-bar-item w3-button">เข้าสู่ระบบ</a>
      </div>
    </div>
  </div>			<!-- Special Dishes Section -->
</div>
<br>
<br>
<br>

<div class="w3-content w3-container w3-padding-64" id="contact"><br>
    <p class="w3-center" >โปรแกรมคำนวณ</p><br><br>
  
    <div id="login">
        <div class="container" style="font-family: 'Kanit', sans-serif;">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6" >
                    <div id="login-box" class="col-md-12" >
                        <form id="login-form" class="form" action="" method="post">
                            <div class="form-group">
                                <label class="text"><h5 style="font-family: 'Kanit', sans-serif;">กรุณาใส่ความกว้าง (เมตร) :</h5></label><br>
                                <input type="number" name="wide" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text"><h5 style="font-family: 'Kanit', sans-serif;">กรุณาใส่ความยาว (เมตร) :</h5></label><br>
                                <input type="number" name="long" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text"><h5 style="font-family: 'Kanit', sans-serif;">กรุณาใส่ความลึก (เซนติเมตร) :</h5></label><br>
                                <input type="number" name="deep" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text"><h5 style="font-family: 'Kanit', sans-serif;">จำนวนรถบรรทุกที่ใช้ :</h5></label><br>
                                <input type="number" name="sum"   value="<?php echo $total2; ?>" class="form-control">
                            </div><br>
                            <div id="register-link" class="text-right">
                            <input type="submit" name="sum" value="คำนวณ" class="btn btn-info"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
<!-- End Page Content -->
</div>
</section>
<!-- External JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="vendor/bootstrap/popper.min.js"></script>
<script src="vendor/bootstrap/bootstrap.min.js"></script>
<script src="vendor/select2/select2.min.js "></script>
<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Main JS -->
<script src="js/app.min.js "></script>
</body>
</html>