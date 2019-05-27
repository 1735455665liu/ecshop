<?php

namespace App\Http\Controllers\Login;
use App\Model\User\UserInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class LoginController extends Controller
{
    /*登录页面*/
    public function login(){
        return view('login/login');
    }
    /*登录执行*/
    public function logindo(Request $request){
        $user_name=$request->input('user_name');
        $user_pwd=$request->input('user_pwd');
        $response=UserInfo::where(['user_name'=>$user_name])->first();
        $arr=json_encode($response);
        $res=json_decode($arr,true);
        $responsee=UserInfo::where(['user_tel'=>$user_name])->first();
        $arrr=json_encode($responsee);
        $ress=json_decode($arrr,true);
        if($res){//账号存在
            if(password_verify($user_pwd,$res['user_pwd'])){//密码正确
                session(['user_id' => $res['user_id'],'user_name'=>$res['user_name']]);
                echo '登陆成功,3秒候跳转至首页';
                header("refresh:3;url=/");
            }else{//密码错误
                $reponse=[
                    'errno'=>50002,
                    'msg'=>'账号或密码错误',
                ];
                die(json_encode($reponse,JSON_UNESCAPED_UNICODE));
            }
        }else if($ress){
            if(password_verify($user_pwd,$ress['user_pwd'])){//密码正确
                session(['user_id' => $ress['user_id'],'user_tel'=>$ress['user_tel']]);
                echo '登陆成功,3秒候跳转至首页';
                header("refresh:3;url=/");
            }else{//密码错误
                $reponse=[
                    'errno'=>50002,
                    'msg'=>'账号或密码错误',
                ];
                die(json_encode($reponse,JSON_UNESCAPED_UNICODE));
            }
        }else{//账号不存在
            $reponse=[
                'errno'=>50001,
                'msg'=>'账号或密码错误',
            ];
            die(json_encode($reponse,JSON_UNESCAPED_UNICODE));

        }
     }
     /*退出*/
    public function loginout(Request $request){
        if(session('user_id')==NULL){
            echo '你并没有登录呦！那就三秒钟后跳回登录页面';
            header("refresh:3;url=/login.html");
        }else{
            echo '退出成功！';
            $request->session()->forget(['user_id','user_name']);
            header("refresh:3;url=/");
        }
    }
}