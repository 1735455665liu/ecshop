<?php

namespace App\Http\Controllers\Goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class GoodsController extends Controller
{
    //商品详情
    public function goodslists(){
        $goodsInfo=DB::table('shop_goods')->paginate(10);
        $data=[
            'goodsInfo'=>$goodsInfo
        ];
        return view('goods.product-list',$data);
    }

}
