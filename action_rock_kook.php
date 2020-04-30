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
        $kook_rock = $_POST['kook_rock'];
        $type = $_POST['type'];
        $price_1 = $kook_rock;
        if($type=="หินคลุก"){
            $price_1;
            }elseif($type== "หิน3/4")
                $price_1;
                elseif($type== "หิน3/8"){
                    $price_1;
                    }         
		$number_n = $_POST['number_n'];
        $date_o = $_POST['date_o'];
        $date_s = $_POST['date_s'];
        $place = $_POST['place'];
        $price = $price_1 * $number_n;
        
        
        
            $add ="INSERT INTO `order` (`name`, `user_name`, `type`, `number_n`, `date_o`, `date_s`, `place`, `price`) VALUES ('$name', '$user_name', '$type', '$number_n', '$date_o', '$date_s', '$place', '$price');";
            $result = mysqli_query($conn, $add);
         
        
        echo '<script> alert("การสั่งสินค้าสำเร็จแล้ว รอการยืนยัน"); </script>';
        header('Refresh:0; url = order_price.php');
                
        } else {
            echo '<script> alert("มีบางอย่างผิดพลาดกรุณาลองใหม่อีกครัง"); </script>';
            header('Refresh:0; url = user.php');
        }
?>