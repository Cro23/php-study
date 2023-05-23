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

?>

<p><pre><?php print_r($chairs)?></pre></p>
<p><pre><?php print_r(count($chairs))?></pre></p>