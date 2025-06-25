<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>トップページ</title>
</head>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Slick Slider CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<!-- Slick Slider JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<body>

<?php if (isset($_SESSION["username"])): ?>
    <h2>こんにちは、<?= $_SESSION["username"] ?> さん！</h2>
    <h2>現在のポイントは<?= $_SESSION["point"] ?>pt</h2>
    <p><a href="home.php">マイページへ</a></p>
    <p><a href="logout.php">ログアウト</a></p>
<?php else: ?>
    <h2>こんにちは、ゲストさん！</h2>
    <p><a href="login_main.php">ログインはこちら</a></p>
<?php endif; ?>
<div class="slider">
    <div class="shopping-title">
        <img src="img/1.jpg" alt="ショッピングイメージ" width="200" height="150">
        <span class="best">売れ筋商品</span>
        <span class="goods">ねんどろいど ゴジラ</span>
        <span>￥6000</span>
    </div>
    <!-- <div class="shopping-title">
        <img src="img/2.jpg" alt="ショッピングイメージ" width="200" height="150">
        <span class="best">売れ筋商品</span>
        <span class="goods">ねんどろいど ゴジラ</span>
        <span>￥6000</span>
    </div> -->
    <div class="shopping-title">
        <img src="img/3.jpg" alt="ショッピングイメージ" width="200" height="150">
        <span class="best">売れ筋商品</span>
        <span class="goods">ねんどろいど ゴジラ</span>
        <span>￥6000</span>
    </div>
    <div class="shopping-title">
        <img src="img/4.jpg" alt="ショッピングイメージ" width="200" height="150">
        <span class="best">売れ筋商品</span>
        <span class="goods">ねんどろいど ゴジラ</span>
        <span>￥6000</span>
    </div>
    <div class="shopping-title">
        <img src="img/5.jpg" alt="ショッピングイメージ" width="200" height="150">
        <span class="best">売れ筋商品</span>
        <span class="goods">ねんどろいど ゴジラ</span>
        <span>￥6000</span>
    </div>
    <div class="shopping-title">
        <img src="img/6.jpg" alt="ショッピングイメージ" width="200" height="150">
        <span class="best">売れ筋商品</span>
        <span class="goods">ねんどろいど ゴジラ</span>
        <span>￥6000</span>
    </div>
</div>
</body>
</html>

<!-- GPT自動生成 -->
<script>
$(document).ready(function(){
  $('.slider').slick({
    slidesToShow: 3,       // 同時に見せる枚数
    slidesToScroll: 1,     // 一度にスクロールする枚数
    arrows: false,          // 左右ボタン
    dots: false,            // 下の丸いインジケーター
    infinite: true,        // ループする
    autoplay: true       // 自動再生（trueにすると自動で動く）
  });
});
</script>

<style>
.slider {
    width: 50%;
    margin: 0 auto;
}
.shopping-title {
    position: relative;
    text-align: center;
    margin: 10px;
}
.shopping-title img {
    width: 100%;
    height: auto;
}
.shopping-title .best {
    position: absolute;
    top: 10px;
    left: 10px;
    background-color: rgba(255, 0, 0, 0.7);
    color: white;
    padding: 5px;
    font-weight: bold;
}
.shopping-title .goods {
    display: block;
    margin-top: 10px;
    font-size: 1.2em;
    font-weight: bold;
}
.shopping-title span {
    display: block;
    margin-top: 5px;
    font-size: 1em;
}
.shopping-title span:last-child {
    color: red;
    font-weight: bold;
}
.shopping-title span:nth-child(2) {
    color: blue;
    font-weight: bold;
}
</style>
