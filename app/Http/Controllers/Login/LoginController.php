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
        $res=UserInfo::where(['user_name'=>$user_name])->first()->toArray();
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
        }else{//账号不存在
            $reponse=[
                'errno'=>50001,
                'msg'=>'账号或密码错误',
            ];
            die(json_encode($reponse,JSON_UNESCAPED_UNICODE));

        }
     }

}
