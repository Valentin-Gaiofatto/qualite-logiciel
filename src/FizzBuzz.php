<?php

class FizzBuzz
{
    static function execute($int){
        $res = $int;
        if($int % 3 == 0 && $int % 5 == 0) {
            $res = "FizzBuzz";
        }
        else if($int % 3 == 0) {
            $res = "Fizz";
        }
        else if ($int % 5 == 0) {
            $res = "Buzz";
        }
        return $res;
    }
}