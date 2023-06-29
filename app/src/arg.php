<?php

/**
 * 
 * 関数内で引数を書き換えた時の挙動--値渡しとリファレンス渡し
 * 
 * 通常、コール時に関数に渡した引数が関数内で勝手に書き換えられることはありません。
 * 以下のプログラムでは関数add内で引数$aに対して10を加えていますが、コール時に引数として使った引数 $argument は 5 のままです。
 * 
 */

function add($a)
{
  $a += 10;
}

$argument = 5;


add($argument);

echo $argument;


/**
 * 引数 $argumentを関数内で書き換えたいときは、引数をリファレンス渡しする必要があります。
 * 引数の頭に「&」を付けることで実現できます。
 */

function addV2(&$a)
{
  $a += 10;
}

$argumentV2 = 5;
addV2($argumentV2);
echo $argumentV2;


/**
 * 
 * リファレンス渡しを使って、エラーメッセージをセットするといった使い方をすることもある
 */


//  正の整数であればtrue、そうでなければfalseを返す関数
function checkNum($value)
{
  return is_numeric($value) && (int)$value > 0;
}

//  2つの数値を足し算して返す関数
function addV3($a, $b, &$errorMessage)
{
  if (!checkNum($a)) {
    $a = 0;
    $errorMessage = '（※エラー 1番目の引数）';
  }
  if (!checkNum($b)) {
    $b = 0;
    $errorMessage = '（※エラー 2番目の引数）';
  }
  $total = $a + $b;
  return $total;
}

$errorMessage = null;
$result = addV3(3,10,$errorMessage);
echo $result, $errorMessage, PHP_EOL;

$errorMessage = 'どうなる';
$result = addV3(4,-5,$errorMessage);
echo $result,$errorMessage, PHP_EOL;
