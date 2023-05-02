<?php
  // 関数を定義
  function even_add($num) {
    if ($num % 2 == 0) {
      return 'even';
    } 
    return 'odd';
  }

  // 関数を呼び出してその結果を利用
  $result = even_add(9);
  print $result . PHP_EOL;