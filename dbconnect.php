<?php
    //1.create connection
    // $host = "localhost";
    // $db_username = "root";
    // $db_passwd = "";
    // $db_name = "truck";

    // $conn;

    // try {
    //     $conn = mysqli_connect($host, $db_username, $db_passwd, $db_name);
    // } catch (Exception $exp) {
    //     echo "Connection error: " . $exp.getMessage();
    // }

    $conn = mysqli_connect("localhost","root","","truck");

    $conn->set_charset("utf8");

    if(!$conn) {
        die("Failed to connec to database" . mysqli_error($conn));
    }

?>

<!-- HQG3t0K7QrwE -->