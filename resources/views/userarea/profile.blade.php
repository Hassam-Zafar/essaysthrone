@extends('userarea.layouts.app')

@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
          @include('admin.includes.message')
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
              </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

              <div class="card-body">
                <form action="{{ route('userarea.update_profile',['customer_id'=>$user->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    
                  <!-- <div class="card-body">
                    <div class="author">
                
                        <img class="avatar border-gray" src="{{ asset('userarea/assets/images/images.png') }}" alt="...">
                        <h5 class="title">{{ old('first_name',$user->first_name ?? '') }}</h5>
                     
                      <p class="description">
                      {{ old('email',$user->email ?? '') }}
                      </p>
                    </div>
                  </div> -->
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="email" value="{{ old('email',$user->email ?? '') }}" name="email" id="email">
                 
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="number" class="form-control" placeholder="phone" value="{{ old('phone',$user->phone ?? '') }}" name="phone" id="phone">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="First name" name="first_name" value="{{ old('first_name',$user->first_name ?? '') }}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="">
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
						<input type="hidden" name="customer_id" value="{{ $user->id }}">
						<input type="password" name="password" id="password" minlength="6" class="form-control" placeholder="Password" minlength="6" required>
					</div>
					<div class="form-group">
						<input type="password" name="password_confirmation" minlength="6" id="password_confirmation" class="form-control" placeholder="Confirm Password" minlength="6" required>
					</div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
          
        </div>
      </div>


   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$('.file-input').change(function(){
    var curElement = $('.image');
    console.log(curElement);
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        curElement.attr('src', e.target.result);
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
});

	$(document).ready(function(){

		var password_message = $('#password_message').val();
	

		$('#password, #confirm_password').on('keyup', function () {
			if ($('#password').val() == $('#confirm_password').val()) {
				console.log("same");
			} else {
				console.log("not same");
			}
		});
	});
</script>

@endsection

