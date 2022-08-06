<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/top.css">
    <link rel="stylesheet" href="css/header.css">
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    <%- include('header'); %>
    <div class="background">
        <div class="title">
            <p>晩御飯、なににする?</p>
        </div>
        <div class="explanation">
            <p>晩御飯の登録ができるサービスです。<br>
                日々の夕食を記録しておきましょう。</p>
        </div>
    </div>
    <div class="commit-wrp">
        <div class="commit">
            <p class="commitex">登録して、始めましょう</p>
            <a href="/new" class="button">登録</a>
            <p>会員の方はこちら</p>
            <a href="/login" class="login-link">ログイン</a>
        </div>
    </div>
</body>

</html>