@extends('userarea.layouts.app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
			<h4 class="m-b-0"><b>Awaiting Payment Orders</b></h4>
			<p class="text-muted m-t-0">Here you can find a list of all awaiting payment orders.</p>
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
							<thead>
								<tr>
									<th>No</th>
									<th>Order #</th>
									<th>Total Bill</th>
									<th>Order Status</th>
									<th>Order Detail</th>
									<th>Download</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@if(isset($orders) && count($orders))
								@foreach($orders as $key => $order)
								<tr>
									<td>{{ $key+1 }}</td>
									<td>{{ $order->order_no ?? "---" }}</td>
									<td>${{ $order->grand_total_amount ?? "---" }}</td>
									<td>
										<label class="@if($order->status_id==1) label label-danger @else label label-success @endif font-weight-bold"><b>{{ $order->status->title ?? "Awaiting Payment" }} </b>
										</label> 
									</td>
									<td><a href="#"> Detail</a></td>
									<td>
										Download
									</td>
									<td>Action</td>
								</tr>
								@endforeach
								@else
								<tr>
									<td>No record found.</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								@endif
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<h4 class="m-b-0">LAST TESTIMONIALS</h4>
			<p class="text-muted m-t-0">Latest reviews left by our customers.</p>
			<div class="card">
				<div class="card-body">
					{{-- <h4 class="card-title">Card title</h4> --}}
					<h6 class="card-subtitle mb-2 text-muted"><b class="text-dark">Undergraduate| English, Literature & Philology | 3 pages</b></h6>
					<p class="card-text">
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
					</p>
					<p class="card-text">Great Job, thanks!</p>
					<p class="card-text pull-right">10 Aug 2021</p>
					<a href="#" class="card-link label label-info">Customer #2273928502 </a>
					<div class="row">
						{{-- <a href="#" class="btn btn-success">HIRE THIS WRITER</a> --}}
						
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					{{-- <h4 class="card-title">Card title</h4> --}}
					<h6 class="card-subtitle mb-2 text-muted"><b class="text-dark">Undergraduate| English, Literature & Philology | 3 pages</b></h6>
					<p class="card-text">
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
					</p>
					<p class="card-text">Great Job, thanks!</p>
					<p class="card-text pull-right">10 Aug 2021</p>
					<a href="#" class="card-link label label-info">Customer #2273928502 </a>
					<div class="row">
						{{-- <a href="#" class="btn btn-success">HIRE THIS WRITER</a> --}}
						
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					{{-- <h4 class="card-title">Card title</h4> --}}
					<h6 class="card-subtitle mb-2 text-muted"><b class="text-dark">Undergraduate| English, Literature & Philology | 3 pages</b></h6>
					<p class="card-text">
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
					</p>
					<p class="card-text">Great Job, thanks!</p>
					<p class="card-text pull-right">10 Aug 2021</p>
					<a href="#" class="card-link label label-info">Customer #2273928502 </a>
					{{-- <a href="#" class="btn btn-success mt-2">HIRE THIS WRITER</a> --}}
					{{-- <a href="#" class="card-text pull-right">Writer#122456</a> --}}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection