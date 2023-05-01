<?php
// 関数
// 1から9までの数字の足し算（1+2+3+...+9）処理について、その結果を表示する関数を作る

  // 関数を定義
  function sum() {
    $result = 0;
    for ($i=1; $i <= 9; $i++) {
      $result = $result + $i;
    }

    print $result . PHP_EOL;
  }

  sum();