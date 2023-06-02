<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>u1</title>
    <style>
        body {
            background-color: <? isset($_GET['color']) && $_GET['color'] ===1 ? 'crimson':'black' ?>;
        }
        a {
            color: skyblue;
            font-size: 4em;
            padding: 40px;
        }
    </style>
</head>
<body>
    <a href="http://localhost/php_web/001">Linkas Vienas</a>
    <a href="http://localhost/php_web/001?color=1">Linkas Du</a>
</body>
</html>