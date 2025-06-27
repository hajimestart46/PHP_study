<?php
// キャスト
$number = 10;
// int
(int)$number = 10;
var_dump($number);

//float
(float)$number = 10.5;
var_dump($number);

// string
(string)$number = "10.5";
var_dump($number);

// bool
(bool)$number = true;
var_dump($number);

// array
(array)$number = [1, 2, 3];
var_dump($number);

// object
(object)$number;
var_dump($number);

// null
unset($number); // 変数を未定義にする
?>