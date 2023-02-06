@extends('front.layouts.app')

@push('title')
    Mobile
@endpush

@section('content')
    
<div class="bg-light shadow-md rounded px-4 pt-4 pb-3">
    <h2 class="text-4 mb-3">Mobile Recharge or Bill</h2>
    <form id="recharge-bill" method="post">
      <div class="mb-3">
        <div class="custom-control custom-radio custom-control-inline">
          <input id="prepaid" name="rechargeBillpayment" class="custom-control-input" checked="" required="" type="radio" />
          <label class="custom-control-label" for="prepaid">Prepaid </label>
        </div>
      </div>
      <div class="form-row">
      <div class="col-md-6 col-lg-3 form-group">
        <input type="text" class="form-control" data-bv-field="number" id="mobileNumber" required="" placeholder="Enter Mobile Number" />
      </div>
      <div class="col-md-6 col-lg-3 form-group">
        <select class="custom-select" id="operator" required="">
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
      <div class="col-md-6 col-lg-3 form-group">
        <a href="#" data-target="#view-plans" data-toggle="modal" class="view-plans-link">View Plans </a>
        <input class="form-control" id="amount" placeholder="Enter Amount" required="" type="text" />
      </div>
      <div class="col-md-6 col-lg-3 form-group">
      <a class="btn btn-primary btn-block" href="order-summary.html">Continue </a>
      </div>
      </div>
    </form>
</div>

@endsection