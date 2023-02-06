@extends('front.layouts.app')

@push('title')
    BroadBand
@endpush

@section('content')
    
<div class="bg-light shadow-md rounded px-4 pt-4 pb-3">
    <h2 class="text-4 mb-3">Pay your Broadbanad Bill </h2>
      <form id="broadbanadBill" method="post">
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
          <input type="text" class="form-control" data-bv-field="number" id="telephoneNumber" required="" placeholder="Enter Telephone Number">
        </div>
        <div class="col-md-6 col-lg-3 form-group">
          <input class="form-control" id="amount" placeholder="Enter Amount" required="" type="text">
        </div>
        <div class="col-md-6 col-lg-3 form-group">
       <a class="btn btn-primary btn-block" href="order-summary.html">Continue &amp; pay </a>
        </div>
        </div>
      </form>
</div>

@endsection