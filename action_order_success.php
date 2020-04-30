<?php 

include_once 'dbconnect.php';

session_start();

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    // exit();


    // รับค่า ID จาก Parmeter ที่มากับ link
    if (isset($_GET['user_name'])) {
        $id = $_GET['user_name']; 
        $query = "SELECT * FROM members
                WHERE user_name = " . $id;
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result); 

		$user_name = $row["user_name"];
		$name = $row["name"];
        
    }

    if (isset($_POST['update'])) {

        $name = $_POST['name'];
		$user_name = $_POST['user_name'];
        $type = $_POST['type'];
		$number_n = $_POST['number_n'];
        $date_o = $_POST['date_o'];
        $date_s = $_POST['date_s'];
        $place = $_POST['place'];
        $price = $_POST['price'];
        $send = $_POST['send'];
        $total = $_POST['total'];
        $dep = $_POST['dep'];
        $status = $_POST['status'];
        $dep1 = $total - $dep;
        
        
            $add ="INSERT INTO `order_success` (`name`, `user_name`, `type`, `number_n`, `date_o`, `date_s`, `place`, `price`, `send`, `total`, `dep`, `total_dep`, `status`) VALUES ('$name', '$user_name', '$type', '$number_n', '$date_o', '$date_s', '$place', '$price', '$send', '$total', '$dep', '$dep1', '$status');";
            $result = mysqli_query($conn, $add);
         
        
        echo '<script> alert("ยืนยันสถานะสำเร็จ"); </script>';
        header('Refresh:0; url = history.php');
                
        } else {
            echo '<script> alert("มีบางอย่างผิดพลาดกรุณาลองใหม่อีกครัง"); </script>';
            header('Refresh:0; url = order_a.php');
        }

?>