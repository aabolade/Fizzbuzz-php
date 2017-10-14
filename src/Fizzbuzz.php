<?php

declare(strict_types=1);
final class Fizzbuzz
{
  public static function isDivisibleByThree(int $number)
  {
    return $number%3 == 0;
  }

  public static function isDivisibleByFive(int $number)
  {
    return $number%5 == 0;
  }
}
