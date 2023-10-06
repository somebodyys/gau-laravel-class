<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    /**
     * This function will return factorial of a given number
     * @return null[]
     */
    public function calculateFactorial(int $number): array
    {
        return [
            'factorial' => $this->factorial($number)
        ];
    }

    /**
     * Recursive function that calculates factorial of a number
     * @param int $number
     * @return float|int
     */
    private function factorial(int $number): float|int
    {
        if ($number === 1)
            return $number;

        return $number * $this->factorial($number - 1);
    }

    /**
     * Calculate n'th number of fibonacci sequence
     * @return null[]
     */
    public function calculateFibonacci(Request $request): array
    {
        $number = $request->get('number');

        return [
            'fibonacci' => $this->fibonacci($number)
        ];
    }

    /**
     * Recursive function to calculate fibonacci
     * 0, 1, 1, 2, 3, 5, 8 ......
     * @param int $index
     * @return int
     */
    private function fibonacci(int $index): int
    {
        if ($index === 1 || $index === 0)
            return $index;

        return $this->fibonacci($index - 1) + $this->fibonacci($index - 2);
    }
}
