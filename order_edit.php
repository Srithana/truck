<?php 
    session_start();

    include_once 'dbconnect.php';
    if ($_SESSION['user_name']=="888999"){
    } else {
            header("Location: index.php");
        }

    $query = "SELECT * FROM `order` WHERE 1";
    $result = mysqli_query($conn, $query);

    $id=isset($_GET['id']) ? $_GET['id']:'';
    if($id!=''){
        $query = "SELECT * FROM `order` WHERE no='".$id."'";
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
                    <li><a href="order_a.php">ข้อมูลการสั่งซื้อสินค้า</a></li>
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
			<form method="post" id="form" enctype="multipart/form-data" action="action_edit.php?id=<?php echo $row["no"];?>"></a>
			<?php if($id!=''){?>
				<div class="form-group">
						<label for="name">ลำดับ</label>
						<input type="hidden" name="no" placeholder="" minlength="" required class="form-control" value="<?php echo $row['no'];?>" /> 
						<span class="text-danger"></span> 
				</div>
				<?php } ?>
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
						<label for="name">ประเภท</label>
						<input type="text" name="type" placeholder="" minlength="" required class="form-control" value="<?php echo $row['type'];?>" /> 
						<span class="text-danger"></span> 
					</div>
					
					<div class="form-group">
						<label for="name">จำนวน</label>
						<input type="number" name="number_n" placeholder="" minlength="" required class="form-control" value="<?php echo $row['number_n'];?>" /> 
						<span class="text-danger"></span> 
					</div>
					<div class="form-group">
						<label for="name">วันที่สั่ง</label>
						<input type="text" name="date_o" placeholder=""  class="form-control" value="<?php echo $row['date_o'];?>" />
						<span class="text-danger"></span>
					</div>
					<font color="#EE0000" size="2"><div align="right">* วัน/เดือน/ปี *</div></font>
                    <div class="form-group">
						<label for="name">วันที่ส่ง</label>
						<input type="text" name="date_s" placeholder=""  class="form-control" value="<?php echo $row['date_s'];?>" />
						<span class="text-danger"></span>
					</div>
					<font color="#EE0000" size="2"><div align="right">* วัน/เดือน/ปี *</div></font>
					<div class="form-group">
						<label for="name">สถานที่ส่ง</label>
						<input type="text" name="place" placeholder=""  class="form-control" value="<?php echo $row['place'];?>" />
						<span class="text-danger"></span>
					</div>
					<font color="#EE0000" size="2"><div align="right">* บอกอย่างละเอียดหรือบอกตำแหน่งที่สำคัญเช่น ติดเซนทรัล*</div></font>

						<button type="submit" name="update" class="btn btn-success" >แก้ไข</button>
					
				</fieldset>
			</form>
			
		</div>
	</div>
</div>
</body>
</html>