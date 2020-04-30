<?php 

include_once 'dbconnect.php';

session_start();

    // รับค่า ID จาก Parmeter ที่มากับ link
    if (isset($_GET['no'])) {
        $id = $_GET['no'];
        $query = "SELECT * FROM edit_order
                WHERE no = " . $id;
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result); 
        
    }
        if (isset($_POST['update'])) {

            $name = $_POST['name8'];
            $rock_38 = $_POST['38_rock'];        
            $id = $_POST['no'];

            $add = "UPDATE `edit_order` SET
                        name8 = '" . $name . "',				
                        38_rock = '" . $rock_38 . "'
                        WHERE no = "  . $id;

        }

        if($conn->query($add)==TRUE)    {
            if($id!=''){
                echo "<script>";
                echo "alert('แก้ไขสำเร็จ');";
                echo "</script>";
                header('Refresh:0; url = price_order.php');

            }else{
                echo "<script>";
                echo "alert('error');";
                echo "</script>";    
                header('Refresh:0; url = editorder_price.php');            
            }
        }else{
            echo "ERROR".$add."<BR>".$conn->error;
        }

?>