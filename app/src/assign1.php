<?php
// 既にある変数値に演算を加える -- 複合演算子

  $sum = 3;
  $sum *= 5; // $sum = $sum * 5; と同じ意味

  $greeting = 'Hello ';
  $greeting .= 'World.'; // $greeting = $greeting . 'World';と同じ意味

  echo 'sum：',$sum;
  echo 'greeting：',$greeting;


// 2つの変数で1つの値を共有する -- リファレンス渡し
// $b = &$a
  $greeting1 = 'Hello';
  $greeting2 = &$greeting1;
  $greeting1 = 'World';

  echo 'greeting1：',$greeting1;
  echo 'greeting2：',$greeting2;
?>