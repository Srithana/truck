 <!-- ล็อคอิน -->
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
    $query = "SELECT * FROM members ORDER BY user_name DESC";
    $result = mysqli_query($conn, $query);

    if (isset($_SESSION['user_name'])){
        $id = $_SESSION['user_name'];
        $query = "SELECT * FROM members 
                WHERE user_name =" .$id;
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
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <title>หน้าสั่งสินค้า</title>
     <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
 </head>
 
 <body style = "background-color:#FFFFF0" >
 <nav class="navbar navbar-default" role="navigation">
     <div class="container-fluid">
      <!-- add header -->
      <div class="navbar-header" style="font-family: 'Kanit', sans-serif;>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-text">บัญชีผู้ใช้ <?php echo $_SESSION['name']; ?></a>
      </div>
      <!-- menu items -->
      <div class="collapse navbar-collapse" id="navbar1" style="font-family: 'Kanit', sans-serif;">
        <ul class="nav navbar-nav navbar-right">
            
                <?php if (isset($_SESSION['name'])) { ?>
                    <li><a href="home.html">หน้าแรก</a></li>
                    <li><a href="user.php">หน้าสั่งสินค้า</a></li>
                    <li><a href="order_price.php">ข้อมูลการสั่ง/ติดตามการสั่งซื้อ</a></li>
                    <li><a href="order_success.php">รายการสั่งซื้อสำเร็จ</a></li>
            <li><a href="logout.php">ล็อคเอาท์</a></li>
                <?php } else { ?>
              <li><a href="login.php">Login</a></li>
              <li class="active"><a href="admin_login.php">Admin</a></li>
                <?php } ?>
        </ul>
      </div>
     </div>
 </nav><br><br>
 <h1 align="center" style="font-family: 'Kanit', sans-serif;">รายการสินค้า</h1>
 <br>
 <div class="container" style="font-family: 'Kanit', sans-serif;">
 <div class="row"  align="center"><br><br>
  <div class="col-sm-4">
  <div class="w3-card" style = "background-color:#F5F5F5" ><br><br>
  <img src="images/soil.png" class="card-img-top" alt="..." style="width:260px; height:300px;">
    <div class="card">
      <div class="card-body">
        <a class="btn btn-danger btn-lg " onclick="order_din(<?php echo $row['user_name']; ?>)" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ดิน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
      </div>
    </div>
  </div>
  </div>
  <div class="col-sm-4">
  <div class="w3-card" style = "background-color:#F5F5F5" ><br><br>
  <img src="images/stone.png" class="card-img-top" alt="..." style="width:260px; height:300px;" >
    <div class="card">
      <div class="card-body">
      <a href="#" class="btn btn-success btn-lg " onclick="order_hin(<?php echo $row['user_name']; ?>)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หิน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
      </div>
    </div>
  </div>
  </div>
  <div class="col-sm-4">
  <div class="w3-card" style = "background-color:#F5F5F5" ><br><br>
  <img src="images/sand1.png" class="card-img-top" alt="..." style="width:260px; height:300px;" >
    <div class="card">
      <div class="card-body">
      <a href="#" class="btn btn-warning btn-lg " onclick="order_sary(<?php echo $row['user_name']; ?>)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ทราย&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
      </div>
    </div>
  </div>
  </div>
</div>
</div>



 <script>
    function order_din(user_name) {
            window.location.href = "order_soil.php?user_name=" + user_name;
    }
    function order_hin(user_name) {
            window.location.href = "order_rock.php?user_name=" + user_name;
    }
    function order_sary(user_name) {
            window.location.href = "order_sand.php?user_name=" + user_name;
    }

 </script>

    
 </body>
 </html>
