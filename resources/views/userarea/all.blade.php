@extends('userarea.layouts.app')

@section('page_main_heading')
All Orders
@endsection

@push('custom-styles')
<style type="text/css">
    .small-header {
        height: 140px;
        background-position: 50% 63%;
    }
</style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
@include('userarea.includes.nav')
<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Essaythrones</a>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="img-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
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
                    <thead class=" text-primary">
                      <th>
                        Sr No#
                      </th>
                      <th>
                        Order No
                      </th>
                      <th>
                        Total Bill
                      </th>
                      <th>
                        Order Status
                      </th>
                      <th>
                        Order Details
                      </th>
                      <th>
                        Download
                      </th>
                      <th>
                        Action
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          PND-23562
                        </td>
                        <td>
                          $834
                        </td>
                        <td>
                          paid
                        </td>
                        <td>
                          view details
                        </td>
                        <td>
                          Download Now
                        </td>
                        <td>
                          Completed
                        </td>
                      </tr>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          PND-23562
                        </td>
                        <td>
                          $834
                        </td>
                        <td>
                          paid
                        </td>
                        <td>
                          view details
                        </td>
                        <td>
                          Download Now
                        </td>
                        <td>
                          Completed
                        </td>
                      </tr>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          PND-23562
                        </td>
                        <td>
                          $834
                        </td>
                        <td>
                          paid
                        </td>
                        <td>
                          view details
                        </td>
                        <td>
                          Download Now
                        </td>
                        <td>
                          Completed
                        </td>
                      </tr>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          PND-23562
                        </td>
                        <td>
                          $834
                        </td>
                        <td>
                          paid
                        </td>
                        <td>
                          view details
                        </td>
                        <td>
                          Download Now
                        </td>
                        <td>
                          Completed
                        </td>
                      </tr>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          PND-23562
                        </td>
                        <td>
                          $834
                        </td>
                        <td>
                          paid
                        </td>
                        <td>
                          view details
                        </td>
                        <td>
                          Download Now
                        </td>
                        <td>
                          Completed
                        </td>
                      </tr>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          PND-23562
                        </td>
                        <td>
                          $834
                        </td>
                        <td>
                          paid
                        </td>
                        <td>
                          view details
                        </td>
                        <td>
                          Download Now
                        </td>
                        <td>
                          Completed
                        </td>
                      </tr>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          PND-23562
                        </td>
                        <td>
                          $834
                        </td>
                        <td>
                          paid
                        </td>
                        <td>
                          view details
                        </td>
                        <td>
                          Download Now
                        </td>
                        <td>
                          Completed
                        </td>
                      </tr>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          PND-23562
                        </td>
                        <td>
                          $834
                        </td>
                        <td>
                          paid
                        </td>
                        <td>
                          view details
                        </td>
                        <td>
                          Download Now
                        </td>
                        <td>
                          Completed
                        </td>
                      </tr>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          PND-23562
                        </td>
                        <td>
                          $834
                        </td>
                        <td>
                          paid
                        </td>
                        <td>
                          view details
                        </td>
                        <td>
                          Download Now
                        </td>
                        <td>
                          Completed
                        </td>
                      </tr>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          PND-23562
                        </td>
                        <td>
                          $834
                        </td>
                        <td>
                          paid
                        </td>
                        <td>
                          view details
                        </td>
                        <td>
                          Download Now
                        </td>
                        <td>
                          Completed
                        </td>
                      </tr>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          PND-23562
                        </td>
                        <td>
                          $834
                        </td>
                        <td>
                          paid
                        </td>
                        <td>
                          view details
                        </td>
                        <td>
                          Download Now
                        </td>
                        <td>
                          Completed
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

      <div class="card mt-2">
        <div class="card-body">
          <h4 class="card-title">All Orders</h4>
          <h6 class="card-subtitle"></h6>
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
            <td><a href="#" class="view_order" data-id="{{ base64_encode($order->id) }}" data-url="{{route('userarea.orders.details',['order' => base64_encode($order->id)])}}"> Detail</a></td>
            <td>---</td>
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
      </tr>
      @endif
  </tbody>
</table>
</div>
</div>
</div>

</div>
<div class="col-md-2"></div>
</div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




<div class="modal fade zoom" tabindex="-1" id="OrderModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><label class="order_modal_title"></label></h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer bg-light">
            </div>
        </div>
    </div>
</div>

@push('custom-scripts')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
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
                console.log("response ",order)
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
                <td><b>Citation style :</b></td>
                <td>${order.style.name}</td>
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
                <td><b>Addon Cost :</b></td>
                <td>$${order.addons_amount  ?? "0" }</td>
                </tr>
                <tr>
                <td><b>Service Amount :</b></td>
                <td>$${order.service_amount}</td>
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
</script>
@endpush

@endsection