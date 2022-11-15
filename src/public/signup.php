<?php
require_once __DIR__ . '/../vendor/autoload.php';

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
    <link rel="stylesheet" href="style.css">
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="script.js"></script> -->
</head>

<body>
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
            <form action="" method="post">
                <input type="text" placeholder="メールアドレス" class="email" name="email">
                <input type="text" placeholder="ユーザー名" class="user-name" name="user-name">
                <input type="password" placeholder="パスワード" class="password" name="password">
                <input type="password" placeholder="確認用パスワード" class="confirm-password" name="sofirm-password">
                <input type="submit" class="user-register__button" value="登録">
            </form>
        </div>
    </div>
    <div class="complete-password">
        <div class="">
            <h5>アカウントが作成できました。</h5>
            <a class="button-complete" href="/signin.php">ログイン</a>
        </div>
    </div>
</body>

</html>
<script src="signup.js"></script>