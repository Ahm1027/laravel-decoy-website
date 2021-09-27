<html class="no-js" lang="">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title></title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link
        rel="shortcut icon"
        type="image/x-icon"
        href="{{ asset('img/favicon.png') }}"
        />

        <link rel="stylesheet" href="{{ asset('css/bootstrap-5.0.0-beta1.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/LineIcons.2.0.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    </head>
    <body>
        @yield('content')
        <footer class="footer pt-100">
            <div class="container">
              <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                  <div
                    class="footer-widget mb-60 wow fadeInLeft"
                    data-wow-delay=".2s"
                  >
                    <a href="index.html" class="logo mb-30"
                      ><img src="{{ asset('img/logo/logo.svg') }}" alt="logo"
                    /></a>
                    <p class="mb-30 footer-desc">
                      We Crafted an awesome desig library that is robust and intuitive
                      to use. No matter you're building a business presentation
                      websit.
                    </p>
                  </div>
                </div>
      
                <div class="col-xl-3 col-lg-3 col-md-6 ms-auto">
                  <div
                    class="footer-widget mb-60 wow fadeInRight"
                    data-wow-delay=".8s"
                  >
                    <h4>Contact</h4>
                    <ul class="footer-contact">
                      <li>
                        <p>emailhoneypot@cynergizer.com</p>
                      </li>
                      <li>
                        <p>United State Of America *12 Street House</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
      
              <div class="copyright-area">
                  <div class="footer-social-links">
                    <ul class="d-flex justify-content-center">
                      <li>
                        <a href="javascript:void(0)"
                        class="lni lni-facebook-filled"></a>
                      </li>
                      <li>
                        <a href="javascript:void(0)"
                        class="lni lni-twitter-filled"></a>
                      </li>
                      <li>
                        <a href="javascript:void(0)"
                        class="lni lni-linkedin-original"></a>
                      </li>
                      <li>
                        <a href="javascript:void(0)"
                        class="lni lni-instagram-filled"></a>
                      </li>
                    </ul>
                </div>
              </div>
            </div>
          </footer>
      
          <a href="#" class="scroll-top lni lni-arrow-up">
          </a>
      
          <script src="{{ asset('js/bootstrap.bundle-5.0.0-beta1.min.js') }}"></script>
          <script src="{{ asset('js/contact-form.js') }}"></script>
          <script src="{{ asset('js/count-up.min.js') }}"></script>
          <script src="{{ asset('js/tiny-slider.js') }}"></script>
          <script src="{{ asset('js/isotope.min.js') }}"></script>
          <script src="{{ asset('js/glightbox.min.js') }}"></script>
          <script src="{{ asset('js/wow.min.js') }}"></script>
          <script src="{{ asset('js/imagesloaded.min.js') }}"></script>
          <script src="{{ asset('js/main.js') }}"></script>
    </body>

</html>
