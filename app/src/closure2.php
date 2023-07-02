<?php declare(strict_types=1);

/**
 * あるユーザの購入履歴を表示する関数
 * 
 */
function printPurchased(array $items, callable $extraDataFunc): void
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
    // 「その他」欄に印字するデータは呼び出し元が自由に設定できます。
    echo '<td>', $extraDataFunc($item), '</td>';
    echo '</tr>';
  }
  echo '</table>';
}

/**メインルーチン */

/**
 * あるユーザが購入した商品の配列
 */

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
 printPurchased($items, function($item){ return "色：{$item['color']} サイズ：{$item['size']}"; });

 echo '販売事業者専用ページ内の購入履歴';
 printPurchased($items, function($item){ return "ユーザーID：{$item['user-id']} 商品No.：{$item['item-number']}"; });