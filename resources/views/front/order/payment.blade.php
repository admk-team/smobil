@extends('front.layouts.app')

@push('title')
    Order | Payment
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
              <div class="col-lg-11 mx-auto"> 
                <!-- Steps Progress bar
               ============================================= -->
                <div class="row widget-steps">
                  <div class="col-3 step complete">
                    <div class="step-name">Order </div>
                    <div class="progress">
                      <div class="progress-bar"></div>
                    </div>
                    <a href="recharge-order.html" class="step-dot"></a>  </div>
                  <div class="col-3 step complete">
                    <div class="step-name">Summary </div>
                    <div class="progress">
                      <div class="progress-bar"></div>
                    </div>
                    <a href="recharge-order-summary.html" class="step-dot"></a>  </div>
                  <div class="col-3 step active">
                    <div class="step-name">Payment </div>
                    <div class="progress">
                      <div class="progress-bar"></div>
                    </div>
                    <a href="#" class="step-dot"></a>  </div>
                  <div class="col-3 step disabled">
                    <div class="step-name">Done </div>
                    <div class="progress">
                      <div class="progress-bar"></div>
                    </div>
                    <a href="#" class="step-dot"></a>  </div>
                </div>
                <!-- Steps Progress bar end --> 
               
              </div>
              <div class="col-lg-12 text-center mt-5">
                <h2 class="text-8">Select a Payment Mode </h2>
              </div>
              <div class="col-lg-10 col-xl-9 mx-auto mt-3">
                <div class="bg-light shadow-sm rounded p-4">
                  <div class="row">
                    <div class="col-md-7 col-lg-7 order-1 order-md-0">
                      <ul class="nav nav-tabs mb-4 nav-fill" id="myTab" role="tablist">
                        <li class="nav-item">  <a class="nav-link active" id="first-tab" data-toggle="tab" href="#firstTab" role="tab" aria-controls="firstTab" aria-selected="true">Credit/Debit Cards </a>  </li>
                        <li class="nav-item">  <a class="nav-link" id="second-tab" data-toggle="tab" href="#secondTab" role="tab" aria-controls="secondTab" aria-selected="false">PayPal </a>  </li>
                      </ul>
                      <div class="tab-content my-3" id="myTabContentVertical"> 
                        <!-- Cards Details
                       ============================================= -->
                        <div class="tab-pane fade show active" id="firstTab" role="tabpanel" aria-labelledby="first-tab">
                          <h3 class="text-4 mb-4">Enter Card Details </h3>
                          <form id="payment" method="post">
                            <div class="form-group">
                              <label for="cardNumber">Enter Debit / Credit ____ Number </label>
                              <input type="text" class="form-control" data-bv-field="cardnumber" id="cardNumber" required="" placeholder="Card Number" />
                            </div>
                            <div class="form-row">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label for="expiryMonth">Expiry Month </label>
                                  <select id="expiryMonth" class="custom-select" required="">
                                    <option value="" />Expiry Month 
                                    <option value="1" />January 
                                    <option value="2" />February 
                                    <option value="3" />March 
                                    <option value="1" />April 
                                    <option value="1" />May 
                                    <option value="1" />June 
                                    <option value="1" />July 
                                    <option value="1" />August 
                                    <option value="1" />September 
                                    <option value="1" />October 
                                    <option value="1" />November 
                                    <option value="1" />December 
                                  </select>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label for="expiryYear">Expiry Year </label>
                                  <select id="expiryYear" class="custom-select" required="">
                                    <option value="" />Expiry Year 
                                    <option />2018 
                                    <option />2019 
                                    <option />2020 
                                    <option />2021 
                                    <option />2022 
                                    <option />2023 
                                    <option />2024 
                                    <option />2025 
                                    <option />2026 
                                    <option />2027 
                                    <option />2028 
                                    <option />2029 
                                    <option />2030 
                                    <option />2031 
                                    <option />2032 
                                    <option />2033 
                                    <option />2034 
                                    <option />2035 
                                    <option />2036 
                                    <option />2037 
                                    <option />2038 
                                    <option />2039 
                                    <option />2040 
                                    <option />2041 
                                    <option />2042 
                                    <option />2043 
                                    <option />2044 
                                    <option />2045 
                                    <option />2046 
                                    <option />2047 
                                    <option />2048 
                                    <option />2049 
                                    <option />2050 
                                  </select>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label for="cvvNumber">CVV </label>
                                  <input type="text" class="form-control" data-bv-field="cvvnumber" id="cvvNumber" required="" placeholder="CVV Number" />
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="cardHolderName">Card Holder Name </label>
                              <input type="text" class="form-control" data-bv-field="cardholdername" id="cardHolderName" required="" placeholder="Card Holder Name" />
                            </div>
                            <div class="form-group custom-control custom-checkbox">
                              <input id="save-card" name="savecard" class="custom-control-input" type="checkbox" />
                              <label class="custom-control-label" for="save-card">Save my card Details. </label>
                            </div>
                            <a class="btn btn-primary btn-block" href="payment-success.html">Proceed to Pay $135 </a>
                          </form>
                        </div>
                        <!-- Cards Details end --> 
                       
                        <!-- Pay via Paypal
                       ============================================= -->
                        <div class="tab-pane fade" id="secondTab" role="tabpanel" aria-labelledby="second-tab">  <img class="img-fluid" src="images/paypal-logo.png" alt="Paypal Logo" title="Pay easily, fast and secure with PayPal." />
                          <p class="lead">Pay easily, fast and ______ with PayPal. </p>
                          <p class="text-info mb-4"><i class="fas fa-info-circle"></i> You will be __________ to PayPal to complete ____ payment securely. </p>
                          <a class="btn btn-primary btn-block d-flex align-items-center justify-content-center" href="recharge-payment-success.html"><i class="fab fa-paypal fa-2x mr-2"></i> Pay via PayPal </a>  </div>
                        <!-- Pay via Paypal end --> 
                      </div>
                    </div>
                    <div class="col-md-5 col-lg-5 order-0 order-md-1"> 
                     
                      <!-- Payable Amount
                       ============================================= -->
                      <div class="bg-light-2 rounded p-4 mb-4">
                        <h3 class="text-4 mb-4">Payable Amount </h3>
                        <ul class="list-unstyled">
                          <li class="mb-2">Amount  <span class="float-right text-4 font-weight-500 text-dark">$150 </span></li>
                          <li class="mb-2">Discount  <span class="text-success">(10% Off!) </span>  <span class="float-right text-4 font-weight-500 text-dark">-$15 </span></li>
                        </ul>
                        <hr />
                        <div class="text-dark text-4 font-weight-500 py-1"> Total Amount <span class="float-right text-7">$135 </span></div>
                      </div>
                      <!-- Payable Amount end --> 
                     
                      <!-- Pay via Paypal
                       ============================================= -->
                      <div class="bg-light-2 rounded p-4 d-none d-md-block">
                        <p class="mb-2">We value your Privacy. </p>
                        <p class="text-1 mb-0">We will not sell __ distribute your information. Read ___  <a href="#">Privacy Policy </a>. </p>
                      </div>
                      <!-- Cards Details end --> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Content end --> 
         
         
         
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