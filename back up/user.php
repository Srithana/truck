 <?php 
    session_start();

    include_once 'dbconnect.php';

    $query = "SELECT * FROM members ORDER BY user_name DESC";
    $result = mysqli_query($conn, $query);

    $query2 = "SELECT * FROM buy_orders ORDER BY price ASC";
    $result2 = mysqli_query($conn, $query2);

    $query3 = "SELECT * FROM sell_orders ORDER BY price ASC";
    $result3 = mysqli_query($conn, $query3);

    if (isset($_GET['user_name'])){
        $id = $_GET['user_name'];
        $query = "SELECT * FROM members 
                WHERE user_name =" .$id;
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        header("Location: user.php");
    }


 ?>
 
 <!DOCTYPE html>
 <html>
 <head>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" >
     <title>Poker Thailand</title>
     <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
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
        <a class="navbar-brand" href="index.php">Poker Thailand</a>
      </div>
      <!-- menu items -->
      <div class="collapse navbar-collapse" id="navbar1">
        <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['name'])) { ?>
                    <li><p class="navbar-text">Signed in as <?php echo $_SESSION['name']; ?></p></li>
            <li><a href="logout.php">Log Out</a></li>
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
         <div class="col-xs-8 col-xs-offset-2">
             <legend>Your Information</legend>

            <div class="table-responsive">
             <table class="table table-bordered table-hover">
                 <thead>
                     <tr>
                         <th>name</th>
                         <th>ID</th>
                         <th>Balance</th>
                         <th>Poker coins</th>
                         <th colspan="3" style="text-align:center">Actions</th>
                     </tr>
                 </thead>
                 <tbody>
                 <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['user_name']; ?></td>
                        <td><?php echo $row['balance']; ?></td>
                        <td><?php echo $row['poker_coins']; ?></td>

                        <td style="text-align:center">
                            <input type="button" name="cashier" value="Cashier" 
                            class="btn btn-primary"  onclick="edit_user(<?php echo $row['user_name']; ?>)">
                        </td>

                        <td style="text-align:center">
                            <input type="button" name="buy" value="Buy Poker coins" 
                            class="btn btn-primary"  onclick="buy(<?php echo $row['user_name']; ?>)">
                        </td>

                        <td style="text-align:center">
                            <input type="button" name="sell" value="Sell Poker cions" 
                            class="btn btn-primary"  onclick="sell(<?php echo $row['user_name']; ?>)">
                        </td>
           
                    </tr>
                 <?php } ?>   
                 </tbody>
             </table>
            </div>
            <!--display number of records -->
            
         </div>
     </div>
     
 </div>
 <div class="container">
     <div class="row">
         <div class="col-xs-8 col-xs-offset-2">
             <legend>Buy Poker coins</legend>

            <div class="table-responsive">
             <table class="table table-bordered table-hover">
                 <thead>
                     <tr>
                         <th>No.</th>
                         <th>Volume</th>
                         <th>price</th>
                         <th colspan="1" style="text-align:center">Actions</th>
                     </tr>
                 </thead>
                 <tbody>
                 <?php while ($row = mysqli_fetch_array($result2)) { ?>
                    <tr>
                        <td><?php echo $row['no']; ?></td>
                        <td><?php echo $row['volume']; ?></td>
                        <td><?php echo $row['price']; ?></td>

                        <td style="text-align:center">
                            <input type="button" name="buy" value="Purchase" 
                            class="btn btn-primary"  onclick="buy_coins(<?php echo $_SESSION['user_name'];  ?>,<?php echo $row['no']; ?>)">
                        </td>
           
                    </tr>
                 <?php } ?>   
                 </tbody>
             </table>
            </div>
            <!--display number of records -->
            
         </div>
     </div>
     
 </div>

 <script>
    function buy(user_name) {
            window.location.href = "buy_coins.php?user_name=" + user_name;
    }
    function sell(user_name) {
            window.location.href = "sell_coins.php?user_name=" + user_name;
    }
    function edit_user(user_name) {
        window.location.href = "cashier.php?user_name=" + user_name;
    }
    function buy_coins(user_name,no) {
        window.location.href = "buy_purchase.php?user_name=" + user_name + "?no=" + no;
    }
    function sell_coins(user_name) {
        window.location.href = "sell_purchase.php?user_name=" + user_name;
    }

 </script>
 </body>
 </html>
