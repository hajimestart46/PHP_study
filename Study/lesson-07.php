<?php
// for
for ($i = 0; $i < 5; $i++) {
    echo "(for)現在の値は: $i\n";
}

// while
$i = 0;
while($i < 5) {
    echo "(while)現在の値は: $i\n";
    $i++;
}

// do-while
//一旦、doが処理されるので、出力される
$j = 6;
do {
    echo "(do-while)現在の値は: $j\n";
    $j++;
} while($j < 5);

// foreach
//各要素に対して反復処理が行われる
$num = array(1, 2, 3, 4);
foreach($num as $i) {
    echo nl2br("数字は：$i\n");
}
//キーを使用するとき
foreach($num as $k => $i) {
    echo nl2br("{$k} => {$i}\n");
}
?>