<?php

//1+2+3+4+5=15

class twelve{

    public function __construct(){
        $res=$this->dataSum("5");
        print_r($res);
    }

    public function dataSum($pram=''){

        $pram=range(1, $pram);
        $sum=array_sum($pram);
        return $sum;

    }

}
new twelve();