<?php
session_start();

// データ初期化
if (!isset($_SESSION["properties"])) {
    $_SESSION["properties"] = [];
}

// 検索用変数初期化
$search_location = $_GET["location"] ?? '';
$search_max_rent = $_GET["max_rent"] ?? '';

// 登録処理
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = trim($_POST["title"] ?? '');
    $location = trim($_POST["location"] ?? '');
    $rent = (int)($_POST["rent"] ?? 0);

    if ($title && $location && $rent > 0) {
        $_SESSION["properties"][] = [
            "title" => $title,
            "location" => $location,
            "rent" => $rent,
        ];
    }
}

// 検索処理
$filtered = array_filter($_SESSION["properties"], function ($p) use ($search_location, $search_max_rent) {
    $match_location = $search_location === '' || stripos($p["location"], $search_location) !== false;
    $match_rent = $search_max_rent === '' || $p["rent"] <= (int)$search_max_rent;
    return $match_location && $match_rent;
});
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>物件管理システム</title>
</head>
<body>
    <h1>🏢 不動産物件管理（登録・検索）</h1>

    <h2>🔍 物件検索</h2>
    <form method="GET">
        住所キーワード：<input type="text" name="location" value="<?= htmlspecialchars($search_location) ?>">
        家賃上限：<input type="number" name="max_rent" value="<?= htmlspecialchars($search_max_rent) ?>">
        <button type="submit">検索</button>
    </form>

    <h2>➕ 物件登録</h2>
    <form method="POST">
        物件名：<input type="text" name="title" required><br>
        住所：<input type="text" name="location" required><br>
        家賃（円）：<input type="number" name="rent" required><br>
        <button type="submit">登録</button>
    </form>

    <h2>📋 物件一覧（<?= count($filtered) ?> 件）</h2>
    <?php foreach ($filtered as $property): ?>
        <div style="border:1px solid #ccc; padding:10px; margin:10px 0;">
            <strong><?= htmlspecialchars($property["title"]) ?></strong><br>
            🏠 住所：<?= htmlspecialchars($property["location"]) ?><br>
            💰 家賃：<?= number_format($property["rent"]) ?> 円
        </div>
    <?php endforeach; ?>
</body>
</html>
