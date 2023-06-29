<?php

/**
 * 関数から別の関数をコールする
 * 
 * 関数の中の処理で、別の関数をコールすることもできる
 * 
 */

//  正の整数であればtrue、そうでなければfalseを返す関数
 function checkNum($value) {
  return is_numeric($value) && (int)$value > 0;
 }

//  2つの数値を足し算して返す関数
 function add($a, $b)
 {
  if (!checkNum($a) || !checkNum($b)) {
    return 'INVALID';
  }
  $total = $a + $b;
  return $total;
 }

 $result =  add(3, 10);

 echo $result;

 $result2 = add(5, -4);

 echo $result2;
