<?php 

include_once 'dbconnect.php';

session_start();

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
        $total = $price + $send;
        
        
            $add ="INSERT INTO `order_send` (`name`, `user_name`, `type`, `number_n`, `date_o`, `date_s`, `place`, `price`, `send`, `total`) VALUES ('$name', '$user_name', '$type', '$number_n', '$date_o', '$date_s', '$place', '$price', '$send', '$total');";
            $result = mysqli_query($conn, $add);

            $result3 = mysqli_query($conn, $query3);
			$query4 = "DELETE FROM `order` 
                  WHERE no = " . $no;
        	$result4 = mysqli_query($conn, $query4);
        	header("Location: order_a.php");
         
        }
?>