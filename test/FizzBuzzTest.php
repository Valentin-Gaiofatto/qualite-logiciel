<?php

use \PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testGivenUnWhenFizzBuzzThenReturnsUn(){
        $this->assertEquals(1, FizzBuzz::execute(1));
    }

    public function testGivenTroisWhenFizzBuzzThenReturnsFizz(){
        $this->assertEquals("Fizz", FizzBuzz::execute(3));
    }

    public function testGivenCinqWhenFizzBuzzThenReturnsBuzz(){
        $this->assertEquals("Buzz", FizzBuzz::execute(5));
    }

    public function testGivenQuinzeWhenFizzBuzzThenReturnsFizzBuzz(){
        $this->assertEquals("FizzBuzz", FizzBuzz::execute(15));
    }
}