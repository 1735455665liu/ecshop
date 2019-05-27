<?php

namespace App\Http\Controllers\Wx;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Weixin\WxUserModel;

class WxwebController extends Controller
{
    public function wxweb(Request $request){
        $code= $request->input('code');
        if($code){
            $url1='https://api.weixin.qq.com/sns/oauth2/access_token?appid='.env('WX_APPID').'&secret='.env('WX_APPSECRET').'&code='.$code.'&grant_type=authorization_code';
            $arr=json_decode(file_get_contents($url1),true);
            $url2='https://api.weixin.qq.com/sns/userinfo?access_token='.$arr['access_token'].'&openid='.$arr['openid'].'&lang=zh_CN';
            $userInfo=json_decode(file_get_contents($url2),true);
            $users=WxUserModel::where('openid',$userInfo['openid'])->first();
            if(!$users){
                $user_info=[
                    'openid'=>$userInfo['openid'],
                    'nickname'=>$userInfo['nickname'],
                    'country'=>$userInfo['country'],
                    'province'=>$userInfo['province'],
                    'city'=>$userInfo['city'],
                    'headimgurl'=>$userInfo['headimgurl'],
                    'create_time'=>time(),
                ];
                $res=WxUserModel::insertGetId($user_info);
            }
        }
        header("Location:/");
    }
}
