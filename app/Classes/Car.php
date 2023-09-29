<?php

namespace App\Classes;

class Car extends Machine
{
    public string $model;
    protected string $color;
    private int $number;


    public string $STYLE = 'modern';


    /**
     * Assign values to Class Attributes Create Object
     * @param string $color
     * @param string $model
     * @param int $number
     */
    public function __construct(string $color, string $model, int $number)
    {
        $this->model = $model;
        $this->color = $color;
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function printCar(): string
    {
        $number = $this->getNumber();

        return "Car: $number $this->model";
    }

    protected function getNumber(): int
    {
        return $this->number;
    }

    public function move()
    {
        echo "Moving!";
    }
}
