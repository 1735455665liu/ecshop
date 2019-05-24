<?php

namespace App\Http\Controllers\Coll;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class CollController extends Controller
{
    //收藏
    public function colladd(Request $request){
        $user_id =session('user_name');
        if($user_id ==NUll){
            $response = [
                'error'=>0,
                'msg'=>'未登录，去登陆'
            ];
            die(json_encode($response,JSON_UNESCAPED_UNICODE));
        }
        $data = $request->input();
        $res = DB::table('shop_goods')->where(['goods_id'=>$data['goods_id']])->first();
        if($res->coll_status==1){
            DB::table('shop_goods')->where(['goods_id'=>$data['goods_id'],'coll_status'=>$res->coll_status])->update(['coll_status'=>2]);
            DB::table('shop_coll')->where(['goods_id'=>$data['goods_id']])->update(['status'=>2]);
            $response = [
                'error'=>1,
                'msg'=>'取消收藏成功'
            ];
            die(json_encode($response,JSON_UNESCAPED_UNICODE));
        }else{
            DB::table('shop_goods')->where(['goods_id'=>$data['goods_id'],'coll_status'=>$res->coll_status])->update(['coll_status'=>1]);
            $info = [
                'goods_id'=>$res->goods_id,
                'user_id'=>session('user_id'),
                'status'=>1,
                'create_time'=>time()
            ];
            DB::table('shop_coll')->insertGetId($info);
            $response = [
                'error'=>2,
                'msg'=>'收藏成功'
            ];
            die(json_encode($response,JSON_UNESCAPED_UNICODE));
        }
    }

    //收藏列表
    public function colllist(){
        $res = DB::table('shop_coll')
            ->where(['user_id'=>session('user_id'),'status'=>1])
            ->leftJoin('shop_goods','shop_goods.goods_id','=','shop_coll.goods_id')
            ->get();
        return view('/coll/colllist',compact('res'));
    }

    //列表删除收藏
    public function colldel(Request $request){
        $goods_id = $request->input('goods_id');
        DB::table('shop_goods')->where(['goods_id'=>$goods_id])->update(['coll_status'=>2]);
        $res = DB::table('shop_coll')->where(['goods_id'=>$goods_id])->update(['status'=>2]);
        if($res){
            $response = [
                'error'=>0,
                'msg'=>'删除收藏成功'
            ];
            die(json_encode($response,JSON_UNESCAPED_UNICODE));
        }else{
            $response = [
                'error'=>50002,
                'msg'=>'删除收藏失败'
            ];
            die(json_encode($response,JSON_UNESCAPED_UNICODE));
        }
    }
}
