<?php

namespace App\Http\Controllers\Reg;
use App\Model\User\UserInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegController extends Controller
{
    /*注册页面*/
    public function reg(){
        return view('/reg/reg');
    }
    /*注册执行页面*/
    public function regdo(Request $request){
        $user_pwd=$request->input('user_pwd');
        $user_repwd= $request->input('user_repwd');
        if($request->input('user_name')==''){
            $response=[
                'errno'=>10001,
                'msg'=>'姓名不能为空',
            ];
            die(json_encode($response,JSON_UNESCAPED_UNICODE));
        }
        if($request->input('user_pwd')==''){
            $response=[
                'errno'=>10002,
                'msg'=>'密码不能为空',
            ];
            die(json_encode($response,JSON_UNESCAPED_UNICODE));
        }
        if($request->input('user_pwd') != $user_repwd){
            $response=[
                'errno'=>10003,
                'msg'=>'密码和确认密码一致',
            ];
            die(json_encode($response,JSON_UNESCAPED_UNICODE));
        }
        if($request->input('user_email')==''){
            $response=[
                'errno'=>10002,
                'msg'=>'邮箱不能为空',
            ];
            die(json_encode($response,JSON_UNESCAPED_UNICODE));
        }
        $hash_pwd=password_hash($user_pwd,PASSWORD_DEFAULT);
        $data=[
            'user_name'=>$request->user_name,
            'user_email'=>$request->user_email,
            'user_pwd'=>$hash_pwd
        ];
        $res=UserInfo::insert($data);
        if($res==true){
            echo '注册成功，3秒后跳转值登陆页面';
            header("refresh:3;url=login.html");
        }else{
            $response=[
                'errno'=>10001,
                'msg'=>'注册失败',
            ];
            die(json_encode($response,JSON_UNESCAPED_UNICODE));
        }
    }
}
