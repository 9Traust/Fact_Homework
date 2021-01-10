<?php

echo 'Задача 1<br>';
$arr = array();
function fillArray($arr)
{
    for($i = 0; $i < 5; $i++)
        $arr[$i] = rand(0, 100);
    print_r($arr);
}
fillArray($arr);

echo '<br>Задача 2<br>';
$string = "HTML, CSS, PHP, BITRIX";
function amountWords($string)
{
    $count = str_word_count($string);
    echo "Количество слов в строке: ".$count;
}
echo $string.'<br>';
amountWords($string);

echo '<br>Задача 3<br>';
function reversed($string)
{
    echo strrev($string);
}
reversed($string);

echo '<br>Задача 4<br>';
function stringLen($string)
{
    echo $count2 = strlen($string);
}
stringLen($string);

echo '<br>Задача 5<br>';
function column($string)
{
    $length = mb_strlen($string);
    for($i = 0; $i <= $length; $i++)
            echo $string[$i].'<br>';
}
column($string);