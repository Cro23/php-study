<?php
// fizzbuzz関数
  function fizzbuzz($num) {

      if ($num % 15 == 0) {
        return 'FizzBuzz';
      } elseif ($num % 5 == 0) {
        return 'Buzz';
      } elseif ($num % 3 == 0) {
        return 'Fizz';
      }
      return $num;
      
  }

  $max = 100;
  
  for ($i=1; $i <= $max; $i++) { 
    print fizzbuzz($i) . PHP_EOL;
  }