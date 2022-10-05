  <!--== Start Footer Area Wrapper ==-->
  <footer class="footer-area">
    <!--== Start Footer Main ==-->
    <div class="footer-main">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-md-4">
            <!--== Start widget Item ==-->
            <div class="widget-item">
              <div class="about-widget-wrap">
                <div class="widget-logo-area">
                  <a href="{{ route("home") }}">
                    <img class="logo-main" src="{{ asset('assetsf/img/logo.jpg') }}" width="131" height="34" alt="Logo" />
                  </a>
                </div>
              </div>
            </div>
            <!--== End widget Item ==-->
          </div>
          <div class="col-md-4">
            <!--== Start widget Item ==-->
            <div class="widget-item">
              <h4 class="widget-title">{{ __('general.address') }}</h4>
              <h4 class="widget-collapsed-title collapsed" data-bs-toggle="collapse" data-bs-target="#widgetId-3">{{ __('general.address') }}</h4>
              <div id="widgetId-3" class="collapse widget-collapse-body">
                <div class="collapse-body">
                  <div class="widget-contact-wrap">
                    <ul>
                      <li><span><i class="fa fa-map-marker"></i></span> {{ __('general.address_real') }}</li>
                      <li><span><i class="fa fa-phone"></i></span> <a href="#">(+993 137) 36680/82, (+993 12) 510443</a></li>
                      <li><span><i class="fa fa-envelope"></i></span> <a href="#">info@turkmenkalkan.com.tm</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!--== End widget Item ==-->
          </div>
          <div class="col-md-4">
            <!--== Start widget Item ==-->
            <div class="widget-item widget-services-item">
              <h4 class="widget-title">{{ __('general.stores') }}</h4>
              <h4 class="widget-collapsed-title collapsed" data-bs-toggle="collapse" data-bs-target="#widgetId-1">{{ __('general.stores') }}</h4>
              <div id="widgetId-1" class="collapse widget-collapse-body">
                <div class="collapse-body">
                  <div class="widget-menu-wrap">
                    <ul class="nav-menu" style="color: white">
                      <li >{{ __('general.store1') }} <br> (+993 61) 457903</li>
                      <hr>
                      <li>{{ __('general.store2') }} <br> (+993 65) 712975</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!--== End widget Item ==-->
          </div>
        </div>
      </div>
    </div>
    <!--== End Footer Main ==-->

    <!--== Start Footer Bottom ==-->
    <div class="footer-bottom">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-md-7 col-lg-6">
            <p class="copyright">© 2022 {{ __('general.title') }}. {{ __('general.copyright') }}</p>
          </div>
          <div class="col-md-5 col-lg-6">
            {{-- <div class="payment">
              <a href="account-login.html"><img src="assets/img/photos/payment-card.webp" width="192" height="21" alt="Payment Logo"></a>
            </div> --}}
          </div>s
        </div>  
      </div>
    </div>
    <!--== End Footer Bottom ==-->
  </footer>
  <!--== End Footer Area Wrapper ==-->