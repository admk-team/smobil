@extends('front.layouts.app')

@push('title')
    DTH
@endpush

@section('content')
    
<div class="bg-light shadow-md rounded px-4 pt-4 pb-3">
    <h2 class="text-4 mb-3">DTH Recharge </h2>
     <form id="dthRechargeBill" method="post">
     <div class="form-row">
       <div class="col-md-6 col-lg-3 form-group">
           <select class="custom-select" id="operator" required="">
             <option value="">Select Your Operator 
             </option><option>1st Operator 
             </option><option>2nd Operator 
             </option><option>3rd Operator 
             </option><option>4th Operator 
             </option><option>5th Operator 
             </option><option>6th Operator 
             </option><option>7th Operator 
           </option></select>
         </div>
       <div class="col-md-6 col-lg-3 form-group">
         <input type="text" class="form-control" data-bv-field="number" id="cardNumber" required="" placeholder="Enter Your Card Number">
       </div>
       <div class="col-md-6 col-lg-3 form-group">
         <a href="#" data-target="#view-plans" data-toggle="modal" class="view-plans-link">View Plans </a>
         <input class="form-control" id="amount" placeholder="Enter Amount" required="" type="text">
       </div>
       <div class="col-md-6 col-lg-3 form-group">
       <a class="btn btn-primary btn-block" href="order-summary.html">Continue </a>
       </div>
       </div>
     </form>
</div>

@endsection