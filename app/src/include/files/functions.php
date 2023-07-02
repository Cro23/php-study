<?php

/**
 * require_once命令でPHPプログラムを読み込む
 * 
 * 
 * 生年月日を元に年齢を計算して返す関数
 */

 function calcAge(int $birthday): int
 {
  return (int)((date('Ymd') - $birthday) / 10000);
 }