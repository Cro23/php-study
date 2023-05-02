<?php
// 関数
// 1から9までの数字の足し算（1+2+3+...+9）処理について、その結果を表示する関数を作る

  // 関数を定義
  // 関数に引数を渡す
  function sum($a,$b) {
    $result = 0;
    for ( $i = $a; $i <= $b; $i++ ) {
      $result = $result + $i;
    }

    print $result . PHP_EOL;
  }

  sum(1,999);