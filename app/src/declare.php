<?php
/**
 * 
 * 引数と戻り値のデータ型を指定する -- 型宣言
 * 
 * ある関数の「期待する引数のデータ型」と「予定している戻り値のデータ型」を示したいときに、
 * その関数の定義に型宣言を加えます。
 * 
 * function 関数名(データ型1 引数1, データ型2 引数2...): 戻り値のデータ型
 * 
 */

// 例
// function doSomething(int $num, string $message): bool
// {
//   return true;
// }
//
// この時、それぞれの引数や戻り値は、nullであってはなりません。


// 例
// function doSomething(?int $num, ?string $message): ?bool
//
// nullを引数として受け取ったり、nullを戻り値として返すことを許容したいときは、
// データ型名の前にクエスチョン記号（?）をつけます

/**
 * 
 * データ型の暗黙的な変換を防ぐ -- declare文とstrict_types
 * 
 * 型宣言を行なっても、期待していないデータ型が渡せてしまう場合があります。
 * 
 * 
 */

//  $ret = doSomething(true, 'ARG2');
 // 第1引数が整数型の1に変換され、エラーとならない

//  $ret = doSomething('3', 'ARG2'); 
 // 第1引数が整数型の3に変換され、エラーとならない

//  ↑PHPが、データ型を暗黙的に変換した上で関数に渡しているからです。

//  この暗黙的な型変換を防ぎ、エラーを発生させたい時は、プログラムファイルの冒頭で
//  declare命令を使い、厳密な型チェック（strict types）を有効にする必要があります。

declare(strict_types=1);

function doSomething(int $num, string $message): bool
{
  return true;
}

$ret = doSomething(true, 'ARG2'); //ここでエラーとなり、プログラム処理が終了する
$ret = doSomething('3', 'ARG2'); //実行されない