<?php

class six{

    public function __construct(){
        $res=$this->index(1000);
        echo "该区间存在的1为 ".$res." 个";
    }

    public function index( $pram='' ){

        $sum=0;
        for($i=0;$i<=$pram;$i++){
            $k=$i;
            for($j=1;$j<=strlen($i);$j++){
                $v=$k%10;
                if($v==1){
                    $sum++;
                }
                $k=floor($i/10);
            }
        }
        return $sum;

    }

}
new six();