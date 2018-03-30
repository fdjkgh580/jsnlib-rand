# jsnlib-rand
取得多種形式的亂數

初始化
````php
require_once 'vendor/autoload.php';
$rand = new Jsnlib\Rand;
````
取得一筆亂數
````php
$rand->get(5, [1, 2, 3])[0];
// => 1x3DX
````
取得多筆單數
````php
// 取得10筆亂數
$result = $rand->get(10, [1, 2, 3], 10);
foreach ($result as $val) 
{
    echo $val."<br>";
}
// => 
// SL47CUGOPq
// Y1pTRHLXIj
// nkKhGd9f57
// lfX7s1qwYs
// Z788ZARX9g
// 9YcCLzh0lU
// 1k10G9Z5b1
// wef8i9JLf3
// 3x969P4ie8
// o5K00e0c4I
````

### get_np(int $length, int $quality, string $type): array
取多個不重複字串
- length：要顯示的文字長度
- quality: 數量
- $type：1是數字，2是英文大寫，3是英文小寫。使用字串指定，例如 "1,3" 即亂數僅可出現數字與英文小寫

