<?php require './layout/header.php' ?>

<h1 class="text-center">Nhập Thông Tin Nhân Viên</h1>

<form method="POST" action="?c=employee&a=add_employee">
    <input type="text" class="form-control my-3" name="fname" placeholder="Nhập tên đầu">
    <input type="text" class="form-control my-3" name="lname" placeholder="Nhập tên cuối">
    <input type="mail" class="form-control my-3" name="email" placeholder="Nhập email">
    <input type="number" class="form-control my-3" name="phone" placeholder="Nhập số điện thoại">
    <input type="date" class="form-control my-3" name="hiredate" placeholder="Nhập ngày thuê">
    <input type="number" class="form-control my-3" name="salary" placeholder="Nhập lương">
    <select name="departmentid" class="form-control my-3">
        <option value="">-- LỰA CHỌN PHÒNG BAN --</option>
        <?php foreach($depList as $key => $value): ?>
        <option value="<?=$value->getID()?>"><?= $value->getID() . ' - ' . $value->getDepartmentName()  ?></option>
        <?php endforeach; ?>
    </select>
    <button class="btn btn-success btn-lg mx-auto d-block" type="submit">LƯU</button>
</form>

<?php require './layout/footer.php' ?>