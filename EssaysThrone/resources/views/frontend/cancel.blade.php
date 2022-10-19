@extends('frontend.layouts.app')

@section('title')
{{ (isset($pages) && isset($pages->meta_title)) ? $pages->meta_title : "Thank you" }}
@endsection

@section('description')
{{ (isset($pages) && isset($pages->meta_description)) ? $pages->meta_description : "Thank you" }}
@endsection

@section('tags')
{{  (isset($pages) && isset($pages->tags)) ? json_decode($pages->tags) : "Thank you" }}
@endsection

@section('page_main_heading')
PAYMENT STATUS
@endsection


@push('custom-styles')
<link rel="stylesheet" href="{{ asset('frontend/assets/cssn/orderSummary.css') }}">
@endpush

@section('content')

<div class="orderSummaryPage">
	<div class="container row innerOrderSummaryPage mt-4">
		<div class="col-lg-12 col-md-12">
			<div class="ThankYouDIv">
				<div class="thankYouText">
					<div class="text">
						<h4>Cancelled</h4>
						<p class="text-center">Payment Status: Not Successful</p>
						<p class="text-center">For further assistance contact us<br>
							{{ isset($email) ? $email->value : 'info@essaysthrone.com' }}<br>
							{{ isset($phone) ? $phone->value : '' }}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection