<?php
$flag = true;
for ($i = 0; $i < 19; $i++)
{
    $flag &= isset($_POST[strval($i + 1)]);
}
$array = [false, false, true, false, false, false, false, false, true,
         true, false, false, true, true, false, false, false, false, true];
$count = 0;
if ($flag)
{
    for ($i = 0; $i < 19; $i++)
    {
        if ($array[$i] == boolval($_POST[strval($i + 1)]))
            $count++;
    }
    if ($count > 15)
        echo $_POST['firstname']." Ваш результат - ".$count.". У вас покладистый характер.";
    elseif ($count >= 8 && $count <= 15)
        echo $_POST['firstname']." Ваш результат - ".$count.". Вы не лишены недостатков, но с вами можно ладить.";
    else
        echo $_POST['firstname']." Ваш результат - ".$count.". Вашим друзьям можно посочувствовать.";
}
else
{
    echo "Введенные данные некорректны.";
}