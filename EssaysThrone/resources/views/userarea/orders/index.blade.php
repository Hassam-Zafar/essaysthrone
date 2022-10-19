@extends('userarea.layouts.app')

@section('page_main_heading')
{{ $page_heading ?? "" }}
@endsection

@push('custom-styles')
<style type="text/css">
	.small-header {
		height: 150px;
		background-position: 50% 63%;
	}
	.form-select{
		color: #045282!important;
	}
	.trusted{
		padding: 7% 15% 0% 15%; margin-bottom: -10%;
	}

	@media only screen and (max-width: 428px){
		ul.pagination {
			margin: 20px !important;
		}
	}
</style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{-- <link rel="stylesheet" href="{{ asset('frontend/order_assets/cssn/main.css') }}"> --}}
@endpush

@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Order History</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
				  <thead class="text-primary">
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
										{!! orderStatusLabel($order) !!} 
									</td>
									<td>
										<a href="#" class="view_order" style="color: #045282;" data-id="{{ base64_encode($order->id) }}" data-url="{{route('userarea.orders.details',['order' => base64_encode($order->id)])}}"> Detail</a>
									</td>
									<td>
										@if(isset($order->final_order_files) && count($order->final_order_files) && in_array($order->status_id,[5,7]))
										@foreach($order->final_order_files as $key => $file)
										<a target="_blank" style="color: #045282;" href="{{ config('app.crm_url').$file->file }}">Download</a><br>
										@endforeach
										@else
										---
										@endif
									</td>
									<td>
										{!! orderStatusOption($order) !!}
									</td>
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
        </div>
      </div>


@include('userarea.modals.preview_order')

<div class="modal fade zoom" tabindex="-1" id="ReOrderModal">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><label class="order_modal_title">Modify Order</label></h5>
				<a href="#" class="close" data-dismiss="modal" aria-label="Close">
					<i class="fa fa-close"></i>
				</a>
			</div>
			<div class="modal-body">
				<form action="{{ route('userarea.orders.mark_modify_order') }}" method="post" enctype="multipart/form-data">
					@csrf
					<input type="hidden" name="order_id" id="modify_order_id">
					<label>Comments</label>
					<textarea class="form-control" required name="comments"></textarea><br>
					<fieldset id="order_attachments">
						<div class="fieldwrapper row" id="field1">
							<div class="col-6">
								<input type="file" name='attachments[]' id="file1" class="fieldname">
							</div>
							<div class="col-6">
								<i class="fa fa-trash removeFile" style="color: red"></i>
								<input type="button" value="Add More" class="add add_more_btn" id="add_file" />
							</div>
						</div>
					</fieldset>
					<button type="submit" class="btn btn-primary mt-3">Submit</button>
				</form>
			</div>
			<div class="modal-footer bg-light">
			</div>
		</div>
	</div>
</div>



@push('custom-scripts')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script>
	$(document).ready(function() {
		
		$(document).on('click','.removeFile',function(){
			document.getElementById("file1").value=null; 
		});

		$("#add_file").click(function() {
			var lastField = $("#order_attachments div:last");
			var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
			var fieldWrapper = $("<div class=\"fieldwrapper row mt-2\" id=\"field" + intId + "\"/>");
			fieldWrapper.data("idx", intId);
			var fName = $("<div class=\"col-6\"> <input type=\"file\" name=\"attachments[]\" class=\" fieldname\" /> </div>");
			var removeButton = $("<div class=\"col-6\"> <i class=\"fa fa-trash remove\" style=\"color: red\"></i> </div> </div>");
			removeButton.click(function() {
				$(this).parent().remove();
			});
			fieldWrapper.append(fName);
			fieldWrapper.append(removeButton);
			$("#order_attachments").append(fieldWrapper);
		});


		$('#demo-foo-addrow').DataTable();
	} );

	
// 	$(document).on('click','.view_order', function() {
// 		let order_id = $(this).data('id');
// 		var url = $(this).data('url');
// 		showOrder(order_id,url);
// 	});

	function showOrder(order_id,url)
	{
		
		$.ajax({
			type: "post",
			url: url,
			data: {
				"_token": "{{ csrf_token() }}",
				'order':order_id
			},
			success: function(response){
		
				var order = response.data.order;
				console.log(order);
				$('.order_modal_title').html('Order Details')
				let order_response = `
				<div class="container-fluid">
				<div class="card row">
				<div class="card-body collapse show">
				<div class="row">
				<div class="col-md-12">
				<table class="table table-bordered table-striped">
				<tr>
				<td><b>Order No :</b></td>
				<td>${order.order_no}</td>
				</tr>
				<tr>
				<td><b>Order Status :</b></td>
				<td>${order.status.title}</td>
				</tr>
				<tr>
				<td><b>Type Of Work :</b></td>
				<td>${order.type_of_work.name}</td>
				</tr>
				<tr>
				<td><b>Deadline :</b></td>
				<td>${order.urgency.name}</td>
				</tr>
				<tr>
				<td><b>Educational Level :</b></td>
				<td>${order.level.name}</td>
				</tr>
				<tr>
				<td><b>No of Pages :</b></td>
				<td>${order.price_plan_no_of_page_id}</td>
				</tr>
				<tr>
				<td><b>Subject :</b></td>
				<td>${order.subjects.name}</td>
				</tr>
				<tr>
				<td><b>Line Spacing :</b></td>
				<td>${order.line_spacing}</td>
				</tr>
				<tr>
				<td><b>Topic :</b></td>
				<td>${order.topic}</td>
				</tr>
				<tr>
				<td><b>Instructions :</b></td>
				<td>${order.instructions}</td>
				</tr>
				<tr>
				<td><b>No Of References :</b></td>
				<td>${order.reference}</td>
				</tr>
				<tr>
				<td><b>Font Style :</b></td>
				<td>${order.font_style}</td>
				</tr>
				<tr>
				
				</tr>`

				let order_addons = ``;
				for(const addon of order.addons)
					order_addons +=  `
				${addon.addon.name} $${addon.addon.amount}<br>`;
				order_response += `
				<tr> 
				<td><b> Addons :</b></td> <td> `+order_addons+`</td>
				</tr>
				<tr>
				<td><b>Service Amount :</b></td>
				<td>$${order.service_amount}</td>
				</tr>
				<tr>
				<td><b>Price After Special Discount :</b></td>
				<td>$${order.discount_amount}</td>
				</tr>
				<tr>
				<td><b>Addon Cost :</b></td>
				<td>$${order.addons_amount  ?? "0" }</td>
				</tr>
				<tr>
				<td><b>Total Bill :</b></td>
				<td>$${order.grand_total_amount}</td>
				</tr>
				</table>    
				</div>

				</div>
				</div>
				</div>
				</div>`;
				$('.modal-body').html(order_response);
				$('#OrderModal').modal('toggle');
			}
		});
	}

	$('.fa-xmark').click(function(){
		$('#OrderModal').modal('toggle');
	});

	$(document).on('change','.order_status',function(){
		if($(this).val()==6){
			var order_id = $(this).data('order-id');
			$('#modify_order_id').val(order_id)
			$('#ReOrderModal').modal('toggle');
		}
		if($(this).val()==7){
			var url = $(this).data('url');
			$.ajax({
				type: "get",
				url: url,
				success: function(response){
					alert(response.message);
					location.reload();
				}
			});
		}
	});
</script>
@endpush

@endsection