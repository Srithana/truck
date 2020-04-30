<?php 
    session_start();
    
    include_once 'dbconnect.php';
    if (isset($_SESSION['user_name'])){
        $admin = $_SESSION['user_name'];
        if($admin =="888999"){
            header("Location: mm_user.php");
        }
    } else {
            header("Location: index.php");
        }

    $query = "SELECT * FROM `order_send` WHERE 1";
    $result = mysqli_query($conn, $query);
    

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>การสั่ง</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
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
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1" style="font-family: 'Kanit', sans-serif;">
     		<ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['name'])) { ?>
                    <li><p class="navbar-text">บัญชีผู้ใช้ <?php echo $_SESSION['name']; ?></p></li>
                    <li><a href="user.php">หน้าสั่งสินค้า</a></li>
                    <li><a href="order_price.php">ข้อมูลการสั่ง</a></li>
				    <li><a href="logout.php">ล็อคเอาท์</a></li>
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
         <div class="col-xs-8 col-xs-offset-2" style="font-family: 'Kanit', sans-serif;">
             <legend>การสั่ง</legend>
             </div>
            <div class="table-responsive">
             <table class="table table-hover" style="font-family: 'Kanit', sans-serif; font-size: 16px;">
                 <thead>
                     <tr>
                         <th>ลำดับ</th>
                         <th>ชื่อ</th>
                         <th>User_name</th>
                         <th>ประเภท</th>
                         <th>จำนวน</th>
                         <th>วันที่สั่ง</th>
                         <th>วันที่ส่ง</th>
                         <th>สถานที่</th>
                         <th>* ราคา *</th>
                         <th>บวกค่าส่ง</th>
                         <th>ยืนยันการสั่งสินค้า</th>
                     </tr>
                 </thead>
                 <tbody>

                 <?php while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $row['no']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['user_name']; ?></td>
                            <td><?php echo $row['type']; ?></td>
                            <td><?php echo $row['number_n']; ?></td>
                            <td><?php echo $row['date_o']; ?></td>
                            <td><?php echo $row['date_s']; ?></td>
                            <td><?php echo $row['place']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['send']; ?></td>
                            <td align="center">
                                <a class="btn btn-success" href="order_c_send.php?id=<?php echo $row["no"];?>">สถานะ</a>
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