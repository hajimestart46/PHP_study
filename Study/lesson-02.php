<?php
// 変数名はアルファベット、数字、アンダースコアで始まる必要がある
$variable_name = "value";

// 変数名には数字使用できますが、最初の文字は数字で始めることはできない
// 要約名は数字で始めることはできない
$variable1 = "value1";

// 変数名は大文字と小文字を区別する
$VariableName = "value2";

// 変数名にはスペースを含めることはできない
// $variable name = "value3";

//大文字と小文字を区別する
$variable2 = "value4";
$Variable2 = "value5";

// 動的型付け言語なので、変数の型は実行時に決定される
$number = 10; // 整数型
echo gettype($number), "\n"; // 型を取得
$number = 10.5; // 浮動小数点型
echo gettype($number),"\n"; // 型を取得

?>