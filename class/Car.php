<?php

namespace class;

class Car
{
    public string $color;
    public string $model;
    public string $year;

    public function __construct($color, $model, $year)
    {
        $this->color = $color;
        $this->model = $model;
        $this->year = $year;
    }

    public function getDetails(): string
    {
        return "Car Model: {$this->model}, Color: {$this->color}, Year: {$this->year}";
    }

    public function getColor(): string
    {
        return $this->color;
    }

}