<?php
    session_start();

    $item_name = $_GET['id'];// 商品id

    //わからない知識
    // 商品の詳細情報を取得するための仮のデータ
    $isFavorite = isset($_SESSION['favorites']) && in_array($item_name, $_SESSION['favorites']);
?>

<DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>商品詳細</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>商品詳細</h1>
    <div class="product-details">
        <img src="img/<?= $item_name ?>.jpg" alt="商品画像" width="300" height="300">
        <h2>ねんどろいど ゴジラ</h2>
        <p>価格: ￥6000</p>
        <p>説明: これはゴジラのねんどろいどフィギュアです。</p>
        <p>在庫: あり</p>
        <p>カテゴリー: フィギュア</p>
        <p>気に入る：
            <!-- 商品IDを取得 -->
            <a class="maru" href="favorite.php?id=<?= $item_name ?>">
                <?= $isFavorite ? '●' : '○' ?>
            </a>
        </p>
        <button type="button">カートに入れる</button>

    </div>
    <p><a href="index.php">トップページへ戻る</a></p>
</body>
</html>