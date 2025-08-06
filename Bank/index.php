<?php

require_once 'autoload.php';
require_once 'Views/customer-panel.php';

use Actions\AuthenticationAction;
use Models\AccountType;

global $customers;
global $activeCustomer;
global $accounts;
global $accountTypes;

while (true) {
    initCustomer($customers);
    initialCommands($accountTypes);
    showOptions();
    $input = readline("Enter an Action: ");

    switch ($input) {
        case '1':
            registerForm($customers);
            break;
        case '2':
            loginForm($customers,$activeCustomer,$accountTypes);
            break;
        case '3':
            echo "Exiting...\n";
            sleep(2);
            exit(0);
        default:
            echo "Invalid option. Please try again.\n";
    }

    print_r($customers);

}

function showOptions(): void
{
    echo "1.Register\n";
    echo "2.Login\n";
    echo "3.Exit\n";
}

function registerForm(&$customers): void
{
    echo "Register Form:\n";
    $firstName = readline("First Name: ");
    $lastName = readline("Last Name: ");
    $username = readline("Username: ");
    $phoneNumber = readline("Phone Number: ");
    $address = readline("Address: ");
    $password = readline("Password: ");

    $authAction = new AuthenticationAction();
    $customer = $authAction->registerCustomer($firstName, $lastName, $username, $phoneNumber, $password,$address);

    $customers[] = $customer;

    echo "Registration successful for user: $customer->username\n";

}

function loginForm(&$customers,&$activeCustomer,&$accountTypes): void
{
    echo "Login Form:\n";
    $username = readline("Username: ");
    $password = readline("Password: ");

    $authAction = new AuthenticationAction();
    $activeCustomer = $authAction->loginCustomer($customers,$username, $password);

    echo "Login successful for user: $activeCustomer->username\n";

    showCustomerPanel($activeCustomer,$accounts,$accountTypes);
}

function initialCommands(&$accountTypes): void
{
    $type =  new AccountType(
        'Savings',
        ['minBalance' => 1000, 'maxBalance' => 100000]
    );

    $accountTypes[] = $type;
}

function initCustomer(&$customers): void
{
    $password = password_hash('1234', PASSWORD_DEFAULT);
    $customers[] = new Models\Customer(
        uniqid(),
        'John',
        'Wick',
        'nazem',
        '12312312312',
        $password,
        '123 Main St',
        '2023-10-01 12:00:00'
    );

//    $activeCustomer = $customers[0];
}