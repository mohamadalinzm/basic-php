<?php

namespace Models;

class Employee extends User
{
    public int $employeeId;
    public string $position;
    public string $department;
    public string $hireDate;
    public float $salary;

    public function __construct(
        string $id,
        string $firstName,
        string $lastName,
        string $username,
        string $phoneNumber,
        string $password,
        int $employeeId,
        string $position,
        string $department,
        string $hireDate,
        float $salary
    ) {
        parent::__construct($id, $firstName, $lastName, $username, $phoneNumber, $password);
        $this->employeeId = $employeeId;
        $this->position = $position;
        $this->department = $department;
        $this->hireDate = $hireDate;
        $this->salary = $salary;
    }
}