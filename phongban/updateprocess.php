<?php 
    require '../config.php';
    require '../connectDB.php';

    $maPhongBan = $_POST['maPhongBan'];
    $tenPhongBan = $_POST['tenphongban'];


    $sql = "UPDATE departments SET department_name = '$tenPhongBan' WHERE department_id = $maPhongBan ";
    
    session_start();
    if($conn->query($sql)) {
        $_SESSION['success'] = 'Update phòng ban có mã là ' . $maPhongBan . ' thành công';
        header('location: index.php');
        exit;
    }

    $_SESSION['error'] = 'Lỗi đã xảy ra ' . $conn->error;
    header('location: index.php');
    

    
?>