<?php require '../layout/header.php' ?>

<form action="index.php" class="d-md-flex" method="GET">
    <input type="text" name='search' class="input-group-text"
        value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
    <button type='submit' class="btn-primary btn">SEARCH</button>
</form>

<?php 
    require '../config.php';
    require '../connectDB.php';

    $sql = "SELECT * FROM departments";

    $search = '';
    if(isset($_GET['search'])) {
        $search = $_GET['search'];
        $sql .= " WHERE department_name LIKE '%$search%'";
    }



?>
<div class="add p-2 mt-3 mb-3 bg-danger d-inline-block">
    <a href="./create.php">Thêm</a>
</div>
<h1>THÔNG TIN PHÒNG BAN</h1>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã Phòng Ban</th>
                <th>Tên Phòng Ban</th>
                <th></th>
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
                <td><?=  $stt ?></td>
                <td><?= $row['department_id'] ?></td>
                <td><?= $row['department_name'] ?></td>
                <td><a href="update.php?idpb=<?= $row['department_id'] ?>">Sửa</a></td>
                <td><button class="delete btn btn-primary btn-sm"
                        truyenBien="deleteprocess.php?idpb=<?= $row['department_id'] ?>" data-bs-toggle="modal"
                        data-bs-target="#modalId">Xóa</button>
                </td>
                <td>
                    <a href="../nhanvien/index.php?departmentid=<?= $row['department_id'] ?>">Danh sách nhân viên</a>
                </td>
            </tr>

            <?php endwhile ?>
            <?php endif ?>



        </tbody>
    </table>
</div>

<?php require '../layout/footer.php' ?>