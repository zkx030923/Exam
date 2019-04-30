<?php

class eighteen{

    public function __construct(){

        $res=$this->NumberOf1(10);
        var_dump($res);

    }

    public function NumberOf1($parm=''){

        $res='';
        $num=0;

        while (1) {
            
            $yu=$parm%2;

            if($yu==1){
                $num=$num+1;
            }

            $pram=floor($parm/2);

            $res.=$yu;

            if($parm==0){
                return $num;
            }
        }


    }


}