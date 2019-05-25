<?php


namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    //点击去结算
    public function order(Request $request){
        $goods_id=$request->input("goods_id");
        $goods_ids=explode(",",$goods_id);
        $userwhere=[
            'cart_status'=>1
        ];

        $res=DB::table('shop_cart')
            ->join('shop_goods','shop_goods.goods_id','=','shop_cart.goods_id')
            ->where($userwhere)
            ->whereIn('shop_cart.goods_id',$goods_ids)
            ->get();
//            获取总价格
        $priceInfo=0;
        foreach ($res as $k=>$v){
            $priceInfo=$priceInfo+$v->self_price*$v->buy_number;
        }
        $order_sn =rand(111111111,999999999);
        $arr=[
          'order_no'=>$order_sn,
            'order_amount'=>$priceInfo,
            'create_time'=>time(),
            'user_id'=>session('user_id')

        ];
        $orderInfo=DB::table('shop_order')->insertGetId($arr); //加入订单表

        $res=DB::table("shop_order")->where(["order_no"=>$order_sn])->get(["order_id"]);
        $order_id=$res[0]->order_id;
        $data=DB::table("shop_cart")
            ->join("shop_goods","shop_goods.goods_id","=","shop_cart.goods_id")
            ->where(["shop_cart.cart_status"=>1])
            ->get();
        foreach($data as $k=>$v){
            $arr=[
                "order_id"=>$order_id,
                "goods_id"=>$v->goods_id,
                "buy_number"=>$v->buy_number,
                "goods_price"=>$v->self_price,
                "goods_name"=>$v->goods_name,
                "goods_img"=>$v->goods_img,
                "create_time"=>time(),
            ];
            DB::table('shop_order_detail')->insert($arr);
        }
        $updcart=DB::table("shop_cart")->whereIn("goods_id",$goods_ids)->update(["cart_status"=>2]);
        if($updcart){
            $response=[
                'errno'=>1,
                'msg'=>"生成订单成功",
                "order_id"=>$order_id,
            ];
        }else{
            $response=[
                'errno'=>0,
                'msg'=>"生成订单失败",
            ];
        }
        return json_encode($response,JSON_UNESCAPED_UNICODE);
    }
    //订单列表展示
    public function orderList(Request $request){
        $order_id=$request->input("order_id");
//        var_dump()
        $where=[
          'user_id'=>session('user_id')
        ];

        $OrderInfo=DB::table('shop_order')->where($where)->first();
        if(empty($OrderInfo)){
            echo '禁止非法操作,请先登录';
            header("refresh:3;url='/login.html'");
        }else{
            $data=[
                'orderInfo'=>$OrderInfo
            ];
            return view('order.contact',$data);
        }

    }

}