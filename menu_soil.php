<!DOCTYPE html>
<!--
	Resto by GetTemplates.co
	URL: https://gettemplates.co
-->
<html >
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

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

    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

</style>
  
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ดิน</title>
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
                        <h3><span>Soil</span><br><font face="Kanit" font size="5">หน้าดิน</font></h3>
                        <p class="pt-3">ดินที่อยู่ชั้นบนสุด มีความลึกจากผิวหน้าดินไม่เกิน 30-50 ซ.ม. มีอินทรีย์สาร ที่พืชต้องการสูง เหมาะแก่การเพาะปลูก เนื้อดินค่อนข้างละเอียดนุ่มมือในสภาพดินแห้ง จะจับกันเป็นก้อนแข็งพอประมาณ เป็นดินที่มีการระบายน้ำได้ดีปานกลาง มีลักษณะสีดำคล้ำ 
                            <br>
                            <br>
                            <font color="#CC0000"><font size="4">**คุณสมบัติเหมาะสำหรับเพาะปลูก**</font></font>
                        </p>
                        <?php

                        include_once 'dbconnect.php';

                        $query = "SELECT * FROM `edit_order` WHERE 1";
                        $result = mysqli_query($conn, $query);
                        
                        while ($row = mysqli_fetch_array($result)) { ?>
                            <font face="Kanit" font size="5"><?php echo $row['face_soil']; ?> บาท / 1 รถบรรทุก </font> <p class="pt-3">(ในระยะทาง 5 ก.ม. อาจบวกเพิ่ม คิดตามความเหมาะสม)</p>
                        <?php }?>

                        <a href="user.php" class="btn-primary mt-3">สั่งเดี๋ยวนี้ !!</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="images/face_soil.jpg" alt="" class="img-fluid shadow w-100">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="images/dan_soil.jpg" alt="" class="img-fluid shadow w-100">
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                    <h2 class="special-number">02.</h2>
                    <div class="dishes-text">
                        <h3><span>Compact Soil</span><br><font face="Kanit" font size="5">ดินดาน</font></h3>
                        <p class="pt-3">ดินที่มีความลึกของผิวดิน ดินมีความละเอียดสูง เนื่องจากการอัดแน่นสูงมาก ดินประเภทนี้ไม่มีสารอินทรีย์ ใดๆ ที่เป็นประโยชน์กับต้นไม้ ลักษณะสี ออกเหลือง สีซีด เนื่องจากอินทรีย์สารน้อย มีส่วนประกอบของ แร่และหิน เป็นส่วนใหญ่ เมื่อใช้ในการถม จะมีความแน่นสูง ใช้ถมทำถนน, รองพื้นโรงงาน หรือ ใต้สิ่งปลูกสร้าง โรงงาน อาคาร
                            <br>
                            <br>
                            <font color="#CC0000"><font size="4">**คุณสมบัติเหมาะถมปรับพื้นที่**</font></font>
                        </p>
                        <?php

                        include_once 'dbconnect.php';

                        $query = "SELECT * FROM `edit_order` WHERE 1";
                        $result = mysqli_query($conn, $query);
                        
                        while ($row = mysqli_fetch_array($result)) { ?>
                        <font face="Kanit" font size="5"><?php echo $row['dan_soil']; ?> บาท / 1 รถบรรทุก</font> <p class="pt-3">(ในระยะทาง 5 ก.ม. อาจบวกเพิ่ม คิดตามความเหมาะสม)</p>
                        <?php }?>
                        <a href="user.php" class="btn-primary mt-3">สั่งเดี๋ยวนี้ !! <span><i class="fa fa-long-arrow-right"></i></span></a>

                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center py-5">
                    <h2 class="special-number">03.</h2>
                    <div class="dishes-text">
                        <h3><span>Red Soil</span><br><font face="Kanit" font size="5">ดินลูกรังขี้หนู</font></h3>
                        <p class="pt-3">เป็นดินที่สามารถบดอัดได้ดี มีคุณสมบัติหลังการบดอัดดินจะแน่น เหมาะสำหรับทำถนน ไม่เหมาะสำหรับปลูกต้นไม้ ถ้าหากมีที่ดินมาก อาจจะแบ่งตามประโยชน์ใช้สอยของดิน คือใช้ดินลูกรังถมบริเวณลานจอดรถ และใช้หน้าดินหรือดินเหนียวมาถมบริเวณที่จะปลูกต้นไม้
                            <br>
                            <br>
                            <font color="#CC0000"><font size="4">**คุณสมบัติเหมาะผสมปูนลงเสาบ้าน คานก่อสร้างจะทำให้เนื้อปูนแน่นกว่าดินลูกรังปกติ**</font></font>
                        </p>
                        <?php

                        include_once 'dbconnect.php';

                        $query = "SELECT * FROM `edit_order` WHERE 1";
                        $result = mysqli_query($conn, $query);
                        
                        while ($row = mysqli_fetch_array($result)) { ?>
                        <font face="Kanit" font size="5"><?php echo $row['kienu_soil']; ?> บาท / 1 รถบรรทุก</font> <p class="pt-3">(ในระยะทาง 5 ก.ม. อาจบวกเพิ่ม คิดตามความเหมาะสม)</p>
                        <?php }?>
                        <a href="user.php" class="btn-primary mt-3">สั่งเดี๋ยวนี้ !!</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="images/red_soil.jpg" alt="" class="img-fluid shadow w-100">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="images/red1_soil.jpg" alt="" class="img-fluid shadow w-100">
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                    <h2 class="special-number">04.</h2>
                    <div class="dishes-text">
                        <h3><span>Red Soil</span><br><font face="Kanit" font size="5">ดินลูกรัง</font></h3>
                        <p class="pt-3">ดินที่พบชั้นลูกรัง ชั้นกรวด ชั้นเศษหิน หรือ พบเศษหินกรวด หินมนเล็ก มากกว่า 35 % ของเนื้อดินโดยปริมาณ เนื้อดินเป็นดินร่วนปนทราย, บางพื้นที่เป็นดินเหนียวปน หินกรวด หินมนเล็ก, บางพื้นที่เป็นดินที่เกิดจากการสลายตัวของหิน แล้วกลายสภาพมาเป็นลูกรัง เป็นดินที่มีความหนาแน่นสูง แต่ สักยภาพในการเกษตรต่ำมาก ลักษณะสี แดง เหลือง ตามแต่พื้นที่
                            <br>
                            <br>
                            <font color="#CC0000"><font size="4">**คุณสมบัติเหมาะถมปรับพื้นที่**</font></font>
                        </p>
                        <?php

                        include_once 'dbconnect.php';

                        $query = "SELECT * FROM `edit_order` WHERE 1";
                        $result = mysqli_query($conn, $query);
                        
                        while ($row = mysqli_fetch_array($result)) { ?>
                        <font face="Kanit" font size="5"><?php echo $row['red_soil']; ?> บาท / 1 รถบรรทุก</font> <p class="pt-3">(ในระยะทาง 5 ก.ม. อาจบวกเพิ่ม คิดตามความเหมาะสม)</p>
                        <?php }?>
                        <a href="user.php" class="btn-primary mt-3">สั่งเดี๋ยวนี้ !!</a>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center py-5">
                    <h2 class="special-number">05.</h2>
                    <div class="dishes-text">
                        <h3><span>Klongtor Soil</span> </span><br><font face="Kanit" font size="5">ดินคลองต่อ</font></h3>
                        <p class="pt-3">ดินลูกรังคลองต่อ จะใช้ในการถมในคานสิ่งปลูกสร้า่ง หรือจะเป็นปูหน้าบ้าน ดินจะมีลักษณะเป็นเม็ดกรวดเล็กๆ คุณสมบัติจะไม่เละ หรือเป็นโคลนเมื่อเปียก -หน้าดินหรือดินร่วน จะใช้สำหรับปลูกต้นไม้ พืช ผัก หรือจะเป็นการจัดสวน คุณสมบัติจะร่วนและมีปุ่ยอยู่ในตัว งานทรายและหิน
                            <br>
                            <br>
                            <font color="#CC0000"><font size="4">**คุณสมบัติเหมาะสำหรับถมที่หน้าบ้าน ถมทับดินลูกรัง**</font></font>
                        </p>
                        <?php

                        include_once 'dbconnect.php';

                        $query = "SELECT * FROM `edit_order` WHERE 1";
                        $result = mysqli_query($conn, $query);
                        
                        while ($row = mysqli_fetch_array($result)) { ?>
                        <font face="Kanit" font size="5"><?php echo $row['klongtor_soil']; ?> บาท / 1 รถบรรทุก</font> <p class="pt-3">(ในระยะทาง 5 ก.ม. อาจบวกเพิ่ม คิดตามความเหมาะสม)</p>
                        <?php }?>
                        <a href="user.php" class="btn-primary mt-3">สั่งเดี๋ยวนี้ !!</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="images/klongtor_soil.jpg" alt="" class="img-fluid shadow w-100">
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
