<?php

namespace App\Http\Controllers\Cart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\CartModel;
use Illuminate\Support\Facades\DB;
class CartController extends Controller
{
    //添加购物车
    public function cartAdd(Request $request){
        $goods_id=$request->input('goods_id');

        $cartInfo=CartModel::where('goods_id',$goods_id)->first();

        if($cartInfo){      //如果商品已存在购物车
            $buy_number=$cartInfo->buy_number+1;
            $res=CartModel::where('goods_id',$goods_id)->update(['buy_number'=>$buy_number]);
            if($res){
                $response=[
                    'errno'=>0,
                    'msg'=>'添加购物车成功',
                ];
            }else{
                $response=[
                    'errno'=>1,
                    'msg'=>'添加购物车失败',
                ];
            }

        }else{
            $info=[
                'goods_id'=>$goods_id,
                'buy_number'=>1,
                'create_time'=>time()
            ];
            $res=CartModel::insertGetId($info);
            if($res){
                $response=[
                    'errno'=>0,
                    'msg'=>'添加购物车成功',
                ];
            }else{
                $response=[
                    'errno'=>1,
                    'msg'=>'添加购物车失败',
                ];
            }
        }
        return json_encode($response,JSON_UNESCAPED_UNICODE);

    }

    //购物车列表
    public function cartList(Request $request){
        $cartInfo = DB::table('shop_cart')
            ->where('cart_status',1)
            ->leftJoin('shop_goods', 'shop_cart.goods_id', '=', 'shop_goods.goods_id')
            ->get();
        $json=json_encode($cartInfo);
        $arr=json_decode($json,true);
        $amount=0;
        foreach($arr as $k=>$v){
            $amount+=$v['buy_number']*$v['self_price'];
        }

        return view('cart.cartList',['cartInfo'=>$arr,'amount'=>$amount]);
    }

    //删除购物车
    public function cartDel(Request $request){
        $goods_id=$request->input('goods_id');
        $res=CartModel::where('goods_id',$goods_id)->update(['cart_status'=>2]);
        if($res){
            $response=[
                'errno'=>0,
                'msg'=>'删除成功',
            ];
        }else{
            $response=[
                'errno'=>1,
                'msg'=>'删除失败',
            ];
        }
        return json_encode($response,JSON_UNESCAPED_UNICODE);
    }
}
