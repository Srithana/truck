<?php 
    session_start();

    include_once 'dbconnect.php';
    if ($_SESSION['user_name']=="888999"){
    } else {
            header("Location: index.php");
        }

    $query = "SELECT * FROM `edit_order` WHERE 1";
    $result = mysqli_query($conn, $query);

    $id=isset($_GET['id']) ? $_GET['id']:'';
    if($id!=''){
        $query = "SELECT * FROM `edit_order` WHERE no='".$id."'";
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
					<li><a href="price_order.php">แก้ไขราคาสินค้า</a></li>
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
			<form method="post" id="form" enctype="multipart/form-data" action="action_editorder_red.php?id=<?php echo $row["no"];?>"></a>
			<?php if($id!=''){?>
				<div class="form-group">
						<label for="name">ลำดับ</label>
						<input type="hidden" name="no" placeholder="" minlength="" required class="form-control" value="<?php echo $row['no'];?>" /> 
						<span class="text-danger"></span> 
				</div>
				<?php } ?>
				<fieldset>
					<legend>ดิน</legend>

		<!-- แก้ไขราคา -->
                     <div class="form-group">	
						<label for="name">Name</label>
						<label >: <?php echo $row['name4'] ?></label>
						<input type="hidden" name="name4" placeholder=""  class="form-control" value="<?php echo $row['name4'] ?>" />
						<span class="text-danger"></span>
					</div>
						
                    <div class="form-group">
						<label for="name">ราคา</label>
						<input type="text" name="red_soil" placeholder="" minlength="" required class="form-control" value="<?php echo $row['red_soil'];?>" /> 
						<span class="text-danger"></span> 
					</div>

					<button type="submit" name="update" class="btn btn-success" >แก้ไข</button>
					
				</fieldset>
			</form>
			
		</div>
	</div>
</div>
</body>
</html>