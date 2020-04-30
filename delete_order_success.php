<?php

include_once 'dbconnect.php';

session_start();

    $id = isset($_GET['id']) ? $_GET['id']: '';

    if($id!=''){
        
             $sql="DELETE FROM `order_customer_success` WHERE no = '$id' ";

             if($conn->query($sql)==TRUE){
                 echo "<script>";
                 echo "alert('successfully');";
                 echo "window.location.href='history_success.php';";
                 echo "</script>";
             }else{
                 echo "ERROR".$sql."<BR>".$conn->error;
             }
            }
        
?>