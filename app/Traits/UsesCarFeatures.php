<?php

namespace App\Traits;

trait UsesCarFeatures
{
    public function lowerFrontWindow(): void
    {
        echo "Lowered front Window!";
    }

    public function lowerBackWindow(): void
    {
        echo "Lowered back Window!";
    }

}
