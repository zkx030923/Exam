<?php

//奇偶数

$arr=[1,2,3,4,5,6,8,8];

foreach($arr as $k=>$v){
    if($v%2==0){
        echo "偶数为：".$v;
    }
}
echo "<br/>";

foreach($arr as $k=>$v){
    if($v%2!=0){
        echo "奇数为：".$v;
    }
}

