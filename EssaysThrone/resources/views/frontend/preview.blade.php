@extends('frontend.layouts.app')

@section('title')
{{ (isset($pages) && isset($pages->meta_title)) ? $pages->meta_title : "Preview Order" }}
@endsection

@section('description')
{{ (isset($pages) && isset($pages->meta_description)) ? $pages->meta_description : "Preview Order" }}
@endsection

@section('tags')
{{  (isset($pages) && isset($pages->tags)) ? json_decode($pages->tags) : "Preview Order" }}
@endsection

@section('page_main_heading')
PREVIEW ORDER
@endsection

@push('custom-styles')
<!-- <link rel="stylesheet" href="{{ asset('frontend/assets/cssn/orderSummary.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/order_assets/cssn/order.css') }}"> -->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/styleorder.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style type="text/css">
	.small-header{
		height: 150px;
	}
	.table {
		--bs-table-bg: rgba(0,0,0,0);
		--bs-table-accent-bg: rgba(0,0,0,0);
		--bs-table-striped-color: #212529;
		--bs-table-striped-bg: rgb(204 189 189 / 5%);
	}
	body {
		font-size: 16px;
	}
   
</style>
@endpush

@section('content')

<section class="hero">
        <div class="container ">

            <div class="mb-4">

                <h2>Confirm order and pay</h2>
                <span>please make the payment, after that you can enjoy all the features and benefits.</span>

            </div>
		
            <div class="row">
                
                <div class="col-md-8  align-items-center data-aos=" zoom-out">
                <div class="row">
                    <div class="col-md-3 ml-3">
                        <a href="{{ route('frontend.edit',['id'=>base64_encode($order->id)]) }}" class="btn btn-primary"><i class="fa fa-pen"></i><span> Edit Order</span></a>
                    </div>
                    <div class="col-md-8">
                        @if( $message = session('success_msg') )
                        <div class="alert alert-success alert-dismissible">
                            <i class="icon fa fa-check"></i>
                            {!! $message !!}
                        </div>
                        @endif

                        @if( $message = session('error_msg') )
                        <div class="alert alert-danger alert-dismissible my-0">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="icon fa fa-ban"></i> {!! $message !!}
                        </div>
                        @endif
                        <input type="hidden" name="password_message" id="password_message" value="{{ current_user()->is_password ?? "0" }}">
                    </div>
                    
                </div>
                    <div class="table orderdetails col-md-12" data-aos-delay="100">
                        <table class="pricingtable ">
                            <thead>
                                <tr>
                                    <th colspan="2">
                                        <h1>Project Details</h1>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Order No :</td>
                                    <td>{{ $order->order_no ?? "---" }}</td>

                                </tr>
                                <tr>
                                    <td>Name :</td>
                                    <td>{{ current_user()->first_name }}</td>

                                </tr>
                                <tr>
                                    <td>Email Address :</td>
                                    <td>{{ current_user()->email }}</td>

                                </tr>
                                <tr>
                                    <td>Contact Number :</td>
                                    <td>{{ current_user()->phone }}</td>

                                </tr>
                                <tr>
                                    <td>Type Of Work :</td>
                                    <td>{{ $order->type_of_work->name ?? "" }}</td>

                                </tr>
                                <tr>
                                    <td>Deadline :</td>
                                    <td>{{ $order->urgency->name ?? "" }}</td>

                                </tr>
                                <tr>
                                    <td>Educational Level :</td>
                                    <td>{{ $order->level->name ?? "---" }}</td>

                                </tr>
                                <tr>
                                    <td>No of Pages :</td>
                                    <td>{{ $order->price_plan_no_of_page_id ?? "" }}</td>

                                </tr>
                                <tr>
                                    <td>Line Spacing :</td>
                                    <td>@if(isset($order) && $order->line_spacing==1) Double Line Space @elseif(isset($order) && $order->line_spacing==2) Single Line Space @else  @endif</td>

                                </tr>
                                <tr>
                                    <td>Topic :</td>
                                    <td>{{ $order->topic  ?? "---" }}</td>

                                </tr>
                                <tr>
                                    <td>Instructions :</td>
                                    <td>{{ $order->instructions  ?? "---" }}</td>

                                </tr>
                                <tr>
                                    <td>No Of References :</td>
                                    <td>{{ $order->reference  ?? "---" }}</td>

                                </tr>
                                <tr>
                                    <td>Font Style :</td>
                                    <td>{{ $order->font_style  ?? "---" }}</td>

                                </tr>
                                <tr>
                                    <td>Citation style :</td>
                                    <td>{{ $order->style->name  ?? "---" }}</td>

                                </tr>
                                <tr>
									<td><b>Addons :</b></td>
									@if(isset($order->addons) && count($order->addons))
									<td>
										@foreach($order->addons as $addn)
										{{ $addn->addon->name ?? "" }}  ${{ $addn->addon->amount ?? "" }} <br>
										@endforeach
									</td>
									@else
									<td>Not added</td>
									@endif

                                </tr>
                                @if(isset($order->files) && count($order->files))
                                @foreach($order->files as $key => $file)
                                <tr>
                                    <td><b>File#{{ $key+1 }} :</b></td>
                                    <td><a target="_blank" style="color: #045282;" href="{{ config('app.crm_url').$file->file }}">{{ $file->file }}</a></td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row mt-5">
                    <div class="col-md-12 ">
                       
                    </div>
                    </div>
                    <div class="card  p-3  mb-3">
                        <div class="card card-yellow p-3 text-white mb-3">
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
                        <hr class="Rounded">
                        <div class="row Summary">
                            <div class="col-md-6">
                                <span>Service Cost</span>
                            </div>
                            <div class="col-md-6">
                                 $<span>{{ $order->discount_amount*2 ?? "" }}</span>
                            {{--    $<span>{{ isset($order->service_amount) ? $order->service_amount*2 : "" }}</span> --}}
                            </div>
                        </div>
                        <div class="row Summary">
                            <div class="col-md-6">
                                <span>Price After Discount</span>
                            </div>
                            <div class="col-md-6">
                                $<span>{{ $order->discount_amount ?? "" }}</span>
                            </div>
                        </div>
                        <div class="row Summary">
                            <div class="col-md-6">
                                <span>Add-ons Cost</span>
                            </div>
                            <div class="col-md-6">
                                $<span>{{ $order->addons_amount ?? "" }}</span>
                            </div>
                        </div>
                        <hr class="Rounded">
                        <div class="row">
                            <div class="col-md-6 total">
                                <span>Total</span>
                            </div>
                            <div class="ammount col-md-6">
                                <span>${{ $order->grand_total_amount ?? "" }}</span>
                            </div>
                        </div>
                        <!-- <div class="invoiceDetail btn" style="margin-left: 50px;"> -->
                            <form action="{{ route('paypal.send',['order'=>base64_encode($order->id)]) }}" method="post" class="paypal" id="paypal_form" target="">
                            @csrf
                            <input type="hidden" name="cmd" value="_xclick" />
                            <input type="hidden" name="no_note" value="1" />
                            <input type="hidden" name="lc" value="US" />
                            <input type="hidden" name="currency_code" value="USD" />
                            <input type="hidden" name="bn" value="PapersAce_BuyNow_WPS_US" />
                            <input type="submit" name="btn_proceed" value="Proceed to Payment" id="btn_proceed" class="btn btn-primary paymentdetail w-100 mt-4">
                            </form>
                        <!-- </div> -->
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


<div id="myModal" class="modal hide">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Update Account Password</h5>
			</div>
			<div class="modal-body">
				<form action="{{ route('frontend.orders.save_customer_password') }}" id="customerForm" method="post">
					@csrf
					<div class="form-group">
						<input type="hidden" name="customer_id" value="{{ $order->customer_id ?? "" }}">
						<input type="password" name="password" id="password" minlength="6" class="form-control" placeholder="Password" minlength="6" required>
					</div>
					<div class="form-group">
						<input type="password" name="confirm_password" minlength="6" id="confirm_password" class="form-control" placeholder="Confirm Password" minlength="6" required>
					</div>
					<button type="submit" class="btn btn-primary" id="update_pass_btn">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="{{ asset('frontend/order_assets/js/jquery.min.js') }}"></script>
<script>
	$(document).ready(function(){
		var password_message = $('#password_message').val();
		if(password_message > 0){
			$("#myModal").modal('hide');
		}else{
			$("#myModal").modal('show');
		}

		$('#password, #confirm_password').on('keyup', function () {
			if ($('#password').val() == $('#confirm_password').val()) {
				$('#update_pass_btn').removeClass('d-none');
			} else {
				$('#update_pass_btn').addClass('d-none');
			}
		});
	});
</script>


{{-- <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
	function initPayPalButton() {
		paypal.Buttons({
			style: {
				shape: 'pill',
				color: 'silver',
				layout: 'vertical',
				label: 'buynow',

			},

			createOrder: function(data, actions) {
				return actions.order.create({
					purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
				});
			},

			onApprove: function(data, actions) {
				return actions.order.capture().then(function(orderData) {

	            // Full available details
	            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

	            // Show a success message within this page, e.g.
	            const element = document.getElementById('paypal-button-container');
	            element.innerHTML = '';
	            element.innerHTML = '<h3>Thank you for your payment!</h3>';

	            // Or go to another URL:  actions.redirect('thank_you.html');
	            
	        });
			},

			onError: function(err) {
				console.log(err);
			}
		}).render('#paypal-button-container');
	}
	initPayPalButton();
</script> --}}




@endsection