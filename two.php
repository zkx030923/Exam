<?php

/*算法——水仙花*/

new Two;

class Two{


    public function __construct(){
        $res=$this->Daff(153,999);
        var_dump($res);
    }

    public function Daff( $start='' , $end='' ){
        for($i=$start;$i<=$end;$i++){
            $res=$this->isDaff($i);
            if(!empty($res))$arr[]=$res;
        }
        return $arr;

    }

    public function isDaff($i){

        $unit =  ($i%10)*($i%10)*($i%10);
        $ten =   floor(($i%100)/10)*floor(($i%100)/10)*floor(($i%100)/10);
        $hund = (floor($i/100))*(floor($i/100))*(floor($i/100));

        $sum=$unit+$ten+$hund;

        if($sum==$i){
            return $i;
        }

    }

}
