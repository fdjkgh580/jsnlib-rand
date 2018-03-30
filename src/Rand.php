<?php
namespace Jsnlib;

class Rand 
{
    
    //不重覆時比對用的陣列
    private $notrepeat = [];

    
    //依類型給亂數字元
    private function sh($typeval)
    {
        //英文或數字
        switch($typeval) 
        {
            //數字
            case 1:
                return chr(rand(48, 57));   
                break;
                
            //英文大寫  
            case 2:
                return  chr(rand(65, 90));  
                break;
            
            //英文小寫
            case 3:
                return chr(rand(97, 122));  
                break;
        }
    }
    
    
    //$type 指定要取得亂數的形態
    private function rand_char(array $type)
    {
        $allarray = count($type) - 1; //因為用在陣列的關係需要-1
        
        $key = rand(0, $allarray);
        
        return $this->sh($type[$key]);
    }

    
    /**
     * 取單一字串
     * @param  int    $length 字串長度
     * @param  array  $type   類型
     * @return string         亂數值
     */
    private function single(int $length, array $type): string
    {
        $a = 0;
        $str = null;

        //字串左->右
        while($a < $length) 
        {
            
            //取得亂數單一字元
            $str .= $this->rand_char($type);

            $a += 1;
        }

        return $str;
    }
    
    
    /**
     * 取多個不重複字串
     * @param  int    $length  字串長度
     * @param  array  $type    類型
     * @param  int    $quality 取得的筆數
     * @return array          
     */
    function get(int $length, array $type,  int $quality = 1): array
    {
        $time = 0;
        $this->notrepeat = [];

        // 多筆
        for ($i = 0; $i < $quality; $i++) 
        {
            $time = $i + 1; //給人看的次數

            $rand_string = $this->single($length, $type);
            
            //檢查陣列中是否重複
            $in = in_array($rand_string, $this->notrepeat);
            
            if ($in !== false) throw new \Exception("Error");
            
            array_push($this->notrepeat, $rand_string);
        }
        
        return $this->notrepeat;
    }
}
