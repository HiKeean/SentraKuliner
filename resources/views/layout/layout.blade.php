<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SentraKuliner - @yield('title') </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/logo.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/signericafat.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/cerebrisans.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/elegant.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/linear-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/easyzoom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/customCss/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/customCss/layout.css') }}">
    <style>
        .logo a {
            display: block;
        }   

        .logo a img {
            max-width: 75%;
        }
    </style>
</head>
<body>
    
    <div class="main-wrapper">
        <header class="header-area">
            <div class="header-large-device ml-30 mr-50">
                <div class="header-middle">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/logo/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="main-menu main-menu-lh-2">
                                <nav>
                                    <ul class="menu-center">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="shop.html">Pesanan Makanan</a></li>
                                        <li><a href="#">GoTitip</a></li>
                                        {{-- <li><a href="blog.html">BLOG <span class="bg-green">NEW</span></a></li>
                                        <li><a href="contact.html">CONTACT </a></li> --}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">
                            <div class="header-action header-action-flex">
                                @if (Auth::check())
                                    <div class="same-style-2 same-style-2-font-inc header-cart" style="position: relative;">
                                        <a href="#"><i class="icon-basket-loaded"></i></a>    
                                        
                                        <!-- Tooltip dengan gambar dan teks -->
                                        <div class="cart-tooltip">
                                            <img src="https://images.tokopedia.net/img/purchase-platform/illustration/empty-state-pp.png" alt="Empty Cart" class="tooltip-cart-image">
                                            <p class="tooltip-message">Wah, keranjang belanjaanmu kosong<br>Yuk isi dengan barang-barang impianmu</p>
                                        </div>
                                    </div>
                                    <div class="same-style-2 same-style-2-font-inc notification">
                                        <a href="#"><i class="icon-bell"></i></a>
                                        <div class="notif-tooltip">
                                            <p class="tooltip-message">No Notification</p>
                                        </div>
                                        {{-- <a href="wishlist.html"><i class="icon-bell"></i><span class="pro-count red">03</span></a> --}}
                                    </div>
                                    <div class="same-style-2 same-style-2-font-inc user">
                                        <a href="#"><i class="icon-user"></i></a>
                                        <div class="user-tooltip">
                                            <ul>
                                                <li>Edit Profile</li>
                                                <li>Order History</li>
                                                <li><a href="/auth/a3ac9xL3Yka3ac9xL4Ykkbc">Logout</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                @else
                                    <button class="btn bg-orange"><a href="/login" style="color: white">Login</a></button>
                                @endif
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-small-device small-device-ptb-1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <div class="mobile-logo">
                                <a href="index.html">
                                    <img alt="" src="assets/images/logo/logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="header-action header-action-flex">
                                <div class="same-style-2 same-style-2-font-inc">
                                    <a href="login-register.html"><i class="icon-user"></i></a>
                                </div>
                                <div class="same-style-2 same-style-2-font-inc">
                                    <a href="wishlist.html"><i class="icon-heart"></i><span class="pro-count red">03</span></a>
                                </div>
                                <div class="same-style-2 same-style-2-font-inc header-cart">
                                    <a class="cart-active" href="#">
                                        <i class="icon-basket-loaded"></i><span class="pro-count red">02</span>
                                    </a>
                                </div>
                                <div class="same-style-2 main-menu-icon">
                                    <a class="mobile-header-button-active" href="#"><i class="icon-menu"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile header start -->
        <div class="mobile-header-active mobile-header-wrapper-style">
            <div class="clickalbe-sidebar-wrap">
                <a class="sidebar-close"><i class="icon_close"></i></a>
                <div class="mobile-header-content-area">
                    <div class="header-offer-wrap-2 mrg-none mobile-header-padding-border-4">
                        <p><span>FREE SHIPPING</span> world wide for all orders over $199</p>
                    </div>
                    <div class="mobile-search mobile-header-padding-border-1">
                        <form class="search-form" action="#">
                            <input type="text" placeholder="Search here…">
                            <button class="button-search"><i class="icon-magnifier"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-padding-border-2">
                        <!-- mobile menu start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="index.html">Home</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home version 1 </a></li>
                                        <li><a href="index-2.html">Home version 2</a></li>
                                        <li><a href="index-3.html">Home version 3</a></li>
                                        <li><a href="index-4.html">Home version 4</a></li>
                                        <li><a href="index-5.html">Home version 5</a></li>
                                        <li><a href="index-6.html">Home version 6</a></li>
                                        <li><a href="index-7.html">Home version 7</a></li>
                                        <li><a href="index-8.html">Home version 8</a></li>
                                        <li><a href="index-9.html">Home version 9</a></li>
                                        <li><a href="index-10.html">Home version 10</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children "><a href="#">shop</a>
                                    <ul class="dropdown">
                                        <li class="menu-item-has-children"><a href="#">shop layout</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">standard style</a></li>
                                                <li><a href="shop-list.html">shop list style</a></li>
                                                <li><a href="shop-fullwide.html">shop fullwide</a></li>
                                                <li><a href="shop-no-sidebar.html">grid no sidebar</a></li>
                                                <li><a href="shop-list-no-sidebar.html">list no sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">shop right sidebar</a></li>
                                                <li><a href="store-location.html">store location</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Products Layout</a>
                                            <ul class="dropdown">
                                                <li><a href="product-details.html">tab style 1</a></li>
                                                <li><a href="product-details-2.html">tab style 2</a></li>
                                                <li><a href="product-details-sticky.html">sticky style</a></li>
                                                <li><a href="product-details-gallery.html">gallery style </a></li>
                                                <li><a href="product-details-affiliate.html">affiliate style</a></li>
                                                <li><a href="product-details-group.html">group style</a></li>
                                                <li><a href="product-details-fixed-img.html">fixed image style </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="about-us.html">about us </a></li>
                                        <li><a href="cart.html">cart page</a></li>
                                        <li><a href="checkout.html">checkout </a></li>
                                        <li><a href="my-account.html">my account</a></li>
                                        <li><a href="wishlist.html">wishlist </a></li>
                                        <li><a href="compare.html">compare </a></li>
                                        <li><a href="contact.html">contact us </a></li>
                                        <li><a href="order-tracking.html">order tracking</a></li>
                                        <li><a href="login-register.html">login / register </a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children "><a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="blog.html">blog standard </a></li>
                                        <li><a href="blog-no-sidebar.html">blog no sidebar </a></li>
                                        <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu end -->
                    </div>
                    <div class="main-categori-wrap mobile-menu-wrap mobile-header-padding-border-3">
                        <a class="categori-show purple" href="#">
                            <i class="lnr lnr-menu"></i> All Department <i class="icon-arrow-down icon-right"></i>
                        </a>
                        <div class="categori-hide-2">
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children "><a href="#">Clothing </a>
                                        <ul class="dropdown">
                                            <li class="menu-item-has-children"><a href="#">Men Clothing</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Sleeveless shirt</a></li>
                                                    <li><a href="shop.html">Cotton T-shirt</a></li>
                                                    <li><a href="shop.html">Trench coat</a></li>
                                                    <li><a href="shop.html">Cargo pants</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Women Clothing</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Wedding dress</a></li>
                                                    <li><a href="shop.html">Gym clothes</a></li>
                                                    <li><a href="shop.html">Cotton T-shirt </a></li>
                                                    <li><a href="shop.html">Long coat</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Kids Clothing</a>
                                                <ul class="dropdown">
                                                    <li><a href="product-details.html">Winter Wear </a></li>
                                                    <li><a href="product-details-2.html">Occasion Gowns</a></li>
                                                    <li><a href="product-details-tab1.html">Birthday Tailcoat</a></li>
                                                    <li><a href="product-details-tab2.html">Stylish Unicorn</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children "><a href="#">Women</a>
                                        <ul class="dropdown">
                                            <li class="menu-item-has-children"><a href="#">Men Clothing</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Sleeveless shirt</a></li>
                                                    <li><a href="shop.html">Cotton T-shirt</a></li>
                                                    <li><a href="shop.html">Trench coat</a></li>
                                                    <li><a href="shop.html">Cargo pants</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Women Clothing</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Wedding dress</a></li>
                                                    <li><a href="shop.html">Gym clothes</a></li>
                                                    <li><a href="shop.html">Cotton T-shirt </a></li>
                                                    <li><a href="shop.html">Long coat</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children "><a href="#">Men </a>
                                        <ul class="dropdown">
                                            <li class="menu-item-has-children"><a href="#">Men Clothing</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Sleeveless shirt</a></li>
                                                    <li><a href="shop.html">Cotton T-shirt</a></li>
                                                    <li><a href="shop.html">Trench coat</a></li>
                                                    <li><a href="shop.html">Cargo pants</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Women Clothing</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Wedding dress</a></li>
                                                    <li><a href="shop.html">Gym clothes</a></li>
                                                    <li><a href="shop.html">Cotton T-shirt </a></li>
                                                    <li><a href="shop.html">Long coat</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Kids Clothing</a>
                                                <ul class="dropdown">
                                                    <li><a href="product-details.html">Winter Wear </a></li>
                                                    <li><a href="product-details-2.html">Occasion Gowns</a></li>
                                                    <li><a href="product-details-tab1.html">Birthday Tailcoat</a></li>
                                                    <li><a href="product-details-tab2.html">Stylish Unicorn</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children "><a href="#">Baby Girl </a>
                                        <ul class="dropdown">
                                            <li class="menu-item-has-children"><a href="#">Men Clothing</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Sleeveless shirt</a></li>
                                                    <li><a href="shop.html">Cotton T-shirt</a></li>
                                                    <li><a href="shop.html">Trench coat</a></li>
                                                    <li><a href="shop.html">Cargo pants</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Women Clothing</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Wedding dress</a></li>
                                                    <li><a href="shop.html">Gym clothes</a></li>
                                                    <li><a href="shop.html">Cotton T-shirt </a></li>
                                                    <li><a href="shop.html">Long coat</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Baby Boy </a></li>
                                    <li><a href="shop.html">Accessories </a></li>
                                    <li><a href="shop.html">Shoes </a></li>
                                    <li><a href="shop.html">Shirt </a></li>
                                    <li><a href="shop.html">T-Shirt </a></li>
                                    <li><a href="shop.html">Coat </a></li>
                                    <li><a href="shop.html">Jeans </a></li>
                                    <li><a href="shop.html">Collection </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="mobile-header-info-wrap mobile-header-padding-border-3">
                        <div class="single-mobile-header-info">
                            <a href="store-location.html"><i class="lastudioicon-pin-3-2"></i> Store Location </a>
                        </div>
                        <div class="single-mobile-header-info">
                            <a class="mobile-language-active" href="#">Language <span><i class="icon-arrow-down"></i></span></a>
                            <div class="lang-curr-dropdown lang-dropdown-active">
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-mobile-header-info">
                            <a class="mobile-currency-active" href="#">Currency <span><i class="icon-arrow-down"></i></span></a>
                            <div class="lang-curr-dropdown curr-dropdown-active">
                                <ul>
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">Real</a></li>
                                    <li><a href="#">BDT</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-contact-info mobile-header-padding-border-4">
                        <ul>
                            <li><i class="icon-phone "></i> (+612) 2531 5600</li>
                            <li><i class="icon-envelope-open "></i> norda@domain.com</li>
                            <li><i class="icon-home"></i> PO Box 1622 Colins Street West Australia</li>
                        </ul>
                    </div>
                    <div class="mobile-social-icon">
                        <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                        <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                        <a class="pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                        <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        @yield('body')
    </div>



    <script src="{{ asset('assets/js/vendor/modernizr-3.11.7.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-v3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-migrate-v3.3.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.instagramfeed.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui-touch-punch.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/sticky-sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/easyzoom.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ajax-mail.js') }}"></script>
    <script src="{{ asset('assets/js/customJs/login.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>