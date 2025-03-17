<?php require './layout/header.php' ?>

<form method="POST" action="?c=employee&a=edit_employee">
    <input type="hidden" name="id_emp" value="<?= $emp->getEmployeeID() ?>">
    <input type="text" value="<?= $emp->getFirstName() ?>" class="form-control my-3" name="fname"
        placeholder="Nhập tên đầu">
    <input type="text" value="<?= $emp->getLastName() ?>" class="form-control my-3" name="lname"
        placeholder="Nhập tên cuối">
    <input type="mail" value="<?= $emp->getEmail() ?>" class="form-control my-3" name="email" placeholder="Nhập email">
    <input type="number" value="<?= $emp->getPhoneNumber() ?>" class="form-control my-3" name="phone"
        placeholder="Nhập số điện thoại">
    <input type="date" value="<?= $emp->getHireDate() ?>" class="form-control my-3" name="hiredate"
        placeholder="Nhập ngày thuê">
    <input type="number" value="<?= $emp->getSalary() ?>" class="form-control my-3" name="salary"
        placeholder="Nhập lương">
    <select name="departmentid" class="form-control my-3">
        <option value="">-- LỰA CHỌN PHÒNG BAN --</option>
        <?php foreach($depList as $key => $value): ?>
        <option value="<?=$value->getID()?>" <?= ($emp->getDepartmentID() == $value->getID()) ? 'selected' : '' ?>>
            <?= $value->getID() . ' - ' . $value->getDepartmentName()  ?>
        </option>
        <?php endforeach; ?>
    </select>
    <button class="btn btn-success btn-lg mx-auto d-block" type="submit">LƯU</button>
</form>

<?php require './layout/footer.php' ?>