<?php
// 値のデータ型を変換する -- キャスト
// 「0.12345」という小数を「1.2345E-1」という指数表記で表した文字列値があったとします。
// 文字列型である「1.2345E-1」のままでは、足し算や引き算をすることができません。
// このような時に役立つのが、型キャスト、または、データ型変換のための関数です。
// このいずれかを使って、文字列型である「1.2345E-1」を、浮動小数点数型である「0.12345」にデータ型変換することで、演算ができるようになります。

// 関数とは、一連のプログラム処理を1つの命令としてまとめたもののことです。
// ここで紹介した関数は、PHPにあらかじめ用意されている内部関数とよばれるもののうち、データ型を変換するために使われる一部のものです。
// 型キャストの記法である(int)と(integer)は同じ意味です。

// $valという変数を変換する場合、型キャスト、関数での記法はそれぞれ以下のようになります。
// ・型キャストで変換する場合： (int)$val
// ・関数で変換する場合：intval($val)

// 四捨五入などの処理を行いたい場合はキャストではなくPHPの別の関数を使います。
// ・四捨五入：round関数
// ・切り上げ：ceil関数
// ・切捨て：floor関数


// 計算式の中では、関数を使った方が読みやすい
// データ型変換　関数
echo intval(1.5) + 2.6;
