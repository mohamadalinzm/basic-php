<?php

namespace Models;

class Account
{
    public string $accountId;
    public AccountType $accountType;
    public float $balance;
    public string $createdDate;
    public Customer $customer;



    public function __construct(
        string $accountId,
        AccountType $accountType,
        float $balance,
        string $createdDate,
        Customer $customer
    ) {
        $this->accountId = $accountId;
        $this->accountType = $accountType;
        $this->balance = $balance;
        $this->createdDate = $createdDate;
        $this->customer = $customer;
    }

}