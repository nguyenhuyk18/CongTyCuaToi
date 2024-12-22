<?php 
    require '../config.php';
    require '../connectDB.php';

    $idpb = $_GET['idpb'];





    $sql = "SELECT * FROM departments WHERE department_id = $idpb";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $tenPhongBan = $row['department_name'];


    $sql = "SELECT count(*) AS 'soLuongNhanVien' FROM employees WHERE department_id = $idpb";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $soLuongNhanVien = $row['soLuongNhanVien'];
    session_start();

    if($soLuongNhanVien > 0) {
        $_SESSION['error'] = "Không thể xóa $tenPhongBan vì đang có $soLuongNhanVien nhân viên ở đây !!!";
        header('location: index.php');
        exit;
    }



    $sql = "DELETE FROM departments WHERE department_id = $idpb";

    

    if($conn->query($sql)) {
        $_SESSION['success'] = 'Đã xóa phòng ban có tên là ' . $tenPhongBan . ' thành công !!!'; 
        header('location: index.php');
        exit;
    }

    $_SESSION['error'] = 'Lỗi đã xảy ra ' . $conn->error;
    header('location: index.php');

?>