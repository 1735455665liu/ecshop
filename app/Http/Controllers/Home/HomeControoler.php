<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeControoler extends Controller
{

    //TODO 项目首页
    public function index(){
        return view('home.index');
    }
}
