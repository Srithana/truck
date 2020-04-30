<?php

include_once 'dbconnect.php';

session_start();

    $id = isset($_GET['id']) ? $_GET['id']: '';

    if($id!=''){
        
             $sql="DELETE FROM `order` WHERE no = '$id' ";

             if($conn->query($sql)==TRUE){
                 echo "<script>";
                 echo "alert('successfully');";
                 echo "window.location.href='history.php';";
                 echo "</script>";
             }else{
                 echo "ERROR".$sql."<BR>".$conn->error;
             }
            }
        
?>