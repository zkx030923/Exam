<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/4/15
 * Time: 8:52
 */
namespace App\Http\Controllers;

use App\Http\Models\Week1;
use Illuminate\Http\Request;
use Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class Week1Controller extends Controller{

    public function login(){
        return view('week1.login');
    }
    public function doLogin(Request $request){
        $username=$request->post('username');
        $password=$request->post('password');
        $data=Week1::login($username,$password);
        if(!empty($data)){
            $res=json_encode($data);
            Redis::set('id',$res);

            echo "<script>alert('登录成功');location.href='userShow';</script>";
        }else{
            echo "<script>alert('登录失败');location.href='login';</script>";
        }
    }

    //用户展示
    public function userShow(){
        $data=Week1::userShow();
        return view('week1.userShow',['data'=>$data]);
    }
    //用户新增
    public function userAdd(){
        return view('week1.userAdd');
    }
    public function doUserAdd(Request $request){
        $data=$request->post();
        $res=Week1::userAdd($data);
        if($res){
            echo "<script>alert('新增成功');location.href='userShow';</script>";
        }else{
            echo "<script>alert('新增失败');location.href='userAdd';</script>";
        }
    }

    //用户删除
    public function userDelete(Request $request){
        $id=$request->get('id');
        $res=Week1::delete($id);
        if($res){
            echo "<script>alert('删除成功');location.href='userShow';</script>";
        }else{
            echo "<script>alert('删除失败');location.href='userShow';</script>";
        }
    }

    //奖品的列表展示
    public function prizeShow(){
        $data=Week1::prizeShow();
        return view('week1.prizeShow',['data'=>$data]);
    }
    //奖品的新增
    public function prizeAdd(){
        return view('week1.prizeAdd');
    }
    public function doPrizeAdd(Request $request){
        $data=$request->post();
        $res=Week1::prizeAdd($data);
        if($res){
            echo "<script>alert('新增成功');location.href='prizeShow';</script>";
        }else{
            echo "<script>alert('新增失败');location.href='prizeAdd';</script>";
        }
    }
    //奖品删除
    public function prizeDelete(Request $request){
        $id=$request->get('id');
        $res=Week1::prizeDelete($id);
        if($res){
            echo "<script>alert('删除成功');location.href='prizeShow';</script>";
        }else{
            echo "<script>alert('删除失败');location.href='prizeShow';</script>";
        }
    }
    //奖品修改
    public function prizeUpdate(Request $request){
        $id=$request->get('id');
        $res=Week1::prizeUpdate($id);
        return view('week1.prizeUpdate',['res'=>$res]);
    }
    public function doPrizeUpdate(Request $request){
        $data=$request->post();
        $res=Week1::doPrizeUpdate($data);
        if($res){
            echo "<script>alert('修改成功');location.href='prizeShow';</script>";
        }else{
            echo "<script>alert('修改失败');location.href='prizeShow';</script>";
        }
    }






    public function prize(){

        return view('week1.prize');
    }
    public function doPrize(){
//        echo "<meta charset='utf-8'/>";
        $data=Week1::prizeShow();
        $res=json_encode($data);
        $data=json_decode($res,true);
        $arr=array_rand($data);
        $rand_val=$data[$arr];
        return $rand_val;
    }

    public function prizeMenuAdd(Request $request){
        $id=$request->post();
        $p_id=implode($id);

        $res=Redis::get('id');
        $arr=json_decode($res,true);
        $u_id=$arr['id'];

        $res=DB::table('week1_prizemenu')->insert(['p_id'=>$p_id,'u_id'=>$u_id]);
        if($res){
            echo "<script>alert('抽奖成功');location.href='prize';</script>";
        }else{
            echo "<script>alert('抽奖失败');location.href='prize';</script>";
        }

    }


    //奖品名称展示
    public function prizeMenu(){
        $data=Week1::prizeMenu();
        return view('week1.menu',['data'=>$data]);
    }
    //奖品名单删除
    public function prizeMenuDelete(Request $request){
        $id=$request->get('id');
        $res=Week1::prizeMenuDelete($id);
        if($res){
            echo "<script>alert('删除成功');location.href='prizeMenu';</script>";
        }else{
            echo "<script>alert('删除失败');location.href='prizeMenu';</script>";
        }
    }




}