# jsnlib-rand
取得多種形式的亂數

````php
require_once 'vendor/autoload.php';

$Rand = new Jsnlib\Rand;

//單一亂數字串
echo $Rand->get(15, "1,2,3");

//多筆亂數字串
$ary = $Rand->get_np(10, 15,"1,2");
foreach ($ary as $val) 
{
	echo $val."<br>";
}

````

## API
### get(int $length, string $type): string
取單一字串
- length：要顯示的文字長度
- $type：1是數字，2是英文大寫，3是英文小寫。使用字串指定，例如 "1,3" 即亂數僅可出現數字與英文小寫

### get_np(int $length, int $quality, string $type): array
取多個不重複字串
- length：要顯示的文字長度
- quality: 數量
- $type：1是數字，2是英文大寫，3是英文小寫。使用字串指定，例如 "1,3" 即亂數僅可出現數字與英文小寫
