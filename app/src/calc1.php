<?php
// 四則演算などの計算をする
// 累乗：**
echo 7 ** 3;

//1を加えるまたは引く -- インクリメント、デクリメント
// ++$a：前置加算子
// $aに1を加えた後で$aを返す
// 「$added = $num++;」の場合は（７のままの状態の）$numを$addedに代入した後で$numに1を加えている
$num =7;
$added = ++$num;
echo '前置インクリメント時のnum：',$num;
echo '前置インクリメント時のadded：',$added;
$num = 7;
$added = $num++;
echo '後置インクリメント時のnum：',$num;
echo '後置インクリメント時のadded：',$added;

?>