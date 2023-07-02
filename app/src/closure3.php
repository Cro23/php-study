<?php

declare(strict_types=1);
/**
 * 
 * 2つ3つ程度の処理バリエーションなら、クロージャーより条件分岐を選ぶ
 */

//  ユーザー向けの「その他」欄の出力モード
define('EXTRA_PRINT_MODE_USER', 1);

//  販売事業者向けの「その他」欄の出力モード
define('EXTRA_PRINT_MODE_VENDOR', 2);

function printPurchased(array $items, int $extraPrintMode): void
{
  echo '<table border="1">';
  echo '<tr>';
  echo '<th>購入日</th>';
  echo '<th>商品名</th>';
  echo '<th>価格</th>';
  echo '<th>その他</th>';
  echo '</tr>';
  foreach ($items as $item) {
    echo '<tr>';
    echo '<td>', $item['data'], '</td>';
    echo '<td>', $item['name'], '</td>';
    echo '<td>', $item['price'], '</td>';
    $extraData = '';
    if ($extraPrintMode === EXTRA_PRINT_MODE_USER) {
      $extraData = "色：{$item['color']} サイズ：{$item['size']}";
    } elseif ($extraPrintMode === EXTRA_PRINT_MODE_VENDOR) {
      $extraData = "ユーザーID：{$item['user-id']} 商品No.：{$item['item-number']}";
    }
    echo '<td>', $extraData, '</td>';
    echo '</tr>';
  }
  echo '</table>';
}


$items = [
  [
    'user-id' => 'tanaka-1234',
    'data' => '2018-11-21',
    'name' => 'ドレスシャツ',
    'price' => 2160,
    'color' => 'white',
    'size' => 'M',
    'item-number' => 91025,
    'serial' => 'PLG01219'
  ],
  [
    'user-id' => 'tanaka-1234',
    'data' => '2018-09-05',
    'name' => 'キッズパジャマ',
    'price' => 1620,
    'color' => 'red',
    'size' => 110,
    'item-number' => 90081,
    'serial' => 'ZAQ80124'
  ]
];

echo 'ユーザのマイページ内の購入履歴';
PrintPurchased($items, EXTRA_PRINT_MODE_USER);
echo '販売事業者専用ページ内の購入履歴';
PrintPurchased($items, EXTRA_PRINT_MODE_VENDOR);


