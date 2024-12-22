<?php 
    $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD , DBNAME);

    if($conn->connect_error) {
        die('Không thể kết nối với database ' . $conn->connect_error);
    }
    mysqli_set_charset($conn, 'utf8');
?>