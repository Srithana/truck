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

            $name = $_POST['name6'];
            $kook_rock = $_POST['kook_rock'];        
            $id = $_POST['no'];

            $add = "UPDATE `edit_order` SET
                        name6 = '" . $name . "',				
                        kook_rock = '" . $kook_rock . "'
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