<?php

namespace App\Http\Controllers\Reg;
use App\Model\User\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $user_tel=$request->input("user_tel");
        $user_code=$request->input("user_code");

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
        if($user_tel==''){
            $response=[
                "errno"=>10004,
                "msg"=>"电话号码不能为空",
            ];
            die(json_encode($response,JSON_UNESCAPED_UNICODE));
        }
        $where=[
            "user_tel"=>$user_tel,
            "user_code"=>$user_code,
            "status"=>1,
        ];
        $time=time();
        $info=DB::table("shop_code")->where($where)->where("out_time",">",$time)->first();
        if(!empty($info)){
            $hash_pwd=password_hash($user_pwd,PASSWORD_DEFAULT);
            $data=[
                'user_name'=>$request->user_name,
                'user_email'=>$request->user_email,
                'user_pwd'=>$hash_pwd,
                "user_tel"=>$user_tel,
                'user_code'=>$user_code,
            ];
            $res=UserInfo::insert($data);
            if($res==true){
                DB::table("shop_code")->where($where)->update(["status"=>0]);
                echo '注册成功，3秒后跳转值登陆页面';
                header("refresh:3;url=login.html");
            }else{
                $response=[
                    'errno'=>10001,
                    'msg'=>'注册失败',
                ];
                die(json_encode($response,JSON_UNESCAPED_UNICODE));
            }
        }else{
            $response=[
                'errno'=>10005,
                'msg'=>'验证码错误或已失效',
            ];
            die(json_encode($response,JSON_UNESCAPED_UNICODE));
        }
    }
    //获取验证码
    public function getcode(Request $request){
        $user_tel=$request->input("user_tel");
        if($user_tel==""){
            $arr = ["code"=>1,"msg"=>"电话号码为空"];
            return json_encode($arr);
        }
        $code=rand(1000,9999);
        $time=time();
        $out_time=$time+3600;
        $status=1;
//        $obj = new \Send();
        $rus = $this->show($user_tel,$code);
        $data = [
            "user_tel"=>$user_tel,
            "user_code"=>$code,
            "out_time"=>$out_time,
            "status"=>$status
        ];
        if($rus ==100) {
            $res = DB::table("shop_code")->insert($data);
            if ($res) {
                $arr = ["code" => 0, "msg" => "发送验证码成功,有效期5分钟"];
                return json_encode($arr);
            } else {
                $arr = ["code" => 1, "msg" => "添加数据库失败"];
                return json_encode($arr);
            }
        }else{
            $arr = ["code" => 1, "msg" => "发送验证码失败"];
            return json_encode($arr);
        }
    }

    //第三方类库
    public function show($tel,$num){

        $content = "您的验证码是：【{$num}】。如需帮助请联系客服。";
        $ch = curl_init();//初始化
        $arr = config("app.send");//调用config
        $str ="{$arr['url']}?account={$arr['username']}&password={$arr['pwd']}&mobile={$tel}&content={$content}";
        curl_setopt($ch,CURLOPT_URL,$str);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $info = curl_exec($ch);
        return $info;

    }
}
