<?php 
//interger
$age = 25; // 整数型
echo gettype($age), "\n"; // 型を取得

// float
$height = 5.9; // 浮点型
echo gettype($height), "\n"; // 型を取得

// string
$name = "John Doe"; // 文字列　シングルとダブルクオーテーション
echo gettype($name), "\n"; // 型を取得

// boolean
$is_student = true; //　真偽値型
echo gettype($is_student), "\n"; // 型を取得

if( $is_student ) {
    echo "True", "\n";
} else {
    echo "False", "\n";
}

// array
$fruits = array("apple", "banana", "cherry"); // 配列型
echo $fruits[1], "\n";
$color = ["red", "green", "blue"]; // 短縮記法の配列型
echo $color[1], "\n";

//object
class Person {
    public $name;
    public $age;
}
// インスタンス化
$person = new Person();
//Person person = new Person();[java]
$person -> name = "XIA";
//person.name = "XIA";[java] 
$person -> age = 25;

echo $person->name;
echo gettype($person), "\n"; // 型を取得
var_dump($person); // 詳細情報を表示

// null
$null_value = null; // null型   初期化されていない時
echo gettype($null_value), "\n"; // 型を取得
?>