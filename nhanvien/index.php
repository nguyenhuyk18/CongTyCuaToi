<?php require '../layout/header.php' ?>

<form action="index.php" class="d-md-flex" method="GET">
    <input type="hidden" name='dsnv' value="<?= isset($_GET['dsnv']) ? $_GET['dsnv'] : '' ?>">
    <input type="text" name='search' class="input-group-text"
        value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
    <button type='submit' class="btn-primary btn">SEARCH</button>
</form>

<?php 
    require '../config.php';
    require '../connectDB.php';

    $sql = "SELECT * FROM employees";

    $search = '';
    $mapb = '';
    if( isset($_GET['search']) && isset($_GET['departmentid'])) {
        $search = $_GET['search'];
        $mapb = $_GET['departmentid'];
        $sql .= " WHERE (first_name LIKE '%$search%' OR last_name LIKE '%$search%')";
        if(!empty($_GET['departmentid'])) $sql .= " AND department_id = $mapb";
    }
    else if( !isset($_GET['search']) && isset($_GET['departmentid'])) {
        if(isset($_GET['departmentid'])) {
            $mapb = $_GET['departmentid'];
            $sql .= " WHERE department_id = $mapb";
        }
    }
?>

<div class="add p-2 mt-3 mb-3 bg-danger d-inline-block">
    <a href="./create.php">Thêm</a>
</div>

<h1>THÔNG TIN CÁC NHÂN VIÊN</h1>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã Nhân Viên</th>
                <th>Họ Và Tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Ngày tuyển dụng</th>
                <th>Lương</th>
                <th>Mã phòng ban</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $result = $conn->query($sql);
                $stt = 0;
                if($result->num_rows > 0) :
                    while($row = $result->fetch_assoc()) :
                        $stt++;
            ?>
            <tr>
                <th><?= $stt ?></th>
                <th><?= $row['employee_id'] ?></th>
                <th><?= $row['first_name'] . ' ' . $row['last_name'] ?></th>
                <th><?= $row['email'] ?></th>
                <th><?= $row['phone_number'] ?></th>
                <th><?= $row['hire_date'] ?></th>
                <th><?= $row['salary'] ?></th>
                <th><?= $row['department_id'] ?></th>
                <th><a href="update.php?idnv=<?= $row['employee_id'] ?>">Sửa</a></th>
                <th>
                    <button class="delete btn btn-primary btn-sm"
                        truyenBien="deleteprocess.php?idnv=<?= $row['employee_id'] ?>" data-bs-toggle="modal"
                        data-bs-target="#modalId">Xóa</button>
                </th>
            </tr>
            <?php endwhile ?>
            <?php endif ?>
        </tbody>
    </table>
    <span>Số lượng nhân viên: <?= $stt ?></span>
</div>

<?php require '../layout/footer.php' ?>