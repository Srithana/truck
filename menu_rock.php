<!DOCTYPE html>
<!--
	Resto by GetTemplates.co
	URL: https://gettemplates.co
-->
<html lang="en">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

    p {font-family: 'Kanit', sans-serif;
       font-size: 18px;
      }
    a {font-family: 'Kanit', sans-serif;
   font-size: 14px;
    }
    
</style>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>หิน</title>
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

</head>
<body data-spy="scroll" data-target="#navbar">
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
<section id="gtco-special-dishes" class="bg-grey section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Specialties
                </span>
                <h2>
                    Special Dishes
                </h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center py-5">
                    <h2 class="special-number">01.</h2>
                    <div class="dishes-text">
                        <h3><span>Crushed stone</span><br><font face="Kanit" font size="5">หินคลุก</font></h3>
                        <p class="pt-3">เป็นหินปูนที่มีขนาดต่างกันมาปะปนอยู่รวมกัน มีหลายเกรดแล้วแต่ความเหมาะสมในการใช้งาน ไม่เหมาะสำหรับนำไปใช้เป็นหินก่อสร้างหรือบดเป็นปูนซีเมนต์ เพราะจะไม่ได้ขนาดหรือแร่ธาตุตามต้องการ ส่วนใหญ่จึงนิยมนำใช้ถมถนนร่วมกับหินลูกรัง หรือนำไปทำเป็นอิฐบล็อค
                            <br>
                            <br>
                            <font color="#CC0000"><font size="4">**คุณสมบัติเหมาะสำหรับทำถนน รองพื้น**</font></font>
                        </p>
                        <?php

                        include_once 'dbconnect.php';

                        $query = "SELECT * FROM `edit_order` WHERE 1";
                        $result = mysqli_query($conn, $query);
                        
                        while ($row = mysqli_fetch_array($result)) { ?>
                        <font face="Kanit" font size="5"><?php echo $row['kook_rock']; ?> บาท / 1 รถบรรทุก</font> <p class="pt-3">(ในระยะทาง 5 ก.ม. อาจบวกเพิ่ม คิดตามความเหมาะสม)</p>
                        <?php }?>
                        <a href="user.php" class="btn-primary mt-3">สั่งเดี๋ยวนี้ !!</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="images/kook_rock.jpg" alt="" class="img-fluid shadow w-100">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="images/ked_rock.jpg" alt="" class="img-fluid shadow w-100">
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                    <h2 class="special-number">02.</h2>
                    <div class="dishes-text">
                        <h3><span>Building Stones</span><br><font face="Kanit" font size="5">หิน1,หิน2(3/4)</font></h3>
                        <p class="pt-3">ใช้ผสมคอนกรีต (ปูน ) งานหล่อคอนกรีต เทพื้นคอนกรีต งานผิวทางลาดยาง งานตกแต่งสวน และงานก่อสร้างทั่วไป
                            <br>
                            <br>
                            <font color="#CC0000"><font size="4">**คุณสมบัติเหมาะสำหรับผสมยางมะตอย ทำถนน**</font></font>
                        </p>
                        <?php

                        include_once 'dbconnect.php';

                        $query = "SELECT * FROM `edit_order` WHERE 1";
                        $result = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_array($result)) { ?>
                        <font face="Kanit" font size="5"><?php echo $row['34_rock']; ?> บาท / 1 รถบรรทุก</font> <p class="pt-3">(ในระยะทาง 5 ก.ม. อาจบวกเพิ่ม คิดตามความเหมาะสม)</p>
                        <?php }?>
                        <a href="user.php" class="btn-primary mt-3">สั่งเดี๋ยวนี้ !!<span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center py-5">
                    <h2 class="special-number">03.</h2>
                    <div class="dishes-text">
                        <h3><span>Flake stone</span><br><font face="Kanit" font size="5">หิน3/8</font></h3>
                        <p class="pt-3">หินเกล็ด งานตกแต่งสวน ทางเท้า ลานเอนกประสงค์ ผสมปูน ปูพื้น สวนหย่อม โรยหน้าบ้าน โรยก้นหลุม หล่อคอนกรีต งานหล่อท่อระบายน้ำ ถังส้วม งานผิวทางราดยาง เป็นส่วนผสมแอสฟัลต์คอนกรีต งานก่อสร้างอื่นๆ
                            <br>
                            <br>
                            <font color="#CC0000"><font size="4">**คุณสมบัติเหมาะสำหรับผสมปูนก่อเสา คาน**</font></font>
                        </p>
                        <?php

                        include_once 'dbconnect.php';

                        $query = "SELECT * FROM `edit_order` WHERE 1";
                        $result = mysqli_query($conn, $query);
                        
                        while ($row = mysqli_fetch_array($result)) { ?>
                        <font face="Kanit" font size="5"><?php echo $row['38_rock']; ?> บาท / 1 รถบรรทุก</font> <p class="pt-3">(ในระยะทาง 5 ก.ม. อาจบวกเพิ่ม คิดตามความเหมาะสม)</p>
                        <?php }?>
                        <a href="user.php" class="btn-primary mt-3">สั่งเดี๋ยวนี้ !!</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="images/te_rock.jpg" alt="" class="img-fluid shadow w-100">
                </div> 
            </div>
        </div>
    </div>
</section>

	
</div>
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
