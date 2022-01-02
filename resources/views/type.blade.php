<!DOCTYPE html>
<html class="no-js" lang="en">
    
<!-- Mirrored from template.hasthemes.com/rozer/rozer/shop-4-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Sep 2021 11:27:46 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Rozer – Electronics eCommerce HTML Template</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="http://127.0.0.1:8000/assets/images/favicon/favicon.png" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap" rel="stylesheet" />

        <!-- CSS
  ============================================ -->

            <!-- Vendor CSS (Bootstrap & Icon Font) -->
        <!-- <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/vendor/ionicons.min.css">
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/vendor/simple-line-icons.css">
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/vendor/font-awesome.min.css"> -->

            <!-- Plugins CSS (All Plugins Files) -->
         <!-- <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/plugins/animate.css">
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/plugins/jquery-ui.min.css">
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/plugins/swiper.css">  -->

        <!-- Use the minified version files listed below for better performance and remove the files listed above -->
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/vendor/vendor.min.css" />
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/plugins/plugins.min.css" />
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/style.min.css">

        <!-- Main Style CSS -->
        <!-- <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/style.css" /> -->
    </head>

    <body>
        <!-- Header Section Start From Here -->
        <header class="header-wrapper">
            <!-- Header Nav Start -->
            <div class="header-nav">
                <div class="container">
                    <div class="header-nav-wrapper d-md-flex d-sm-flex d-xl-flex d-lg-flex justify-content-between">
                        <div class="header-static-nav">
                            <p>Chào mừng đến với foodTHK!</p>
                        </div>
                        <div class="header-menu-nav">

                            {{-- dang nhap, dang ki, hien thi ten tai khoan --}}
                            <ul class="menu-nav">

                                <!-- Authentication Links -->
                                @guest
                                <li>
                                    <a href="{{ route('login') }}">Đăng nhập</a>
                                </li>
                                @if (Route::has('register'))
                                <li  class="pr-0">
                                    <a href="{{ route('register') }}">Đăng kí</a>
                                </li>
                                @endif
                                @else
                                <li class="pr-0">
                                    <div class="dropdown">
                                        <button type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->username }} <i class="ion-ios-arrow-down"></i></button>

                                        <ul class="dropdown-menu animation slideDownIn" aria-labelledby="dropdownMenuButton">
                                            <li><a href="login.html"  href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                    Đăng xuất
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                @endguest
                            </ul>
                        </div>

                        {{-- ket thuc phan xac thuc: dang nhap, dang ki, ten tai khoan --}}

                    </div>
                </div>
            </div>
            <!-- Header Nav End -->
            <div class="header-top bg-white ptb-30px d-xl-block d-none">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="logo">
                                <a href="/"><img class="img-responsive" src="http://127.0.0.1:8000/assets/images/logo/logo.png" alt="logo.jpg" /></a>
                            </div>
                        </div>
                        <div class="col-md-10 align-self-center">
                            <div class="header-right-element d-flex">
                                <div class="search-element media-body">
                                    <form class="d-flex" action="#">
                                        <input type="text" placeholder="Nhập tên sản phẩm (tối thiểu 3 kí tự) ..." />
                                        <button><i class="icon-magnifier"></i></button>
                                    </form>
                                </div>
                                <!--Cart info Start -->
                                <div class="header-tools d-flex">
                                    <div class="cart-info d-flex align-self-center">
                                        <a href="/cart" data-number="5"><i class="icon-bag"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--Cart info End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Nav End -->
            <div class="header-menu bg-blue sticky-nav d-xl-block d-none padding-0px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 custom-col-2">
                            <div class="header-menu-vertical">
                                <h4 class="menu-title">Danh mục</h4>
                                <ul class="menu-content display-none">
                                    <li class="menu-item"><a href="/product/rice">Cơm </a></li>
                                    <li class="menu-item"><a href="/product/congee">Cháo </a></li>
                                    <li class="menu-item"><a href="/product/noodles">Phở</a></li>
                                    <li class="menu-item"><a href="/product/snack">Đồ ăn vặt</a></li>
                                    <li class="menu-item"><a href="/product/drink">Đồ uống</a></li>
                                    <li class="menu-item"><a href="/product/others">Đồ ăn khác</a></li>
                                </ul>
                                <!-- menu content -->
                            </div>
                            <!-- header menu vertical -->
                        </div>
                        <div class="col-lg-9 custom-col-2">
                            <div class="header-horizontal-menu">
                                <ul class="menu-content">
                                    <li class="active menu-dropdown">
                                        <a href="/">Trang chủ</a>
                                    </li><li class="active menu-dropdown">
                                        <a href="/product/com">Cơm</a>
                                    </li><li class="active menu-dropdown">
                                        <a href="/product/do-an-dang-soi">Đồ ăn dạng sợi</a>
                                    </li><li class="active menu-dropdown">
                                        <a href="/product/do-an-chien-ran/">Đồ ăn chiên rán</a>
                                    </li><li class="active menu-dropdown">
                                        <a href="/product/kem">Kem</a>
                                    </li>
                                    <li class="active menu-dropdown">
                                        <a href="/product/do-uong">Đồ Uống</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- header horizontal menu -->
                            {{-- <div class="intro-text-shipping text-end">
                                <div class="free-ship">Free Shipping on Orders $50+</div>
                            </div>  --}}
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- header menu -->
        </header>
        <!-- Header Section End Here -->    
    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="http://127.0.0.1:8000/assets/images/product-image/7.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="http://127.0.0.1:8000/assets/images/product-image/9.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="http://127.0.0.1:8000/assets/images/product-image/8.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="wishlist.html" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas-overlay"></div>
    <!-- Breadcrumb Area Start -->
    <!-- Breadcrumb Area End-->
            <!-- Shop Category Area End -->
            <div class="shop-category-area mt-30px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <!-- Shop Top Area Start -->
                            <div class="shop-top-bar d-flex">
                                <!-- Left Side start -->
                                <div class="shop-tab nav d-flex">
                                    <a class="active" href="#shop-1" data-bs-toggle="tab">
                                        <i class="fa fa-th"></i>
                                    </a>
                                    <a href="#shop-2" data-bs-toggle="tab">
                                        <i class="fa fa-list"></i>
                                    </a>
                                    <p>Có tất cả {{ $product->count() }} sản phẩm</p>
                                </div>
                                <!-- Left Side End -->
                                <!-- Right Side Start -->
                                <!-- Right Side End -->
                            </div>
                            <!-- Shop Top Area End -->

                            <!-- Shop Bottom Area Start -->
                            <div class="shop-bottom-area mt-35">
                                <!-- Shop Tab Content Start -->
                                <div class="tab-content jump">
                                    <!-- Tab One Start -->
                                    <div id="shop-1" class="tab-pane active">
                                        <div class="row responsive-md-class">
                                        @foreach($product as $item)
                                            <div class="col-xl-3 col-md-4 col-sm-6 ">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="{{ route('product.detail', ['id' => $item->id]) }}" class="thumbnail">
                                                            {{-- <a href="{{ dd('$item[]') }}" class="thumbnail"> --}}
                                                            <img class="first-img" src="{{ asset('uploads/product/' . $item->image_product )}}" height="140px" alt="{{$item->title}}">
                                                        </a>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">Mới</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>{{$item->title}}</span></a>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="current-price">&#8363;{{$item->price}}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">THÊM VÀO GIỎ</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                    <!-- Tab One End -->
                                    <!-- Tab Two Start -->
                                    <div id="shop-2" class="tab-pane">
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12 padding-0px">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/7.jpg" alt="" />
                                                                        <img class="second-img" src="http://127.0.0.1:8000/assets/images/product-image/8.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Fila Locker Room Varsity Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Create a cool and sporty look with the FILA® Locker Room Varsity Jacket.</p>
                                                                        <p>Comfortable cotton-blend fabrication.</p>
                                                                        <p>Classic varsity jacket features brand details throughout.</p>
                                                                        <p>Flat knit collar.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="box-inner">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€9.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li class="cart"><a title="Add to cart" class="cart-btn" href="#">ADD TO CART </a></li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="icon-shuffle"></i> Add to Compare</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12 padding-0px">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/9.jpg" alt="" />
                                                                        <img class="second-img" src="http://127.0.0.1:8000/assets/images/product-image/10.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Juicy Couture Tricot Logo Stripe Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Create a cool and sporty look with the FILA® Locker Room Varsity Jacket.</p>
                                                                        <p>Comfortable cotton-blend fabrication.</p>
                                                                        <p>Classic varsity jacket features brand details throughout.</p>
                                                                        <p>Flat knit collar.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="box-inner">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€9.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li class="cart"><a title="Add to cart" class="cart-btn" href="#">ADD TO CART </a></li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="icon-shuffle"></i> Add to Compare</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12 padding-0px">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/11.jpg" alt="" />
                                                                        <img class="second-img" src="http://127.0.0.1:8000/assets/images/product-image/12.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">New Balance Fresh Foam LAZR v1 Sport</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Create a cool and sporty look with the FILA® Locker Room Varsity Jacket.</p>
                                                                        <p>Comfortable cotton-blend fabrication.</p>
                                                                        <p>Classic varsity jacket features brand details throughout.</p>
                                                                        <p>Flat knit collar.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="box-inner">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€9.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li class="cart"><a title="Add to cart" class="cart-btn" href="#">ADD TO CART </a></li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="icon-shuffle"></i> Add to Compare</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12 padding-0px">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/13.jpg" alt="" />
                                                                        <img class="second-img" src="http://127.0.0.1:8000/assets/images/product-image/14.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Juicy Couture Solid Sleeve Puffer Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Create a cool and sporty look with the FILA® Locker Room Varsity Jacket.</p>
                                                                        <p>Comfortable cotton-blend fabrication.</p>
                                                                        <p>Classic varsity jacket features brand details throughout.</p>
                                                                        <p>Flat knit collar.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="box-inner">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€9.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li class="cart"><a title="Add to cart" class="cart-btn" href="#">ADD TO CART </a></li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="icon-shuffle"></i> Add to Compare</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12 padding-0px">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/15.jpg" alt="" />
                                                                        <img class="second-img" src="http://127.0.0.1:8000/assets/images/product-image/16.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">New Balance Fresh Foam Kaymin</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Create a cool and sporty look with the FILA® Locker Room Varsity Jacket.</p>
                                                                        <p>Comfortable cotton-blend fabrication.</p>
                                                                        <p>Classic varsity jacket features brand details throughout.</p>
                                                                        <p>Flat knit collar.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="box-inner">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€9.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li class="cart"><a title="Add to cart" class="cart-btn" href="#">ADD TO CART </a></li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="icon-shuffle"></i> Add to Compare</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12 padding-0px">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/17.jpg" alt="" />
                                                                        <img class="second-img" src="http://127.0.0.1:8000/assets/images/product-image/18.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Water and Wind Resistant Insulated Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Create a cool and sporty look with the FILA® Locker Room Varsity Jacket.</p>
                                                                        <p>Comfortable cotton-blend fabrication.</p>
                                                                        <p>Classic varsity jacket features brand details throughout.</p>
                                                                        <p>Flat knit collar.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="box-inner">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€9.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li class="cart"><a title="Add to cart" class="cart-btn" href="#">ADD TO CART </a></li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="icon-shuffle"></i> Add to Compare</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12 padding-0px">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/19.jpg" alt="" />
                                                                        <img class="second-img" src="http://127.0.0.1:8000/assets/images/product-image/20.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Trans-Weight Hooded Wind and Water Resistant Shell</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Create a cool and sporty look with the FILA® Locker Room Varsity Jacket.</p>
                                                                        <p>Comfortable cotton-blend fabrication.</p>
                                                                        <p>Classic varsity jacket features brand details throughout.</p>
                                                                        <p>Flat knit collar.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="box-inner">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€9.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li class="cart"><a title="Add to cart" class="cart-btn" href="#">ADD TO CART </a></li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="icon-shuffle"></i> Add to Compare</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12 padding-0px">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/21.jpg" alt="" />
                                                                        <img class="second-img" src="http://127.0.0.1:8000/assets/images/product-image/22.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Madden by Steve Madden Cale 6</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Create a cool and sporty look with the FILA® Locker Room Varsity Jacket.</p>
                                                                        <p>Comfortable cotton-blend fabrication.</p>
                                                                        <p>Classic varsity jacket features brand details throughout.</p>
                                                                        <p>Flat knit collar.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="box-inner">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€9.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li class="cart"><a title="Add to cart" class="cart-btn" href="#">ADD TO CART </a></li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="icon-shuffle"></i> Add to Compare</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12 padding-0px">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/23.jpg" alt="" />
                                                                        <img class="second-img" src="http://127.0.0.1:8000/assets/images/product-image/24.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Calvin Klein Jeans Reflective Logo Full Zip</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Create a cool and sporty look with the FILA® Locker Room Varsity Jacket.</p>
                                                                        <p>Comfortable cotton-blend fabrication.</p>
                                                                        <p>Classic varsity jacket features brand details throughout.</p>
                                                                        <p>Flat knit collar.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="box-inner">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€9.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li class="cart"><a title="Add to cart" class="cart-btn" href="#">ADD TO CART </a></li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="icon-shuffle"></i> Add to Compare</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12 padding-0px">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/25.jpg" alt="" />
                                                                        <img class="second-img" src="http://127.0.0.1:8000/assets/images/product-image/26.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">New Balance Fresh Foam Arishi Sport</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Create a cool and sporty look with the FILA® Locker Room Varsity Jacket.</p>
                                                                        <p>Comfortable cotton-blend fabrication.</p>
                                                                        <p>Classic varsity jacket features brand details throughout.</p>
                                                                        <p>Flat knit collar.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="box-inner">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€9.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li class="cart"><a title="Add to cart" class="cart-btn" href="#">ADD TO CART </a></li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="icon-shuffle"></i> Add to Compare</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12 padding-0px">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/27.jpg" alt="" />
                                                                        <img class="second-img" src="http://127.0.0.1:8000/assets/images/product-image/28.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Juicy Couture Juicy Quilted Terry Track Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Create a cool and sporty look with the FILA® Locker Room Varsity Jacket.</p>
                                                                        <p>Comfortable cotton-blend fabrication.</p>
                                                                        <p>Classic varsity jacket features brand details throughout.</p>
                                                                        <p>Flat knit collar.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="box-inner">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€9.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li class="cart"><a title="Add to cart" class="cart-btn" href="#">ADD TO CART </a></li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="icon-shuffle"></i> Add to Compare</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12 padding-0px">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/29.jpg" alt="" />
                                                                        <img class="second-img" src="http://127.0.0.1:8000/assets/images/product-image/17.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Fila Locker Room Varsity Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Create a cool and sporty look with the FILA® Locker Room Varsity Jacket.</p>
                                                                        <p>Comfortable cotton-blend fabrication.</p>
                                                                        <p>Classic varsity jacket features brand details throughout.</p>
                                                                        <p>Flat knit collar.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="box-inner">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€9.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li class="cart"><a title="Add to cart" class="cart-btn" href="#">ADD TO CART </a></li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="icon-shuffle"></i> Add to Compare</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12 padding-0px">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/11.jpg" alt="" />
                                                                        <img class="second-img" src="http://127.0.0.1:8000/assets/images/product-image/12.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Fila Locker Room Varsity Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Create a cool and sporty look with the FILA® Locker Room Varsity Jacket.</p>
                                                                        <p>Comfortable cotton-blend fabrication.</p>
                                                                        <p>Classic varsity jacket features brand details throughout.</p>
                                                                        <p>Flat knit collar.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="box-inner">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€9.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li class="cart"><a title="Add to cart" class="cart-btn" href="#">ADD TO CART </a></li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="icon-shuffle"></i> Add to Compare</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12 padding-0px">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/17.jpg" alt="" />
                                                                        <img class="second-img" src="http://127.0.0.1:8000/assets/images/product-image/18.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Fila Locker Room Varsity Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Create a cool and sporty look with the FILA® Locker Room Varsity Jacket.</p>
                                                                        <p>Comfortable cotton-blend fabrication.</p>
                                                                        <p>Classic varsity jacket features brand details throughout.</p>
                                                                        <p>Flat knit collar.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="box-inner">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€9.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li class="cart"><a title="Add to cart" class="cart-btn" href="#">ADD TO CART </a></li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="icon-shuffle"></i> Add to Compare</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12 padding-0px">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/13.jpg" alt="" />
                                                                        <img class="second-img" src="http://127.0.0.1:8000/assets/images/product-image/14.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Fila Locker Room Varsity Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Create a cool and sporty look with the FILA® Locker Room Varsity Jacket.</p>
                                                                        <p>Comfortable cotton-blend fabrication.</p>
                                                                        <p>Classic varsity jacket features brand details throughout.</p>
                                                                        <p>Flat knit collar.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="box-inner">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€9.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li class="cart"><a title="Add to cart" class="cart-btn" href="#">ADD TO CART </a></li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="icon-shuffle"></i> Add to Compare</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12 padding-0px">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/15.jpg" alt="" />
                                                                        <img class="second-img" src="http://127.0.0.1:8000/assets/images/product-image/16.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Fila Locker Room Varsity Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Create a cool and sporty look with the FILA® Locker Room Varsity Jacket.</p>
                                                                        <p>Comfortable cotton-blend fabrication.</p>
                                                                        <p>Classic varsity jacket features brand details throughout.</p>
                                                                        <p>Flat knit collar.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="box-inner">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€9.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li class="cart"><a title="Add to cart" class="cart-btn" href="#">ADD TO CART </a></li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="icon-shuffle"></i> Add to Compare</a>
                                                                            </li>
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
                                    <!-- Tab Two End -->
                                </div>
                                <!-- Shop Tab Content End -->
                                <!--  Pagination Area Start -->
                                <!--  Pagination Area End -->
                            </div>
                            <!-- Shop Bottom Area End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shop Category Area End -->
        <!-- Footer Area Start -->
        <div class="footer-area">
            <div class="footer-container">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 mb-md-30px mb-lm-30px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Về công ty</h4>
                                    <p class="text-infor">Công ty được thành lập từ 2016, có kinh nghiệm về mua bán online,
                                        giúp
                                        khách hàng có một trải nghiệm mua hàng một cách tốt nhất
                                    </p>
                                    <div class="need-help">
                                        <p class="phone-info">
                                            Số điện thoại hỗ trợ
                                            <span>
                                                0123456789 <br />
                                                0123456789
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-6 col-lg-6 ">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Liên lạc bằng email</h4>
                                    <div class="subscrib-text">
                                        <p>Hãy góp ý cho chúng tôi để nâng cao trải nghiệm khi sử dụng <span
                                                style="font-weight: bold;">foodTHK</span></p>
                                    </div>
                                    <div id="mc_embed_signup" class="subscribe-form">
                                        <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank"
                                            name="mc-embedded-subscribe-form" method="post"
                                            action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input class="email" type="email" required="" placeholder="Viết đóng góp .."
                                                    name="EMAIL" value="" />
                                                <div class="mc-news" aria-hidden="true"
                                                    style="position: absolute; left: -5000px;">
                                                    <input type="text" value="" tabindex="-1"
                                                        name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" />
                                                </div>
                                                <div class="clear">
                                                    <input id="mc-embedded-subscribe" class="button" type="submit"
                                                        name="subscribe" value="Gửi" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="social-info">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="icon-social-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-social-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-social-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-social-google"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12 mb-lm-100px mb-sm-30px">
                                 <!-- Swiper -->
                                  <div class="swiper-container gallery-top">
                                        <div class="swiper-wrapper">
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="http://127.0.0.1:8000/assets/images/product-image/11.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="http://127.0.0.1:8000/assets/images/product-image/12.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="http://127.0.0.1:8000/assets/images/product-image/13.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="http://127.0.0.1:8000/assets/images/product-image/14.jpg" alt="">
                                          </div>
                                        </div>
                                  </div>
                                  <div class="swiper-container gallery-thumbs">
                                    <div class="swiper-wrapper">
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="http://127.0.0.1:8000/assets/images/product-image/11.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="http://127.0.0.1:8000/assets/images/product-image/12.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="http://127.0.0.1:8000/assets/images/product-image/13.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="http://127.0.0.1:8000/assets/images/product-image/14.jpg" alt="">
                                          </div>
                                        </div>
                                  </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="product-details-content quickview-content">
                                    <h2>Originals Kaval Windbr</h2>
                                    <p class="reference">Reference:<span> demo_17</span></p>
                                    <div class="pro-details-rating-wrap">
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">€18.90</li>
                                        </ul>
                                    </div>
                                    <p class="quickview-para">Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                    <div class="pro-details-size-color">
                                        <div class="pro-details-color-wrap">
                                            <span>Color</span>
                                            <div class="pro-details-color-content">
                                                <ul>
                                                    <li class="blue"></li>
                                                    <li class="maroon active"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                        </div>
                                        <div class="pro-details-cart btn-hover">
                                            <a href="#"> + Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="pro-details-wish-com">
                                        <div class="pro-details-wishlist">
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i>Add to wishlist</a>
                                        </div>
                                        <div class="pro-details-compare">
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                        </div>
                                    </div>
                                    <div class="pro-details-social-info">
                                        <span>Share</span>
                                        <div class="social-info">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="ion-social-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-google"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-instagram"></i></a>
                                                </li>
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
        <!-- Modal end -->
        <!-- JS
============================================ -->

            <!-- Vendors JS -->
        <!-- <script src="http://127.0.0.1:8000/assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/vendor/bootstrap.bundle.min.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/vendor/modernizr-3.11.2.min.js"></script> -->

            <!-- Plugins JS -->
         <!-- <script src="http://127.0.0.1:8000/assets/js/plugins/jquery-ui.min.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/plugins/swiper.min.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/plugins/countdown.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/plugins/scrollup.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/plugins/elevateZoom.js"></script> -->

        <!-- Use the minified version files listed below for better performance and remove the files listed above -->
        <script src="http://127.0.0.1:8000/assets/js/vendor/vendor.min.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/plugins/plugins.min.js"></script>

        <!-- Main Activation JS -->
        <script src="http://127.0.0.1:8000/assets/js/main.js"></script>
    </body>

<!-- Mirrored from template.hasthemes.com/rozer/rozer/shop-4-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Sep 2021 11:27:46 GMT -->
</html>
