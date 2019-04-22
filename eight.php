<?php

class eight{

    public function __construct(){
        $res=$this->index(['小孙','小张','小刘','小党','小许','小王'],4);
        var_dump($res);
    }

    public function index($parm='',$m=''){

        $num=0;

        while(count($parm)>1){

            foreach($parm as $k=>$v){
                $num++;
                if($num==$m){
                    unset($parm[$k]);
                    $num=0;
                }
            }
        }
        return $parm;

    }

}

new eight();