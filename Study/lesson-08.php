<?php
// 関数
// 関数を定義するにはfunctionキーワードを使用する
// 関数名、引数リスト、関数本体を指定する
function car($color) {
    echo nl2br("車の色は $color");
}
// 定義した関数を呼び出す
car("RED");

// 引数と戻り値
// 関数は引数を受け取ることもできる
// 戻り値はreturn文を使用して指定する
function car2($bland) 
{
    return "is $bland";
}
echo car2("BMW");
?>