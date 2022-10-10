@extends('frontend.layouts.app')

@section('title')
{{ (isset($pages) && isset($pages->meta_title)) ? $pages->meta_title : "Payment Detail" }}
@endsection

@section('description')
{{ (isset($pages) && isset($pages->meta_description)) ? $pages->meta_description : "Payment Detail" }}
@endsection

@section('tags')
{{  (isset($pages) && isset($pages->tags)) ? json_decode($pages->tags) : "Payment Detail" }}
@endsection

@section('page_main_heading')
Payment Details
@endsection


@push('custom-styles')
<!-- <link rel="stylesheet" href="{{ asset('frontend/assets/cssn/orderSummary.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/order_assets/cssn/order.css') }}"> -->
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/styleorder.css') }}">
<!-- <style type="text/css">
    body, html {
        background-color: oldlace;
    }
    .rounded-xl {
        border-radius: 0.5rem;
    }

    .payment-method-container {
        display: flex;
    }

    .payment-method-container > * {
        flex: 1
    }

    .payment-method-container > *:not(:first-child) {
        margin-left: 1rem;
    }

    .text-xs {
        font-size: 0.875rem;
    }

    .no-focus:focus {
        border: 1px solid rgb(206, 212, 218);
        box-shadow: none;
    }

    .flex-center {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style> -->
@endpush

@section('content')
<section class="hero">
        <div class="container card">
            <div class="row ">
                <div class="col-md-8">
                    <div class=" card-body tab-pane p-5">
                        <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                            <!-- Credit card form tabs -->
                            <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                <li class="nav-item"> <a data-toggle="pill" href="#credit-card"
                                        class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Credit Card
                                    </a> </li>
                                <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i
                                            class="fab fa-paypal mr-2"></i> Paypal </a> </li>
                                <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i
                                            class="fas fa-mobile-alt mr-2"></i> Net Banking </a> </li>
                            </ul>
                        </div> <!-- End -->
                        <form role="form">
                            <div class="form-group">
                                <label for="username">Full name (on the card)</label>
                                <input type="text" class="form-control" name="username" placeholder="" required="">
                            </div> <!-- form-group.// -->

                            <div class="form-group">
                                <label for="cardNumber">Card number</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="cardNumber" placeholder="">
                                    <div class="input-group-append">
                                        <span class="input-group-text text-muted">
                                            <i class="fab fa-cc-visa"></i>  
                                            <i class="fab fa-cc-amex"></i>  
                                            <i class="fab fa-cc-mastercard"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label><span class="hidden-xs">Expiration</span>
                                        </label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" placeholder="MM/YY" name="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label data-toggle="tooltip" title=""
                                            data-original-title="3 digits code on back side of the card">CVV
                                        </label>
                                        <input type="number" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <a href="orderdetails.html" class="btn paybtn-success d-flex justify-content-center">Pay
                                Now</a>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" p-3  mb-3">
                        <div class="card-yellow p-3 text-white mb-3">
                            <h3 class="order_sum d-flex justify-content-center">Order Summary</h3>
                        </div>
                        <div class="row Summary">
                            <div class="col-md-6">
                                <span>Type of Paper</span>
                            </div>
                            <div class="col-md-6">
                                <span>{{ $order->type_of_work->name ?? "" }}</span>
                            </div>
                        </div>
                        <div class="row Summary">
                            <div class="col-md-6">
                                <span>Subject</span>
                            </div>
                            <div class="col-md-6">
                                <span>{{ $order->subjects->name  ?? "---" }}</span>
                            </div>
                        </div>
                        <div class="row Summary">
                            <div class="col-md-6">
                                <span>Academic Level</span>
                            </div>
                            <div class="col-md-6">
                                <span>{{ $order->level->name ?? "---" }}</span>
                            </div>
                        </div>
                        <div class="row Summary">
                            <div class="col-md-6">
                                <span>Deadline</span>
                            </div>
                            <div class="col-md-6">
                                <span>{{ $order->urgency->name ?? "" }}</span>
                            </div>
                        </div>
                        <hr class="Rounded">
                        <div class="row Summary">
                            <div class="col-md-6">
                                <span>Writer</span>
                            </div>
                            <div class="col-md-6">
                                <span> Best Available Writer</span>
                            </div>
                        </div>
                        <!-- <hr class="Rounded">
                        <div class="row Summary">
                            <div class="col-md-6">
                                <span>17 Pages x £14.00/4250</span>
                            </div>
                            <div class="col-md-6">
                                <span>$238</span>
                            </div>
                        </div>
                        <div class="row Summary">
                            <div class="col-md-6">
                                <span>Words</span>
                            </div>
                            <div class="col-md-6">
                                <span>$23</span>
                            </div>
                        </div>
                        <div class="row Summary">
                            <div class="col-md-12">
                                <span>13 PPT Slides x £7</span>
                            </div>
                        </div> -->
                        <hr class="Rounded">
                        <div class="row">
                            <div class="col-md-6 total">
                                <span>Total</span>
                            </div>
                            <div class="ammount col-md-6">
                                <span>${{ $order->grand_total_amount ?? "" }}</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="mt-5"></div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div>
          <form 
          role="form" 
          action="{{ route('stripe.post') }}" 
          method="post" 
          class="require-validation"
          data-cc-on-file="false"
          data-stripe-publishable-key="{{ config('app.stripe_key') }}"
          id="payment-form">
          @csrf

          <input type="hidden" name="order_id" value="{{ base64_encode($order->id) }}">
          <input type="hidden" name="amount" value="{{ $order->grand_total_amount }}">
          <div class="p-4 bg-white rounded-xl">
              <h1>Order#{{ $order->order_no ?? "" }}</h1>
              <h6 class="mb-4 text-muted">Due {{ date('d-m-Y') }}</h6>
              <div class="row">
                  <h6 class="col-2 text-muted">To</h6>
                  <div class="col-10">{{ isset($order->customer) ? $order->customer->first_name : "" }}</div>
              </div>
              <div class="row">
                  <h6 class="col-2 text-muted">From</h6>
                  <div class="col-10">papersnerd.com</div>
              </div>
              <div class="row">
                  <h6 class="col-2 text-muted">Amount</h6>
                  <div class="col-10">${{ $order->grand_total_amount }}</div>
              </div>
          </div>
          <div class="p-4 bg-white rounded-xl mt-3">
              <div>
                  <h6 class="text-xs">
                      Card Information
                  </h6>
                  <div style="display: flex; flex-direction: column; margin-bottom: 1rem;">
                    <label style="margin-bottom: 5px; color: #8b9cae">Name on Card</label>
                    <input style="border: 1px solid #ced4da; width: 100%; border-radius: 5px; padding: 0.25rem 0.5rem;">
                </div>

                <div style="display: flex; flex-direction: column; margin-bottom: 1rem;">
                    <label style="margin-bottom: 5px; color: #8b9cae">Card Number:</label>
                    <input style="border: 1px solid #ced4da; width: 100%; border-radius: 5px; padding: 0.25rem 0.5rem;" autocomplete='off' class="card-number" type='text' min="14" required>
                </div>

                <div style="display: flex;">
                    <div style="display: flex; flex-direction: column; flex: 1">
                        <label style="margin-bottom: 5px; color: #8b9cae">CVC:</label>
                        <input style="border: 1px solid #ced4da; width: 100%; border-radius: 5px; padding: 0.25rem 0.5rem;" autocomplete='off'
                        class='card-cvc' placeholder='ex. 311' size='4'
                        type='text' required>
                    </div>
                    <div style="display: flex; flex-direction: column; flex: 1; margin-left: 0.5rem">
                        <label style="margin-bottom: 5px; color: #8b9cae">Expiry Month:</label>
                        <input style="border: 1px solid #ced4da; width: 100%; border-radius: 5px; padding: 0.25rem 0.5rem;" class='card-expiry-month' placeholder='MM' size='2' type='text' required>
                    </div>
                    <div style="display: flex; flex-direction: column; flex: 1; margin-left: 0.5rem">
                        <label style="margin-bottom: 5px; color: #8b9cae">Expiry Year:</label>
                        <input style="border: 1px solid #ced4da; width: 100%; border-radius: 5px; padding: 0.25rem 0.5rem;" class='card-expiry-year' placeholder='YYYY' size='4' type='number' required>
                    </div>
                    <div class='form-row row'>
                        <div class='col-md-12 error form-group hide' style="display: none;">
                            <div class='alert-danger alert'>Please correct the errors and try
                            again.</div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary w-100 mt-4">Pay Now ${{ $order->grand_total_amount }}</button>
            <div class="payment-method-container my-3">
              <div class="border p-2 rounded" style="display: flex; justify-content: center;">
                  <img src="{{ asset('frontend/assets/images/order-card.png') }}">
              </div>
          </div>
      </div>
  </form>
</div>  
</div>
<div class="col-md-3"></div>
</div>
<div class="mb-5"></div>


<div class="row pilt trust_pilot" style="margin-top: 110px;">
    <div class="col-md-12 bottom">
        <div class="trusted">
            <div class="card p-0">
                <div class="card-body">
                    <div class="trust_customers">
                        <div class="__head">
                            <h3 class="_gbl___head">
                                Trusted by <span class="___ghead">14,000+</span> happy <br>
                                customers and experts
                            </h3>
                        </div>
                        <div class="trust_poilot">
                            <img src="{{ asset('frontend/assets/images/reviews.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('custom-scripts')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    $(function() {

        var $form         = $(".require-validation");

        $('form.require-validation').bind('submit', function(e) {
            var $form         = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
            'input[type=text]', 'input[type=file]',
            'textarea'].join(', '),
            $inputs       = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid         = true;
            $errorMessage.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
              var $input = $(el);
              if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
            }
        });

            if (!$form.data('cc-on-file')) {
              e.preventDefault();
              Stripe.setPublishableKey($form.data('stripe-publishable-key'));
              Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
          }

      });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];

                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });
</script>
@endpush