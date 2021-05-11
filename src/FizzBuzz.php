<?php

namespace App;

class FizzBuzz{
    public function execute(int $number)
    {
        if ($number % 3 == 0){
            return "Fizz";
        }
        if ($number % 5 == 0){
            return "Buzz";
        }
        if ($number % 3 == 0 && $number % 5 == 0){
            return "FizzBuzz";
        }
        return $number;
    }
}