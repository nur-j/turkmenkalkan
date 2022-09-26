@extends('front.layout')

@section('content')

  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    {{-- <div class="page-header-area" data-bg-img="assets/img/photos/bg3.webp">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="page-header-content">
              <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Önümlerimiz</h2>
              <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
                <ul class="breadcrumb">
                  <li><a href="index.html">Baş sahypa</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Harytlar</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area product-default-area">
      <div class="container">
        <div class="row flex-xl-row-reverse justify-content-between">
          <div class="col-xl-9">
            <div class="row">
              <div class="col-12">
                <div class="shop-top-bar">
                  <div class="shop-top-left">
                    @if ( isset($category) ) 
                      <p class="pagination-line">Bu kategoriýada <a href="#">{{ $category->products->count() }}</a> sany haryt bar</p>
                    @endif
                    
                  </div>
                  <div class="shop-top-center">
                    <nav class="product-nav">
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true"><i class="fa fa-th"></i></button>
                        <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false"><i class="fa fa-list"></i></button>
                      </div>
                    </nav>
                  </div>
                  <div class="shop-top-right">
                    <div class="shop-sort">
                      <span>Sort By :</span>
                      <select class="form-select" aria-label="Sort select example">
                        <option selected>Default</option>
                        <option value="1">Popularity</option>
                        <option value="2">Average Rating</option>
                        <option value="3">Newsness</option>
                        <option value="4">Price Low to High</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                    <div class="row">
                      @foreach ($products as $product)
                        <div class="col-sm-6 col-lg-4">
                          <!--== Start Product Item ==-->
                          <div class="product-item">
                            <div class="inner-content">
                              <div class="product-thumb">
                                <a href="{{ route('product.single', $product->id) }}">
                                  <img src="{{ asset($product->images[0]->url) }}" width="270" height="274" alt="Image-HasTech">
                                </a>
                                {{-- <div class="product-flag">
                                  <ul>
                                    <li class="discount">-10%</li>
                                  </ul>
                                </div> --}}
                                <div class="product-action">
                                  <a class="btn-product-wishlist" href="#"><i class="fa fa-heart"></i></a>
                                  <a class="btn-product-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                  <button type="button" class="btn-product-quick-view-open">
                                  <i class="fa fa-arrows"></i>
                                  </button>
                                  <a class="btn-product-compare" href="#"><i class="fa fa-random"></i></a>
                                </div>
                                <a class="banner-link-overlay" href="#"></a>
                              </div>
                              <div class="product-info">
                                <div class="category">
                                  <ul>
                                    <li><a href="{{ route('products.category', $product->category->id) }}">{{ $product->category->title_tm }}</a></li>
                                  </ul>
                                </div>
                                <h4 class="title"><a href="{{ route('product.single', $product->id) }}">{{ $product->title_tm }}</a></h4>
                                {{-- <div class="prices">
                                  <span class="price-old">$300</span>
                                  <span class="sep">-</span>
                                  <span class="price">$240.00</span>
                                </div> --}}
                              </div>
                            </div>
                          </div>
                          <!--== End prPduct Item ==-->
                        </div>
                      @endforeach
                      
                      
                      
                      
                      <div class="col-12">
                        {{-- <div class="pagination-items">
                          <ul class="pagination justify-content-end mb--0">
                            <li><a class="active" href="shop.html">1</a></li>
                            <li><a href="shop-four-columns.html">2</a></li>
                            <li><a href="shop-three-columns.html">3</a></li>
                          </ul>                    
                        </div> --}}
                        {{ $products->links('pagination::bootstrap-4') }}
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                    <div class="row">
                      <div class="col-md-12">
                        
                      </div>
                      <div class="col-md-12">
                       
                      </div>
                      <div class="col-md-12">
                       
                      </div>
                      <div class="col-md-12">
                        
                      </div>
                      <div class="col-md-12">
                        
                      </div>
                      <div class="col-md-12">
                        
                      </div>
                      <div class="col-12">
                        <div class="pagination-items">
                          <ul class="pagination justify-content-end mb--0">
                            <li><a class="active" href="shop.html">1</a></li>
                            <li><a href="shop-four-columns.html">2</a></li>
                            <li><a href="shop-three-columns.html">3</a></li>
                          </ul>                    
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3">
            <div class="shop-sidebar">
              <div class="shop-sidebar-category">
                <h4 class="sidebar-title">Top Categories</h4>
                <div class="sidebar-category">
                  <ul class="category-list mb--0">
                    @foreach ($categories as $cat)
                      <li><a href="{{ route('products.category', $cat->id) }}"> {{ $cat->title_tm }}<span>({{ $cat->products->count() }})</span></a></li>
                    @endforeach
                  </ul>
                </div>
              </div>

              {{-- <div class="shop-sidebar-price-range">
                <h4 class="sidebar-title">Price Filter</h4>
                <div class="sidebar-price-range">   
                  <div id="price-range"></div>
                </div>
              </div> --}}

              <div class="shop-sidebar-color">
                <h4 class="sidebar-title">Reňkler</h4>
                <div class="sidebar-color">
                  <ul class="color-list">
                    @foreach ($colors as $color)
                      <li data-bg-color="#{{ $color->value }}"></li>
                    @endforeach
                    {{-- <li data-bg-color="#39ed8c" class="active"></li> --}}
                  </ul>
                </div>
              </div>

              {{-- <div class="shop-sidebar-size">
                <h4 class="sidebar-title">Size</h4>
                <div class="sidebar-size">
                  <ul class="size-list">
                    <li><a href="shop.html">S <span>(6)</span></a></li>
                    <li><a href="shop.html">M <span>(4)</span></a></li>
                    <li><a href="shop.html">L <span>(2)</span></a></li>
                    <li><a href="shop.html">XL <span>(6)</span></a></li>
                    <li><a href="shop.html">XXL <span>(12)</span></a></li>
                  </ul>
                </div>
              </div> --}}

              {{-- <div class="shop-sidebar-brand">
                <h4 class="sidebar-title">Brand</h4>
                <div class="sidebar-brand">
                  <ul class="brand-list mb--0">
                    <li><a href="shop.html">Lakmeetao <span>(6)</span></a></li>
                    <li><a href="shop.html">Beautifill <span>(4)</span></a></li>
                    <li><a href="shop.html">Made In GD <span>(2)</span></a></li>
                    <li><a href="shop.html">Pecifico <span>(6)</span></a></li>
                    <li><a href="shop.html">Xlovgtir <span>(12)</span></a></li>
                  </ul>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->
  </main>

@endsection