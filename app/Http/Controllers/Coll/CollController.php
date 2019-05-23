<?php

namespace App\Http\Controllers\Coll;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class CollController extends Controller
{
    //收藏
    public function colladd(Request $request){
        $data = $request->input();
        $res = DB::table('shop_goods')->where(['goods_id'=>$data['goods_id']])->first();
        if($res->coll_status==1){
            DB::table('shop_goods')->where(['goods_id'=>$data['goods_id'],'coll_status'=>$res->coll_status])->update(['coll_status'=>2]);
            $response = [
              'error'=>1,
              'msg'=>'以取消收藏'
            ];
            die(json_encode($response,JSON_UNESCAPED_UNICODE));
        }else{
            DB::table('shop_goods')->where(['goods_id'=>$data['goods_id'],'coll_status'=>$res->coll_status])->update(['coll_status'=>1]);
            $response = [
                'error'=>10000,
                'msg'=>'以收藏'
            ];
            die(json_encode($response,JSON_UNESCAPED_UNICODE));
        }
    }

    //收藏列表
    public function colllist(){
        $res = DB::table('shop_goods')->where(['coll_status'=>1])->get();
        return view('/coll/colllist',compact('res'));
    }

    //列表删除收藏
    public function colldel(Request $request){
        $goods_id = $request->input('goods_id');
        $res = DB::table('shop_goods')->where(['goods_id'=>$goods_id])->update(['coll_status'=>2]);
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
