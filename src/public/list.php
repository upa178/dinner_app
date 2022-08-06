<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/list.css">
    <link rel="stylesheet" href="css/header.css">
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    <%- include('header'); %>
    <% if(items.length > 0){ %>
    <% items.forEach((item) => { %>
    <div class="list-wrp">
        <div class="list">
            <div class="listname">
                <%= item.dinnername %>
            </div>
            <div class="listrecipe">
                <%= item.recipe %>
            </div>
        </div>
    </div>
    <% }); %>
    <% } else{ %>
    <div class="nomessage">
        <p>夕飯は登録されていません。<br>
            晩御飯登録から今日の夕飯を登録しましょう！
        </p>
    </div>
    <% } %>
</body>

</html>