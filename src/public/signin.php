<?php

use App\Lib\Session;
use App\Lib\Redirect;

require_once __DIR__ . '/../vendor/autoload.php';

$session = Session::getInstance();
$authuser = $session->auth();

if (!is_null($authuser)) {
    Redirect::handler('index.php');
}
$errors = $session->errors();
$session->clearErrors();


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
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="script.js"></script> -->
</head>

<body>
    <div class="login-wrp">
        <div class="login">
            <?php foreach ($errors as $error) : ?>
                <p class="error"><?php echo $error ?></p>
            <?php endforeach; ?>
            <form action="signin_complete.php" method="POST">
                <p>ログイン</p>
                <input type="text" placeholder="メールアドレス" class="login-info" name="email">
                <input type="password" placeholder="パスワード" class="login-info" name="password">
                <input type="submit" class="login-button" value="ログイン">
            </form>
        </div>
    </div>
</body>

</html>