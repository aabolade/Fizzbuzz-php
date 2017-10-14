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
}
