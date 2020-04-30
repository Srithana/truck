<?php 

include_once 'dbconnect.php';

session_start();

    // รับค่า ID จาก Parmeter ที่มากับ link
    if (isset($_GET['no'])) {
        $id = $_GET['no'];
        $query = "SELECT * FROM order
                WHERE no = " . $id;
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result); 
        
    }
        if (isset($_POST['update'])) {

            $name = $_POST['name'];
            $type = $_POST['type'];        
            $number_n = $_POST['number_n'];
            $date_o = $_POST['date_o'];
            $date_s = $_POST['date_s'];
            $place = $_POST['place'];
            $id = $_POST['no'];

            $add = "UPDATE `order` SET
                        name = '" . $name . "',				
                        type = '" . $type . "',
                        number_n = '" . $number_n . "',
                        date_o = '" . $date_o . "',
                        date_s = '" . $date_s . "', 
                        place = '" . $place . "'
                        WHERE no = "  . $id;

        }

        if($conn->query($add)==TRUE)    {
            if($id!=''){
                echo "<script>";
                echo "alert('แก้ไขสำเร็จ');";
                echo "</script>";
                header('Refresh:0; url = order_a.php');

            }else{
                echo "<script>";
                echo "alert('error');";
                echo "</script>";    
                header('Refresh:0; url = mm_user.php');            
            }
        }else{
            echo "ERROR".$add."<BR>".$conn->error;
        }

?>