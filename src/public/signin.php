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
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/header.css">
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    <?php include "header.php" ?>
    <div class="login-wrp">
        <div class="login">
            <form action="/login" method="POST">
                <p>ログイン</p>
                <?php foreach ($errors as $error) : ?>
                    <div class="errors">
                        <div class="error-wrp">
                            <i class="fas fa-exclamation-circle fa-1x error-mark"></i>
                            <p class="error"><?php echo $error ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
                <input type="text" placeholder="メールアドレス" class="login-info" name="mailaddress">
                <input type="password" placeholder="パスワード" class="login-info" name="password">
                <input type="submit" class="login-button" value="ログイン">
            </form>
        </div>
    </div>
</body>

</html>