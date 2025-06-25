<?php 
    session_start();
    
    if(!isset(($_SESSION['favorites']))) {
        $_SESSION['favorites'] = [];
    }

    if(isset($_GET['id'])) {
        // 商品IDを取得
        $id = $_GET['id'];

        if(in_array($id, $_SESSION['favorites'])) {
            // すでにお気に入りに登録されている場合は削除
            $_SESSION['favorites'] = array_diff($_SESSION['favorites'], [$id]);// array_diffは配列から特定の値を削除する関数　わからない知識
        } else {
            // お気に入りに登録されていない場合は追加
            $_SESSION["favorites"][] = $id;
        }
    }

    header("Location: item.php?id=" . $id);
    exit();
?>