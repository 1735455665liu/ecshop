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

    <link rel="shortcut icon" href="img/favicon.png">

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
            <img src="img/profile.jpg" alt="">
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
            <a href="index.html"><i class="fa fa-home"></i></a>
        </div>
        <div class="col s2">
            <a href="wishlist.html"><i class="fa fa-heart"></i></a>
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
                    <div class="cart-1">
                        <div class="row">
                            <div class="col s5">
                                <img src="img/cart-menu1.png" alt="">
                            </div>
                            <div class="col s7">
                                <h5><a href="">Fashion Men's</a></h5>
                            </div>
                        </div>
                        <div class="row quantity">
                            <div class="col s5">
                                <h5>Quantity</h5>
                            </div>
                            <div class="col s7">
                                <input value="1" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s5">
                                <h5>Price</h5>
                            </div>
                            <div class="col s7">
                                <h5>$20</h5>
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
                    <div class="cart-2">
                        <div class="row">
                            <div class="col s5">
                                <img src="img/cart-menu2.png" alt="">
                            </div>
                            <div class="col s7">
                                <h5><a href="">Fashion Men's</a></h5>
                            </div>
                        </div>
                        <div class="row quantity">
                            <div class="col s5">
                                <h5>Quantity</h5>
                            </div>
                            <div class="col s7">
                                <input value="1" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s5">
                                <h5>Price</h5>
                            </div>
                            <div class="col s7">
                                <h5>$20</h5>
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
                </div>
                <div class="total">
                    <div class="row">
                        <div class="col s7">
                            <h5>Fashion Men's</h5>
                        </div>
                        <div class="col s5">
                            <h5>$21.00</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s7">
                            <h5>Fashion Men's</h5>
                        </div>
                        <div class="col s5">
                            <h5>$21.00</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s7">
                            <h6>Total</h6>
                        </div>
                        <div class="col s5">
                            <h6>$41.00</h6>
                        </div>
                    </div>
                </div>
                <button class="btn button-default">Process to Checkout</button>
            </div>
        </div>
    </div>
</div>
<!-- end cart menu -->


<!-- about us -->
<div class="pages section">
    <div class="container">
        <div class="pages-head">
            <h3>微信支付</h3>
        </div>
        <div class="about-us" id="qrcode">

        </div>
    </div>
</div>
<!-- end about us -->


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
<script src="/js/jquery.min.js"></script>
<script src="/js/materialize.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/fakeLoader.min.js"></script>
<script src="/js/animatedModal.min.js"></script>
<script src="/js/main.js"></script>
<script src="/js/weixin/qrcode.js"></script>
<script type="text/javascript">
    new QRCode(document.getElementById("qrcode"), "{{$code_url}}");
    //ajax轮询，检查订单支付状态
    setInterval(function(){
        $.ajax({
            url :'/weixin/paystatus?order_id='+"{{$order_id}}",
            type: 'get',
            dataType:'json',
            success: function(res){
                if(res.status==0){
                    alert("支付成功");
                    location.href = "/weixin/paysuccess?order_id={{$order_id}}";
                }
            }
        });
    },2000)
</script>
</body>
</html>