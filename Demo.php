<?php
require_once 'vendor/autoload.php';

$rand = new Jsnlib\Rand;

// 取得一筆亂數
echo $rand->get(5, [1, 2, 3])[0];
echo "<br>";

// 取得10筆亂數
$result = $rand->get(10, [1, 2, 3], 10);

foreach ($result as $val) 
{
	echo $val."<br>";
}