@extends('front.layouts.app')

@push('title')
    Electricity
@endpush

@section('content')
    
<div class="bg-light shadow-md rounded px-4 pt-4 pb-3">
    <h2 class="text-4 mb-3">Pay your Electricity Bill </h2>
      <form id="electricityBill" method="post">
      <div class="form-row">
      <div class="col-lg-10">
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
          <select class="custom-select" id="yourState" required="">
            <option value="">Select Your State 
            </option><option>1st State 
            </option><option>2nd State 
            </option><option>3rd State 
            </option><option>4th State 
            </option><option>5th State 
            </option><option>6th State 
            </option><option>7th State 
            </option><option>8th State 
            </option><option>9th State 
            </option><option>10th State 
            </option><option>11th State 
            </option><option>12th State 
            </option><option>13th State 
            </option><option>14th State 
          </option></select>
        </div>
        <div class="col-md-6 col-lg-3 form-group">
          <input type="text" class="form-control" data-bv-field="number" id="serviceNumber" required="" placeholder="Enter Service Number">
        </div>
        <div class="col-md-6 col-lg-3 form-group">
          <input class="form-control" id="amount" placeholder="Enter Amount" required="" type="text">
        </div>
        </div>
        </div>
        <div class="col-lg-2 form-group">
        <a class="btn btn-primary btn-block" href="order-summary.html">Continue </a>
        </div>
        </div>
      </form>
</div>

@endsection