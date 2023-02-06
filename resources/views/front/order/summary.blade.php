@extends('front.layouts.app')

@push('title')
    Order | Summary
@endpush

@section('content')
    
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
           
          </div>
         
          
           
          </div>
         
          <!-- Collapse Button
         ============================================= -->
          
        </div>
      </div>
    </header><!-- Header end -->
   
     
    <!-- Content
   ============================================= -->
    <div id="content">
      <div class="container">
        <div class="row my-5">
        <div class="col-lg-11 mx-auto">
        <!-- Steps Progress bar
       ============================================= -->
          <div class="row widget-steps">
                  <div class="col-3 step complete">
                    <div class="step-name">Order </div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="recharge-order.html" class="step-dot"></a>
                  </div>
                 
                  <div class="col-3 step active">
                    <div class="step-name">Summary </div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="step-dot"></a>
                  </div>
                 
                  <div class="col-3 step disabled">
                    <div class="step-name">Payment </div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="step-dot"></a>
                  </div>
                 
                  <div class="col-3 step disabled">
                    <div class="step-name">Done </div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="step-dot"></a>
                  </div>
              </div>
          </div>
          <!-- Steps Progress bar end --> 
         
        <div class="col-lg-12 text-center mt-5">
          <h2 class="text-8">Order Summary </h2>
          <p class="lead">Confirm recharge details </p>
        </div>
          <div class="col-md-8 col-lg-6 col-xl-5 mx-auto">
            <div class="bg-light shadow-sm rounded p-3 p-sm-4 mb-0 mb-sm-4">
              <div class="row">
                <p class="col-sm text-muted mb-0 mb-sm-3">Mobile Number: </p>
                <p class="col-sm text-sm-right font-weight-500">(+91) 9898989898 </p>
              </div>            
              <div class="row">
                <p class="col-sm text-muted mb-0 mb-sm-3">Operator/Circle: </p>
                <p class="col-sm text-sm-right font-weight-500">Vodafone | Gujarat </p>
              </div>
              <div class="row">
                <p class="col-sm text-muted mb-0 mb-sm-3">Plan: </p>
                <p class="col-sm text-sm-right font-weight-500">Mobile top-up </p>
              </div>
              <div class="row">
                <p class="col-sm text-muted mb-0 mb-sm-3">Validity: </p>
                <p class="col-sm text-sm-right font-weight-500">Talktime </p>
              </div>
              <div class="row">
                <p class="col-sm text-muted mb-0 mb-sm-3">Amount: </p>
                <p class="col-sm text-sm-right font-weight-500">$150 </p>
              </div>
              <div class="row">
                <p class="col-12 text-muted mb-0">Plan Description: </p>
                <p class="col-12 text-1">Local calls free & ___ calls free & Roaming ________ & Outgoing calls free & 300 Local & National ___ & 1 GB 3G/4G ____ & Data Validity 28 ___(_) & For 3G/4G user - T&C apply </p>
              </div>
             
             
              <div class="bg-light-4 rounded p-3">
              <div class="row">
                <div class="col-sm text-3 font-weight-600">Payment Amount </div>
                <div class="col-sm text-sm-right text-5 font-weight-500">$150 </div>
              </div>
              </div>
             
              <p class="text-center my-4"><a class="btn-link" data-toggle="collapse" href="#couponCode" aria-expanded="false" aria-controls="couponCode">Apply a Coupon Code </a></p>
              <div id="couponCode" class="bg-light-3 p-4 rounded collapse">
              <h3 class="text-4">Coupon Code </h3>
              <div class="input-group form-group mb-0">
                  <input class="form-control" placeholder="Coupon Code" aria-label="Promo Code" type="text" />
                  <span class="input-group-append">
                  <button class="btn btn-secondary" type="submit">APPLY </button>
                  </span>  </div>
              </div>
             
             
              <p class="mt-4 mb-0"><a href="payment.html" class="btn btn-primary btn-block">Make Payment </a></p>
          </div>
        </div>
      </div>
    </div><!-- Content end -->
   
 
   
  </div><!-- Document Wrapper end -->
 
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
  </div><!-- Modal Dialog - Login/Signup end -->

@endsection