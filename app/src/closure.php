<?php declare(strict_types=1);

/**
 * 値として受け渡しできる関数 -- クロージャー
 * クロージャー外の変数をuseキーワードで引き継ぐ
 * 
 */

$addFunction = function($a, $b) {
  return $a + $b;
};
$total = $addFunction(10,20);

echo $total;

$greeting = 'Good';

$greetingMaker = function($time) use (&$greeting) {
  print $greeting . ' ' . $time . '<br>';
};

$greetingMaker('Morning');

$greeting = 'Beautiful';
$greetingMaker('Evening');


