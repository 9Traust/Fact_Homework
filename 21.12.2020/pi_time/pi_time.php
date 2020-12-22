<?
define("Pi", "3.14159");
echo Pi;

$img = 0;
$time = date("H");
if (($time >= 8) && ($time < 20))
    $img = "img/sun.jpg";
elseif (($time >= 20) || ($time < 8))
    $img = "img/moon.jpg";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Time</title>
</head>
<body style="width auto; height: auto;
            background: url('<?php echo $img ?>');
            background-size: cover;">
        <h1 style="color: red"><? echo $time; ?></h1>
</body>
</html>
