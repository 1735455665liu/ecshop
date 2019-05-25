<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <title>烨氏集团 - Online Shop Mobile Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="HandheldFriendly" content="True">

    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/fakeLoader.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="img/favicon.png">

</head>
<body>

<!-- navbar top -->
<div class="navbar-top">
    <!-- site brand	 -->
    <div class="site-brand">
        <a href="index.html"><h1>烨氏集团</h1></a>
    </div>
    <!-- end site brand	 -->
    <div class="side-nav-panel-right">
        <a href="#" data-activates="slide-out-right" class="side-nav-left"><i class="fa fa-user"></i></a>
    </div>
</div>
<!-- end navbar top -->

<!-- side nav right-->
<div class="side-nav-panel-right">
    <ul id="slide-out-right" class="side-nav side-nav-panel collapsible">
        <li class="profil">
            <img src="img/屏幕截图(147).png" alt="">
            <h2>{{session('user_name')}}</h2>
        </li>
        <li><a href="setting.html"><i class="fa fa-cog"></i>Settings</a></li>
        <li><a href="about-us.html"><i class="fa fa-user"></i>About Us</a></li>
        <li><a href="contact.html"><i class="fa fa-envelope-o"></i>Contact Us</a></li>
        <li><a href="login.html"><i class="fa fa-sign-in"></i>Login</a></li>
        <li><a href="register.html"><i class="fa fa-user-plus"></i>Register</a></li>
        <li><a href="/loginout"><i class="fa fa-sign-in"></i>loginout</a></li>
    </ul>
</div>
<!-- end side nav right-->

<!-- navbar bottom -->
<div class="navbar-bottom">
    <div class="row">
        <div class="col s2">
            <a href="\"><i class="fa fa-home"></i></a>
        </div>
        <div class="col s2">
            <a href="/colllist.html"><i class="fa fa-heart"></i></a>
        </div>
        <div class="col s4">
            <div class="bar-center">
                <a href="#animatedModal" id="cart-menu"><i class="fa fa-shopping-basket"></i></a>
                <span>2</span>
            </div>
        </div>
        <div class="col s2">
            <a href="contact.html"><i class="fa fa-envelope-o"></i></a>
        </div>
        <div class="col s2">
            <a href="#animatedModal2" id="nav-menu"><i class="fa fa-bars"></i></a>
        </div>
    </div>
</div>
<!-- end navbar bottom -->

<!-- menu -->
<div class="menus" id="animatedModal2">
    <div class="close-animatedModal2 close-icon">
        <i class="fa fa-close"></i>
    </div>
    <div class="modal-content">
        <div class="container">
            <div class="row">
                <div class="col s4">
                    <a href="/" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-home"></i>
                            </div>
                            Home
                        </div>
                    </a>
                </div>
                <div class="col s4">
                    <a href="product-list.html" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-bars"></i>
                            </div>
                            Product List
                        </div>
                    </a>
                </div>
                <div class="col s4">
                    <a href="shop-single.html" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-eye"></i>
                            </div>
                            Single Shop
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col s4">
                    <a href="wishlist.html" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-heart"></i>
                            </div>
                            Wishlist
                        </div>
                    </a>
                </div>
                <div class="col s4">
                    <a href="cart.html" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            Cart
                        </div>
                    </a>
                </div>
                <div class="col s4">
                    <a href="checkout.html" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-credit-card"></i>
                            </div>
                            Checkout
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col s4">
                    <a href="blog.html" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-bold"></i>
                            </div>
                            Blog
                        </div>
                    </a>
                </div>
                <div class="col s4">
                    <a href="blog-single.html" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-file-text-o"></i>
                            </div>
                            Blog Single
                        </div>
                    </a>
                </div>
                <div class="col s4">
                    <a href="error404.html" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-hourglass-half"></i>
                            </div>
                            404
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col s4">
                    <a href="testimonial.html" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-support"></i>
                            </div>
                            Testimonial
                        </div>
                    </a>
                </div>
                <div class="col s4">
                    <a href="about-us.html" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            About Us
                        </div>
                    </a>
                </div>
                <div class="col s4">
                    <a href="contact.html" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            Contact
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col s4">
                    <a href="setting.html" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-cog"></i>
                            </div>
                            Settings
                        </div>
                    </a>
                </div>
                <div class="col s4">
                    <a href="login.html" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-sign-in"></i>
                            </div>
                            Login
                        </div>
                    </a>
                </div>
                <div class="col s4">
                    <a href="register.html" class="button-link">
                        <div class="menu-link">
                            <div class="icon">
                                <i class="fa fa-user-plus"></i>
                            </div>
                            Register
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end menu -->

<!-- cart menu -->
<div class="menus" id="animatedModal">
    <div class="close-animatedModal close-icon">
        <i class="fa fa-close"></i>
    </div>
    <div class="modal-content">
        <div class="cart-menu">
            <div class="container">
                <div class="content">
                    @foreach($cart_arr as $k=>$v)
                    <div class="cart-1">
                        <div class="row">
                            <div class="col s5">
                                <img src="/goodsImg/{{$v['goods_img']}}" alt="">
                            </div>
                            <div class="col s7">
                                <h5><a href="">{{$v['goods_name']}}</a></h5>
                            </div>
                        </div>
                        <div class="row quantity">
                            <div class="col s5">
                                <h5>购买数量</h5>
                            </div>
                            <div class="col s7">
                                <input value="{{$v['buy_number']}}" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s5">
                                <h5>商品价格</h5>
                            </div>
                            <div class="col s7">
                                <h5>${{$v['self_price']}}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s5">
                                <h5>Action</h5>
                            </div>
                            <div class="col s7">
                                <div class="action"><i class="fa fa-trash"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    @endforeach
                </div>
                <div class="total">

                    <div class="row">
                        <div class="col s7">
                            <h6>Total</h6>
                        </div>
                        <div class="col s5">
                            <h6>${{$allamount}}</h6>
                        </div>
                    </div>
                </div>
                <button class="btn button-default">Process to Checkout</button>
            </div>
        </div>
    </div>
</div>
<!-- end cart menu -->

<!-- slider -->
<div class="slider">

    <ul class="slides">
        <li>
            <img src="img/1.jpg" alt="">
            <div class="caption slider-content  center-align">
                <h2>欢迎来到烨氏集团</h2>
                <h4>烨氏出品 必属精品</h4>
                <a href="" class="btn button-default">点击我抓紧购物吧</a>
            </div>
        </li>
        <li>
            <img src="img/1.jpg" alt="">
            <div class="caption slider-content center-align">
                <h2>贴心服务</h2>
                <h4>七天无理由退换货,购物无忧!</h4>
                <a href="" class="btn button-default">点击我抓紧购物吧</a>
            </div>
        </li>
        <li>
            <img src="img/1.jpg" alt="">
            <div class="caption slider-content center-align">
                <h2>名人名言</h2>
                <h4>激浊而扬清，废贪而立廉 ——刘子烨
                </h4>
                <a href="" class="btn button-default">点击我抓紧购物吧</a>
            </div>
        </li>
    </ul>

</div>
<!-- end slider -->

<!-- features -->
<div class="features section">
    <div class="container">
        <div class="row">
            <div class="col s6">
                <div class="content">
                    <div class="icon">
                        <i class="fa fa-car"></i>
                    </div>
                    <h6>免费送货</h6>
                    <p>支持终身无理由退货</p>

                </div>
            </div>
            <div class="col s6">
                <div class="content">
                    <div class="icon">
                        <i class="fa fa-dollar"></i>
                    </div>
                    <h6>退款</h6>
                    <p>售后无忧</p>

                </div>
            </div>
        </div>
        <div class="row margin-bottom-0">
            <div class="col s6">
                <div class="content">
                    <div class="icon">
                        <i class="fa fa-lock"></i>
                    </div>
                    <h6>安全付款</h6>
                    <p>集团采用国际领先加密技术</p>

                </div>
            </div>
            <div class="col s6">
                <div class="content">
                    <div class="icon">
                        <i class="fa fa-support"></i>
                    </div>
                    <h6>全天候支持</h6>
                    <p>有疑问抓紧联系客服吧!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end features -->

<!-- quote -->
<div class="section quote">
    <div class="container">
        <h4>前方高能</h4>
        <p>全场消费烨公子买单 尖叫声</p>
    </div>
</div>
<!-- end quote -->

<!-- product -->
<div class="section product">
    <div class="container">
        <div class="section-head">
            <h4>最新推荐</h4>
            <div class="divider-top"></div>
            <div class="divider-bottom"></div>
        </div>
        <div class="row">
            @foreach($goodsInfo as $k=>$v)
            <div class="col s6" goods_id= "{{$v->goods_id}}">
                <div class="content">
                    <img src="/goodsImg/{{$v->goods_img}}" alt="">
                    <h6><a href="">{{$v->goods_name}}</a></h6>
                    <div class="price">
                        ￥{{$v->self_price}} <span>￥{{$v->market_price}}</span>
                    </div>
                    <button class="btn button-default">点击加入购物车</button>
                    <button class="btn button-default Coll" goods_id="{{$v->goods_id}}" coll_status ="{{$v->coll_status}}">
                        @if(session('user_id')==NULL)
                            <span>收藏</span>
                        @elseif($v->coll_status==2)
                            <span>收藏</span>
                        @else
                            <span>取消收藏</span>
                        @endif
                    </button>
                </div>
            </div>

                @endforeach
        </div>

    </div>
</div>
<!-- end product -->

<!-- promo -->
<div class="promo section">
    <div class="container">
        <div class="content">
            <h4>温馨提示</h4>
            <p>国际一手货源</p>
            <button class="btn button-default">SHOP NOW</button>
        </div>
    </div>
</div>
<!-- end promo -->

<!-- product -->
<div class="section product">
    <div class="container">
        <div class="section-head">
            <h4>火爆推荐</h4>
            <div class="divider-top"></div>
            <div class="divider-bottom"></div>
        </div>
        <div class="row">
            @foreach($goodsInfoHost as $k=>$v)
            <div class="col s6" >
                <div class="content">
                    <img src="/goodsImg/{{$v->goods_img}}" alt="">
                    <h6><a href="">{{$v->goods_name}}</a></h6>
                    <div class="price">
                        ￥{{$v->self_price}} <span>￥{{$v->market_price}}</span>
                    </div>
                    <button class="btn button-default">加入购物车</button>
                    <button class="btn button-default Coll" goods_id="{{$v->goods_id}}" coll_status ="{{$v->coll_status}}">
                        @if(session('user_id')==NULL)
                            <span>收藏</span>
                        @elseif($v->coll_status==2)
                            <span>收藏</span>
                        @else
                            <span>取消收藏</span>
                        @endif
                    </button>
                </div>
            </div>
                @endforeach
        </div>
        <div class="pagination-product">
            {{ $goodsInfoHost->links() }}
            {{--<ul>--}}
                {{--<li class="active">1</li>--}}
                {{--<li><a href="">2</a></li>--}}
                {{--<li><a href="">3</a></li>--}}
                {{--<li><a href="">4</a></li>--}}
                {{--<li><a href="">5</a></li>--}}
            {{--</ul>--}}
        </div>
    </div>
</div>
<!-- end product -->

<!-- loader -->
<div id="fakeLoader"></div>
<!-- end loader -->

<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="about-us-foot">
            <h6>烨氏集团</h6>
            <p>烨氏集团成立于1984年,1988年进入国际行业,经过三十余年的发展,成为国内领先的集团之一</p>
        </div>
        <div class="social-media">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-google"></i></a>
            <a href=""><i class="fa fa-linkedin"></i></a>
            <a href=""><i class="fa fa-instagram"></i></a>
        </div>
        <div class="copyright">
            <span>© 2019 版权所有 烨氏集团</span>
        </div>
    </div>
</div>
<!-- end footer -->

<!-- scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/fakeLoader.min.js"></script>
<script src="js/animatedModal.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
<script>
    $('.Coll').click(function(){
        var _this=$(this);
        var goods_id = _this.attr('goods_id');
        var coll_status = _this.attr('coll_status');
        $.post(
            '/Coll/colladd',
            {goods_id:goods_id,coll_status:coll_status},
            function(data){
                alert(data.msg);
                if(data.error ==0){
                    location.href="/login.html";
                }else if(data.error==1){
                    _this.find("span").text('取消收藏');
                    _this.attr('coll_status',2);
                    history.go(0);
                }else{
                    _this.find("span").text('收藏');
                    _this.attr('coll_status',1);
                    history.go(0);
                }
            },
            'json'
        );
    })
</script>