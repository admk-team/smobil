<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Theme Css --}}
    <link rel='stylesheet' href='../fonts.googleapis.com/css_bf2bcdef.css' type='text/css' />
    <link rel="stylesheet" type="text/css" href="{{ asset('front_assets/theme/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front_assets/theme/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front_assets/theme/owl.carousel/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front_assets/theme/owl.carousel/assets/owl.theme.default.min.css') }}" />
    {{-- Custom Css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('front_assets/stylesheet.css') }}" />

    <title>
        @stack('title')
    </title>
</head>
<body>

        <!-- Preloader -->
        <div id="preloader"><div data-loader="dual-ring"></div></div><!-- Preloader End -->
       
        <!-- Document Wrapper   
       ============================================= -->
        @if(!Route::is('test*'))
        <div id="main-wrapper">
       
          <!-- Header
         ============================================= -->
          <header id="header">
            <div class="container">
              <div class="header-row">
                <div class="header-column justify-content-start"> 
                 
                  <!-- Logo
                 ============================================= -->
                  
                 
                </div>
               
                <div class="header-column justify-content-end">
               
                  <!-- Primary Navigation
                 ============================================= -->
                  
                 
                </div>
               
                <!-- Collapse Button
               ============================================= -->
               
              </div>
            </div>
          </header><!-- Header end -->
         
          <!-- Content
         ============================================= -->
          <div id="content">
           
            <div class="bg-secondary pt-4 pb-5">
              <div class="container">
              <!-- Secondary Navigation
             ============================================= -->
              @include('front/layouts/header')
                <!-- Secondary Navigation end -->
               
              <!-- Mobile Recharge
             ============================================= -->
             @endif
              @yield('content')
              @if(!Route::is('order*'))
            </div>
            </div>
           
             <section class="py-5">
            <div class="container">
             <div class="row">
                 <!-- Accordion
               ============================================= -->
                <div class="col-lg-5">
                    <div class="accordion" id="accordionDefault">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h5 class="mb-0">  <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Electricity Bill Payment </a>  </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionDefault">
                          <div class="card-body">
                            <p>Eocochat €EocochatEocochatEocochatEocochatEocochatEocochatEocochatEocochat</p>
                            <p class="mb-0">Eocochat €EocochatEocochatEocochatEocochatEocochatEocochatEocochatEocochat </p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h5 class="mb-0">  <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Best Offers </a>  </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionDefault">
                          <div class="card-body">Eocochat €EocochatEocochatEocochatEocochatEocochatEocochatEocochatEocochat  </div>
                        </div>
                      </div>
                    </div>
                </div><!-- Accordion end -->
               
                 <div class="col-lg-7">
                  <!-- Slideshow
                 ============================================= -->
                  <div class="owl-carousel owl-theme single-slider" data-animateout="fadeOut" data-animatein="fadeIn" data-autoplay="true" data-loop="true" data-autoheight="true" data-nav="true" data-items="1">
                <div class="item"><a href="#"><img class="img-fluid rounded" src="{{ asset('front_assets/images/slider/banner-6.jpg') }}" alt="banner 6" /></a></div>
              </div><!-- Slideshow end -->
                </div>
             </div>
              </div>
            </section>
           
            <!-- Tabs
           ============================================= -->
            
         
        </div><!-- Document Wrapper end -->
       
        <!-- Back to Top
       ============================================= -->
        <a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>
       
        <!-- Modal Dialog - View Plans
       ============================================= -->
        <div id="view-plans" class="modal fade" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Browse Plans </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">  <span aria-hidden="true">× </span>  </button>
              </div>
              <div class="modal-body">
                <form class="form-row mb-4 mb-sm-2" method="post">
                  <div class="col-12 col-sm-6 col-lg-3">
                    <div class="form-group">
                      <select class="custom-select" required="">
                        <option value="" />Select Your Operator 
                        <option />1st Operator 
                        <option />2nd Operator 
                        <option />3rd Operator 
                        <option />4th Operator 
                        <option />5th Operator 
                        <option />6th Operator 
                        <option />7th Operator 
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3">
                    <div class="form-group">
                      <select class="custom-select" required="">
                        <option value="" />Select Your Circle 
                        <option />1st Circle 
                        <option />2nd Circle 
                        <option />3rd Circle 
                        <option />4th Circle 
                        <option />5th Circle 
                        <option />6th Circle 
                        <option />7th Circle 
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3">
                    <div class="form-group">
                      <select class="custom-select" required="">
                        <option value="" />All Plans 
                        <option />Topup 
                        <option />Full Talktime 
                        <option />Validity Recharge 
                        <option />SMS 
                        <option />Data 
                        <option />Unlimited Talktime 
                        <option />STD 
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3">
                    <button class="btn btn-primary btn-block" type="submit">View Plans </button>
                  </div>
                </form>
                <div class="plans">
                  <div class="table-responsive-md">
                    <table class="table table-lg table-hover border">
                      <tbody>
                        <tr>
                          <td class="text-5 text-primary text-center align-middle">$10  <span class="text-1 text-muted d-block">Amount </span></td>
                          <td class="text-3 text-center align-middle">8  <span class="text-1 text-muted d-block">Talktime </span></td>
                          <td class="text-3 text-center align-middle">7 Days  <span class="text-1 text-muted d-block">Validity </span></td>
                          <td class="text-1 text-muted align-middle">Talktime $8 & 2 _____ & National SMS & ____ SMS valid for 2 ___(_) </td>
                          <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge Now </button></td>
                        </tr>
                        <tr>
                          <td class="text-5 text-primary text-center align-middle">$15  <span class="text-1 text-muted d-block">Amount </span></td>
                          <td class="text-3 text-center align-middle">13  <span class="text-1 text-muted d-block">Talktime </span></td>
                          <td class="text-3 text-center align-middle">15 Days  <span class="text-1 text-muted d-block">Validity </span></td>
                          <td class="text-1 text-muted align-middle">Regular Talktime </td>
                          <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge Now </button></td>
                        </tr>
                        <tr>
                          <td class="text-5 text-primary text-center align-middle">$50  <span class="text-1 text-muted d-block">Amount </span></td>
                          <td class="text-3 text-center align-middle">47  <span class="text-1 text-muted d-block">Talktime </span></td>
                          <td class="text-3 text-center align-middle">28 Days  <span class="text-1 text-muted d-block">Validity </span></td>
                          <td class="text-1 text-muted align-middle">47 Local Vodafone min ____  </td>
                          <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge Now </button></td>
                        </tr>
                        <tr>
                          <td class="text-5 text-primary text-center align-middle">$100  <span class="text-1 text-muted d-block">Amount </span></td>
                          <td class="text-3 text-center align-middle">92  <span class="text-1 text-muted d-block">Talktime </span></td>
                          <td class="text-3 text-center align-middle">28 Days  <span class="text-1 text-muted d-block">Validity </span></td>
                          <td class="text-1 text-muted align-middle">Local min 92 & 10 Local & National SMS & Free SMS valid for 
                           7 day(s). </td>
                          <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge Now </button></td>
                        </tr>
                        <tr>
                          <td class="text-5 text-primary text-center align-middle">$150  <span class="text-1 text-muted d-block">Amount </span></td>
                          <td class="text-3 text-center align-middle">143  <span class="text-1 text-muted d-block">Talktime </span></td>
                          <td class="text-3 text-center align-middle">60 Days  <span class="text-1 text-muted d-block">Validity </span></td>
                          <td class="text-1 text-muted align-middle">Talktime $143 & 50 _____ & National SMS & ____ SMS valid for 
                           15 ___(_). </td>
                          <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge Now </button></td>
                        </tr>
                        <tr>
                          <td class="text-5 text-primary text-center align-middle">$220  <span class="text-1 text-muted d-block">Amount </span></td>
                          <td class="text-3 text-center align-middle">220  <span class="text-1 text-muted d-block">Talktime </span></td>
                          <td class="text-3 text-center align-middle">28 Days  <span class="text-1 text-muted d-block">Validity </span></td>
                          <td class="text-1 text-muted align-middle">Full Talktime </td>
                          <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge Now </button></td>
                        </tr>
                        <tr>
                          <td class="text-5 text-primary text-center align-middle">$250  <span class="text-1 text-muted d-block">Amount </span></td>
                          <td class="text-3 text-center align-middle">250  <span class="text-1 text-muted d-block">Talktime </span></td>
                          <td class="text-3 text-center align-middle">28 Days  <span class="text-1 text-muted d-block">Validity </span></td>
                          <td class="text-1 text-muted align-middle">Full Talktime + 50 ___ per day for 7 ____. </td>
                          <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge Now </button></td>
                        </tr>
                        <tr>
                          <td class="text-5 text-primary text-center align-middle">$300  <span class="text-1 text-muted d-block">Amount </span></td>
                          <td class="text-3 text-center align-middle">301  <span class="text-1 text-muted d-block">Talktime </span></td>
                          <td class="text-3 text-center align-middle">64 Days  <span class="text-1 text-muted d-block">Validity </span></td>
                          <td class="text-1 text-muted align-middle">Full Talktime </td>
                          <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge Now </button></td>
                        </tr>
                        <tr>
                          <td class="text-5 text-primary text-center align-middle">$410  <span class="text-1 text-muted d-block">Amount </span></td>
                          <td class="text-3 text-center align-middle">0  <span class="text-1 text-muted d-block">Talktime </span></td>
                          <td class="text-3 text-center align-middle">28 Days  <span class="text-1 text-muted d-block">Validity </span></td>
                          <td class="text-1 text-muted align-middle">Unlimited Local,STD & Roaming _____ </td>
                          <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge Now </button></td>
                        </tr>
                        <tr>
                          <td class="text-5 text-primary text-center align-middle">$501  <span class="text-1 text-muted d-block">Amount </span></td>
                          <td class="text-3 text-center align-middle">510  <span class="text-1 text-muted d-block">Talktime </span></td>
                          <td class="text-3 text-center align-middle">180 Days  <span class="text-1 text-muted d-block">Validity </span></td>
                          <td class="text-1 text-muted align-middle">Full Talktime + 100 ___ per day for 28 ____. </td>
                          <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge Now </button></td>
                        </tr>
                        <tr>
                          <td class="text-5 text-primary text-center align-middle">$799  <span class="text-1 text-muted d-block">Amount </span></td>
                          <td class="text-3 text-center align-middle">820  <span class="text-1 text-muted d-block">Talktime </span></td>
                          <td class="text-3 text-center align-middle">250 Days  <span class="text-1 text-muted d-block">Validity </span></td>
                          <td class="text-1 text-muted align-middle">Full Talktime + 100 ___ per day for 84 ____. </td>
                          <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge Now </button></td>
                        </tr>
                        <tr>
                          <td class="text-5 text-primary text-center align-middle">$999  <span class="text-1 text-muted d-block">Amount </span></td>
                          <td class="text-3 text-center align-middle">1099  <span class="text-1 text-muted d-block">Talktime </span></td>
                          <td class="text-3 text-center align-middle">356 Days  <span class="text-1 text-muted d-block">Validity </span></td>
                          <td class="text-1 text-muted align-middle">Full Talktime + 100 ___ per day for 90 ____. </td>
                          <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge Now </button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        @endif

    {{-- Theme Js --}}
    <script src="{{ asset('front_assets/theme/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('front_assets/theme/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front_assets/theme/owl.carousel/owl.carousel.min.js') }}"></script> 
    {{-- Custom Js --}}
    <script src="{{ asset('front_assets/main.js') }}"></script> 

</body>
</html>