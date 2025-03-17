<?php  require './layout/header.php' ?>


<h1 class="text-center">Nhập Thông Tin Phòng Ban</h1>

<form method="POST" action="?a=create">
    <input type="text" class="form-control my-3" name="department_name" placeholder="Nhập tên phòng ban">
    <button class="btn btn-success btn-lg mx-auto d-block" type="submit">LƯU</button>
</form>


<?php require './layout/footer.php' ?>