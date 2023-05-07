<?php
// 文字列データの扱い。固定値と変数値を合成する
$value = 'World';
$combined = "Hello {$value}";
$combined2 = 'Hi ';
$combined2 .= $combined;
$combined2 .= ' ??';


echo $combined,'<br>';
echo $combined2,'<br>';
//　ダブルクオート内で変数を展開。波括弧を使うことができる
echo "Hello {$value}";

// 文字列データの扱い。クオート内でクオートを使う
$mailBody = "お問い合わせを受け付けました。" . PHP_EOL;
$mailBody .= "■お問い合わせ内容：" . PHP_EOL;
$mailBody .= "\tサイズを教えてください。";

// 文字列データの扱い。長い文字列にはヒアドキュメントを使う
$itemNumber = 'abc123';

// ヒアドキュメント
$mailBody2 = <<< MAIL
お問い合わせを受け付けました。

■お問い合わせ内容：
  商品番号「{$itemNumber}」について、"サイズ"と'色の種類'を教えてください。
MAIL;

?>

<pre><?php echo  $mailBody; ?></pre>
<pre><?php echo  $mailBody2; ?></pre>

<!-- ヒアドキュメント -->
<pre><?php echo <<< EOM
本文です。
本文です。
EOM; ?>
<!-- 開始タグをシングルクオートで囲むことで変数が展開されないようにできる -->
<pre><?php echo <<< 'EOM'
本文です。
本文です。
{$value}
EOM; ?>
</pre>
