<?php

namespace Actions;

use Models\Customer;

class AuthenticationAction
{
    public function registerCustomer(string $firstName, string $lastName, string $username, string $phoneNumber, string $password,string $address): Customer
    {
        if (empty($firstName) || empty($lastName) || empty($username) || empty($phoneNumber) || empty($password)) {
            throw new \InvalidArgumentException("All fields are required.");
        }

        if (!preg_match("/^[a-zA-Z]+$/", $firstName) || !preg_match("/^[a-zA-Z]+$/", $lastName)) {
            throw new \InvalidArgumentException("First name and last name can only contain letters.");
        }

        if (!preg_match("/^\+?[0-9]{10,15}$/", $phoneNumber)) {
            throw new \InvalidArgumentException("Phone number must be between 10 and 15 digits.");
        }

        return new Customer(
            uniqid(),
            $firstName,
            $lastName,
            $username,
            $phoneNumber,
            password_hash($password, PASSWORD_DEFAULT),
            $address,
            date('Y-m-d H:i:s')
        );

    }

    public function loginCustomer(array $customers,string $username, string $password): Customer
    {
        if (empty($username) || empty($password)) {
            throw new \InvalidArgumentException("Username and password are required.");
        }

        $targetCustomer = null;

        foreach ($customers as $customer) {
            if ($customer->username === $username && password_verify($password, $customer->password))
            {
                $targetCustomer = $customer;
                break;
            }
        }

        if ($targetCustomer === null) {
            throw new \Exception("Invalid username or password.");
        }

        return $targetCustomer;
    }
}