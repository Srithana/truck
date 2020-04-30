<?php
include_once 'dbconnect.php';


    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql ="INSERT INTO contact(`name`, `phone`, `message`) VALUES ('$name', '$phone', '$message');";

    if (mysqli_query($conn, $sql)) {
        echo '<script> alert("สำเร็จ"); </script>';
        header('Refresh:0; url = contact.php');
    } else {
        echo '<script> alert("ผิดพลาด"); </script>';
        header('Refresh:0; url = contact.php');
    }
?>