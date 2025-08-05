<?php

namespace Models;

use Models\User;

class Manager extends User
{
    public string $email;

    public function __construct(
        string $id,
        string $firstName,
        string $lastName,
        string $username,
        string $phoneNumber,
        string $password,
        string $email
    ) {
        parent::__construct($id, $firstName, $lastName, $username, $phoneNumber, $password);
        $this->email = $email;
    }

}