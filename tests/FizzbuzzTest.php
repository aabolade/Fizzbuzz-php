<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
* @covers Fizzbuz
*/

final class FizzbuzzTest extends TestCase
{
    public function testWhenNumberIsDivisibleByThree()
    {
      $this->assertEquals(Fizzbuzz::isDivisibleByThree(3), true);
    }

    public function testWhenNumberIsNotDivisibleByThree()
    {
      $this->assertEquals(Fizzbuzz::isDivisibleByThree(5), false);
    }

    public function testWhenNumberIsDivisibleByFive()
    {
      $this->assertEquals(Fizzbuzz::isDivisibleByFive(5), true);
    }

    public function testWhenNumberIsNotDivisibleByFive()
    {
      $this->assertEquals(Fizzbuzz::isDivisibleByFive(3), false);
    }

    public function testWhenNumberIsDivisibleByThreeAndFive()
    {
      $this->assertEquals(Fizzbuzz::isDivisibleByFifteen(15), true);
    }

    public function testWhenNumberIsNotDivisibleByThreeAndFive()
    {
      $this->assertEquals(Fizzbuzz::isDivisibleByFifteen(9), false);
    }

    public function testReturnsFizzWhenNumberIsDivisibleByThree()
    {
      $this->assertEquals(Fizzbuzz::play(3), "Fizz");
    }

    public function testReturnsBuzzWhenNumberIsDivisibleByFive()
    {
      $this->assertEquals(Fizzbuzz::play(5), "Buzz");
    }

    public function testReturnsFizzbuzzWhenNumberIsDivisibleByThreeAndFive()
    {
      $this->assertEquals(Fizzbuzz::play(15), "Fizzbuzz");
    }

    public function testReturnsNumberWhenNotDivisibleByThreeFiveOrFifteen()
    {
      $this->assertEquals(Fizzbuzz::play(8), 8);
    }
}
