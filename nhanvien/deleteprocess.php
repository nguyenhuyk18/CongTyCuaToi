<?php 

    // var_dump($_GET);
    // exit;
    require '../config.php';
    require '../connectDB.php';

    $idnv = $_GET['idnv'];
    $sql = "SELECT * FROM employees WHERE employee_id = $idnv";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $tenNhanVien = $row['first_name'] . ' ' . $row['last_name'];

    $sql = "DELETE FROM employees WHERE employee_id = $idnv";

    session_start();

    if($conn->query($sql)) {
        $_SESSION['success'] = 'Đã xóa nhân viên có tên là ' . $tenNhanVien . ' thành công !!!'; 
        header('location: index.php');
        exit;
    }

    $_SESSION['error'] = 'Lỗi đã xảy ra ' . $conn->error;
    header('location: index.php');

?>