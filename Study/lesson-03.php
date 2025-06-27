<?php
// 演算子の使用例
// 算術演算子
$sum = 10 + 5; // 加算
echo "Sum: $sum\n";
//文字列は整数型に変換されて加算される
$sum1 = "10" +  5;// 15
echo "Sum with string: $sum1\n"; // 文字列と数値の加算
$difference = 10 - 5; // 減算
echo "Difference: $difference\n";
$product = 10 * 5; // 乗算
$quotient = 10 / 5; // 除算
$remainder =  5;// 剰余じょうよ

// 代入演算子
$number = 10;
$number += 5;
$number -= 5;
$number *= 5;
$number /= 5;
$number %= 5;

// 比較演算子
$result1 = (10 != 10); // 等しい
var_dump($result1); // false
echo "Result1: $result1\n"; 
$result2 = (10 != 5); // 等しくない
echo "Result2: $result2\n";
$result3 = (10 > 5); // より大きい
$result4 = (10 < 5); // より小さい
$result5 = (10 >= 10); // 以上
$result6 = (10 <= 5); // 以下

// 論理演算子
$logical_and = ($result1 && $result2); // 論理積AND
var_dump(value: $logical_and); // false
$logical_or = ($result1 || $result2); // 論理和OR
var_dump($logical_or); // true
$logical_not = !($result5); // 論理否定NOT
var_dump($logical_not); // false

//三項演算子
$message = (10 < 5) ? "10は5より大きい" : "10は5以下";
echo "Message: $message\n";

// 文字列演算子 
$greeting = "Hello, ";
$name = "World!";
$full_greeting = $greeting . $name; // 文字列連結
$num = "5";
$num2 = "10";
$full_greeting = $greeting . $num . $num2; // 文字列連結
var_dump($full_greeting);
$full_greeting = $num + $num2;
var_dump($full_greeting);

// 配列演算子
$array = array("v1" => 1, "v2" => 2, "v3" => 3);// 配列の定義
var_dump($array);
$array1 = [4, 5, 6, 7];
$merged_array = $array + $array1; // 配列のマージ（結合）
/**注意: PHPでは配列の結合はキーが重複する場合、後の値が優先される
   例えば、$arrayと$array1の両方にキー1がある場合、$array1の値が使用される
   ここでは、キーが整数であるため、結合はキーの値を基に行われる
*/
var_dump($merged_array); // 結合された配列を表示
$merged_array = array_merge($array, $array1, $array1); // 配列のマージ
var_dump($merged_array); // array_mergeを使用した結合
echo "Length:" . count($merged_array) , "\n";
foreach ($merged_array as $value) {
    echo "Value: $value\n"; // 各値を表示
}
?>

<script>
// JavaScriptの演算子の使用例
// +は文字列連結と判断され、５が文字列に変換される
var sum = "10" + 5// 105
console.log("Sum: " + sum);
</script>