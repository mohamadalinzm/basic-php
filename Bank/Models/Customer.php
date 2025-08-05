<?php

namespace Models;

class Customer extends User
{
    public string $address;
    public string $joinDate;

    public function __construct(
        string $id,
        string $firstName,
        string $lastName,
        string $username,
        string $phoneNumber,
        string $password,
        string $address,
        string $joinDate
    ) {
        parent::__construct($id, $firstName, $lastName, $username, $phoneNumber, $password);
        $this->address = $address;
        $this->joinDate = $joinDate;
    }

}