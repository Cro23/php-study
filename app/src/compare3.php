<?php
/*
2つの値の等価と大小を同時に比較する -- 宇宙船演算子
「AとBは同じ」「AはBより大きい」「AはBより小さい」を同時に判定

比較結果
 0  : 右辺と左辺が等しい
 1  : 右辺が左辺より小さい
-1  : 右辺が左辺より大きい
*/

$point = 85;
var_dump($point <=> 85);
var_dump($point <=> 70);
var_dump($point <=> 100);