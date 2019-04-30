<?php

class eighteen{

    public function __construct(){
        $res = $this->NumberOf1(10);
        var_dump($res);
    }
    public function NumberOf1($param = 0){
        header("Content-type:text/html;charset=utf-8");
        $res = '';
        $nums = 0;
        while(1){
            
            $yu = $param % 2;
            if($yu == 1){$nums = $nums + 1;}
            
            $param = floor($param / 2);
            
            $res .= $yu;
            if($param == 0){
                return $nums;
            }
        }
    }


}
new eighteen();
