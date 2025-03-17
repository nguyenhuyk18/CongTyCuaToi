<?php 

class EmployeeRepository {
    public function fetch() {
        global $conn;
        $employeeList = [];
        $sql = "SELECT * FROM employees";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $employee_id = $row['employee_id'];
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
                $email = $row['email'];
                $phone_number = $row['phone_number'];
                $hire_date = $row['hire_date'];
                $salary = $row['salary'];
                $department_id = $row['department_id'];

                $employee = new Employee($employee_id, $first_name, $last_name, $email, $phone_number, $hire_date, $salary, $department_id);
                $employeeList[] = $employee;
            }
        }
        return $employeeList;
    }

    public function create($first_name, $last_name, $email, $phone_number, $hire_date, $salary, $department_id) {

        global $conn;
        if($department_id == '') {
            $sql = "INSERT INTO employees (first_name, last_name, email, phone_number, hire_date, salary) 
            VALUES ('$first_name', '$last_name' , '$email' , '$phone_number' , '$hire_date' , '$salary' )";
        }
        else {
            $sql = "INSERT INTO employees (first_name, last_name, email, phone_number, hire_date, salary, department_id) 
            VALUES ('$first_name', '$last_name' , '$email' , '$phone_number' , '$hire_date' , '$salary' , $department_id)";
        }

        if($conn->query($sql)) {
            return true;
        }
        return false;
    }

    public function delete($idemp) {
        global $conn;
        $sql = "DELETE FROM employees WHERE employee_id = '$idemp'";
        if($conn->query($sql)) {
            return true;
        }
        return false;
    }


    public function searchEmpByID($idemp) {
        global $conn;

        $sql = "SELECT * FROM employees WHERE employee_id = $idemp";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $employee_id = $row['employee_id'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $email = $row['email'];
            $phone_number = $row['phone_number'];
            $hire_date = $row['hire_date'];
            $salary = $row['salary'];
            $department_id = $row['department_id'];
            $employee1 = new Employee($employee_id, $first_name, $last_name, $email, $phone_number, $hire_date, $salary, $department_id);
            return $employee1;
        }
        return NULL;
    }

    public function listEmployeeByDepID($dep_id) {
        global $conn;
        $sql = "SELECT * FROM employees WHERE department_id = $dep_id";
        $empList = [];
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $employee_id = $row['employee_id'];
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
                $email = $row['email'];
                $phone_number = $row['phone_number'];
                $hire_date = $row['hire_date'];
                $salary = $row['salary'];
                $department_id = $row['department_id'];
                $employee1 = new Employee($employee_id, $first_name, $last_name, $email, $phone_number, $hire_date, $salary, $department_id);
                $empList[] = $employee1;
            }
        }
        return $empList;
    }

    public function update($employee_id ,$first_name, $last_name, $email, $phone_number, $hire_date, $salary, $department_id) {
        global $conn;
        if($department_id == '') {
            $sql = "UPDATE employees SET first_name = '$first_name', last_name = '$last_name', email = '$email', phone_number = '$phone_number', hire_date = '$hire_date' , salary = '$salary' WHERE employee_id = $employee_id ";
        }
        else {
            $sql = "UPDATE employees SET first_name = '$first_name', last_name = '$last_name', email = '$email', phone_number = '$phone_number', hire_date = '$hire_date' , salary = '$salary', department_id = $department_id WHERE employee_id = $employee_id ";
        }

        if($conn->query($sql)) {
            return true;
        }
        return false;

    }

    
}

?>