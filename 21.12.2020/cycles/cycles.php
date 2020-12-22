<?php
echo "1.<br><br>";
for ($j = 5; $j < 14; $j++)
{
    echo $j . '<br>';
}
echo "<br>2.<br><br>";
$num = 1000;
$count = 0;
//Через while:
/*while ($num >= 50)
{
    $num = $num / 2;
    $count++;
}
echo $num.'<br>';
echo "Amount of iterations: " . $count;*/
//Через for:
for ($num = 1000; $num >= 50;)
{
    $num = $num / 2;
    $count++;
}
echo $num.'<br>';
echo "Amount of iterations: " . $count . '<br>';
echo "<br>3.<br><br>";
$n = 3;
$arr = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
for ($i = 0; $i < $n; $i++)
{
    array_pop($arr);
}
echo '<br>';
print_r($arr);
