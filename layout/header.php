<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CÔNG TY</title>
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body>

    <div class="container">
        <div class="d-flex ">
            <a href="?c=department&a=index"
                class="<?php global $c; if($c == 'department') {echo 'active';} else {echo '';}?> btn btn-info text-white me-3">Department</a>
            <a href="?c=employee&a=index"
                class="<?php  if($c  == 'employee') {echo 'active';} else {echo '';}?> btn btn-info text-white">Employee</a>
        </div>

        <?php 
            $loiNhan = '';
            $phanLoai = '';
            if(isset($_SESSION['success'])) {
                $loiNhan = $_SESSION['success'];
                $phanLoai = 'success';
                unset($_SESSION['success']);
            }
            else if(isset($_SESSION['error'])) {
                $loiNhan = $_SESSION['error'];
                $phanLoai = 'danger';
                unset($_SESSION['error']);
            }

            if($loiNhan) :
        ?>
        <div class="alert alert-<?= $phanLoai ?> text-center">
            <?= $loiNhan ?>
        </div>
        <?php endif; ?>