<?php

include_once 'dbconnect.php';

session_start();

    $id = isset($_GET['id']) ? $_GET['id']: '';

        if($id!=''){
             $sql="DELETE FROM members Where user_name='".$id."' ";

             if($conn->query($sql)==TRUE){
                 echo "<script>";
                 echo "alert('การลบสำเร็จ');";
                 echo "window.location.href='./';";
                 echo "</script>";
             }else{
                 echo "ERROR".$sql."<BR>".$conn->error;
             }
        }
        
?>