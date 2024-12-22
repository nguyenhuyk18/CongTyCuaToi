<?php require '../layout/header.php' ?>
<?php 
    require '../config.php';
    require '../connectDB.php';
    

    $maNhanVien = $_GET['idnv'];
    $sql1 = "SELECT * FROM employees WHERE employee_id = $maNhanVien";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();

    // $sql1 = "SELECT "
    $sql = "SELECT * FROM departments";
    

?>
<h1>Sửa thông tin nhân viên</h1>
<form class="ps-5 mt-5 mb-5" action="updateprocess.php" method="POST">
    <input type="hidden" name="maNhanVien" value="<?= $_GET['idnv'] ?>">
    <div class="form-group">
        <label for="sss" class="me-5">First Name</label>
        <input type="text" class="" name="firstname" id="sss" value="<?= $row1['first_name'] ?>">
        <br>
        <label for="ddd" class="me-5">Last Name</label>
        <input type="text" class="" name="lastname" id="ddd" value="<?= $row1['last_name'] ?>">
        <br>
        <label for="aaa" class="me-5">Email</label>
        <input type="email" class="" name="email" id="aaa" value="<?= $row1['email'] ?>">
        <br>
        <label for="rrr" class="me-5">Số điện thoại</label>
        <input type="number" class="" name="sodienthoai" id="rrr" value="<?= $row1['phone_number'] ?>">
        <br>
        <label for="zzz" class="me-5">Ngày tuyển dụng</label>
        <input type="date" class="" name="ngaytuyendung" id="zzz" value="<?= $row1['hire_date'] ?>">
        <br>
        <label for="jjj" class="me-5">Lương</label>
        <input type="number" class="" name="luong" id="jjj" value="<?= $row1['salary']?>">
        <br>
        <label for="ttt" class="me-5">Chọn Phòng Ban</label>
        <select name="cacPhongBan" id="ttt">
            <option value="">-- Chọn Phòng Ban --</option>
            <?php 
                $result = $conn->query($sql);
                if($result->num_rows > 0) :
                    while($row = $result->fetch_assoc()) :
            ?>
            <option value="<?= $row['department_id'] ?>"><?= $row['department_id'] . ' - ' . $row['department_name'] ?>
            </option>
            <?php 
                endwhile;
            endif;
            ?>
        </select>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </div>
</form>


<?php require '../layout/footer.php' ?>