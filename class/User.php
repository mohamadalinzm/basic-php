<?php

namespace class;

class User
{
    public string $name;
    private string $email;

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    protected function getDetails(): string
    {
        return "Name: {$this->name}, Email: {$this->email}";
    }
}


class Customer extends User
{
    public string $cardNumber;
    public string $address;
    public string $phoneNumber;
    public string $birthDate;

    public function __construct(string $name, string $email, string $cardNumber, string $address, string $phoneNumber, string $birthDate)
    {
        parent::__construct($name, $email);
        $this->cardNumber = $cardNumber;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
        $this->birthDate = $birthDate;
    }

    public function calculateAge(): int
    {
        $birthDate = new \DateTime($this->birthDate);
        $today = new \DateTime();
        $age = $today->diff($birthDate)->y;
        return $age;
    }

    public function getDetails(): string
    {
        return "Card Number: {$this->cardNumber}, Address: {$this->address}, Phone: {$this->phoneNumber}, Birth Date: {$this->birthDate}, Age: {$this->calculateAge()}";
    }

}
// Example usage

$name = "John Doe";
$email = "johndoe@email.com";
$name1 = "Jane Doe";
$email1 = "janedoe@email.com";
$name2 = "Alice Smith";
$email2 = "alice@test.com";

$customer0 = new Customer($name, $email, "1234-5678-9012-3456", "123 Main St", "555-1234", "1993-01-01");
$customer1 = new Customer($name1, $email1, "1234-5678-9012-3456", "123 Main St", "555-1234", "1995-01-01");
$customer2 = new Customer($name2, $email2, "1234-5678-9012-3456", "123 Main St", "555-1234", "1997-01-01");

$customers = [$customer0, $customer1, $customer2];

var_dump($customers[2]->getDetails());