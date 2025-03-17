<?php 

    session_start();
    
    // c là controller
    // a cái hàm của controller đó
    // thằng index này chỉ gọi đến controller
    $a = $_GET['a'] ?? 'index';
    $c = $_GET['c'] ?? 'department'; 
    // hai thằng này có tác dụng điều hướng gọi hàm và router mà mình muốn
    
    // import database
    require './config.php';
    require './connect.php';

    // import model
    require './model/Department.php';
    require './model/DepartmentRepository.php';
    require './model/Employee.php';
    require './model/EmployeeRepository.php';

    
    
    // import controller
    $controller = ucwords($c) . 'Controller';
    require "./controller/$controller.php";
    // thực thi cái hàm được gọi
    $p = new $controller();
    $p->$a();
?>