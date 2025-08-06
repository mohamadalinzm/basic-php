<?php

use Models\Account;
use Models\Customer;

function showCustomerPanel(&$activeCustomer,&$accounts,&$accountTypes): void
{
    while (true) {
        showCustomerOptions();
        $input = readline("Enter an Action: ");

        switch ($input) {
            case '1':
                echo checkBalance($activeCustomer,$accounts);
                break;
            case '2':
                deposit($activeCustomer);
                break;
            case '3':
                withdraw($activeCustomer);
                break;
            case '4':
                transfer($activeCustomer);
                break;
            case '5':
                registerAccount($activeCustomer,$accountTypes,$accounts);
                break;
            case '6':
                echo "Exiting Customer Panel.\n";
                exit(0); //TODO exit to main menu
            default:
                echo "Invalid option. Please try again.\n";
        }

    }
}

function showCustomerOptions(): void
{
    echo "Customer Panel Options:\n";
    echo "1. Check Balance\n";
    echo "2. Deposit\n";
    echo "3. Withdraw\n";
    echo "4. Transfer\n";
    echo "5. Register Account\n";
    echo "6. Exit\n";
}

function checkBalance(&$activeCustomer,&$accounts): string
{
    if (empty($accounts)) {
        return "You Don't Have Any Account Yet.\n";
    }

    foreach ($accounts as $account) {
        if ($account->customer->username === $activeCustomer->username) {
            return "Account ID: {$account->accountId}, Balance: {$account->balance}\n";
        }
    }

    return "You Don't Have Any Account Yet.\n";
}

function registerAccount(Customer &$activeCustomer,&$accountTypes,&$accounts): void
{
    $accountType = $accountTypes[0];

    $accounts[] =  new Account(
        uniqid(),
        $accountType,
        2000,
        date('Y-m-d H:i:s'),
        $activeCustomer
    );
}