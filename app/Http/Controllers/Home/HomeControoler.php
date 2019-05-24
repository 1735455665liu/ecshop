<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\CartModel;
class HomeControoler extends Controller
{

    //TODO 项目首页
    public function index(){
        //最新推荐商品
        $GoodsInfo=DB::table('shop_goods')->where(['is_new'=>1])->paginate(4);

        //最热商品推荐
        $GoodsInfoHost=DB::table('shop_goods')->where(['is_hot'=>1])->paginate(4);

        //购物车列表
        $cartInfo = DB::table('shop_cart')
            ->where('cart_status',1)
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
