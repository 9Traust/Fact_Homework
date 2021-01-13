<?
$text = $_GET['comment'];
$log = "From: ".$_GET['login'];
mail('receiver@example.com', 'My comment', $text, $log);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get">
    <p><b> Leave your comment</b></p>
    <p>login: <input type="text" name="login"></p>
    <p><textarea name="comment" style="min-width: 212px"></textarea></p>
    <p><button type="submit" name="btn">Send</button></p>
</form>
</body>
</html>
