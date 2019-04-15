<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/4/15
 * Time: 8:57
 */
namespace App\Http\Models;

use Illuminate\Support\Facades\DB;

class Week1{

    //用户登录
    public static function login($username,$password){
        return DB::table('week1_username')->where(['username'=>$username,'password'=>$password])->first();
    }
    //用户展示
    public static function userShow(){
        return DB::table('week1_username')->paginate(3);
    }
    //用户新增
    public static function userAdd($data){
        return DB::table('week1_username')->insert($data);
    }
    //用户删除
    public static function delete($id){
        return DB::table('week1_username')->where(['id'=>$id])->delete();
    }


    //奖品的列表展示
    public static function prizeShow(){
        return DB::table('week1_prize')->get();
    }
    //奖品新增
    public static function prizeAdd($data){
        return DB::table('week1_prize')->insert($data);
    }
    //奖品删除
    public static function prizeDelete($id){
        return DB::table('week1_prize')->where(['id'=>$id])->delete();
    }
    //奖品修改
    public static function prizeUpdate($id){
        return DB::table('week1_prize')->where(['id'=>$id])->first();
    }
    public static function doPrizeUpdate($data){
        return DB::table('week1_prize')->where(['id'=>$data['id']])->update($data);
    }



    //奖品名单列表
    public static function prizeMenu(){
        return DB::select("SELECT week1_prizemenu.id,week1_username.username,week1_prize.prize_name FROM week1_prizemenu INNER JOIN week1_username ON week1_prizemenu.u_id=week1_username.id INNER JOIN week1_prize ON week1_prizemenu.p_id=week1_prize.id");
    }
    //奖品名单删除
    public static function prizeMenuDelete($id){
        return DB::table('week1_prizemenu')->where(['id'=>$id])->delete();
    }


}