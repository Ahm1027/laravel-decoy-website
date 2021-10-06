@extends('layouts.app')

@section('content')

<header class="header navbar-area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ url('/') }}">
              <img src="{{ asset('img/logo/logo.svg') }}" alt="Logo" />
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
                    <a class="page-scroll" href="{{ url('/offices') }}">Our Offices</a>
                  </li>
                
                <li class="nav-item">
                  <a class="page-scroll" href="{{ url('/contact') }}">Contact</a>
                </li>
                <div style="border-left:3px solid #000;height:60px"></div>
                <li class="nav-item">
                  <a class="page-scroll" href="{{ url('/register') }}">Log In</a>
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

<section class="d-flex align-items-center pt-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center">
        <h4 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px">
          Register with Companion now to make your transactions easier!
        </h4>
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0"></div>
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="p-5">
                    <h3 class="fw-normal mb-5" style="color: #027c5a;">Representative Details</h3>
  
                    <div class="hor">
                      <span style="font-size: 12px; background-color: #F3F5F6; padding: 0 10px;">
                        Basic Information
                      </span>
                    </div>
                    <div class="row">
                      <div class="col-md-6 pb-2">
  
                        <div class="form-outline">
                          <input type="text" id="fName" class="form-control form-control-lg" />
                          <label class="form-label" for="fName">First name</label>
                        </div>

                      </div>

                      <div class="col-md-6 pb-2">
  
                        <div class="form-outline">
                          <input type="text" id="lName" class="form-control form-control-lg" />
                          <label class="form-label" for="lName">Last name</label>
                        </div>
  
                      </div>

  
                      <div class="form-outline mb-4">
                        <input type="email" id="email" class="form-control form-control-lg" />
                        <label class="form-label" for="email">Email Address</label>
                      </div>

                    </div>
  
                    <div class="hor">
                      <span style="font-size: 12px; background-color: #F3F5F6; padding: 0 10px;">
                        Organizational Status
                      </span>
                    </div>
                    <div class="mb-2 pb-2">
                      Employee Title
                      <select class="select">
                        <option value="1">CEO/Owner</option>
                        <option value="2">Manager</option>
                        <option value="4">Others..</option>
                      </select>
                    </div>

                    <div class="mb-4 pb-2">
                      Department
                      <select class="select ms-3">
                        <option value="1">Accounts</option>
                        <option value="2">IT</option>
                        <option value="3">Marketing</option>
                        <option value="4">Business</option>
                        <option value="5">Others..</option>
                      </select>
                    </div>


                    <div class="hor">
                      <span style="font-size: 12px; background-color: #F3F5F6; padding: 0 10px;">
                        Account Credentials
                      </span>
                    </div>
                    <div class="pb-2">
                      <div class="form-outline">
                        <input type="password" id="pass" class="form-control form-control-lg" />
                        <label class="form-label" for="pass">Password</label>
                      </div>
                    </div>

                    <div class="mb-4 pb-2">
                      <div class="form-outline">
                        <input type="password" id="confPass" class="form-control form-control-lg" />
                        <label class="form-label" for="confPass">Confirm Password</label>
                      </div>
                    </div>
  
                    <div class="row">
                      <div class="hor">
                        <span style="font-size: 12px; background-color: #F3F5F6; padding: 0 10px;">
                          Contact Information
                        </span>
                      </div>
                      <div class="form-outline">
                        <input type="number" id="mobilenumber" class="form-control form-control-lg" />
                        <label class="form-label" for="mobilenumber">Mobile Number</label>
                      </div>
  
                      <div class="form-outline">
                        <input type="number" id="officeContact" class="form-control form-control-lg" />
                        <label class="form-label" for="officeContact">Office Contact</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 text-white" style="background-color: #027c5a;">
                  <div class="p-5">
                    <h3 class="fw-normal text-white mb-5">Organization Details</h3>
                    
                    <div class="mb-4 pb-2">
                      <div class="form-outline form-white">
                        <input type="text" id="org_name" class="form-control form-control-lg" />
                        <label class="form-label" for="org_name">Organization Name</label>
                      </div>
                    </div>
                    
                    <div class="col-md-5 mb-4 pb-2">
                      Country
                      <select class="form-outline select">
                        <option value="1">Qatar</option>
                        <option value="2">Philipines</option>
                        <option value="3">Others...</option>
                      </select>
                    </div>

                    <div class="row">
                      <div class="col-md-5 mb-4 pb-2">
  
                        <div class="form-outline form-white">
                          <input type="text" id="zip" class="form-control form-control-lg" />
                          <label class="form-label" for="zip">Zip Code</label>
                        </div>
  
                      </div>
                      <div class="col-md-7 mb-4 pb-2">
  
                        <div class="form-outline form-white">
                          <input type="text" id="city" class="form-control form-control-lg" />
                          <label class="form-label" for="city">City</label>
                        </div>
  
                      </div>
                    </div>
  
                    <div class="mb-4 pb-2">
                      <div class="form-outline form-white">
                        <input type="text" id="org_email" class="form-control form-control-lg" />
                        <label class="form-label" for="org_email">Organization Email</label>
                      </div>
                    </div>
  
                    <div class="hor" style="border-bottom: 1px solid white;">
                      <span style="font-size: 12px; background-color: white; color:#027c5a; padding: 0 10px;">
                        Organization Legal Documentation
                      </span>
                    </div>

                    <div class="mb-4 pb-2">
                      <div class="form-outline form-white">
                        <input type="file" id="article_doc" class="form-control form-control-lg" />
                        <label class="form-label" for="article_doc">Article of Incorporation</label>
                      </div>
                    </div>

                    <div class="mb-4 pb-2">
                      <div class="form-outline form-white">
                        <input type="file" id="state_reg_doc" class="form-control form-control-lg" />
                        <label class="form-label" for="state_reg_doc">Company State Registration</label>
                      </div>
                    </div>
  
                    <div class="form-check d-flex justify-content-start mb-4 pb-3">
                      <input
                        class="form-check-input me-3"
                        type="checkbox"
                        value=""
                        id="form2Example3c"
                      />
                      <label class="form-check-label text-white" for="form2Example3">
                        I accept the <a href="#!" class="text-white"><u>Terms and Conditions</u></a> of your site.
                      </label>
                    </div>
  
                    <button type="button" class="btn btn-light btn-lg" data-mdb-ripple-color="dark">Register</button>
  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
