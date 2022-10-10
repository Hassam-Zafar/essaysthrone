@extends('userarea.layouts.app')

@section('content')

<div class="container-fluid">
	<h4 class="m-t-5"><b>ORDER #{{ $order->order_no ?? "---" }}</b> &nbsp;&nbsp;&nbsp;&nbsp; <span class="label label-primary">{{ $order->status->title }}</span></h4>
	<div class="card row">
		<div class="card-header">
			{{ $order->topic }}
			<div class="card-actions pull-right">
				<a class="" data-action="collapse"><i class="ti-minus"></i></a>
				<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
			</div>
		</div>
		<div class="card-body collapse show">
			<div class="row">
				<div class="col-md-12">
					<table class="table table-bordered table-striped">
						<tr>
							<td><b>Order No :</b></td>
							<td>{{ $order->order_no ?? "---" }}</td>
						</tr>
						<tr>
							<td><b>Name :</b></td>
							<td>{{ current_user()->first_name }}</td>
						</tr>
						<tr>
							<td><b>Email Address :</b></td>
							<td>{{ current_user()->email }}</td>
						</tr>
						<tr>
							<td><b>Contact Number :</b></td>
							<td>{{ current_user()->phone }}</td>
						</tr>
						<tr>
							<td><b>Type Of Work :</b></td>
							<td>{{ $order->type_of_work->name ?? "" }}</td>
						</tr>
						<tr>
							<td><b>Deadline :</b></td>
							<td>{{ $order->urgency->name ?? "" }}</td>
						</tr>
						<tr>
							<td><b>Educational Level :</b></td>
							<td>{{ $order->level->name ?? "---" }}</td>
						</tr>
						<tr>
							<td><b>No of Pages :</b></td>
							<td>{{ $order->price_plan_no_of_page_id ?? "" }}</td>
						</tr>
						<tr>
							<td><b>Line Spacing :</b></td>
							<td>@if(isset($order) && $order->line_spacing==1) Double Line Space @elseif(isset($order) && $order->line_spacing==2) Single Line Space @else  @endif </td>
						</tr>
						<tr>
							<td><b>Subject :</b></td>
							<td>{{ $order->subjects->name  ?? "---" }}</td>
						</tr>
						<tr>
							<td><b>Topic :</b></td>
							<td>{{ $order->topic  ?? "---" }}</td>
						</tr>
						<tr>
							<td><b>Instructions :</b></td>
							<td>{{ $order->instructions  ?? "---" }}</td>
						</tr>
						<tr>
							<td><b>Referencing style :</b></td>
							<td>{{ $order->style->name  ?? "---" }}</td>
						</tr>
						@if(isset($order->files) && count($order->files))
						@foreach($order->files as $key => $file)
						<tr>
							<td><b>File#{{ $key+1 }} :</b></td>
							<td><a target="_blank" href="{{ config('app.crm_url').$file->file }}">{{ $file->file }}</a></td>
						</tr>
						@endforeach
						@endif
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
						<tr>
							<td><b>Addon Cost :</b></td>
							<td>${{ $order->addons_amount  ?? "0" }}</td>
						</tr>
						<tr>
							<td><b>Service Amount :</b></td>
							<td>${{ $order->service_amount ?? "0" }}</td>
						</tr>
						<tr>
							<td><b>Total Bill :</b></td>
							<td>${{ $order->grand_total_amount ?? "0" }}</td>
						</tr>
						<tr>
							<td><b>Payment Status :</b></td>
							<td>
								@if(isset($order->status_id) && $order->status_id!=1)
								<label class="label label-success">Paid</label> 
								@else 
								<label class="label label-danger">Not Paid</label>
								@endif
							</td>
						</tr>
						<tr>
							<td><b>Order Status :</b></td>
							<td>{{ $order->status->title }}</td>
						</tr>
						
					</table>	
				</div>
				{{-- <div class="col-md-4"></div> --}}
				
			</div>
			{{-- <h4 class="card-title">Special title treatment</h4>
			<p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
		</div>
	</div>
</div>

@endsection