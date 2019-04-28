<?php

class sixteen{


    public function __construct(){

        $res=$this->Find(7,[[1,2,3],[4,5,6],[7,8,9]]);
        var_dump($res);

    }

    public function Find($target,$array){

        $row=0;
        $col=count($array)-1;

        for($i=0;$i<$col;$i++){

            if($target>$array[$row][$col]){

                $target++;

            }elseif ($target<$array[$row][$col]) {

                $target--;

            }else{

                return true;

            }

        }

        return false;


    }

}

new sixteen();