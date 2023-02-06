@extends('front.layouts.app')

@push('title')
    Order | Successfull
@endpush

@section('content')
    
<div id="main-wrapper">

    <div id="main-wrapper">

        <!-- Header
         ============================================= -->
        <header id="header">
          <div class="container">
            <div class="header-row">
              <div class="header-column justify-content-start"> 
               
                <!-- Logo
                 ============================================= -->
               <div class="logo">
                    <a href="{{ route('front.mobile') }}" title="Eocopay Service"><img src="{{ asset('front_assets/images/logo.png') }}" alt="Eocopay" width="127" height="29" /></a>
                  </div><!-- Logo end -->
                <!-- Logo end --> 
               
              </div>
              <div class="header-column justify-content-end"> 
               
                
               
              </div>
             
              <!-- Collapse Button
               ============================================= -->
             
            </div>
          </div>
        </header>
        <!-- Header end --> 
       
        <!-- Content
         ============================================= -->
         <div id="content">
            <div class="container">
              <div class="row my-5">
             
              <div class="col-md-11 mx-auto">
              <!-- Steps Progress bar
             ============================================= -->
                <div class="row widget-steps">
                        <div class="col-3 step complete">
                          <div class="step-name">Order </div>
                          <div class="progress"><div class="progress-bar"></div></div>
                          <a href="#" class="step-dot"></a>
                        </div>
                       
                        <div class="col-3 step complete">
                          <div class="step-name">Summary </div>
                          <div class="progress"><div class="progress-bar"></div></div>
                          <a href="#" class="step-dot"></a>
                        </div>
                       
                        <div class="col-3 step complete">
                          <div class="step-name">Payment </div>
                          <div class="progress"><div class="progress-bar"></div></div>
                          <a href="#" class="step-dot"></a>
                        </div>
                       
                        <div class="col-3 step complete">
                          <div class="step-name">Done </div>
                          <div class="progress"><div class="progress-bar"></div></div>
                          <a href="#" class="step-dot"></a>
                        </div>
                  </div>
              </div>
            <!-- Steps Progress bar end --> 
              <div class="col-lg-12 text-center mt-5">
              <p class="text-success text-16 line-height-07"><i class="fas fa-check-circle"></i></p>
                <h2 class="text-8">Recharge Successful </h2>
               
                <p class="lead">We are processing the and you will be via email. </p>
              </div>
                <div class="col-md-8 col-lg-6 col-xl-5 mx-auto">
                  <div class="bg-light shadow-sm rounded p-3 p-sm-4 mb-4">
                    <div class="row">
                      <div class="col-sm text-muted">Transactions ID </div>
                      <div class="col-sm text-sm-right font-weight-600">PHDF173076359 </div>
                    </div>            
                    <hr>
                    <div class="row">
                      <div class="col-sm text-muted">Date </div>
                      <div class="col-sm text-sm-right font-weight-600">06-Feb-2019 </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm text-muted">Mode of Payment </div>
                      <div class="col-sm text-sm-right font-weight-600">Credit Card </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm text-muted">Transaction Status </div>
                      <div class="col-sm text-sm-right font-weight-600 text-success">Success </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm text-muted">Customer Name </div>
                      <div class="col-sm text-sm-right font-weight-600">Johne Cary </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm text-muted">Mobile No </div>
                      <div class="col-sm text-sm-right font-weight-600">(+91) 9898989898 </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm text-muted">Subject </div>
                      <div class="col-sm text-sm-right font-weight-600">Mobile Recharge </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm text-muted">Payment Amount </div>
                      <div class="col-sm text-sm-right text-6 font-weight-500">$135 </div>
                    </div>
                </div>
               
                <div class="text-center">
                <a href="#" class="btn-link text-muted mx-3 my-2 align-items-center d-inline-flex"><span class="text-5 mr-2"><i class="far fa-file-pdf"></i></span>Save as PDF </a>
                    <a href="#" class="btn-link text-muted mx-3 my-2 align-items-center d-inline-flex"><span class="text-5 mr-2"><i class="fas fa-print"></i></span>Print Receipt </a>
                    <a href="#" class="btn-link text-muted mx-3 my-2 align-items-center d-inline-flex"><span class="text-5 mr-2"><i class="far fa-envelope"></i></span>Email Receipt </a>
                    <p class="mt-4 mb-0"><a href="{{ route('front.mobile') }}" class="btn btn-primary">Make another Payment</a></p>
                    </div>
                   
                   
              </div>
            </div>
          </div><!-- Content end -->
         
          <!-- Footer
         ============================================= -->
          <footer id="footer">
            <section class="section bg-light shadow-md pt-4 pb-3">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6 col-md-3">
                    <div class="featured-box text-center">
                      <div class="featured-box-icon">  <i class="fas fa-lock"></i>  </div>
                      <h4>100% Secure Payments </h4>
                      <p>Moving your card details __ a much more secured _____. </p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                    <div class="featured-box text-center">
                      <div class="featured-box-icon">  <i class="fas fa-thumbs-up"></i>  </div>
                      <h4>Trust pay </h4>
                      <p>100% Payment Protection. Easy ______ Policy. </p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                    <div class="featured-box text-center">
                      <div class="featured-box-icon">  <i class="fas fa-bullhorn"></i>  </div>
                      <h4>Refer &amp; Earn </h4>
                      <p>Invite a friend to ____ up and earn up __ $100. </p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                    <div class="featured-box text-center">
                      <div class="featured-box-icon">  <i class="far fa-life-ring"></i>  </div>
                      <h4>24X7 Support </h4>
                      <p>We're here to help. ____ a query and need ____ ?  <a href="#">Click here </a></p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            
            
          </footer><!-- Footer end -->
         
        </div>
        <!-- Document Wrapper end --> 
       
        <!-- Back to Top
       ============================================= --> 
        <a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 
       
        <!-- Modal Dialog - Login/Signup
       ============================================= -->
        <div id="login-signup" class="modal fade" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content p-sm-3">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">  <span aria-hidden="true">&times; </span>  </button>
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">  <a id="login-tab" class="nav-link active text-4" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login </a>  </li>
                  <li class="nav-item">  <a id="signup-tab" class="nav-link text-4" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Sign Up </a>  </li>
                </ul>
                <div class="tab-content pt-4">
                  <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <form id="loginForm" method="post">
                      <div class="form-group">
                        <input type="email" class="form-control" id="loginMobile" required="" placeholder="Mobile or Email ID" />
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" id="loginPassword" required="" placeholder="Password" />
                      </div>
                      <div class="row mb-4">
                        <div class="col-sm">
                          <div class="form-check custom-control custom-checkbox">
                            <input id="remember-me" name="remember" class="custom-control-input" type="checkbox" />
                            <label class="custom-control-label" for="remember-me">Remember Me </label>
                          </div>
                        </div>
                        <div class="col-sm text-right">  <a class="justify-content-end" href="#">Forgot Password ? </a>  </div>
                      </div>
                      <button class="btn btn-primary btn-block" type="submit">Login </button>
                    </form>
                  </div>
                  <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                    <form id="signupForm" method="post">
                      <div class="form-group">
                        <input type="text" class="form-control" data-bv-field="number" id="signupEmail" required="" placeholder="Email ID" />
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="signupMobile" required="" placeholder="Mobile Number" />
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" id="signuploginPassword" required="" placeholder="Password" />
                      </div>
                      <button class="btn btn-primary btn-block" type="submit">Signup </button>
                    </form>
                  </div>
                  <div class="d-flex align-items-center my-4">
                    <hr class="flex-grow-1" />
                    <span class="mx-2">OR </span>
                    <hr class="flex-grow-1" />
                  </div>
                  <div class="row">
                    <div class="col-12 mb-3">
                      <button type="button" class="btn btn-block btn-outline-primary">Login with Facebook </button>
                    </div>
                    <div class="col-12">
                      <button type="button" class="btn btn-block btn-outline-danger">Login with Google </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection