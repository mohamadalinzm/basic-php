<?php

require_once 'autoload.php';

use Actions\AuthenticationAction;

global $customers;
global $activeCustomer;


while (true) {
    showOptions();
    $input = readline("Enter an Action: ");

    switch ($input) {
        case '1':
            registerForm($customers);
            break;
        case '2':
            loginForm($customers);
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

function loginForm(&$customers): void
{
    echo "Login Form:\n";
    $username = readline("Username: ");
    $password = readline("Password: ");

    $authAction = new AuthenticationAction();
    $activeCustomer = $authAction->loginCustomer($customers,$username, $password);

    echo "Login successful for user: $activeCustomer->username\n";

    showCustomerPanel($activeCustomer);
}

function showCustomerPanel($activeCustomer)
{
    while (true) {
        showOptions();
        $input = readline("Enter an Action: ");

        switch ($input) {
            case '1':
                registerForm($customers);
                break;
            case '2':
                loginForm($customers);
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
}