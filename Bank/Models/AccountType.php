<?php

namespace Models;

class AccountType
{
    public string $name;

    public array $rules;

    public function __construct(
        string $name,
        array $rules = []
    ) {
        $this->name = $name;
        $this->rules = $rules;
    }

}