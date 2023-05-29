<?php
// 配列を合成する2つの方法 -- 加算の演算子(+)とarray_merge関数
// 以下は、同じ配列を、+記号とarray_merge関数を使って合成する例。合成対象の2つの配列が同一キーを持っていた時の、細かな挙動の違いも確認

  // 配列を合成
  $arr1 = ['a','b'];
  $arr2 = ['d','e','f'];
  $mergedA = $arr1 + $arr2;
  $mergedB = $arr2 + $arr1;
  $mergedC = array_merge($arr1, $arr2);
  $mergedD = array_merge($arr2, $arr1);
  print_r($mergedA);
  print_r($mergedB);
  print_r($mergedC);
  print_r($mergedD);


  // 連想配列を合成

  $arr3 = [
    'a' => 'value A',
    'b' => 'value B',
  ];
  $arr4 = [
    'a' => 'value C',
    'b' => 'value D',
    'c' => 'value E',
  ];

  $mergedE = $arr3 + $arr4;
  $mergedF = $arr4 + $arr3;
  $mergedG = array_merge($arr3, $arr4);
  $mergedH = array_merge($arr4, $arr3);

  print_r($mergedE);
  print_r($mergedF);
  print_r($mergedG);
  print_r($mergedH);

  // デバッグ用に配列の全ての要素をまとめて出力するには、print_r関数を使うのが便利です。
  // 人間の目にわかりやすいように、改行を入れてくれることがvar_dumpとの違いです。
  // 改行をそのまま表示しテックれるHTMlの<pre>タグとの相性が非常にいい関数です。
  // ただし、nullやfalseは出力してくれないので、それらも出力したい場合は var_dumpを使う方が便利です。

?>