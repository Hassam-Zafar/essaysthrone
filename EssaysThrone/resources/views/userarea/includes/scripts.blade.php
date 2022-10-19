<script src="{{ asset('userarea/assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="{{ asset('userarea/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('userarea/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('userarea/js/perfect-scrollbar.jquery.min.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('userarea/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('userarea/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('userarea/js/custom.min.js') }}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<script src="{{ asset('userarea/assets/plugins/chartist-js/dist/chartist.min.js') }}"></script>
<script src="{{ asset('userarea/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
<!--c3 JavaScript -->
<script src="{{ asset('userarea/assets/plugins/d3/d3.min.js') }}"></script>
<script src="{{ asset('userarea/assets/plugins/c3-master/c3.min.js') }}"></script>
<!-- Chart JS -->
<script src="{{ asset('userarea/js/dashboard2.js') }}"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="{{ asset('userarea/assets/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
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

	
	$(document).on('click','.view_order', function() {
		let order_id = $(this).data('id');
		var url = $(this).data('url');
		showOrder(order_id,url);
	});

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
				<td><b>Citation :</b></td>
				<td>${order.style.name}</td>
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