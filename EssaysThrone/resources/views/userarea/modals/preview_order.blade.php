<div class="modal fade zoom" tabindex="-1" id="OrderModal">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><label class="order_modal_title"></label></h5>
				<a href="#" class="close" data-dismiss="modal" aria-label="Close">
					<i class="fa fa-close" onclick="closeModal()"></i>
				</a>
			</div>
			<div class="modal-body">

			</div>
			<div class="modal-footer bg-light">
			</div>
		</div>
	</div>
</div>
<script>
	function closeModal(){
		$("#OrderModal").modal('hide');
	}
</script>