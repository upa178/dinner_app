<?php
session_start();

$errors = $_SESSION['errors'] ?? [];
unset($_SESSION['errors']);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/new.css">
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    <?php include "header.php" ?>
    <div class="login-wrp login-new-wrp">
        <div class="login">
            <p>新規登録</p>
            <?php foreach ($errors as $error) : ?>
                <div class="errors">
                    <div class="error-wrp">
                        <i class="fas fa-exclamation-circle fa-1x error-mark"></i>
                        <p class="error"><?php echo $error ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
            <form action="/create" method="post">
                <input type="text" name="mailaddress" placeholder="メールアドレス" class="login-info">
                <input type="text" name="username" placeholder="ユーザー名" class="login-info">
                <input type="password" name="password" placeholder="パスワード" class="login-info">
                <input type="password" name="passwordver" placeholder="確認用パスワード" class="login-info">
                <input type="submit" class="login-button" value="登録">
            </form>
        </div>
    </div>
</body>

</html>