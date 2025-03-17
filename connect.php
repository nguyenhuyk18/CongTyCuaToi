<?php 
    $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

    if($conn->connect_error) {
        die('Lỗi đã xảy ra ' . $conn->connect_error);
    }
    mysqli_set_charset($conn, 'utf8');

?>