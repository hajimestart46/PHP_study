<?php
// 配列
$array = array(1, 2, 3, 4, 5); // 配列の定義
$array = [1, 2, 3, 4, 5]; // 短縮記法
// インデックス番号による要素へのアクセス 
$first_array = $array[0];
$last_array = $array[count($array) - 1];

$array = ["one" => 1, "two" => 2, "three" => 3]; // キーと値のペア
var_dump($array); // 配列の内容を表示

// 連想配列
$person = array(
    "name" => "XIA",
    "age" => 25,
    "city" => "China"
);
// キーによる要素へのアクセス
$name = $person["name"];
var_dump($name);
echo "Name: $name\n";
// 豆知識
// pythonではphpの連想配列は辞書型で作成できます
/** Python 
 * person = {
 *   "name": "XIA",
 *   "age": 25,
 *   "city": "China"
 * }
 * name = person["name"]
 * print(name)
*/
/** Java
 *  HashMap<String, Object> person = new HashMap<>();
 *  person.put("name", "XIA");
 *  person.put("age", 25);
 *  person.put("city", "China");
 *  
 *  Strign name = (String) person.get("name");
 *  System.out.println(name);
 */
$person["skills"][] = "running";
$person["skills"][] = "cooking";
$person["skills"]["running"][] = "fast";
$person["skills"]["running"][] = "slow";
$person["skills"]["running"]["fast"][] = "so fast";
$person["skills"]["running"]["fast"][] = "the best fast";
var_dump($person);
?>