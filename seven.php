<?php

class seven{

    public function __construct(){
        $res=$this->index(10);
        print_r($res);
    }

    public function index($parm=''){

        for($i=0;$i<=$parm;$i++){

            $arr[]=$i;
            $num=$i;

            while ($num%2==0) {

                $num=$num/2;

            }
            while ($num%3==0) {

                $num=$num/3;

            }
            while ($num%5==0) {

                $num=$num/5;

            }
            if($num != 0){

                $arr[]=$num;

            }

        }
        return $arr;

    }

}

new seven();