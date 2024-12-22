<?php 
    // var_dump($_POST);
    // exit;


    require '../config.php';
    require '../connectDB.php';


    $manv = $_POST['maNhanVien'];

    $sql1 = "SELECT * FROM employees WHERE employee_id = '$manv'";
    $result = $conn->query($sql1);
    $row1 = $result->fetch_assoc();

    $hoVaTenCu = $row1['first_name'] . ' ' . $row1['last_name'];
    
    

    $fn = $_POST['firstname'];
    $ln = $_POST['lastname'];
    $mail = $_POST['email'];
    $sdt = $_POST['sodienthoai'];
    $ngayThue = $_POST['ngaytuyendung'];
    $luong = $_POST['luong'];
    $maPhongBan = $_POST['cacPhongBan'];
    

    $sql = "UPDATE employees SET first_name = '$fn', last_name = '$ln', email = '$mail', phone_number= $sdt, hire_date = '$ngayThue', salary = $luong, department_id = $maPhongBan  WHERE employee_id = $manv ";
    
    session_start();
    if($conn->query($sql)) {
        $_SESSION['success'] = 'Update nhân viên có tên là ' . $hoVaTenCu . ' thành ' . $fn . ' ' . $ln . ' thành công';
        header('location: index.php');
        exit;
    }
    
    $_SESSION['error'] = 'Lỗi đã xảy ra ' . $conn->error;
    header('location: index.php');
?>