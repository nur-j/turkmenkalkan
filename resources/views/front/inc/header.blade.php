  <!--== Start Header Wrapper ==-->
  <header class="main-header-wrapper position-relative">
    <div class="header-top">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="header-top-align">
              <div class="header-top-align-start">
                <div class="desc">
                  {{-- <p>World Wide Completely Free Returns and Free Shipping</p> --}}
                </div>
              </div>
              <div class="header-top-align-end">
                <div class="header-info-items">
                  <div class="info-items">
                    <ul style="align-items: center">
                      <li class="number"><i class="fa fa-phone"></i><a href="tel://+99312510443">(+993 137) 36680, (+993 137) 36576</a></li>
                      <li class="email"><i class="fa fa-envelope"></i><a href="mailto://info@turkmenkalkan.com.tm">info@turkmenkalkan.com.tm</a></li>
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
                      {{-- <li class="account"><i class="fa fa-user"></i><a href="account-login.html">Account</a></li> --}}
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle">
      <div class="container pt--0 pb--0">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="header-middle-align">
              <div class="header-middle-align-start">
                <div class="header-logo-area">
                  <a href="{{ route('home') }}">
                    <img class="logo-main" src="{{ asset('assetsf/img/logo.jpg') }}" width="131" height="34" alt="Logo" />
                    <img class="logo-light" src="assets/img/logo-light.webp" width="131" height="34" alt="Logo" />
                  </a>
                </div>
              </div>
              <div class="header-middle-align-center">
                <div class="header-search-area">
                  <form class="header-searchbox" method="GET" action="{{ route('product.search') }}">
                    @csrf
                    <input type="search" class="form-control" placeholder="{{ __('general.search') }} ..." name="term">
                    <button class="btn-submit" type="submit"><i class="pe-7s-search"></i></button>
                  </form>
                </div>
              </div>
              <div class="header-middle-align-end">
                <div class="header-action-area">
                  <div class="shopping-search">
                    <button class="shopping-search-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch"><i class="pe-7s-search icon"></i></button>
                  </div>
                  {{-- <div class="shopping-wishlist">
                    <a class="shopping-wishlist-btn" href="shop-wishlist.html">
                      <i class="pe-7s-like icon"></i>
                    </a>
                  </div> --}}
                  <div class="shopping-cart">
                    <!-- <button class="shopping-cart-btn" type="button" {{-- data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasCart" aria-controls="offcanvasRightLabel" --}}>
                      <i class="pe-7s-shopbag icon"></i>
                      {{-- <sup class="shop-count">02</sup> --}}
                    </button> -->
                  </div>
                  <button class="btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                    <i class="pe-7s-menu"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-area header-default">
      <div class="container" style="max-width: 100%">
        <div class="row no-gutter align-items-center position-relative">
          <div class="col-12">
            <div class="header-align">
              <div class="header-navigation-area position-relative">
                <ul class="main-menu nav">
                  <li class=""><a href="{{ route('home') }}"><span>{{ __('general.home') }}</span></a>
                    {{-- <ul class="submenu-nav">
                      <li><a href="index.html"><span>Home One</span></a></li>
                      <li><a href="index-two.html"><span>Home Two</span></a></li>
                    </ul> --}}
                  </li>
                  <li><a href="{{ route('about.page') }}"><span>{{ __('general.about') }}</span></a></li>
                  {{-- <li class="has-submenu"><a href="#/"><span>Pages</span></a>
                    <ul class="submenu-nav">
                      <li><a href="account.html"><span>Account</span></a></li>
                      <li><a href="account-login.html"><span>Login</span></a></li>
                      <li><a href="account-register.html"><span>Register</span></a></li>
                      <li><a href="page-not-found.html"><span>Page Not Found</span></a></li>
                    </ul>
                  </li> --}}
                  <li class="has-submenu {{-- position-static --}}"><a href="{{ route('products') }}"><span>{{ __('general.products') }}</span></a>
                    <ul class="submenu-nav">
                      <li><a href="{{ route('products.category', 1) }}"><span>{{ __('general.mens_category') }}</span></a></li>
                      <li><a href="{{ route('products.category', 2) }}"><span>{{ __('general.womens_category') }}</span></a></li>
                      <li><a href="{{ route('products.category', 3) }}"><span>{{ __('general.childrens_category') }}</span></a></li>
                    </ul>
                    {{-- <ul class="submenu-nav submenu-nav-mega column-3">
                      <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Shop Layout</span></a>
                        <ul>
                          <li><a href="shop-three-columns.html"><span>Shop 3 Column</span></a></li>
                          <li><a href="/products"><span>Shop 4 Column</span></a></li>
                          <li><a href="shop.html"><span>Shop Left Sidebar</span></a></li>
                          <li><a href="shop-right-sidebar.html"><span>Shop Right Sidebar</span></a></li>
                        </ul>
                      </li>
                      <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Single Product</span></a>
                        <ul>
                          <li><a href="single-normal-product.html"><span>Single Product Normal</span></a></li>
                          <li><a href="single-product.html"><span>Single Product Variable</span></a></li>
                          <li><a href="single-group-product.html"><span>Single Product Group</span></a></li>
                          <li><a href="single-affiliate-product.html"><span>Single Product Affiliate</span></a></li>
                        </ul>
                      </li>
                      <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Others Pages</span></a>
                        <ul>
                          <li><a href="shop-cart.html"><span>Shopping Cart</span></a></li>
                          <li><a href="shop-checkout.html"><span>Checkout</span></a></li>
                          <li><a href="shop-wishlist.html"><span>Wishlist</span></a></li>
                          <li><a href="shop-compare.html"><span>Compare</span></a></li>
                        </ul>
                      </li>
                    </ul> --}}
                  </li>
                  <li class=""><a href="{{ route('news.page') }}"><span>{{ __('general.news') }}</span></a></li>
                  <li><a href="{{ route('contact.page') }}"><span>{{ __('general.contacts') }}</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--== End Header Wrapper ==-->