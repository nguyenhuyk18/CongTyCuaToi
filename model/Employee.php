<?php 
class Employee {
    private $employee_id;
    private $first_name;
    private $last_name;
    private $email;
    private $phone_number;
    private $hire_date;
    private $salary;
    private $department_id;

    function __construct($employee_id, $first_name, $last_name, $email, $phone_number, $hire_date, $salary, $department_id)
    {
        $this->employee_id = $employee_id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->hire_date = $hire_date;
        $this->salary = $salary;
        $this->department_id = $department_id;
    }

    public function getEmployeeID() {
        return $this->employee_id;
    }


    public function getFirstName() {
        return $this->first_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhoneNumber() {
        return $this->phone_number;
    }

    public function getHireDate() {
        return $this->hire_date;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function getDepartmentID() {
        return $this->department_id;
    }
}


?>