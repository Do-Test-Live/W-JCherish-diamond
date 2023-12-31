<?php
session_start();

if(!isset($_SESSION['lan'])){
    $_SESSION['lan'] = 'CN';
}



?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>JCherish Diamond Jewel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--modernizr min js here-->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
</head>

<body>

<!-- Main Wrapper Start -->
<!--Offcanvas menu area start-->
<div class="off_canvars_overlay">

</div>
<div class="Offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                </div>
                <div class="Offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                    <div class="top_right text-right">
                        <ul>
                            <li class="language"><a href="#"> Language <?php echo $_COOKIE['lan'];?><i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_language">
                                    <li><a href="include/lan.php?lan=EN">English</a></li>
                                    <li><a href="include/lan.php?lan=CN">Chinese</a></li>
                                </ul>
                            </li>
                            <li class="top_links"><a href="#">Hong Kong <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_links">
                                    <li><a href="#">Hong Kong </a></li>
                                    <li><a href="#">Singapore </a></li>
                                    <li><a href="#">United Kingdom</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children">
                                <a href="#">JEWELLERY</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#"><?php if($_SESSION['lan'] == 'CN') echo '珠寶首飾'; else echo 'Jewelry'?></a>
                                <ul class="sub-menu">
                                    <li><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '所有款式'; else echo 'Designs'?></a></li>
                                    <li><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '寶石顏色'; else echo 'Gemstones'?></a></li>
                                    <li><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '寶石品種'; else echo 'Varieties'?></a></li>
                                    <li><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '鑽石'; else echo 'Diamond'?></a></li>
                                    <li><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '彩色寶石'; else echo 'colored gemstones'?></a></li>
                                    <li><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '減價商品'; else echo 'discounted items'?></a></li>
                                </ul>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="#"><?php if($_SESSION['lan'] == 'CN') echo '網上購買'; else echo 'online shopping'?></a></li>
                           <!-- <li class="menu-item-has-children">
                                <a href="#">BLOG</a>
                                <ul class="sub-menu">
                                    <li><a href="#">所有Blog</a></li>
                                    <li><a href="#">珠寶知識</a></li>
                                    <li><a href="#">粉絲分享</a></li>
                                    <li><a href="#">藍寶石特集</a></li>
                                </ul>

                            </li>-->
                            <li class="menu-item-has-children">
                                <a href="#"><?php if($_SESSION['lan'] == 'CN') echo '聯繫本店'; else echo 'contact the store'?></a></li></a>
                        </ul>
                    </div>
                 <!--   <div class="Offcanvas_footer">
                        &lt;!&ndash;<span><a href="#"><i class="fa fa-envelope-o"></i> demo@example.com</a></span>&ndash;&gt;
                        <ul>
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--Offcanvas menu area end-->

<!--header area start-->
<header class="header_area">
    <!--header top start-->
    <div class="header_top">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-2 col-md-12">
                    <div class="search_btn">
                        <a href="#"><i class="ion-ios-search-strong"></i></a>
                        <div class="dropdown_search">
                            <form action="#">
                                <input placeholder="Search product..." type="text">
                                <button type="submit"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">

                </div>

                <div class="col-lg-5 col-md-12 text-end">
                    <div class="top_right text-right">
                        <ul>
                            <li class="language"><a href="#">Language <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_language">
                                    <li><a href="include/lan.php?lan=EN">English</a></li>
                                    <li><a href="include/lan.php?lan=CN">Chinese</a></li>
                                </ul>
                            </li>
                            <li class="currency"><a href="#">Hong Kong <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_currency">
                                    <li><a href="#">Hong Kong</a></li>
                                    <li><a href="#">Singapore</a></li>
                                    <li><a href="#">United Kingdom</a></li>
                                </ul>
                            </li>
                            <li class="top_links"><a href="#">My Account <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_links">
                                    <li><a href="#">Checkout </a></li>
                                    <li><a href="#">My Account </a></li>
                                    <li><a href="#l">Shopping Cart</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header top start-->

    <!--header middel start-->
    <div class="header_middel">
        <div class="container">
            <div class="row align-items-center">

                <!--<div class="col-lg-5">
                    <div class="home_contact">
                        <div class="contact_box">
                            <label>Location</label>
                            <p>Your address goes here.</p>
                        </div>
                        <div class="contact_box">
                            <label>Call free</label>
                            <p><a href="tel:0123456789">0123456789</a></p>

                        </div>
                    </div>
                </div>-->
                <div class="col-lg-12 col-md-12 col-12 text-center">
                    <div class="logo">
                        <a href="index.php"><img src="assets/img/logo/logo.png" style="width: 250px;" alt=""></a>
                    </div>
                </div>
                <!-- <div class="col-lg-5 col-md-7 col-6">
                     <div class="middel_right">
                         <div class="search_btn">
                             <a href="#"><i class="ion-ios-search-strong"></i></a>
                             <div class="dropdown_search">
                                 <form action="#">
                                     <input placeholder="Search product..." type="text">
                                     <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                 </form>
                             </div>
                         </div>
                         <div class="cart_link">
                             <a href="#"><i class="ion-android-cart"></i><span class="cart_text_quantity"> $138.00</span>
                                 <i class="fa fa-angle-down"></i></a>
                             <span class="cart_quantity">2</span>
                             &lt;!&ndash;mini cart&ndash;&gt;
                             <div class="mini_cart">
                                 <div class="cart_close">
                                     <div class="cart_text">
                                         <h3>cart</h3>
                                     </div>
                                     <div class="mini_cart_close">
                                         <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                                     </div>
                                 </div>
                                 <div class="cart_item">
                                     <div class="cart_img">
                                         <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                     </div>
                                     <div class="cart_info">
                                         <a href="#">Letraset animal</a>

                                         <span class="quantity">Qty: 1</span>
                                         <span class="price_cart">$60.00</span>

                                     </div>
                                     <div class="cart_remove">
                                         <a href="#"><i class="ion-android-close"></i></a>
                                     </div>
                                 </div>
                                 <div class="cart_item">
                                     <div class="cart_img">
                                         <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                     </div>
                                     <div class="cart_info">
                                         <a href="#">Natural passages</a>
                                         <span class="quantity">Qty: 1</span>
                                         <span class="price_cart">$69.00</span>
                                     </div>
                                     <div class="cart_remove">
                                         <a href="#"><i class="ion-android-close"></i></a>
                                     </div>
                                 </div>
                                 <div class="cart_total">
                                     <span>Subtotal:</span>
                                     <span>138.00</span>
                                 </div>
                                 <div class="mini_cart_footer">
                                     <div class="cart_button view_cart">
                                         <a href="cart.html">View cart</a>
                                     </div>
                                     <div class="cart_button checkout">
                                         <a class="active" href="checkout.html">Checkout</a>
                                     </div>

                                 </div>

                             </div>
                             &lt;!&ndash;mini cart end&ndash;&gt;
                         </div>
                     </div>
                 </div>-->
            </div>
        </div>
    </div>
    <!--header middel end-->

    <!--header bottom satrt-->
    <div class="header_bottom sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="main_menu_inner">
                        <div class="logo_sticky">
                            <a href="#"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <div class="main_menu">
                            <nav>
                                <ul>
                                    <li><a href="#">JEWELLERY</a></li>
                                    <li><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '珠寶首飾'; else echo 'Jewelry'?><i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu pages">
                                            <li><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '所有款式'; else echo 'designs'?></a></li>
                                            <li><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '寶石顏色'; else echo 'colors of gemstones'?></a></li>
                                            <li><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '寶石品種'; else echo 'varieties of gemstones'?></a></li>
                                            <li><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '鑽石'; else echo 'diamond'?></a></li>
                                            <li><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '彩色寶石'; else echo 'colored gemstones'?></a></li>
                                            <li><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '減價商品'; else echo 'discounted items'?></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '網上購買'; else echo 'online shopping'?></a></li>
                                   <!-- <li><a href="#">BLOG <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu pages">
                                            <li><a href="#">所有Blog</a></li>
                                            <li><a href="#">珠寶知識</a></li>
                                            <li><a href="#">粉絲分享</a></li>
                                            <li><a href="#">藍寶石特集</a></li>
                                        </ul>
                                    </li>-->
                                    <li><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '聯繫本店'; else echo 'contact the store'?></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--header bottom end-->
</header>
<!--header area end-->


<!--slider area start-->
<div class="slider_area owl-carousel">
    <div class="single_slider" data-bgimg="assets/img/slider/slider.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="slider_content">
                        <!--<p>exclusive offer -10% off this week</p>
                        <h1>jewelry arrivals</h1>
                        <p class="slider_price">starting at <span>$2.199.oo</span></p>
                        <a class="button" href="shop.html">shopping now</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single_slider" data-bgimg="assets/img/slider/slider2.png">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="slider_content">
                        <!--<p>exclusive offer -10% off this week</p>
                        <h1>engagement ring</h1>
                        <p class="slider_price">starting at <span>$2.199.oo</span></p>
                        <a class="button" href="shop.html">shopping now</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single_slider" data-bgimg="assets/img/slider/slider3.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="slider_content">
                       <!-- <p>exclusive offer -10% off this week</p>
                        <h1>jewelry arrivals</h1>
                        <p class="slider_price">starting at <span>$2.199.oo</span></p>
                        <a class="button" href="shop.html">shopping now</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single_slider" data-bgimg="assets/img/slider/slider4.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="slider_content">
                        <!--<p>exclusive offer -10% off this week</p>
                        <h1>engagement ring</h1>
                        <p class="slider_price">starting at <span>$2.199.oo</span></p>
                        <a class="button" href="shop.html">shopping now</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single_slider" data-bgimg="assets/img/slider/slider1.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="slider_content">
                        <!--<p>exclusive offer -10% off this week</p>
                        <h1>jewelry arrivals</h1>
                        <p class="slider_price">starting at <span>$2.199.oo</span></p>
                        <a class="button" href="shop.html">shopping now</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--slider area end-->

<div class="blog_area blog_right">
    <div class="container">
        <div class="blog_grid">
            <div class="blog_thumb">
                <a href="#"><img src="assets/img/blog/new-j.png" alt=""></a>
            </div>
            <div class="blog_content">
                <h3 class="post_title"><a href="#"><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '紅寶石 • 熱情艶麗 • 愛意洋溢'; else echo 'Ruby • Passionate and Gorgeous • Overflowing with Love'?></a></h3>

            </div>

        </div>
        <div class="blog_grid">
            <div class="blog_thumb" style="float: right">
                <a href="#"><img src="assets/img/32.webp" alt=""></a>
            </div>
            <div class="blog_content">
                <h3 class="post_title"><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '藍寶石 • 高貴氣質的典範'; else echo 'Sapphire • Exemplifies Nobility and Elegance'?></a></h3>
                <p class="post_desc"><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '戴安娜王妃的皇室童話故事，至今仍為人津津樂道，到底這迷人的藍色寶石擁有什麼過人的魅力呢？'; else echo 'The royal fairy tale story of Princess Diana continues to captivate people to this day. What extraordinary charm does this enchanting blue gemstone possess?'?></a></p>

            </div>
        </div>

        <div class="blog_grid">
            <div class="blog_thumb">
                <a href="#"><img src="assets/img/blog/jj2.png" alt=""></a>
            </div>
            <div class="blog_content">
                <h3 class="post_title"><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '翡翠'; else echo 'jade'?></a></h3>
                <?php if($_SESSION['lan'] == 'CN'){
                    ?>
                    <p class="post_desc"> 翡翠(jadeite)，也稱翡翠玉、翠玉、緬甸
                        玉，是玉的一種。翡翠是在地質作用下形成的
                        達到玉級的石質多晶集合體，主要由硬玉或硬
                        玉及鈉質(鈉鉻輝石)和鈉鈣質輝石(綠輝
                        石)組成，可含有角閃石、長石、鉻鐵礦、褐
                        鐵礦等。</p>
                    <p class="post_desc">翡翠的顏色非常豐富，除了常見綠色和紅色之
                        外，還有橙、黃、青、藍、紫色。</p>
                        <?php
                    } else{
                    ?>
                    <p class="post_desc"> Jadeite, also known as jadeite jade, green jade, and Burmese jade, is a type of jade. Jadeite is a stone that reaches the quality of jade, formed through geological processes. It is primarily composed of hard jade or hard jadeite, along with sodium-rich (sodium chromium pyroxene) and sodium-calcium pyroxene (green pyroxene). It may also contain minerals like augite, feldspar, chromite, and brown iron ore.

                        </p>
                    <p class="post_desc">Jadeite exhibits a wide range of colors, beyond the commonly seen green and red, including orange, yellow, cyan, blue, and purple.</p>
                    <?php
                }?>

            </div>
        </div>
        <div class="blog_grid">
            <div class="blog_thumb" style="float: right">
                <a href="#"><img src="assets/img/jj66.png" alt=""></a>
            </div>
            <div class="blog_content">
                <h3 class="post_title"><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '粉紅鑽'; else echo 'pink diamond'?></a></h3>
                <p class="post_desc"><?php if($_SESSION['lan'] == 'CN') echo '彩色鑽石可稱之為鑽石中的帝王，當中以粉色及藍色最為珍稀。價值連城的彩鑽應該如何揀選呢？'; else echo 'Colored diamonds can be referred to as the royalty of diamonds, with pink and blue being the most rare among them. How should one select priceless colored diamonds?'?></p>

            </div>
        </div>
        <div class="blog_grid">
            <div class="blog_thumb">
                <a href="#"><img src="assets/img/blog/jj1.png" alt=""></a>
            </div>
            <div class="blog_content">
                <h3 class="post_title"><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '南洋珍珠'; else echo 'South Sea pearls'?></a></h3>
                <p class="post_desc"><?php if($_SESSION['lan'] == 'CN') echo '南洋珍珠圓潤、純凈、碩大、有着與生俱來的自然美，不必像其它珍珠那樣依賴於漂白、染色的人為加工。'; else echo 'South Sea pearls are round, pure, and large, possessing inherent natural beauty that does not require artificial processing such as bleaching or dyeing  unlike some other pearls.'?></p>
            </div>
        </div>
    </div>
</div>

<!--<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="blog_thumb">
                <a href="#"><img src="assets/img/blog/blog3.jpg" alt=""></a>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="blog_content">
                <h3 class="post_title"><a href="#">Blog image post</a></h3>
                <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu
                    ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                <a class="read_more" href="#">read more</a>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="blog_content">
                <h3 class="post_title"><a href="#">Blog image post</a></h3>
                <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu
                    ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                <a class="read_more" href="#">read more</a>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="blog_thumb">
                <a href="#"><img src="assets/img/blog/blog3.jpg" alt=""></a>
            </div>
        </div>

    </div>

</div>-->


<!--product section area start-->
<section class="product_section p_section1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_area">
                    <div class="newsletter_content">
                        <h2>Jcherish 產品</h2>
                        <!--<p>靈感來自庭院花圃，設計師以天然彩色寶石來演繹花叢中色彩繽紛的花朵</p>-->
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="featured" role="tabpanel">
                            <div class="product_container">
                                <div class="custom-row product_column3">
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product1.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product2.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="#">Aliquam furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$86.00</span>
                                                    <span class="current_price">$60.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae </p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product3.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product4.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="#">Dummy animal</a></h3>
                                                <div class="price_box">
                                                    <span class="current_price">$65.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae </p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product5.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product6.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Women</a>
                                                </div>
                                                <h3><a href="#">Furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$65.00</span>
                                                    <span class="current_price">$60.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product7.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product8.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Men,</a>
                                                </div>
                                                <h3><a href="#">Letraset animal</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$60.00</span>
                                                    <span class="current_price">$55.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae </p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product9.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product10.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Women</a>
                                                </div>
                                                <h3><a href="#">Aliquam furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$80.00</span>
                                                    <span class="current_price">$60.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae </p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product12.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product11.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="#">Natural Lorem Ipsum</a></h3>
                                                <div class="price_box">
                                                    <span class="current_price">$50.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae </p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product3.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product1.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                </div>
                                                <h3><a href="#">Furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="current_price">$62.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae </p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product4.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product5.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="#">Letraset animal</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$70.00</span>
                                                    <span class="current_price">$65.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae </p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product7.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product5.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">men</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="#">Aliquam furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$80.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae </p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product11.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product6.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">men</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="#">Natural Contrary</a></h3>
                                                <div class="price_box">
                                                    <span class="current_price">$60.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae </p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product13.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product12.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="#">Donec eu furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$86.00</span>
                                                    <span class="current_price">$60.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae </p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product6.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product5.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Women</a>
                                                </div>
                                                <h3><a href="#">Duis pulvinar</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$86.00</span>
                                                    <span class="current_price">$60.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae </p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="arrivals" role="tabpanel">
                            <div class="product_container">
                                <div class="custom-row product_column3">
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product10.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product11.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="#">Aliquam furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$89.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product9.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product8.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="#">Dummy animal</a></h3>
                                                <div class="price_box">
                                                    <span class="current_price">$65.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product7.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product6.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Women</a>
                                                </div>
                                                <h3><a href="#">Furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="current_price">$65.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product5.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product4.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Men,</a>
                                                </div>
                                                <h3><a href="#">Letraset animal</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$89.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product3.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product2.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Women</a>
                                                </div>
                                                <h3><a href="#">Aliquam furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$75.00</span>
                                                    <span class="current_price">$70.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product1.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product13.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="#">Natural Lorem Ipsum</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$89.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product3.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product6.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                </div>
                                                <h3><a href="#">Furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="current_price">$65.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product4.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product5.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="#">Letraset animal</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$70.00</span>
                                                    <span class="current_price">$65.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product5.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product6.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">men</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="#">Aliquam furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$89.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product11.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product6.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">men</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="#">Natural Contrary</a></h3>
                                                <div class="price_box">
                                                    <span class="current_price">$55.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product13.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product12.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="#">Donec eu furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$89.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product6.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product5.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Women</a>
                                                </div>
                                                <h3><a href="#">Duis pulvinar</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$70.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="onsale" role="tabpanel">
                            <div class="product_container">
                                <div class="custom-row product_column3">
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product4.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product5.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="#">Aliquam furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$60.00</span>
                                                    <span class="current_price">$65.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product6.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product7.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="#">Dummy animal</a></h3>
                                                <div class="price_box">
                                                    <span class="current_price">$45.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product8.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product9.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Women</a>
                                                </div>
                                                <h3><a href="#">Furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$89.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product10.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product4.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Men,</a>
                                                </div>
                                                <h3><a href="#">Letraset animal</a></h3>
                                                <div class="price_box">
                                                    <span class="current_price">$62.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product11.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product12.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Women</a>
                                                </div>
                                                <h3><a href="#">Aliquam furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$80.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product13.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product2.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="#">Natural Lorem Ipsum</a></h3>
                                                <div class="price_box">
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product3.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product1.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                </div>
                                                <h3><a href="#">Furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$89.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product4.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product5.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="#">Letraset animal</a></h3>
                                                <div class="price_box">
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product10.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product13.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">men</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="#">Aliquam furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$85.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product11.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product6.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">men</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="#">Natural Contrary</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$89.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product13.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product12.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="#">Donec eu furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$70.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="#"><img
                                                        src="assets/img/product/product6.jpg" alt=""></a>
                                                <a class="secondary_img" href="#"><img
                                                        src="assets/img/product/product5.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                       data-placement="top" data-original-title="quick view"> quick
                                                        view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Women</a>
                                                </div>
                                                <h3><a href="#">Duis pulvinar</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$89.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="#"
                                                                                       title="add to cart">add to
                                                                cart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--product section area end-->


<!--Newsletter area start-->
<div class="newsletter_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="newsletter_content">
                </div>
            </div>
        </div>
    </div>
</div>
<!--Newsletter area start-->

<!--footer area start-->
<footer class="footer_widgets">
    <div class="container">
        <div class="footer_top">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="widgets_container contact_us">
                        <h3>About JCherish </h3>
                        <div class="footer_contact">
                            <p>Address:RM B210, 2/F, PO YIP BLDG, 23 HING YIP STREET, KWUN TONG, HONG KONG</p>
                            <p style="font-weight: bold">Hong Kong Contact:</p>
                            <p>Whatsapp: <a href="tel:+852 90229721">+852 90229721</a></p>
                            <p>Email: cychanphilip@yahoo.com.hk</p>
                            <p style="font-weight: bold">Singapore Contact:</p>
                            <p>Ms. Geraldine Koh</p>
                            <p>Telephone: <a href="tel:+65 96699392">+65 96699392</a></p>
                            <p>Email: jcherishsg@gmail.com</p>
                          <!--  <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>

                                <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="row">
                <div class="col-12">
                    <div class="copyright_area">
                        <p>&copy; 2023 <a href="index.html" class="text-uppercase">JCherish</a>. Made with <i
                                class="fa fa-heart"></i> by <a target="_blank" href="https://ngt-tech.io/">NGT-Tech</a>
                        </p>
                        <img src="assets/img/icon/papyel2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer area end-->

<!-- modal area start-->
<div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal_body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="modal_tab">
                                <div class="tab-content product-details-large">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="assets/img/product/product1.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="assets/img/product/product2.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="assets/img/product/product3.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="assets/img/product/product5.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal_tab_button">
                                    <ul class="nav product_navactive owl-carousel" role="tablist">
                                        <li>
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tab1" role="tab"
                                               aria-controls="tab1" aria-selected="false"><img
                                                    src="assets/img/product/product1.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab2" role="tab"
                                               aria-controls="tab2" aria-selected="false"><img
                                                    src="assets/img/product/product2.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link button_three" data-bs-toggle="tab" href="#tab3"
                                               role="tab" aria-controls="tab3" aria-selected="false"><img
                                                    src="assets/img/product/product3.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab4" role="tab"
                                               aria-controls="tab4" aria-selected="false"><img
                                                    src="assets/img/product/product5.jpg" alt=""></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="modal_right">
                                <div class="modal_title mb-10">
                                    <h2>Donec eu furniture</h2>
                                </div>
                                <div class="modal_price mb-10">
                                    <span class="new_price">$64.99</span>
                                    <span class="old_price">$78.99</span>
                                </div>
                                <div class="see_all">
                                    <a href="#">See all features</a>
                                </div>
                                <div class="modal_add_to_cart mb-15">
                                    <form action="#">
                                        <input min="0" max="100" step="2" value="1" type="number">
                                        <button type="submit">add to cart</button>
                                    </form>
                                </div>
                                <div class="modal_description mb-15">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                </div>
                                <div class="modal_social">
                                    <h2>Share this product</h2>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal area start-->


<!-- JS
============================================ -->

<!-- Plugins JS -->
<!--jquery min js-->
<script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/owl.carousel.main.js"></script>
<script src="assets/js/jquery.nice.select.js"></script>
<script src="assets/js/scrollup.js"></script>
<script src="assets/js/ajax.chimp.js"></script>
<script src="assets/js/jquery.ui.js"></script>
<script src="assets/js/jquery.elevatezoom.js"></script>
<script src="assets/js/imagesloaded.js"></script>
<script src="assets/js/isotope.main.js"></script>
<script src="assets/js/jqquery.ripples.js"></script>
<script src="assets/js/jquery.cookie.js"></script>
<script src="assets/js/bpopup.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>


</body>

</html>