<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Shome - Shoes eCommerce Website Template"/>
    <meta name="keywords" content="footwear, shoes, modern, shop, store, ecommerce, responsive, e-commerce"/>
    <meta name="author" content="codecarnival"/>

    <title>Turkmenkalkan</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{ asset('assetsf/img/icons/favicon.ico') }}" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400;1,500&display=swap" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="{{ asset('assetsf/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--== Font Awesome Min Icon CSS ==-->
    <link href="{{ asset('assetsf/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!--== Pe7 Stroke Icon CSS ==-->
    <link href="{{ asset('assetsf/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="{{ asset('assetsf/css/swiper.min.css') }}" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="{{ asset('assetsf/css/fancybox.min.css') }}" rel="stylesheet" />
    <!--== Aos Min CSS ==-->
    <link href="{{ asset('assetsf/css/aos.min.css') }}" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="{{ asset('assetsf/css/style.css') }}" rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!--wrapper start-->
<div class="wrapper">

  @include('front.inc.header')
  
  @yield('content')

  @include('front.inc.footer')

  <!--== Scroll Top Button ==-->
  <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

  <!--== Start Quick View Menu ==-->
  <aside class="product-quick-view-modal">
    <div class="product-quick-view-inner">
      <div class="product-quick-view-content">
        <button type="button" class="btn-close">
          <span class="close-icon"><i class="fa fa-close"></i></span>
        </button>
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="thumb">
              <img src="assets/img/shop/product-single/1.webp" width="570" height="541" alt="Alan-Shop">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="content">
              <h4 class="title">Space X Bag For Office</h4>
              <div class="prices">
                <del class="price-old">$85.00</del>
                <span class="price">$70.00</span>
              </div>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>
              <div class="quick-view-select">
                <div class="quick-view-select-item">
                  <label for="forSize" class="form-label">Size:</label>
                  <select class="form-select" id="forSize" required>
                    <option selected value="">s</option>
                    <option>m</option>
                    <option>l</option>
                    <option>xl</option>
                  </select>
                </div>
                <div class="quick-view-select-item">
                  <label for="forColor" class="form-label">Color:</label>
                  <select class="form-select" id="forColor" required>
                    <option selected value="">red</option>
                    <option>green</option>
                    <option>blue</option>
                    <option>yellow</option>
                    <option>white</option>
                  </select>
                </div>
              </div>
              <div class="action-top">
                <div class="pro-qty">
                  <input type="text" id="quantity20" title="Quantity" value="1" />
                </div>
                <button class="btn btn-black">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="canvas-overlay"></div>
  </aside>
  <!--== End Quick View Menu ==-->

  <!--== Start Aside Cart Menu ==-->
  <div class="aside-cart-wrapper offcanvas offcanvas-end" tabindex="-1" id="AsideOffcanvasCart" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h1 id="offcanvasRightLabel"></h1>
      <button class="btn-aside-cart-close" data-bs-dismiss="offcanvas" aria-label="Close">Shopping Cart <i class="fa fa-chevron-right"></i></button>
    </div>
    <div class="offcanvas-body">
      <ul class="aside-cart-product-list">
        <li class="product-list-item">
          <a href="#/" class="remove">×</a>
          <a href="single-product.html">
            <img src="assets/img/shop/product-mini/1.webp" width="90" height="110" alt="Image-HasTech">
            <span class="product-title">Leather Mens Slipper</span>
          </a>
          <span class="product-price">1 × £69.99</span>
        </li>
        <li class="product-list-item">
          <a href="#/" class="remove">×</a>
          <a href="single-product.html">
            <img src="assets/img/shop/product-mini/2.webp" width="90" height="110" alt="Image-HasTech">
            <span class="product-title">Quickiin Mens shoes</span>
          </a>
          <span class="product-price">1 × £20.00</span>
        </li>
      </ul>
      <p class="cart-total"><span>Subtotal:</span><span class="amount">£89.99</span></p>
      <a class="btn-theme" data-margin-bottom="10" href="shop-cart.html">View cart</a>
      <a class="btn-theme" href="shop-checkout.html">Checkout</a>
      <a class="d-block text-end lh-1" href="shop-checkout.html"><img src="assets/img/photos/paypal.webp" width="133" height="26" alt="Has-image"></a>
    </div>
  </div>
  <!--== End Aside Cart Menu ==-->

  <!--== Start Aside Search Menu ==-->
  <aside class="aside-search-box-wrapper offcanvas offcanvas-top" tabindex="-1" id="AsideOffcanvasSearch" aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header">
      <h5 class="d-none" id="offcanvasTopLabel">Aside Search</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="pe-7s-close"></i></button>
    </div>
    <div class="offcanvas-body">
      <div class="container pt--0 pb--0">
        <div class="search-box-form-wrap">
          <form action="{{ route('product.search') }}" method="GET">
            @csrf
            <div class="search-form position-relative">
              <label for="search-input" class="visually-hidden">Search</label>
              <input id="search-input" name="term" class="form-control" placeholder="{{ __('general.search') }} …">
              <button class="search-button"><i class="fa fa-search"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </aside>
  <!--== End Aside Search Menu ==-->

  <!--== Start Side Menu ==-->
  <div class="off-canvas-wrapper offcanvas offcanvas-start" tabindex="-1" id="AsideOffcanvasMenu" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h1 id="offcanvasExampleLabel"></h1>
      <button class="btn-menu-close" data-bs-dismiss="offcanvas" aria-label="Close">{{ __('general.menu') }} <i class="fa fa-chevron-left"></i></button>
    </div>
    <div class="offcanvas-body">
      <div class="info-items">
        <ul>
          {{-- <li>
            <select class="form-control changeLang" id="changeLang">
              <option value="tm" {{ session()->get('locale') == 'tm' ? 'selected' : '' }}>TM</option>
              <option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>RU</option>
              <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>EN</option>
            </select>
          </li> --}}
          <li>
            @php $locale = session()->get('locale') @endphp
            <div class="dropdown">
              <a class="dropdown-toggle" type="button" id="langChanger" data-bs-toggle="dropdown" aria-expanded="false">
                @switch($locale)
                  @case('tm')
                    <img src="{{ asset('assetsf/img/icons/fl_tm.png') }}"  width="30" height="auto"> TM
                    @break
                  @case('ru')
                    <img src="{{ asset('assetsf/img/icons/fl_ru.png') }}"  width="30" height="auto"> RU
                    @break
                  @case('en')
                    <img src="{{ asset('assetsf/img/icons/fl_us.png') }}"  width="30" height="auto"> EN
                    @break
                
                  @default
                    <img src="{{ asset('assetsf/img/icons/fl_tm.png') }}" width="30" height="auto" alt=""> TM
                @endswitch
              </a>
              <ul class="dropdown-menu" style="min-width: 4rem" aria-labelledby="langChanger">
                <li><a class="dropdown-item" href="{{ route('change.lang', 'tm') }}">TM</a></li>
                <li><a class="dropdown-item" href="{{ route('change.lang', 'ru') }}">RU</a></li>
                <li><a class="dropdown-item" href="{{ route('change.lang', 'en') }}">EN</a></li>
              </ul>
            </div>
          </li>
          {{-- <li class="number"><a href="tel://0123456789"><i class="fa fa-phone"></i> (+99312) 510443</a></li>
          <li class="email"><a href="mailto://info@turkmenkalkan.com.tm"><i class="fa fa-envelope"></i>info@turkmenkalkan.com.tm</a></li> --}} 
          {{-- <li class="account"><a href="account-login.html"><i class="fa fa-user"></i>Account</a></li> --}}
        </ul>
      </div>
      <!-- Mobile Menu Start -->
      <div class="mobile-menu-items">
        <ul class="nav-menu">
          <li><a href="{{ route('home') }}">{{ __('general.home') }}</a>
          </li>
          <li><a href="{{ route('about.page') }}">{{ __('general.about') }}</a></li>
          {{-- <li><a href="#">Pages</a>
            <ul class="sub-menu">
              <li><a href="account.html">Account</a></li>
              <li><a href="account-login.html">Login</a></li>
              <li><a href="account-register.html">Register</a></li>
              <li><a href="page-not-found.html">Page Not Found</a></li>
            </ul>
          </li> --}}
          <li><a href="{{ route('products') }}">{{ __('general.products') }}</a>
            <ul class="sub-menu" style="z-index: 100">
              <li><a href="{{ route('products.category', 1) }}">{{ __('general.mens_category') }}</a></li>
              <li><a href="{{ route('products.category', 2) }}">{{ __('general.womens_category') }}</a></li>
              <li><a href="{{ route('products.category', 3) }}">{{ __('general.childrens_category') }}</a></li>
                {{-- <ul class="sub-menu">
                  <li><a href="blog.html">Blog Grid</a></li>
                  <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                  <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                </ul> --}}
              {{-- </li> --}}
            </ul>
          </li>
          <li><a href="{{ route('news.page') }}">{{ __('general.news') }}</a>
            
          </li>
          <li><a href="{{ route('contact.page') }}">{{ __('general.contacts') }}</a></li>
        </ul>
      </div>
      <!-- Mobile Menu End -->
    </div>
  </div>
  <!--== End Side Menu ==-->
</div>

<!--=======================Javascript============================-->

<!--=== jQuery Modernizr Min Js ===-->
<script src="{{ asset('assetsf/js/modernizr.js') }}"></script>
<!--=== jQuery Min Js ===-->
<script src="{{ asset('assetsf/js/jquery-main.js') }}"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="{{ asset('assetsf/js/jquery-migrate.js') }}"></script>
<!--=== jQuery Popper Min Js ===-->
<script src="{{ asset('assetsf/js/popper.min.js') }}"></script>
<!--=== jQuery Bootstrap Min Js ===-->
<script src="{{ asset('assetsf/js/bootstrap.min.js') }}"></script>
<!--=== jQuery Ui Min Js ===-->
<script src="{{ asset('assetsf/js/jquery-ui.min.js') }}"></script>
<!--=== jQuery Swiper Min Js ===-->
<script src="{{ asset('/assetsf/js/swiper.min.js') }}"></script>
<!--=== jQuery Fancybox Min Js ===-->
<script src="{{ asset('/assetsf/js/fancybox.min.js') }}"></script>
<!--=== jQuery Waypoint Js ===-->
<script src="{{ asset('assetsf/js/waypoint.js') }}"></script>
<!--=== jQuery Parallax Min Js ===-->
<script src="{{ asset('assetsf/js/parallax.min.js') }}"></script>
<!--=== jQuery Aos Min Js ===-->
<script src="{{ asset('assetsf/js/aos.min.js') }}"></script>

<!--=== jQuery Custom Js ===-->>
<script src="{{ asset('assetsf/js/custom.js') }}"></script>

{{-- <script>
  /* Change Language */

  $('.changeLang').on('change', function(e) {
      var url = "{{ route('change.lang') }}";
      window.location.href = url + '?lang=' + $(this).val();
    });
</script> --}}

</body>

</html>