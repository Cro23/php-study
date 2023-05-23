<?php
// 配列の各要素をスカラー型変数に割り当てる -- list()
$userData = [12345,'Taro Yamada','TOKYO',32];
list($id,$name,$prefecture,$age) = $userData;
print_r($userData);
?>

<p><?php echo $id ?></p>
<p><?php echo $name ?></p>
<p><?php echo $prefecture ?></p>
<p><?php echo $age ?></p>

<!-- list()を使う必要があるのは、CSVファイルの1列目を「ユーザーID」、2列目を「ユーザ名」と解釈させるというように、
元々は順序で管理されていたデータに人間的な意味を与えたい時です。
プログラマー自身がデータ構造を定義できる時は、はじめから連想配列で定義した方がスマートなプログラムになります。 -->

<?php

$chairs = [
  ['あ', 'い', 'う', 'え', 'お'],
  ['か', 'き', 'く', 'け', 'こ'],
  ['さ', 'し', 'す', 'せ', 'そ'],
];

$chairs[] = ['た', 'ち', 'つ', 'て', 'と'];
echo count($chairs);
?>

<?php
// 特別な意味を持つ値に名前をつける -- 定数
// define('定数名',値);
// echo 定数名
// 変数と違いドル記号は不要
// 後から上書きできない

define('TAX', 0.08);
$price = 100 *  TAX;
echo $price;

// 以下は、「消費税」と「外部サーバーのホスト名」を定数として定義し、出力する例です。
define('TAX_PERCENT', 0.08);
define('SMTP_HOST', 'example.com');
?>

<p>消費税率は：<?php echo TAX_PERCENT;?></p>
<p>100円NO税込金額は<?php echo 100 + 100*TAX_PERCENT;?></p>
<p>SMTPサーバーは<?php echo SMTP_HOST;?></p>

<?php
// PHPにより値が設定される定数 -- マジック定数
// 改行を表すPHP_EOLのような、PHPにあらかじめ定義された定数の中には、
// 参照された場所によって異なる値を返す定数もある。
// マジック定数

  function someFunction() {
    echo '現在の関数名は：',__FUNCTION__,'です。<br>';
  }
  echo '現在のファイル名は：',__FILE__,'です。<br>';
  echo '現在の行番号は：',__LINE__,'です。<br>';
  echo '現在のディレクトリは：',__DIR__,'です。<br>';
  someFunction();
?>