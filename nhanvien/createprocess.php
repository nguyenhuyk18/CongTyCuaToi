<?php 
    // var_dump($_POST);
    // exit;
    require '../config.php';
    require '../connectDB.php';


    $fn = $_POST['firstname'];
    $ln = $_POST['lastname'];
    $mail = $_POST['email'];
    $sdt = $_POST['sodienthoai'];
    $ngayThue = $_POST['ngaytuyendung'];
    $luong = $_POST['luong'];
    $maPhongBan = $_POST['cacPhongBan'];

    $sql = "INSERT INTO employees (first_name, last_name, email, phone_number, hire_date, salary, department_id)
    VALUES('$fn', '$ln' , '$mail' , $sdt , '$ngayThue' , $luong , $maPhongBan);
    ";
    session_start();
    if($conn->query($sql)) {
        $_SESSION['success'] = "Đã thêm nhân viên $fn $ln thành công";
        header('location: index.php');
        exit;
    }
    $_SESSION['error'] = 'Lỗi đã xảy ra ' . $conn->error;
    header('location: index.php');
?>