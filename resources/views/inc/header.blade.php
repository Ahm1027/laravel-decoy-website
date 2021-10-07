
    <header class="header navbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ url('/') }}">
                  <img src="{{ asset('img/logo/logo.jpg') }}" alt="Logo" height="70%" width="70%"/>
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
                        href="{{ url('/offices') }}"
                        >Our Offices</a
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