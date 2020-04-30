 <?php 
    session_start();

    include_once 'dbconnect.php';
    if ($_SESSION['user_name']=="888999"){
    } else {
            header("Location: index.php");
        }
 ?>
 
 <!DOCTYPE html>
 <html>
 <head>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" >
     <title>ข้อมูลสินค้า</title>
     <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </head>
 <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
 <body>
 <nav class="navbar navbar-default" role="navigation">
     <div class="container-fluid"  style="font-family: 'Kanit', sans-serif;">
     	<!-- แถมเมนู -->
     	<div class="navbar-header">
     		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
         		<span class="sr-only">Toggle navigation</span>
         		<span class="icon-bar"></span>
         		<span class="icon-bar"></span>
         		<span class="icon-bar"></span>
            </button>
            <a class="navbar-text">บัญชีผู้ใช้ <?php echo $_SESSION['name']; ?></a>
     	</div>
    
     	<div class="collapse navbar-collapse" id="navbar1" style="font-family: 'Kanit', sans-serif;">
     		<ul class="nav navbar-nav navbar-right">
                
                <?php if (isset($_SESSION['name'])) { ?>
                    <li><a href="mm_user.php">ผู้ใช้ทั้งหมด</a></li>
                    <li><a href="order_a.php">ข้อมูลการสั่งซื้อสินค้า</a></li>
                    <li><a href="history.php">ตรวจสอบสถานะ</a></li>
                    <li><a href="history_success.php">ประวัติทำรายการ</a></li>
                    <li><a href="price_order.php">แก้ไขราคาสินค้า</a></li>
                    <li><a href="contact_admin.php">ติดต่อเรา</a></li>
				    <li><a href="logout.php">ล็อคเอาท์</a></li>
                <?php } else { ?>
     			    
     			    <li><a href="register.php">Sign Up</a></li>
     			    <li class="active"><a href="admin_login.php">Admin</a></li>
                <?php } ?>
     		</ul>
     	</div>
     </div>
 </nav>

 <div class="container">
     <div class="row">
         <div class="col-xs-8 col-xs-offset-2"style="font-family: 'Kanit', sans-serif;" >
             <br><br>
            <legend>ข้อมูลการสั่งสินค้า</legend>
             </div>
            <div class="table-responsive"style="font-family: 'Kanit', sans-serif; font-size: 16px;">
             <table class="table table-hover">
                 <thead>
                     <tr>
                         <th>ชื่อ</th>
                         <th>รหัสลูกค้า</th>
                         <th>ประเภท</th>
                         <th>จำนวน</th>
                         <th>วันที่สั่ง</th>
                         <th>วันที่ส่ง</th>
                         <th>สถานที่ส่ง</th>
                         <th>ราคา</th>
                         <th colspan="1" style="text-align:center">ลบ</th>
                         <th colspan="1" style="text-align:center">แก้ไข</th>
                         <th colspan="1" style="text-align:center">บวกค่าส่ง</th>
                         <th colspan="1" style="text-align:center">เสร็จสิ้น</th>
                     </tr>
                 </thead>
                 <tbody>

                 <?php  $query = "SELECT * FROM `order` WHERE 1";
                        $result = mysqli_query($conn, $query);
    
                 
                         while ($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['user_name']; ?></td>
                                <td><?php echo $row['type']; ?></td>
                                <td><?php echo $row['number_n']; ?></td>
                                <td><?php echo $row['date_o']; ?></td>
                                <td><?php echo $row['date_s']; ?></td>
                                <td><?php echo $row['place']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td  align="center">
                                     <a class="btn btn-danger" href="delete_order.php?id=<?php echo $row["no"];?>" onclick="return confirm('คุณต้องการลบหรือไม่ ?')";>ลบ</a>
                                </td>
                                <td  align="center">
                                <a class="btn btn-warning" href="order_edit.php?id=<?php echo $row["no"];?>">แก้ไข</a>
                                </td>
                                <td  align="center">
                                <a class="btn btn-info" href="order_send.php?id=<?php echo $row["no"];?>">บวกค่าส่ง</a>
                                </td>
                                <td  align="center">
                                     <a class="btn btn-success" href="delete_order.php?id=<?php echo $row["no"];?>" onclick="return confirm('คุณแน่ใจ ?')";>เสร็จสิ้น</a>
                                </td>
                                </tr>
                 <?php }?>


                    
                 </tbody>
             </table>
            </div>
           
            
         </div>
     </div>
     
 </div>
 
 </body>
 </html>
