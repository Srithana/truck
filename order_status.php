<?php 
    session_start();

    include_once 'dbconnect.php';
    if ($_SESSION['user_name']=="888999"){
    } else {
            header("Location: index.php");
        }

    $query = "SELECT * FROM `order_customer_success` WHERE 1";
    $result = mysqli_query($conn, $query);

    $id=isset($_GET['id']) ? $_GET['id']:'';
    if($id!=''){
        $query = "SELECT * FROM `order_customer_success` WHERE no='".$id."'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
    } else {
        header("Location: index.php");
    }

 ?>

<!DOCTYPE html>
 <html>
 <head>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" >
     <title>Order</title>
	 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </head>
 <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
 <body>
 <nav class="navbar navbar-default" role="navigation">
     <div class="container-fluid">
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
                    <li><a href="history.php">ตรวจสอบสถานะ</a></li>
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
		<div class="col-md-4 col-md-offset-4 well" style="font-family: 'Kanit', sans-serif; font-size: 16px;">
			<form method="post" id="form" enctype="multipart/form-data" action="action_order_success.php?id=<?php echo $row["no"];?>"></a>
				<fieldset>
					<legend>ดิน</legend>

		<!-- แก้ไขข้อมูล -->
                    <div class="form-group">
						<label for="name">Name</label>
						<label >: <?php echo $row['name'] ?></label>
						<input type="hidden" name="name" placeholder=""  class="form-control" value="<?php echo $row['name'] ?>" />
						<span class="text-danger"></span>
					</div>

                    <div class="form-group">
						<label for="name">User_Name</label>
						<label >: <?php echo $row['user_name'] ?></label>
						<input type="hidden" name="user_name" placeholder=""  class="form-control" value="<?php echo $row['user_name'] ?>" />
						<span class="text-danger"></span>
					</div>
						
                    <div class="form-group">
						<label for="name">ประเภท</label>
                        <label >: <?php echo $row['type'] ?></label>
						<input type="hidden" name="type" placeholder="" minlength="" required class="form-control" value="<?php echo $row['type'];?>" /> 
						<span class="text-danger"></span> 
					</div>
					
					<div class="form-group">
						<label for="name">จำนวน</label>
                        <label >: <?php echo $row['number_n'] ?></label>
						<input type="hidden" name="number_n" placeholder="" minlength="" required class="form-control" value="<?php echo $row['number_n'];?>" /> 
						<span class="text-danger"></span> 
					</div>
					<div class="form-group">
						<label for="name">วันที่สั่ง</label>
                        <label >: <?php echo $row['date_o'] ?></label>
						<input type="hidden" name="date_o" placeholder=""  class="form-control" value="<?php echo $row['date_o'];?>" />
						<span class="text-danger"></span>
					</div>
			
                    <div class="form-group">
						<label for="name">วันที่ส่ง</label>
                        <label >: <?php echo $row['date_s'] ?></label>
						<input type="hidden" name="date_s" placeholder=""  class="form-control" value="<?php echo $row['date_s'];?>" />
						<span class="text-danger"></span>
					</div>
					
					<div class="form-group">
						<label for="name">สถานที่ส่ง</label>
                        <label >: <?php echo $row['place'] ?></label>
						<input type="hidden" name="place" placeholder=""  class="form-control" value="<?php echo $row['place'];?>" />
						<span class="text-danger"></span>
					</div>
					
                    <div class="form-group">
						<label for="name">ราคา</label>
                        <label >: <?php echo $row['price'] ?></label>
						<input type="hidden" name="price" placeholder=""  class="form-control" value="<?php echo $row['price'];?>" />
						<span class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="name">บวกค่าส่ง</label>
                        <label >: <?php echo $row['send'] ?></label>
						<input type="hidden" name="send" placeholder=""  class="form-control" value="<?php echo $row['send'];?>" />
						<span class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="name">ยอดรวม</label>
                        <label >: <?php echo $row['total'] ?></label>
						<input type="hidden" name="total" placeholder=""  class="form-control" value="<?php echo $row['total'];?>" />
						<span class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="name">จำนวนเงินที่จ่าย/มัดจำ</label>
						<input type="number" name="dep" placeholder="มัดจำ"  class="form-control" value="" />
						<span class="text-danger"></span>
					</div>
                    <div class="form-group">
						<label for="name">สถานะ</label><br>
						<select class="form-control" name="status" required class="form-control">
							  <option value="" disabled selected>กรุณาเลือก</option>
							  <option value="จ่ายเงินสำเร็จ" >จ่ายเงินสำเร็จ</option>
							  <option value="จ่ายเงินมัดจำ" >จ่ายเงินมัดจำ</option>
  							  <option value="ส่งสำเร็จ/จ่ายเงินมัดจำ" >ส่งสำเร็จ/จ่ายเงินมัดจำ</option>
                              <option value="ส่งสำเร็จ/จ่ายเงินสำเร็จ" >ส่งสำเร็จ/จ่ายเงินสำเร็จ</option>
						</select>
						<span class="text-danger"></span>
					</div>

					
						<button type="submit" name="update" class="btn btn-success" >ยืนยัน</button>
					
				</fieldset>
			</form>
			
		</div>
	</div>
</div>
</body>
</html>