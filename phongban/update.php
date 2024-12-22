<?php require '../layout/header.php' ?>

<h1>Sửa Phòng Ban</h1>
<form action="updateprocess.php" method="POST">
    <input type="hidden" name="maPhongBan" value="<?=$_GET['idpb']?>">
    <label for="sss" class="me-5">Nhập tên phòng ban</label>
    <input type="text" name="tenphongban" id="sss">
    <br>
    <button type="submit" class="btn btn-primary">Lưu</button>
</form>


<?php require '../layout/footer.php' ?>