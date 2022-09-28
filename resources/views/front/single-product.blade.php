@extends('front.layout')

@section('content')
    <main class="main-content">

        <!--== Start Product Single Area Wrapper ==-->
      <section class="product-area product-single-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="product-single-item">
                <div class="row">
                  <div class="col-lg-6">
                    <!--== Start Product Thumbnail Area ==-->
                    <div class="product-single-thumb">
                      <div class="swiper-container single-product-thumb single-product-thumb-slider">
                        <div class="swiper-wrapper">
                          @foreach ($product->images as $image)
                            <div class="swiper-slide">
                              <a class="lightbox-image" data-fancybox="gallery" href="{{ asset($image->url) }}">
                                <img src="{{ asset($image->url) }}" width="570" height="541" alt="Image-HasTech">
                              </a>
                            </div>
                          @endforeach
                        </div>
                      </div>
                      <div class="swiper-container single-product-nav single-product-nav-slider">
                        <div class="swiper-wrapper">
                          @foreach ($product->images as $image)
                            <div class="swiper-slide">
                              <img src="{{ asset($image->url) }}" width="127" height="127" alt="Image-HasTech">
                            </div>
                          @endforeach
                        </div>
                      </div>
                    </div>
                    <!--== End Product Thumbnail Area ==-->
                  </div>
                  <div class="col-lg-6">
                    <!--== Start Product Info Area ==-->
                    <div class="product-single-info">
                      <h3 class="main-title">{{ $product->title_tm }}</h3>
                      {{-- <div class="prices">
                        <span class="price">$20.19</span>
                      </div> --}}
                      <p>{{ $product->description }}</p>
                      <div class="product-color">
                        <h6 class="title">Reňkler</h6>
                        <ul class="color-list">
                          @foreach ($product->colors as $color)
                            <li title="{{ $color->title }}"  data-bg-color="#{{ $color->value }}"></li>
                          @endforeach
                          {{-- <li class="active" data-bg-color="#505050"></li> --}}
                        </ul>
                      </div>
                      <div class="product-size">
                        <h6 class="title">Ölçegler</h6>
                        <ul class="size-list">
                          <li>40</li>
                          <li>41</li>
                          {{-- <li class="active">41</li> --}}
                          <li>42</li>
                          <li>43</li>
                          <li>44</li>
                          <li>45</li>
                        </ul>
                      </div>
                      <div class="product-quick-action">
                        <div class="qty-wrap">
                          <div class="pro-qty">
                            <input type="text" title="Quantity" value="1">
                          </div>
                        </div>
                        <a class="btn-theme" href="#">Sebede goş</a>
                      </div>
                      <div class="product-wishlist-compare">
                        <a href="#"><i class="pe-7s-like"></i>Halanlaryma goş</a>
                      </div>
                      {{-- <div class="product-info-footer">
                        <h6 class="code"><span>Code :</span>Ch-256xl</h6>
                        <div class="social-icons">
                          <span>Share</span>
                          <a href="#/"><i class="fa fa-facebook"></i></a>
                          <a href="#/"><i class="fa fa-dribbble"></i></a>
                          <a href="#/"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                      </div> --}}
                    </div>
                    <!--== End Product Info Area ==-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Product Single Area Wrapper ==-->

      <!--== Start Product Area Wrapper ==-->
      {{-- <section class="product-area product-best-seller-area">
        <div class="container pt--0">
          <div class="row">
            <div class="col-12">
              <div class="section-title text-center">
                <h3 class="title">Bu kategoriýadaky beýleki köwüşler</h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="product-slider-wrap">
                <div class="swiper-container product-slider-col4-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <!--== Start Product Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="single-product.html">
                              <img src="assets/img/shop/1.webp" width="270" height="274" alt="Image-HasTech">
                            </a>
                            <div class="product-flag">
                              <ul>
                                <li class="discount">-10%</li>
                              </ul>
                            </div>
                            <div class="product-action">
                      <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                      <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                      <button type="button" class="btn-product-quick-view-open">
                        <i class="fa fa-arrows"></i>
                      </button>
                      <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                    </div>
                            <a class="banner-link-overlay" href="shop.html"></a>
                          </div>
                          <div class="product-info">
                            <div class="category">
                      <ul>
                        <li><a href="shop.html">Men</a></li>
                                <li class="sep">/</li>
                                <li><a href="shop.html">Women</a></li>
                              </ul>
                            </div>
                            <h4 class="title"><a href="single-product.html">Modern Smart Shoes</a></h4>
                            <div class="prices">
                              <span class="price-old">$300</span>
                              <span class="sep">-</span>
                              <span class="price">$240.00</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End prPduct Item ==-->
                    </div>
                    <div class="swiper-slide">
                      <!--== Start Product Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="single-product.html">
                              <img src="assets/img/shop/7.webp" width="270" height="274" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                      <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                      <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                      <button type="button" class="btn-product-quick-view-open">
                        <i class="fa fa-arrows"></i>
                      </button>
                      <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                    </div>
                            <a class="banner-link-overlay" href="shop.html"></a>
                          </div>
                          <div class="product-info">
                            <div class="category">
                      <ul>
                        <li><a href="shop.html">Men</a></li>
                                <li class="sep">/</li>
                                <li><a href="shop.html">Women</a></li>
                              </ul>
                            </div>
                            <h4 class="title"><a href="single-product.html">Quickiin Mens shoes</a></h4>
                            <div class="prices">
                              <span class="price">$240.00</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End prPduct Item ==-->
                    </div>
                    <div class="swiper-slide">
                      <!--== Start Product Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="single-product.html">
                              <img src="assets/img/shop/3.webp" width="270" height="274" alt="Image-HasTech">
                            </a>
                            <div class="product-flag">
                              <ul>
                                <li class="discount">-10%</li>
                              </ul>
                            </div>
                            <div class="product-action">
                      <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                      <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                      <button type="button" class="btn-product-quick-view-open">
                        <i class="fa fa-arrows"></i>
                      </button>
                      <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                    </div>
                            <a class="banner-link-overlay" href="shop.html"></a>
                          </div>
                          <div class="product-info">
                            <div class="category">
                      <ul>
                        <li><a href="shop.html">Men</a></li>
                                <li class="sep">/</li>
                                <li><a href="shop.html">Women</a></li>
                              </ul>
                            </div>
                            <h4 class="title"><a href="single-product.html">Rexpo Womens shoes</a></h4>
                            <div class="prices">
                              <span class="price-old">$300</span>
                              <span class="sep">-</span>
                              <span class="price">$240.00</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End prPduct Item ==-->
                    </div>
                    <div class="swiper-slide">
                      <!--== Start Product Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="single-product.html">
                              <img src="assets/img/shop/4.webp" width="270" height="274" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                      <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                      <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                      <button type="button" class="btn-product-quick-view-open">
                        <i class="fa fa-arrows"></i>
                      </button>
                      <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                    </div>
                            <a class="banner-link-overlay" href="shop.html"></a>
                          </div>
                          <div class="product-info">
                            <div class="category">
                      <ul>
                        <li><a href="shop.html">Men</a></li>
                                <li class="sep">/</li>
                                <li><a href="shop.html">Women</a></li>
                              </ul>
                            </div>
                            <h4 class="title"><a href="single-product.html">Leather Mens Slipper</a></h4>
                            <div class="prices">
                              <span class="price">$240.00</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End prPduct Item ==-->
                    </div>
                    <div class="swiper-slide">
                      <!--== Start Product Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="single-product.html">
                              <img src="assets/img/shop/5.webp" width="270" height="274" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                      <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                      <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                      <button type="button" class="btn-product-quick-view-open">
                        <i class="fa fa-arrows"></i>
                      </button>
                      <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                    </div>
                            <a class="banner-link-overlay" href="shop.html"></a>
                          </div>
                          <div class="product-info">
                            <div class="category">
                      <ul>
                        <li><a href="shop.html">Men</a></li>
                                <li class="sep">/</li>
                                <li><a href="shop.html">Women</a></li>
                              </ul>
                            </div>
                            <h4 class="title"><a href="single-product.html">Primitive Mens shoes</a></h4>
                            <div class="prices">
                              <span class="price-old">$300</span>
                              <span class="sep">-</span>
                              <span class="price">$240.00</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End prPduct Item ==-->
                    </div>
                    <div class="swiper-slide">
                      <!--== Start Product Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="single-product.html">
                              <img src="assets/img/shop/6.webp" width="270" height="274" alt="Image-HasTech">
                            </a>
                            <div class="product-flag">
                              <ul>
                                <li class="discount">-10%</li>
                              </ul>
                            </div>
                            <div class="product-action">
                      <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                      <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                      <button type="button" class="btn-product-quick-view-open">
                        <i class="fa fa-arrows"></i>
                      </button>
                      <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                    </div>
                            <a class="banner-link-overlay" href="shop.html"></a>
                          </div>
                          <div class="product-info">
                            <div class="category">
                      <ul>
                        <li><a href="shop.html">Men</a></li>
                                <li class="sep">/</li>
                                <li><a href="shop.html">Women</a></li>
                              </ul>
                            </div>
                            <h4 class="title"><a href="single-product.html">Simple Fabric Shoe</a></h4>
                            <div class="prices">
                              <span class="price-old">$300</span>
                              <span class="sep">-</span>
                              <span class="price">$240.00</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End prPduct Item ==-->
                    </div>
                  </div>
                </div>
                <!--== Add Swiper Arrows ==-->
                <div class="product-swiper-btn-wrap">
                  <div class="product-swiper-btn-prev">
                    <i class="fa fa-arrow-left"></i>
                  </div>
                  <div class="product-swiper-btn-next">
                    <i class="fa fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> --}}
      <!--== End Product Area Wrapper ==-->

    </main>
@endsection
