<?php

//奇偶数

$even=[];
$odd=[];

$arr=[1,2,3,4,5,6,8,8];

foreach($arr as $k=>$v){
    if($v%2==0){
        $even[]=$v;
    }
}
echo "<br/>";

foreach($arr as $k=>$v){
    if($v%2!=0){
        $odd[]=$v;
    }
}
$arr=array_merge($even,$odd);
print_r($arr);
