<?php

declare(strict_types=1);
final class Fizzbuzz
{
  public static function play(int $number)
  {
    if (Fizzbuzz::isDivisibleByFifteen($number)) {
      return "Fizzbuzz";
    } elseif(Fizzbuzz::isDivisibleByThree($number)) {
      return "Fizz";
    } elseif (Fizzbuzz::isDivisibleByFive($number)) {
      return "Buzz";
    } else {
      return $number;
    }

  }
  public static function isDivisibleByThree(int $number)
  {
    return Fizzbuzz::isDivisibleBy($number, 3);
  }

  public static function isDivisibleByFive(int $number)
  {
    return Fizzbuzz::isDivisibleBy($number, 5);
  }

  public static function isDivisibleByFifteen(int $number)
  {
    return Fizzbuzz::isDivisibleBy($number, 15);
  }

  public static function isDivisibleBy(int $number, int $divisor)
  {
    return $number%$divisor == 0;
  }
}
