<?php
// switch
$num = null;
var_dump( $num );
echo isset(($num)) ? "変数が代入した \n" : "何もない \n";
echo empty($num) ? "中には何もない \n" : "中には何かある \n";
echo is_null($num) ? "Null \n" : "Not Null \n";

switch($num) {
    case 1:
        echo "1 \n";
        break;
    case 2:
        echo "2 \n";
        break;
    case 3:
        echo "3 \n";
        break;
    default:
        echo "No num";
}
?>

<!-- <h1 id="change">変わりますよ</h1>
<button onclick="Text()">クリック</button>
<script>
function Text() {
    document.getElementById("change").innerHTML = "こんにちは";
}
</script> -->