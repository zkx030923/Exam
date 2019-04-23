<?php

class eleven{

    public function __construct(){

        $res=$this->strData();
        print_r($res);
    }

    public function strData(){

        $str="tneduts a ma I";
        return strrev($str);

    }

}
new eleven();