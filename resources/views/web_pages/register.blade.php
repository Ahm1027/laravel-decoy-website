@extends('layouts.app')

@section('content')


    <section class="inner-page hero-section d-flex aligns-items-center justify-content-center mb-5">
        <div class="container border border-5 rounded border-info" style="width: 30rem; height: 100%">
          <form
            action="#"
            method="post"
            style="width: 23rem"
            class="ms-auto me-auto"
          >
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px">
              Register
            </h3>


            <div class="form-outline mb-4">
              <input
                type="text"
                name="company"
                id="form-companyname"
                class="form-control form-control-lg"
              />
              <label class="form-label" for="form-companyname">Company Name</label>
            </div>
            <div class="form-outline mb-4">
                <input
                  type="file"
                  name="companyreg"
                  id="form-companyreg"
                  class="form-control form-control-lg"
                />
                <label class="form-label" for="form-companyreg">Company Reg</label>
            </div>

            
            <div class="form-outline mb-4">
              <input
                type="text"
                name="username"
                id="form-username"
                class="form-control form-control-lg"
              />
              <label class="form-label" for="form-username">User Name</label>
            </div>

            <div class="form-outline mb-4">
              <input
                type="password"
                name="password"
                id="form-pass"
                class="form-control form-control-lg"
              />
              <label class="form-label" for="form-pass">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button
                class="btn btn-info btn-lg btn-block"
                name="login"
                value="login"
                type="submit"
              >
                Register
              </button>
            </div>
            <p class="small mb-2 pb-lg-2">
              <a class="text-muted" href="#!">Forgot password?</a>
            </p>
            <p>
              Already have an account?
              <a href="{{ url('/login') }}" class="link-info">Login here</a>
            </p>
          </form>
        </div>
      </section>
    @endsection