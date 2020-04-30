<?php

include_once 'dbconnect.php';
    $sql = "DELETE from order where no='".$_GET['del_no']."'";
    $query = mysqli_query($conn, $sql) or die($sql);
    header ("Location: order_a.php");

?>