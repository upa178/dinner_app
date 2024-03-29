<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/dinner.css">
    <link rel="stylesheet" href="css/header.css">
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">

</head>

<body>
    <div class="dinner-wrp">
        <form class="dinner-commit" action="./Api/complete-dinner-menu.php" method="POST">
            <input type="text" placeholder="料理名" class="dinner-info" name="dish-name">
            <textarea cols="30" rows="10" placeholder="レシピ" class="dinner-info" name="recipe"></textarea>
            <input type="submit" class="dinner-button" value="一覧へ登録">
        </form>
    </div>
</body>

</html>