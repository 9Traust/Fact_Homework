<?php
echo "<p>Задание 1.</p>";
$word = "helloween";
$len = mb_strlen($word);
if ($len > 5){
    echo substr($word, 5)."...";
}
else {
    echo $word;
}

echo "<p>Задание 2.</p>";
$str = "banana is not citrus";
$str1 = str_replace('a', '1', $str);
$str2 = str_replace('b', '2', $str1);
$str3 = str_replace('c', '3', $str2);
echo $str3;

echo "<p>Задание 3.</p>";
$abc = "abc abc abc";
$need = "b";
$pos = strripos($abc, $need);
echo $abc.'<br>';
echo 'Последняя буква '.$need.' была найдена на позиции '.$pos;

echo "<p>Задание 4.</p>";
$string = "html css php";
echo $string.'<br>';
$string2 = explode(' ', $string);
print_r($string2);

echo "<p>Задание 5.</p>";
$date1 = "02-04-2020";
$date2 = "02-04-2021";
function countDays($date1, $date2)
{
    $d1_ts = strtotime($date1);
    $d2_ts = strtotime($date2);
    $seconds = abs($d1_ts - $d2_ts);
    return floor($seconds / 86400);
}
echo countDays($date1, $date2);

echo "<p>Задание 6. (проверка на .png)</p>";
$png = "banana.png";
$search = ".png";
$pos1 = strripos($png, $search);
if ($pos1 == mb_strlen($png)-mb_strlen($search))
    echo "Yes";
else
    echo "No";