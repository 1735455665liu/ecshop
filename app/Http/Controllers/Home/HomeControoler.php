<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\CartModel;
class HomeControoler extends Controller
{

    //TODO 项目首页
    public function index(Request $request){
        $code= $request->input('code');
        if($code){
            $url1='https://api.weixin.qq.com/sns/oauth2/access_token?appid='.env('WX_APPID').'&secret='.env('WX_APPSECRET').'&code='.$code.'&grant_type=authorization_code';
            $arr=json_decode(file_get_contents($url1),true);
            $url2='https://api.weixin.qq.com/sns/userinfo?access_token='.$arr['access_token'].'&openid='.$arr['openid'].'&lang=zh_CN';
            $userInfo=json_decode(file_get_contents($url2),true);
            print_r($userInfo);die;
//            $users=User::where('openid',$userInfo['openid'])->first();
        }


        //最新推荐商品
        $GoodsInfo=DB::table('shop_goods')->where(['is_new'=>1])->paginate(4);

        //最热商品推荐
        $GoodsInfoHost=DB::table('shop_goods')->where(['is_hot'=>1])->paginate(4);

        //购物车列表
        $uid=session('user_id');
        $where=[
            'cart_status'=>1,
            'user_id'=>$uid
        ];
        $cartInfo = DB::table('shop_cart')
            ->where($where)
            ->leftJoin('shop_goods', 'shop_cart.goods_id', '=', 'shop_goods.goods_id')
            ->get();
        $json=json_encode($cartInfo);
        $arr=json_decode($json,true);

        //购物车总价
        $amount=0;
        foreach($arr as $k=>$v){
            $amount+=$v['buy_number']*$v['self_price'];
        }

        return view('home.index',['goodsInfo'=>$GoodsInfo,'goodsInfoHost'=>$GoodsInfoHost,'cart_arr'=>$arr,'allamount'=>$amount]);
    }
}
