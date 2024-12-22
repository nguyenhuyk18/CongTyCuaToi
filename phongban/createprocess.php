<?php 

    require '../config.php';
    require '../connectDB.php';


    $tenPhongBan = $_POST['tenphongban'];

    $sql = "INSERT INTO departments (department_name) 
    VALUES('$tenPhongBan');
    ";
    session_start();
    if($conn->query($sql)) {
        $_SESSION['success'] = "Đã thêm phòng ban $tenPhongBan thành công";
        header('location: index.php');
        exit;
    }
    $_SESSION['error'] = 'Lỗi đã xảy ra ' . $conn->error;
    header('location: index.php');
?>