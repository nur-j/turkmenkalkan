@extends('front.layout')

@section('content')
  
  <main class="main-content">

    <!--== Start Contact Area Wrapper ==-->
    <section class="contact-area contact-page-area">
      <div class="container">
        <div class="row contact-page-wrapper">
          <div class="col-xl-9">
            <div class="contact-form-wrap" data-aos="fade-right">
              <div class="contact-form-title">
                <h2 class="title">{{ __('contacts.contacts_us_text') }}</h2>
              </div>
              <!--== Start Contact Form ==-->
              <div class="contact-form">
                <form id="contact-form" action="#" method="POST">
                  <div class="row row-gutter-20">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" type="text" name="con_name" placeholder="{{ __('contacts.name') }}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" type="email" name="con_email" placeholder="{{ __('contacts.email') }}">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <input class="form-control" type="text" placeholder="{{ __('contacts.theme') }}">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group mb--0">
                        <textarea class="form-control" name="con_message" placeholder="{{ __('contacts.message') }}"></textarea>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group mb--0">
                        <button class="btn-theme" type="submit">{{ __('contacts.send') }}</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!--== End Contact Form ==-->

            </div>
          </div>
          <div class="col-xl-3">
            <div class="contact-info-wrap">
              <div class="contact-info">
                <div class="row">
                  <div class="col-lg-4 col-xl-12">
                    <div class="info-item"  data-aos="fade-left">
                      <div class="info">
                        <h5 class="title">{{ __('general.address') }}</h5>
                        <p>{{ __('general.address_real') }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-xl-12">
                    <div class="info-item"  data-aos="fade-left" data-aos-delay="60">
                      <div class="info">
                        <h5 class="title">{{ __('contacts.phone') }}</h5>
                        <p>
                          <a href="tel://+99313736680"> (+993 137) 36680</a><br>
                          <a href="tel://+99312510443">(+993 137) 36576</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-xl-12">
                    <div class="info-item"  data-aos="fade-left" data-aos-delay="120">
                      <div class="info">
                        <h5 class="title">Email / Web</h5>
                        <p style="font-size: 0.9rem">
                          <a href="mailto://demo@example.com">info@turkmenkalkan.com.tm</a><br>
                          <a href="mailto://www.example.com">www.turkmenkalkan.com.tm</a>
                        </p>
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
    <!--== End Contact Area Wrapper ==-->
  </main>

@endsection