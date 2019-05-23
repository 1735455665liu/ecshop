<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class HomeControoler extends Controller
{

    //TODO 项目首页
    public function index(){
        //最新推荐商品
        $GoodsInfo=DB::table('shop_goods')->where(['is_new'=>1])->paginate(4);
        $data=[
          'goodsInfo'=>$GoodsInfo
        ];
        //最热商品推荐
        $GoodsInfoHost=DB::table('shop_goods')->where(['is_hot'=>1])->paginate(4);
        $goods=[
          'goodsInfoHost'=>$GoodsInfoHost
        ];
        return view('home.index',$data,$goods);
    }
}
