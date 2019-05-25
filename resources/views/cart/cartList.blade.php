<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <title>Mstore - Online Shop Mobile Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="HandheldFriendly" content="True">

    <link rel="stylesheet" href="/css/materialize.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.theme.css">
    <link rel="stylesheet" href="/css/owl.transitions.css">
    <link rel="stylesheet" href="/css/fakeLoader.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/style.css">

    <link rel="shortcut icon" href="/img/favicon.png">

</head>
<body>

<!-- navbar top -->
<div class="navbar-top">
    <!-- site brand	 -->
    <div class="site-brand">
        <a href="index.html"><h1>Mstore</h1></a>
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
            <img src="/img/profile.jpg" alt="">
            <h2>John Doe</h2>
        </li>
        <li><a href="setting.html"><i class="fa fa-cog"></i>Settings</a></li>
        <li><a href="about-us.html"><i class="fa fa-user"></i>About Us</a></li>
        <li><a href="contact.html"><i class="fa fa-envelope-o"></i>Contact Us</a></li>
        <li><a href="login.html"><i class="fa fa-sign-in"></i>Login</a></li>
        <li><a href="register.html"><i class="fa fa-user-plus"></i>Register</a></li>
    </ul>
</div>
<!-- end side nav right-->

<!-- navbar bottom -->
<div class="navbar-bottom">
    <div class="row">
        <div class="col s2">
            <a href="/"><i class="fa fa-home"></i></a>
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
                    <a href="/colllist.html" class="button-link">
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
                    @foreach($cartInfo as $key=>$val)
                    <div class="cart-1 ">
                        <div class="row">
                            <div class="col s5">
                                <img src="/goodsImg/{{$val['goods_img']}}" alt="">
                            </div>
                            <div class="col s7">
                                <h5><a href="">{{$val['goods_name']}}</a></h5>
                            </div>
                        </div>
                        <div class="row quantity">
                            <div class="col s5">
                                <h5>购买数量</h5>
                            </div>
                            <div class="col s7">
                                <input value="{{$val['buy_number']}}" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s5">
                                <h5>商品价格</h5>
                            </div>
                            <div class="col s7">
                                <h5>${{$val['self_price']}}</h5>
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
                            <h6>${{$amount}}</h6>
                        </div>
                    </div>
                </div>
                <button class="btn button-default" id="pay">去结算</button>
            </div>
        </div>
    </div>
</div>
<!-- end cart menu -->

<!-- cart -->
<div class="cart section">
    <div class="container">
        <div class="pages-head">
            <h3>购物车列表</h3>
        </div>
        <div class="content">
            @foreach($cartInfo as $k=>$v)
            <div class="cart-1 order" goods_id="{{$v['goods_id']}}">
                <div class="row">
                    <div class="col s5">
                        <h5>商品图片</h5>
                    </div>
                    <div class="col s7">
                        <img src="/goodsImg/{{$v['goods_img']}}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col s5">
                        <h5>商品名称</h5>
                    </div>
                    <div class="col s7">
                        <h5><a href="">{{$v['goods_name']}}</a></h5>
                    </div>
                </div>
                <div class="row">
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
                        <h5>删除</h5>
                    </div>
                    <div class="col s7">
                        <h5><i class="fa fa-trash cartDel" goods_id="{{$v['goods_id']}}" ></i></h5>
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
                    <h6 >${{$amount}}</h6>
                </div>
            </div>
        </div>


        <button class="btn button-default payy" >去结算</button>

    </div>
</div>
<!-- end cart -->

<!-- loader -->
<div id="fakeLoader"></div>
<!-- end loader -->

<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="about-us-foot">
            <h6>Mstore</h6>
            <p>is a lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit.</p>
        </div>
        <div class="social-media">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-google"></i></a>
            <a href=""><i class="fa fa-linkedin"></i></a>
            <a href=""><i class="fa fa-instagram"></i></a>
        </div>
        <div class="copyright">
            <span>© 2017 All Right Reserved</span>
        </div>
    </div>
</div>
<!-- end footer -->

<!-- scripts -->
<script src="/js/jquery.min.js"></script>
<script src="/js/materialize.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/fakeLoader.min.js"></script>
<script src="/js/animatedModal.min.js"></script>
<script src="/js/main.js"></script>

</body>
</html>
<script>
    $(function(){
        $('.cartDel').click(function(){
            var goods_id=$(this).attr('goods_id');
            $.post(
                '/cart/cartDel',
                {goods_id:goods_id},
                function(data){
                    alert(data.msg);
                    if(data.errno==0){
                        history.go(0);
                    };
                },'json'
            )
        });

    //点击去结算
        $(".payy").click(function(){

            var order=$('.order');
            var goods_id='';
           order.each(function () {
               goods_id+=$(this).attr('goods_id')+',';
           })
            goods_id=goods_id.substr(0,goods_id.length-1);
           $.ajax({
               method: "post",
               url:"/order",
               data:{goods_id:goods_id},
               dataType:'json',
               success:function(data){

                    if(data.errno==1){
                        alert(data.msg);
                        location.href="/orderList?order_id="+data.order_id;
                    }else{
                        alert(data.msg);
                    }
               }
           })
        })

    })
</script>