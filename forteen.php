<?php

class forteen{

    public function __construct(){
        $res=$this->FindNumbersWithSum([1,2,3,4,5],6);
        var_dump($res);
    }

    public function FindNumbersWithSum($arr=[],$sum=''){


        $res=[];

        for($i=0;$i<count($arr);$i++){
            for($j=$i+1;$j<count($arr);$j++){
                if($arr[$i] + $arr[$j] == $sum){
                    $res[][$i] = $arr[$i];
                    $res[count($res)-1][$j] = $arr[$j];
                    $res[count($res)-1]['X'] = $arr[$i]*$arr[$j];
                }
            }
        }

        if(empty($res)){
            return "无结果";
        }


        $Temp['val']=$res[0]['X'];
        $Temp['key']=0;

        foreach($res as $k=>$v){
            if($v['X']<=$Temp['val']){
                $Temp['key']=$k;
                $Temp['val']=$v['X'];
            }
        }


        $str="";
        foreach ($res[$Temp['key']] as $k => $v) {
            if(isset($arr[$k]) && !empty($arr[$k])){
                $str .= $arr[$k].',';
            }   
        }
        return $str;
    }


}

new forteen();