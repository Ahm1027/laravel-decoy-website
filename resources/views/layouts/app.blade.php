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
        @include('inc.header')
        @yield('content')
        @include('inc.footer')
      
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
