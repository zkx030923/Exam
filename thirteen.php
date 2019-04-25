<?php

class thirteen{

    public function __construct(){

        $res=$this->add(5,8);
        var_dump($res);

    }

    public function add($num1='',$num2=''){

        $sum=$num1^$num2;
        return $sum;

    }

}

new thirteen();