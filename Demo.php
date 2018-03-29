<?
require_once 'vendor/autoload.php';
header("Content-type: text/html; charset=utf-8");

$rand = new Jsnlib\Rand;

//單一亂數字串
echo $rand->get(15, "1,2,3");

//多筆亂數字串
$ary = $rand->get_np(10, 15,"1,2");
foreach ($ary as $val) 
{
	echo $val."<br>";
}
