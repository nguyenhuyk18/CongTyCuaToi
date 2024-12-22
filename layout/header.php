<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CÔNG TY ABC</title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <?php       
                        // var_dump($_SERVER['REQUEST_URI']);
                        $path = $_SERVER['REQUEST_URI'];
                        $path = trim($path, '/');
                        $path = explode('/', $path);
                        $realpath = $path[0];
                    ?>
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item me-5 <?= ($realpath == 'nhanvien') ? 'active' : '' ?>">
                            <a class="nav-link" href="../nhanvien/">Nhân Viên</a>
                        </li>
                        <li class="nav-item <?= ($realpath == 'phongban') ? 'active' : '' ?>">
                            <a class="nav-link" href="../phongban/">Phòng Ban</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <?php 

            
            $message = '';
            $nhom = '';
            session_start();
            if(isset($_SESSION['success'])) {
                $message = $_SESSION['success'];
                $nhom = 'success';
                unset($_SESSION['success']);
            }
            else if(isset($_SESSION['error'])) {
                $message = $_SESSION['error'];
                $nhom = 'danger';
                unset($_SESSION['error']);
            }

            if($message != '') :
        ?>
        <div class='alert alert-<?= $nhom ?> text-center'>
            <?= $message ?>
        </div>

        <?php endif ?>




    </div>