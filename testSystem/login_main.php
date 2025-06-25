<?php 
    //セッション開始
    session_start(); //分からない知識

    //設定済みのユーザー名とパスワード
    $users = [
            ["name" => "xia", "password" => "204626", "ponit" => 10000],
            ["name" => "yuko", "password" => "123456", "ponit" => 100],
            ["name" => "taro", "password" => "789012", "ponit" => 1200]
        ];

    //フォームが送信された場合の処理
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        //ループ
        foreach($users as $user){
            if($username === $user["name"] && $password === $user["password"]) {
                $_SESSION ["username"] = $username; //セッションにユーザー名を保存
                $_SESSION ["point"] = $user["ponit"]; //セッションにポイントを保存
                header("LOCATION: index.php");
                exit();
            } else {
                $message = "<span style='color:red'>ユーザー名またはパスワードが間違っています。</span>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>登録画面</title>
</head>
<body>
<h1>登録画面</h1>
<form action="login_main.php" method="POST">
    ユーザー名:<input type="text" name="username" /><br>
    パスワード:<input type="password" name="password" /><br>
    <input type="submit" value="ログイン" />
</form>
<?php
    //メッセージが設定されている場合は表示
    if(isset($message)) {
        echo $message;
    }
?>

