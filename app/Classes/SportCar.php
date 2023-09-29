<?php

namespace App\Classes;

use App\Traits\UsesCarFeatures;
use Carbon\Carbon;

class SportCar extends Car
{
    use UsesCarFeatures;

    protected int $topSpeed;

    public static string $creator = "Tornike";

    public function __construct(string $color, string $model, int $number, int $topSpeed)
    {
        parent::__construct($color, $model, $number);
        $this->topSpeed = $topSpeed;
    }

    public function changeColorWithRed(){
        $this->color = 'red';
    }

    public static function getCurrentDate(){

        return Carbon::now();
    }

    /**
     * @return void
     */
    public function move()
    {
        echo "Sport Car Moving Differently!";
    }

}
