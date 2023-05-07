<pre>
<?php
// キャスト

// 型キャスト
echo (int)1.5 + 2.6 . PHP_EOL;
echo (int)(1.5 + 2.6) . PHP_EOL;
echo (int)1.5 + (int)2.6 . PHP_EOL;

// 関数
echo intval(1.5) + 2.6 . PHP_EOL;
echo intval(1.5 + 2.6) . PHP_EOL;
echo intval(1.5) + intval(2.6) . PHP_EOL;

// 関数を使った方がわかりやすい。変換したい対象がどこからどこまでなのかが、明瞭にわかる。

?>
</pre>