@extends('layouts.app')

@section('content')

<div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <header class="header navbar-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/logo/logo.svg') }}" alt="Logo"/>
              </a>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
              </button>

              <div
                class="collapse navbar-collapse sub-menu-bar"
                id="navbarSupportedContent"
              >
                <ul id="nav" class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a
                      class="page-scroll active"
                      href="{{ url('/') }}"
                      >Home</a
                    >
                  </li>
                  
                  <li class="nav-item">
                    <a
                      class="page-scroll"
                      href="{{ url('/blogs') }}"
                      >Blogs</a
                    >

                  </li>

                  <li class="nav-item">
                    <a class="page-scroll" href="{{ url('/contact') }}">Contact</a>
                  </li>

                  <div style="border-left:3px solid #000;height:60px"></div>

                  <li class="nav-item">
                    <a
                      class="page-scroll"
                      href="{{ url('/login') }}"
                      >Login</a
                    >
                  </li>

                  <li class="nav-item">
                    <a class="page-scroll" href="{{ url('/register') }}">Sign Up</a>
                  </li>
                  
                </ul>
              </div>
              <!-- navbar collapse -->
            </nav>
            <!-- navbar -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </header>

    <section id="home" class="hero-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-5 col-lg-6">
            <div class="hero-content-wrapper">
              <h1 class="mb-25 wow fadeInDown" data-wow-delay=".2s">Payment Companion</h1>
              <h2 class="mb-25 wow fadeInDown" data-wow-delay=".2s">
                Your payment exchange partners!
              </h2>
              <p class="mb-35 wow fadeInLeft" data-wow-delay=".4s">
                Setup, top of the line, protected payment exchange for your
                enterprise and stay protected!
              </p>
              <a href="{{ url('/login') }}" class="theme-btn">Get Started</a>
            </div>
          </div>
          <div class="col-xl-7 col-lg-6">
            <div class="hero-img">
              <div class="d-inline-block hero-img-right">
                <img
                  src="{{ asset('img/hero/hero-img.png') }}"
                  alt=""
                  class="image wow fadeInRight"
                  data-wow-delay=".5s"
                />
                <img
                  src="{{ asset('img/hero/dots.shape.svg') }}"
                  alt=""
                  class="dot-shape"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="client-logo-section pt-100">
      <div class="container">
        <div class="client-logo-wrapper">
          <div class="section-title text-center">
            <span class="wow fadeInDown" data-wow-delay=".2s"
              >Our Partners</span
            >
          </div>
          <div
            class="
              client-logo-carousel
              d-flex
              align-items-center
              justify-content-between
            "
          >
            <div class="client-logo">
              <img src="{{ asset('img/client-logo/uideck-logo.svg') }}" alt="" />
            </div>
            <div class="client-logo">
              <img src="{{ asset('img/client-logo/graygrids-logo.png') }}" alt="" />
            </div>
            <div class="client-logo">
              <img src="{{ asset('img/client-logo/pagebulb-logo.svg') }}" alt="" />
            </div>
            <div class="client-logo">
              <img src="{{ asset('img/client-logo/lineicons-logo.svg') }}" alt="" />
            </div>
            <div class="client-logo">
              <img src="{{ asset('img/client-logo/lineicons-logo.svg') }}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="feature-section pt-130">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
            <div class="section-title text-center mb-55">
              <span class="wow fadeInDown" data-wow-delay=".2s">Feature</span>
              <h2 class="wow fadeInUp" data-wow-delay=".4s">Why Chose Us?</h2>
              <p class="wow fadeInUp" data-wow-delay=".6s">
                At vero eos et accusamus et iusto odio dignissimos ducimus
                quiblanditiis praesentium
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="feature-box box-style">
              <div class="feature-icon box-icon-style">
                <i class="lni lni-layers"></i>
              </div>
              <div class="box-content-style feature-content">
                <h4>Responsive Design</h4>
                <p>
                  Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                  eirmod tempor ividunt labor dolore magna.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="feature-box box-style">
              <div class="feature-icon box-icon-style">
                <i class="lni lni-code-alt"></i>
              </div>
              <div class="box-content-style feature-content">
                <h4>Web Development</h4>
                <p>
                  Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                  eirmod tempor ividunt labor dolore magna.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="feature-box box-style">
              <div class="feature-icon box-icon-style">
                <i class="lni lni-agenda"></i>
              </div>
              <div class="box-content-style feature-content">
                <h4>Business Analysis</h4>
                <p>
                  Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                  eirmod tempor ividunt labor dolore magna.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section id="about" class="pt-100">
      <div class="about-section">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6">
              <div class="about-img-wrapper">
                <div
                  class="
                    about-img
                    position-relative
                    d-inline-block
                    wow
                    fadeInLeft
                  "
                  data-wow-delay=".3s"
                >
                  <img src="assets/img/about/about-img.png" alt="" />

                  <div class="about-experience">
                    <h3>5 Year Of Working Experience</h3>
                    <p>
                      We Crafted an aweso design library that is robust and
                      intuitive to use.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="about-content-wrapper">
                <div class="section-title">
                  <span class="wow fadeInUp" data-wow-delay=".2s"
                    >About Us</span
                  >
                  <h2 class="mb-40 wow fadeInRight" data-wow-delay=".4s">
                    Built-With Boostrap 5, a New Experiance
                  </h2>
                </div>
                <div class="about-content">
                  <p class="mb-45 wow fadeInUp" data-wow-delay=".6s">
                    We Crafted an awesome design library that is robust and
                    intuitive to use. No matter you're building a business
                    presentation websit or a complex web application our design
                  </p>
                  <div class="counter-up wow fadeInUp" data-wow-delay=".5s">
                    <div class="counter">
                      <span
                        id="secondo"
                        class="countup count color-1"
                        cup-end="30"
                        cup-append="k"
                        >10</span
                      >
                      <h4>Happy Client</h4>
                      <p>
                        We Crafted an awesome design
                        <br class="d-none d-md-block d-lg-none d-xl-block" />
                        library that is robust and
                      </p>
                    </div>
                    <div class="counter">
                      <span
                        id="secondo"
                        class="countup count color-2"
                        cup-end="42"
                        cup-append="k"
                        >5</span
                      >
                      <h4>Project Done</h4>
                      <p>
                        We Crafted an awesome design
                        <br class="d-none d-md-block d-lg-none d-xl-block" />
                        library that is robust and
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section id="service" class="service-section pt-130 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
            <div class="section-title text-center mb-55">
              <span class="wow fadeInDown" data-wow-delay=".2s">Services</span>
              <h2 class="wow fadeInUp" data-wow-delay=".4s">
                Our Best Services
              </h2>
              <p class="wow fadeInUp" data-wow-delay=".6s">
                At vero eos et accusamus et iusto odio dignissimos ducimus
                quiblanditiis praesentium
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="service-box box-style">
              <div class="service-icon box-icon-style">
                <i class="lni lni-capsule"></i>
              </div>
              <div class="box-content-style service-content">
                <h4>Refreshing Design</h4>
                <p>
                  Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                  eirmod tempor ividunt labor dolore magna.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-box box-style">
              <div class="service-icon box-icon-style">
                <i class="lni lni-bootstrap"></i>
              </div>
              <div class="box-content-style service-content">
                <h4>Solid Bootstrap 5</h4>
                <p>
                  Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                  eirmod tempor ividunt labor dolore magna.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-box box-style">
              <div class="service-icon box-icon-style">
                <i class="lni lni-shortcode"></i>
              </div>
              <div class="box-content-style service-content">
                <h4>100+ Components</h4>
                <p>
                  Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                  eirmod tempor ividunt labor dolore magna.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-box box-style">
              <div class="service-icon box-icon-style">
                <i class="lni lni-dashboard"></i>
              </div>
              <div class="box-content-style service-content">
                <h4>Speed Optimized</h4>
                <p>
                  Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                  eirmod tempor ividunt labor dolore magna.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-box box-style">
              <div class="service-icon box-icon-style">
                <i class="lni lni-layers"></i>
              </div>
              <div class="box-content-style service-content">
                <h4>Fully Customizable</h4>
                <p>
                  Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                  eirmod tempor ividunt labor dolore magna.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-box box-style">
              <div class="service-icon box-icon-style">
                <i class="lni lni-reload"></i>
              </div>
              <div class="box-content-style service-content">
                <h4>Regular Updates</h4>
                <p>
                  Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                  eirmod tempor ividunt labor dolore magna.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section id="pricing" class="pricing-section pt-140 pb-100">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-7 col-md-10 mx-auto">
            <div class="section-title text-center mb-60">
              <span class="wow fadeInDown" data-wow-delay=".2s">Price</span>
              <h2 class="wow fadeInUp" data-wow-delay=".4s">
                Our Pricing Plan
              </h2>
              <p class="wow fadeInUp" data-wow-delay=".6s">
                At vero eos et accusamus et iusto odio dignissimos ducimus
                quiblanditiis praesentium
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-12">
            <div
              class="pricing-btn text-center wow fadeInUp"
              data-wow-delay=".3s"
            >
              <ul
                class="nav justify-content-center mb-90"
                id="pills-tab"
                role="tablist"
              >
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    id="pills-1-tab"
                    data-bs-toggle="pill"
                    href="#pills-1"
                    role="tab"
                    aria-controls="pills-1"
                    aria-selected="true"
                    >Monthly</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    id="pills-2-tab"
                    data-bs-toggle="pill"
                    href="#pills-2"
                    role="tab"
                    aria-controls="pills-2"
                    aria-selected="false"
                    >Yearly</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
          <div
            class="tab-pane fade show active"
            id="pills-1"
            role="tabpanel"
            aria-labelledby="pills-home-tab"
          >
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-pricing mb-50">
                  <h4>Basic</h4>
                  <h3>$15.00</h3>
                  <ul>
                    <li>10 Users</li>
                    <li>Minimal Report</li>
                    <li>100MB Data Storage</li>
                    <li>No Support</li>
                    <li>Single Agent</li>
                  </ul>
                  <a href="javascript:void(0)" class="theme-btn border-btn"
                    >Purchase Now</a
                  >
                  <p>No Extra Hidden Charge</p>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-pricing active mb-50">
                  <h4>Standard</h4>
                  <h3>$25.99</h3>
                  <ul>
                    <li>30 Users</li>
                    <li>Minimal Report</li>
                    <li>1GB Data Storage</li>
                    <li>7/24 Support</li>
                    <li>Multiple Agents</li>
                  </ul>
                  <a href="javascript:void(0)" class="theme-btn"
                    >Purchase Now</a
                  >
                  <p>No Extra Hidden Charge</p>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-pricing mb-50">
                  <h4>Premium</h4>
                  <h3>$220.00</h3>
                  <ul>
                    <li>Unlimited Users</li>
                    <li>Full Report</li>
                    <li>Unlimited Data Storage</li>
                    <li>7/24 Support</li>
                    <li>Multiple Agents</li>
                  </ul>
                  <a href="javascript:void(0)" class="theme-btn border-btn"
                    >Purchase Now</a
                  >
                  <p>No Extra Hidden Charge</p>
                </div>
              </div>
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="pills-2"
            role="tabpanel"
            aria-labelledby="pills-2-tab"
          >
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-pricing mb-50">
                  <h4>Basic</h4>
                  <h3>$15.00</h3>
                  <ul>
                    <li>10 Users</li>
                    <li>Minimal Report</li>
                    <li>100MB Data Storage</li>
                    <li>No Support</li>
                    <li>Single Agent</li>
                  </ul>
                  <a href="javascript:void(0)" class="theme-btn border-btn"
                    >Purchase Now</a
                  >
                  <p>No Extra Hidden Charge</p>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-pricing active mb-50">
                  <h4>Standard</h4>
                  <h3>$25.99</h3>
                  <ul>
                    <li>30 Users</li>
                    <li>Minimal Report</li>
                    <li>1GB Data Storage</li>
                    <li>7/24 Support</li>
                    <li>Multiple Agents</li>
                  </ul>
                  <a href="javascript:void(0)" class="theme-btn"
                    >Purchase Now</a
                  >
                  <p>No Extra Hidden Charge</p>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-pricing mb-50">
                  <h4>Premium</h4>
                  <h3>$220.00</h3>
                  <ul>
                    <li>Unlimited Users</li>
                    <li>Full Report</li>
                    <li>Unlimited Data Storage</li>
                    <li>7/24 Support</li>
                    <li>Multiple Agents</li>
                  </ul>
                  <a href="javascript:void(0)" class="theme-btn border-btn"
                    >Purchase Now</a
                  >
                  <p>No Extra Hidden Charge</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

@endsection
