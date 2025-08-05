<?php

namespace Models;

class User
{
    public string $id;
    public string $firstName;
    public string $lastName;
    public string $username;
    public string $phoneNumber;
    public string $password;

    public function __construct(
        string $id,
        string $firstName,
        string $lastName,
        string $username,
        string $phoneNumber,
        string $password
    ) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->username = $username;
        $this->phoneNumber = $phoneNumber;
        $this->password = $password;
    }


}