<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>essaythrone | edit order</title>
    <meta charset="UTF-8">
      <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend/assets\css\styleorder.css') }}">
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}"
        rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('userarea/build/css/intlTelInput.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @if(isset($analytics))
    {!! $analytics->value !!}
    @endif

    @if(isset($og_script))
    {!! $og_script->value !!}
    @endif

    @if(isset($google_tag_manager))
    {!! $google_tag_manager->value !!}
    @endif

    @if(isset($tawk_to))
    {!! $tawk_to->value !!}
    @endif

    @if(isset($analytics))
        {!! $analytics->value !!}
    @endif

    @if(isset($og_script))
        {!! $og_script->value !!}
    @endif

    @if(isset($google_tag_manager))
        {!! $google_tag_manager->value !!}
    @endif

    @if(isset($google_tag_manager_no_script))
        {!! $google_tag_manager_no_script->value !!}
    @endif
    <style>
        section.hero {
            margin-top: 2%;
        }
        .writer label {
            display: contents;
        }

        .writer-checked label {
            display: contents;
        }

        .box {
            position: relative;
            background: #ffffff;
            width: 100%;
        }

        .box-header {
            color: #444;
            display: block;
            padding: 10px;
            position: relative;
            border-bottom: 1px solid #f4f4f4;
            margin-bottom: 10px;
        }

        .box-tools {
            position: absolute;
            right: 10px;
            top: 5px;
        }

        .dropzone-wrapper {
            border: 2px dashed #fece14;
            background-color: #fece14;
            position: relative;
            height: 160px;
            color: #fff;
            border-radius: 15px;
            margin-bottom: 3%;
        }

        .dropzone-desc {
            position: absolute;
            margin: -40px auto;
            left: 0;
            right: 0;
            text-align: center;
            width: 40%;
            top: 50px;
            font-size: 16px;
        }

        .dropzone,
        .dropzone:focus {
            position: absolute;
            outline: none !important;
            width: 100%;
            height: 150px;
            cursor: pointer;
            opacity: 0;
        }

        .dropzone-wrapper:hover,
        .dropzone-wrapper.dragover {
            background: #fed949;
        }

        .preview-zone {
            text-align: center;
        }

        .preview-zone .box {
            box-shadow: none;
            border-radius: 0;
            margin-bottom: 0;
        }
        .writer-checked {
            position: relative;
                    text-align: center;
                    margin-bottom: 15px;
        }
        .writer {
            position: relative;
            text-align: center;
            margin-bottom: 15px;
        }
        .writer-checked label{
            position: absolute;
                    border: 1px solid black;
                    width: 150px;
                    padding: 10px 0;
                    transition: 0.2s ease-out;
                    top: 0;
                    left: 0;
                    border-radius: 5px;
        }
        .writer label {
            position: absolute;
            border: 1px solid black;
            width: 150px;
            padding: 10px 0;
            transition: 0.2s ease-out;
            top: 0;
            left: 0;
            border-radius: 5px;
        }

        #Angular {
            opacity: 0;
        }
        .writer-checked:hover{
             /* border: 1px solid #ff9900; */
            /* color: #ff9900; */
            cursor: pointer;
        }
        .writer label:hover {
            /* border: 1px solid #ff9900; */
            /* color: #ff9900; */
            cursor: pointer;
        }
        .writer-checked input:checked+label {
            background-color: #3bc4cc;
            color: #fff;
            border-color: #3bc4cc;
        }
        .writer input:checked+label {
            background-color: #3bc4cc;
            color: #fff;
            border-color: #3bc4cc;
        }
        
        .writericon input[type=checkbox]:checked{
            display:inline-block;
            color: #000;
        }
        .error {
            color: red;
            font-size: 90%;
        }

    </style>

</head>

@section('page_main_heading')
ORDER SUMMARY
@endsection

<body>

    <header id="header" class=" d-flex align-items-center">
            <div class="container d-flex align-items-center justify-content-between">
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto" href="{{ route('frontend.index') }}">Home</a></li>
                        <li><a class="nav-link scrollto" href="{{ route('frontend.index') }}#services">Services</a></li>
                        <li><a class="nav-link" href="{{ route('frontend.pricing') }}">Pricing</a></li>
                        <li><a class="nav-link scrollto" href="{{ route('frontend.index') }}#features">Features</a></li>
                        <li><a class="nav-link scrollto" href="{{ route('frontend.index') }}#testimonial">Why Us</a></li>
                        <li><a class="nav-link" href="{{ route('frontend.contactus') }}">Contact Us</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
                <nav id="buttons" class="btn-nav">
                <ul>
                @if (isset(current_user()->id))
                <li><a href="{{ route('userarea.orders.index') }}" class="btn-order" style="margin-left: 4px;" type="button">User Area</a></li>
                <li><a href="{{ route('userarea.logout') }}" class="btn-livechat" style="margin-left: 4px;"
                type="button">Logout</a></li>
                @else
                <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 4px;"
                                class="btn-livechat gbl_btns" type="button">Log In</a></li>
                <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 4px;"
                                class="btn-order showSignUp" type="button">Register</a></li>
                @endif
                </ul>
                </nav><!-- .navbar -->
            </div>
    </header>

    <section class="hero">
        <div class="container ">

            <div class="mb-4">

                <h2>Confirm order and pay</h2>
                <span>please make the payment, after that you can enjoy all the features and benefits.</span>

            </div>

            <div class="row">

                <div class="col-md-8">
                    @if(isset($google_tag_manager_no_script))
                        {!! $google_tag_manager_no_script->value !!}
                    @endif
                    <form method="post" action="{{ route('frontend.orders.update',['order'=>$order->id]) }}" id="calculatePrice" enctype="multipart/form-data">
                    @php
                    $oadns_ids = isset($order->addons) ? array_unique(array_column($order->addons, 'price_plan_add_on_id')) : null;
                    @endphp
                    @csrf
 
                        <div class="card p-3 py-4">
                            <h3 class="text-uppercase">Order Details</h3>
                            <div class="row">

                                <div class="col-md-6">
                                <input type="hidden" name="domain_id" value="{{ config('app.domain_id') }}">
                                <input type="hidden" name="manual_discount_amount" value="0">
                                <input type="hidden" name="customer_id" id="customer_id" value="{{ $order->customer->id }}">
                                <input type="hidden" name="lead_id" id="lead_id" value="{{ $order->lead->id ?? "" }}">
                                <input type="hidden" name="total_amount" value="{{ $order->total_amount ?? "" }}">
                                <input type="hidden" name="grand_total_amount" value="{{ $order->grand_total_amount }}">
                                <input type="hidden" name="addons_amount" value="{{ $order->addons_amount }}">
                                <input type="hidden" name="service_amount" value="{{ $order->service_amount }}">
                                <input type="hidden" name="selected_addons[]" id="selected_addons" value="{{ $oadns_ids ? json_encode($oadns_ids) :  null }}">
                                <input type="hidden" name="discount_amount" value="0">

                                    <div class="form-group @if(isset(current_user()->first_name)) d-none @endif">
                                    <label for="Name">Name:</label>
                                    <input type="text" id="yourName" class="form-control" name="yourName" value="{{ old('name',current_user()->first_name ?? "") }}" placeholder="Name" placeholder="Enter Name">
                                    </div>

                                </div>
                                <div class="col-md-6 @if(isset(current_user()->first_name)) d-none @endif">
                                    <span class="feildtitle">Phone No:</span>
                                    <div class="inputbox mt-3 mr-2">
                                        <input type="tel" id="phone" class="form-control phone_number"
                                             placeholder=" +44 208 432 6446"
                                            value="{{ old('tel',current_user()->phone ?? "") }}"
                                            maxlength="18" required>
                                           
                                    </div>
                                </div>
                            </div>
                            <div class="row @if(isset(current_user()->first_name)) d-none @endif">
                                <div class="col-md-12">
                                    <span class="feildtitle">Email:</span>
                                    <div class="inputbox mt-3 mr-2">
                                        <input type="email" class="form-control" id="email_address"
                                            placeholder="Enter Your Email"
                                            value="{{ old('email',current_user()->email ?? "") }}"
                                             placeholder="Email" name="email" required>
                                            
                                             <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="feildtitle">Type Of Paper:</span>
                                    <div class="inputbox mt-3 mr-2">
                                        <select class="form-control d-block w-100 form-select add_in_list" id="type_of_works"
                                            name="price_plan_type_of_work_id"
                                            onchange="makeInfoList('Types Of Work', $('#type_of_works option:selected').text())"
                                            required>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span class="feildtitle">Subject:</span>
                                    <div class="inputbox mt-3 mr-2">
                                        <select class="form-control d-block w-100 form-select add_in_list" id="subjects"
                                            name="price_plan_subject_id"
                                            onchange="makeInfoList('Subject', $('#subjects option:selected').text())"
                                            required>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <span class="feildtitle">Page(s):</span>
                                    <div class="inputbox mt-3 mr-2">
                                        <input type="Text" name="price_plan_no_of_page_id" id="pages"
                                            class="quantity form-control" placeholder="1" value="1">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="feildtitle">Deadline:</span>
                                    <div class="inputbox mt-3 mr-2">
                                        <select class="form-control d-block w-100 form-select add_in_list" id="urgencies"
                                            name="price_plan_urgency_id"
                                            onchange="makeInfoList('Urgency', $('#urgencies option:selected').text())"
                                            required>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span class="feildtitle">Academic Level:</span>
                                    <div class="inputbox mt-3 mr-2">
                                        <select id="levels" name="price_plan_level_id"
                                            class="form-control d-block w-100"
                                            onchange="makeInfoList('Levels', $('#levels option:selected').text())">
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span class="feildtitle">Line Spacing:</span>
                                    <div class="inputbox mt-3 mr-2">
                                        <select class="form-control d-block w-100" id="spacing" name="line_spacing"
                                            onchange="makeInfoList('Line Spacing', $('#line_spacing option:selected').text())"
                                            required>
                                            <option class="values" value="1">Double Line Spacing</option>
                                            <option class="values" value="2">Single Line Spacing</option>
                                            <option class="values" value="3">1.5 Line Spacing</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="inputbox mt-3">
                                    <span>Topic</span>
                                    <input type="text" id="topic" name="topic" placeholder="Any topic"
                                    value="{{ old('topic',$order->topic ?? "") }}" onchange="makeInfoList('Topic', $('#topic').val())" class="form-control"
                                         placeholder="Write Your Choice" required>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="inputbox mt-3">
                                    <span>Paper Instructions:</span>
                                    <input type="text" name="instructions" class="form-control" 
                                        placeholder="Description" value="{!! $order->instructions ?? "" !!}">
                                </div>
                            </div>
                            <fieldset id="order_attachments" class="mb-3">
                                <div class="fieldwrapper row" id="field1">
                                    <div class="col-6">
                                        <input type="file" name='attachments[]' id="file1"  class="fieldname form-control">
                                    </div>
                                    <div class="col-6">
                                    <i class="fa fa-trash removeFile" style="color: red"></i>
                                        <input type="button" value="Add More" class="ml-2 add add_more_btn btn btn-warning btn-sm" id="add_file" style="color:#fff;" />
                                    </div>
                                </div>
                            </fieldset>
                            @if(isset($order->files) && count($order->files))
                            @foreach($order->files as $key => $file)
                            <div class="fieldwrapper row mt-2" id="field1">
                                <div class="col-6"> 
                                    <a target="_blank" style="color: #045281" href="{{ config('app.crm_url').$file->file }}">{{ $file->file }}</a>
                                </div>
                                <div class="col-6"> 
                                    <span><i class="fa fa-trash removeFile remove" style="color: red"></i><input type="button" class="remove btn btn-sm" value="Remove"> </span>
                                </div> 
                            </div>
                            @endforeach
                            @endif

                            <!-- <div class="choosefilebg  justify-content-center mt-4 mb-4">
                            <div class="d-flex align-items-center">
                          

                                <form action="/action_page.php" class="d-flex">
                                    <div class="icon_choose">
                                        <label for="myFile"><i>
                                                <img src="{{ asset('frontend/assets/img/upload.png') }}"  class="img-fluid">
                                            </i></label>
                                    </div>
                                    <input class="choosefile" type="file" name='attachments[]' id="file1"
                                        onchange="getfile(this.value);">
                                    <div class="text-choose">
                                        <span>Drag & drop files or Browse<br>
                                            File types:pdf, ppt, pptx, doc, docx, xls, xlsx, csv, txt, jpeg, jpg, png,
                                            gif,
                                            sav, sps, spv, spo, mat, zip</span>
                                    </div>
                                </form>

                            </div>
                        </div> -->

                            <div class="row">
                                <div class="col-md-4">
                                    <span class="feildtitle">No of references:</span>
                                    <div class="inputbox mt-3 mr-2">
                                        <input type="number" id="reference" name="reference" placeholder="references"
                                            class="form-control" maxlength="2" value="{{ old('reference',$order->reference ?? "") }}" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span class="feildtitle">Reference style:</span>
                                     <div class="inputbox mt-3 mr-2">
                                        <select class="form-control d-block w-100" id="reference_style" name="price_plan_style_id" onchange="makeInfoList('Reference style', $('#reference_style option:selected').text())"
                                            required>
                                            <option class="values" value="1">OSCOLA</option>
                                            <option class="values" value="2">APA</option>
                                            <option class="values" value="3">Harvard</option>
                                            <option class="values" value="4">Chicago</option>
                                            <option class="values" value="5">MLA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span class="feildtitle">Font style:</span>
                                    <div class="inputbox mt-3 mr-2">
                                        <select class="form-control d-block w-100" name="font_style" id="font_style"
                                            required>
                                            <option value="Calibri (Standard)" {{ $order->font_style =='Calibri (Standard)' ? 'selected' : '' }}>Calibri (Standard)</option>
                                            <option value="Arial" {{ $order->font_style =='Arial' ? 'selected' : '' }}>Arial</option>
                                            <option value="Times New Roman" {{ $order->font_style =='Times New Roman' ? 'selected' : '' }}>Times New Roman</option>
                                            <option value="Verdana" {{ $order->font_style =='Verdana' ? 'selected' : '' }}>Verdana</option>
                                            <option value="Georgia" {{ $order->font_style =='Georgia' ? 'selected' : '' }}>Georgia</option>
                                            <option value="Trebuchet MS" {{ $order->font_style =='Trebuchet MS' ? 'selected' : '' }}>Trebuchet MS</option>
                                            <option value="Courier New" {{ $order->font_style =='Courier New' ? 'selected' : '' }}>Courier New</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <span class="feildtitle mb-3">Addons</span>

                                <div class="col-md-4 writer" id="checkbox1">
                                    <label for="service-1">
                                        <div class="writericon">
                                            <input type="checkbox" class="d-none" id="service-1" name="addOns[]" value="1" data-amount="10" >
                                            Plagirism Report
                                        </div>
                                        <div class="writericon"> <span>Add for $10</span></div>
                                    </label>
                                </div>

                                <div class="col-md-4 writer" id="checkbox2">
                                    <label for="service-2">
                                        <div class="writericon">
                                            <input type="checkbox" class="d-none " id="service-2" name="addOns[]" value="2" data-amount="6">
                                            One Page Summary
                                        </div>
                                        <div class="writericon"> <span>Add for $6</span></div>
                                    </lable>
                                </div>

                                <div class="col-md-4 writer" id="checkbox3">
                                    <label for="service-3">
                                        <div class="writericon">
                                            <input type="checkbox" class="d-none" id="service-3" name="addOns[]" value="3" data-amount="5">
                                            <span>Grammar Check Report</span>
                                        </div>
                                        <div class="writericon"> <span>Add for $5</span></div>
                                    </lable>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-4 writer" id="checkbox4">
                                    <label class="whatever" for="service-4">
                                        <div class="writericon">
                                            <input type="checkbox" class="d-none" id="service-4" name="addOns[]" value="4" data-amount="6">
                                            <span>Abstract Page</span>
                                        </div>
                                        <div class="writericon"> <span>Add for $6</span></div>
                                    </lable>
                                </div>

                                <div class="col-md-4 writer" id="checkbox5">
                                    <label for="service-7">
                                        <div class="writericon">
                                            <input type="checkbox" class="d-none" id="service-7" name="addOns[]" value="7"
                                                data-amount="50">
                                            <span>SPSS analysis</span>
                                        </div>
                                        <div class="writericon"> <span>Add for $50</span></div>
                                    </lable>
                                </div>

                                <div class="col-md-4 writer" id="checkbox6">
                                    <label for="service-6">
                                        <input type="checkbox" class="d-none" id="service-6" name="addOns[]" value="6" data-amount="3">
                                        <div class="writericon">
                                            <span>Quality Double-check</span>
                                        </div>
                                        <div class="writericon"> <span>Add for $3</span></div>
                                    </lable>
                                </div>

                            </div>
                            <button class="btn paybtn-success" id="save_value" type="submit">Preview order</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-4">
                    <div class="card  p-3  mb-3">
                        <div class="card card-yellow p-3 text-white mb-3">
                            <h3 class="order_sum d-flex justify-content-center">Order Summary</h3>
                        </div>
                        <div class="row Summary">
                            <div class="col-md-6">
                                <span>Type of Paper</span>
                            </div>
                            <div class="col-md-6">
                                <span id="type_of_work"></span>
                            </div>
                        </div>
                        <!-- <div class="row Summary">
                            <div class="col-md-6">
                                <span>Subject</span>
                            </div>
                            <div class="col-md-6">
                                <span>Accounting</span>
                            </div>
                        </div> -->
                        <div class="row Summary">
                            <div class="col-md-6">
                                <span>Academic Level</span>
                            </div>
                            <div class="col-md-6">
                                <span id="academic-level"></span>
                            </div>
                        </div>
                        <div class="row Summary">
                            <div class="col-md-6">
                                <span>Deadline</span>
                            </div>
                            <div class="col-md-6">
                                <span id="deadline"></span>
                            </div>
                        </div>
                        <hr class="Rounded">
                        <div class="row Summary">
                            <div class="col-md-6">
                                <span>Service Cost</span>
                            </div>
                            <div class="col-md-6">
                            $<span id="service_cost">{{ $order->discount_amount*2 ?? "0" }}</span>
                            {{--$<span id="service_cost">{{ $order->service_amount ?? "0" }}</span>--}}
                            </div>
                        </div>
                        <div class="row Summary">
                            <div class="col-md-6">
                                <span>Price After Discount</span>
                            </div>
                            <div class="col-md-6">
                            $<span id="discount_cost">{{ $order->discount_amount ?? "0" }}</span>
                            </div>
                        </div>
                        <hr class="Rounded">
                        <div class="row Summary">
                            <div class="col-md-6">
                                <span>Add-ons Cost</span>
                            </div>
                            <div class="col-md-6">
                                <span id="addon_cost"></span>
                            </div>
                        </div>
                        <div class="row Summary">
                            <div class="col-md-6">
                                <span>Words</span>
                            </div>
                            <div class="col-md-6">
                                <span id="cal-words"></span>
                            </div>
                        </div>
                        <div class="row Summary">
                            <div class="col-md-6">
                                <span>Line Spacing</span>
                            </div>
                            <div class="col-md-6">
                                <span id="line_spacing"></span>
                            </div>
                        </div>
                        <hr class="Rounded">
                        <div class="row">
                            <div class="col-md-6 total">
                                <span>Total</span>
                            </div>
                            <div class="ammount col-md-6">
                                <span id="grand_total_amount">{{ $order->grand_total_amount ?? "0" }}</span>
                            </div>
                        </div>
                       
                    </div>
                </div>

            </div>

        </div>
        </div>
    </section>
<footer id="footer">

<div class="footer-newsletter">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h4>Lorem Ipsum</h4>
                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            </div>
        </div>
    </div>
</div>

<div class="footer-top">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
                <h3>Essay Throne<span>.</span></h3>
                <p>
                </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Pricing</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Features</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Why Us</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Essay Writting</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Essay Writting</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Essay Writting</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Essay Writting</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Essay Writting</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social Networks</h4>
                <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                <div class="social-links mt-3">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

        </div>
    </div>
</div>
</footer><!-- End Footer -->
@include('frontend.modals.login')
<script src="{{ asset('frontend/order_assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/order_assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/order_assets/js/flexslider/flexslider-min.js') }}">
</script>
<script src="{{ asset('userarea/build/js/intlTelInput.js') }}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/%40fancyapps/ui%404.0/dist/fancybox.umd.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/intlTelInput.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/mojoaxel/bootstrap-select-country/dist/js/bootstrap-select-country.min.js">
</script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>
let domain_id = `{{ config('app.domain_id') }}`;
let crm_api = `{{ config('app.crm_api') }}`;

</script>
<script src="{{ asset('frontend/assets/js/calculate.js') }}"></script>

<script>

$("#service-1").on("click", function(){
check = $("#service-1").is(":checked");
if(check) {
    $("#checkbox1").removeClass("writer").addClass("writer-checked");
} else {
    $("#checkbox1").removeClass("writer-checked").addClass("writer");
}
});    

$("#service-2").on("click", function(){
check = $("#service-2").is(":checked");
if(check) {
    $("#checkbox2").removeClass("writer").addClass("writer-checked");
} else {
    $("#checkbox2").removeClass("writer-checked").addClass("writer");
}
});   

$("#service-3").on("click", function(){
check = $("#service-3").is(":checked");
if(check) {
    $("#checkbox3").removeClass("writer").addClass("writer-checked");
} else {
    $("#checkbox3").removeClass("writer-checked").addClass("writer");
}
});

$("#service-4").on("click", function(){
check = $("#service-4").is(":checked");
if(check) {
    $("#checkbox4").removeClass("writer").addClass("writer-checked");
} else {
    $("#checkbox4").removeClass("writer-checked").addClass("writer");
}
});

$("#service-7").on("click", function(){
check = $("#service-7").is(":checked");
if(check) {
    $("#checkbox5").removeClass("writer").addClass("writer-checked");
} else {
    $("#checkbox5").removeClass("writer-checked").addClass("writer");
}
});

$("#service-6").on("click", function(){
check = $("#service-6").is(":checked");
if(check) {
    $("#checkbox6").removeClass("writer").addClass("writer-checked");
} else {
    $("#checkbox6").removeClass("writer-checked").addClass("writer");
}
});


let add = document.querySelectorAll(".numbtn");
let val = document.querySelector(".val");
let pls = document.querySelector(".add");
var counter = 1;
add.forEach((item) => {
    item.addEventListener("click", (e) => {
        if (item.classList.contains("add")) {
            if (counter != 99) {
                counter = counter + 1;
            }
        }
        if (item.classList.contains("del")) {
            if (counter != 0) {
                counter = counter - 1;
            }
        }
        val.innerHTML = counter;
        $('#pages').val(counter);
        // makeInfoList()
    });
});

</script>

<script>
function readFile(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            var htmlPreview =
                '<img width="200" src="' + e.target.result + '" />' +
                '<p>' + input.files[0].name + '</p>';
            var wrapperZone = $(input).parent();
            var previewZone = $(input).parent().parent().find('.preview-zone');
            var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');

            wrapperZone.removeClass('dragover');
            previewZone.removeClass('hidden');
            boxZone.empty();
            boxZone.append(htmlPreview);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function reset(e) {
    e.wrap('<form>').closest('form').get(0).reset();
    e.unwrap();
}

var input = document.querySelector("#phone");
const phoneInput = window.intlTelInput(input, {
    initialCountry: "auto",
    geoIpLookup: getIp,
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
});

function getIp(callback) {
    fetch('https://ipinfo.io/json?token=1d364502c79a33', {
            headers: {
                'Accept': 'application/json'
            }
        })
        .then((resp) => resp.json())
        .catch(() => {
            return {
                country: 'us',
            };
        })
        .then((resp) => callback(resp.country));
}

</script>

<script type="text/javascript">
$(document).on('keyup', '#yourName', function () {
    if ($(this).val() == '') {
        $('.nameField').removeClass('d-none');
    } else {
        $('.nameField').addClass('d-none');
    }
});

$(document).on('keyup', '.phone_number', function () {
    if ($(this).val() == '') {
        $('.phoneField').removeClass('d-none');
    } else {
        $('.phoneField').addClass('d-none');
    }
});

$(document).on('keyup', '#email_address', function () {
    if ($(this).val() == '') {
        $('.emailField').removeClass('d-none');
    } else {
        $('.emailField').addClass('d-none');
    }
});


var i = 0;

$("#save_value").click(function () {
    var arr = [];
    $.each($("input[name='addOns[]']:checked"), function () {
        arr.push($(this).val());
    });

});


// Read a page's GET URL variables and return them as an associative array.
function getUrlVars()
{
var vars = [], hash;
var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
for(var i = 0; i < hashes.length; i++)
{
    hash = hashes[i].split('=');
    vars.push(hash[0]);
    vars[hash[0]] = hash[1];
}
$('select[name="price_plan_type_of_work_id"]').val(vars['price_plan_type_of_work_id'] ?? 1).change();
$('select[name="price_plan_urgency_id"]').val(vars['price_plan_urgency_id'] ?? 1).change();
$('select[name="price_plan_subject_id"]').val(vars['price_plan_subject_id'] ?? 1).change();
$('select[name="price_plan_subject_id"]').val(vars['price_plan_subject_id'] ?? 1).change();
$('#pages').val(vars['price_plan_no_of_page_id'] ?? 1);
}


$('body').on('change', '#email_address', function (e) {
    const phoneNumber = phoneInput.getNumber();
    $.ajax({
        type: "POST",
        url: "{{ route('frontend.orders.save_guest_customer') }}",
        data: {
            name: $('#yourName').val(),
            email: $(this).val(),
            phone: phoneNumber,
            "_token": "{{ csrf_token() }}"
        },
        dataType: "json",
        success: function (response) {
            console.log("success message showing");
            setTimeout(function () {
                calculatePrice();
            }, 2000)
            if (response.status == 1 && response.customer_id > 0) {
                $('#customer_id').val(response.customer_id);
                alert('Your are a Customer please login');
            } else {
                $('#lead_id').val(response.lead_id);
            }
        },
        error: function (response) {
            console.log("error message showing");
        },
    });
});

let seviceList = [];
$(document).on("change", "input[name='addOns[]']", function (e) {
    e.preventDefault();
    let seviceLabel = $('label[for="' + this.id + '"] i').text();
    let seviceValue = $(this).val();
    let seviceAmount = $(this).data('amount');
    let isChecked = $(this).is(":checked");

    if (isChecked) {
        seviceList.push({
            seviceLabel,
            seviceValue,
            seviceAmount
        });
    } else {
        let value = seviceValue;
        seviceList = seviceList.filter(function (item) {
            return item.seviceValue !== value;
        });
    }

    let $extraService = $('.extra_service');
    $extraService.html("");
    $extraService.append("<h6 class='mt-2'>Extra service</h6><ul class='list-group list-group-flush'>");
    $.each(seviceList, function (key, value) {
        let {
            seviceLabel,
            seviceValue,
            seviceAmount
        } = value
        $extraService.append(
            `<li class="list-group-item" key="${key}">
        <small>${seviceLabel}</small>
        <b style="float: right;">$${seviceAmount}</b>
        </li>`
        );
    });
    $extraService.append("<ul>");

    calculatePrice();
});

function makeInfoList(fieldLabel, fieldValue) {
    let $infoList = $(".info_list").children();
    $infoList.map(function (i, element) {
        let $element = $(element);
        let $elementLabel = $element.children("small").text();
        let $elementValue = $element.children("b");

        if ($elementLabel === fieldLabel) {
            $elementValue.text(fieldValue);
            $element.removeClass("d-none");
        }
    });

    calculatePrice();
}

$("#add_file").click(function () {
    var lastField = $("#order_attachments div:last");
    var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
    var fieldWrapper = $("<div class=\"fieldwrapper row mt-2\" id=\"field" + intId + "\"/>");
    fieldWrapper.data("idx", intId);
    var fName = $(
        "<div class=\"col-6\"> <input type=\"file\" name=\"attachments[]\" class=\" form-control\" /> </div>"
        );
    var removeButton = $(
        "<div class=\"col-6 mt-3\"> <i class=\"fa fa-trash remove\" style=\"color: red\"></i> </div> </div>"
        );
    removeButton.click(function () {
        $(this).parent().remove();
    });
    fieldWrapper.append(fName);
    fieldWrapper.append(removeButton);
    $("#order_attachments").append(fieldWrapper);
});

$(document).on('click', '.showSignUp', function () {
    $('#loginform').addClass('d-none');
    $('#signupform').removeClass('d-none');
});

$(document).on('click', '.showSignIn', function () {
    $('#signupform').addClass('d-none');
    $('#loginform').removeClass('d-none');
});

$(document).on('click', '.removeFile', function () {
    document.getElementById("file1").value = null;
});

$(document).ready(function () {
    const myTimeout = setTimeout(addonVal, 5000);

    function addonVal() {

        checkbox1= $("#service-1").is(":checked");
        if(checkbox1) {            
            $("#checkbox1").removeClass("writer").addClass("writer-checked");
        } else {
            $("#checkbox1").removeClass("writer-checked").addClass("writer");
        }

        checkbox2 = $("#service-2").is(":checked");
        if(checkbox2) {
            $("#checkbox2").removeClass("writer").addClass("writer-checked");
        } else {
            $("#checkbox2").removeClass("writer-checked").addClass("writer");
        }

        checkbox3 = $("#service-3").is(":checked");
        if(checkbox3) {
            $("#checkbox3").removeClass("writer").addClass("writer-checked");
        } else {
            $("#checkbox3").removeClass("writer-checked").addClass("writer");
        }

        checkbox4 = $("#service-4").is(":checked");
        if(checkbox4) {
            $("#checkbox4").removeClass("writer").addClass("writer-checked");
        } else {
            $("#checkbox4").removeClass("writer-checked").addClass("writer");
        }

        checkbox5 = $("#service-5").is(":checked");
        if(checkbox5) {
            $("#checkbox5").removeClass("writer").addClass("writer-checked");
        } else {
            $("#checkbox5").removeClass("writer-checked").addClass("writer");
        }

        checkbox6 = $("#service-6").is(":checked");
        if(checkbox6) {
            $("#checkbox6").removeClass("writer").addClass("writer-checked");
        } else {
            $("#checkbox6").removeClass("writer-checked").addClass("writer");
        }

    }

   
    $(document).on('click', '.first_next_step', function (e) {
        if (!$('.name').val() || !$('.phone_number').val() || !$('.email_address').val()) {
            alert('please fill all require fields.');
        } else {
            setTimeout(function () {
                $('#collapse_two_button').click()
            }, 500);
        }
    });

    $(document).on('click', '.second_next_step', function (e) {
        if (!$('#topic').val()) {
            alert('please fill all require fields.');
        } else {
            setTimeout(function () {
                $('#collapse_three_button').click()
            }, 500);
        }
    });
});

$(document).ready(function() {
        setTimeout(function(){

            var price_plan_type_of_work_id = '{{ $order->price_plan_type_of_work_id ?? "" }}';
            console.log(price_plan_type_of_work_id);
            if(price_plan_type_of_work_id !== '') {
                $('#type_of_works').val(price_plan_type_of_work_id );
                $("#type_of_works").change(); 
            }


            var price_plan_urgency_id = '{{ $order->price_plan_urgency_id ?? "" }}';
            if(price_plan_urgency_id !== '') {
                $('#urgencies').val(price_plan_urgency_id );
                $("#urgencies").change(); 
            }

            var price_plan_no_of_page_id = '{{ $order->price_plan_no_of_page_id ?? "" }}';
            if(price_plan_urgency_id !== '') {
                $('#pages').val(price_plan_no_of_page_id );
            }

            var price_plan_subject_id = '{{ $order->price_plan_subject_id ?? "" }}';
            if(price_plan_subject_id !== '') {
                $('#subjects').val(price_plan_subject_id);
                $("#subjects").change(); 
            }

            var price_plan_level_id = '{{ $order->price_plan_level_id ?? "" }}';
            if(price_plan_level_id !== '') {
                $('#levels').val(price_plan_level_id);
                $("#level").change(); 
            }

            var line_spacing = '{{ $order->line_spacing ?? "" }}';
            if(line_spacing !== '') {
                $('#spacing').val(line_spacing);
                $("#spacing").change(); 
            }

            var reference_style = '{{ $order->price_plan_style_id ?? "" }}';
            if(reference_style !== ''){
                
                $('#reference_style').val(reference_style);
                $('#reference_style').change();
            }
            
            var pplid = $("input[type='radio'][name='price_plan_level_id']:checked").val();
            if(pplid==1){
                    // makeInfoList('Academic Level', 'High School')
                }
                if(pplid==2){
                    // makeInfoList('Academic Level', 'College');
                }
                if(pplid==3){
                    // makeInfoList('Academic Level', 'Undergraduate');
                }
                if(pplid==4){
                    // makeInfoList('Academic Level', 'Master')
                }
                if(pplid==5){
                    // makeInfoList('Academic Level', 'ph.D')
                }

                var page_id = $('#pages').val();
                if(page_id > 0){
                    // makeInfoList('No Of Pages', page_id);
                }

                // makeInfoList('Line Spacing', $('#line_spacing option:selected').text());
                // makeInfoList('Subject', $('#subjects option:selected').text());
                // makeInfoList('Topic', $('#topic').val())

                var ppsid = $("input[type='radio'][name='price_plan_style_id']:checked").val();
                if(ppsid==1){
                    // makeInfoList('Referencing style', 'OSCOLA');
                }
                if(ppsid==2){
                    // makeInfoList('Referencing style', 'APA');
                }
                if(ppsid==3){
                    // makeInfoList('Referencing style', 'Harvard');
                }
                if(ppsid==4){
                    // makeInfoList('Referencing style', 'Chicago');
                }
                if(ppsid==5){
                    // makeInfoList('Referencing style', 'MLA');
                }

                var oad = $('#selected_addons').val();
                if(oad.length){
                    $.each(JSON.parse(oad),function(index, value) {
                      $('#service-'+value).attr( 'checked', true )
                  });
                }
            },4000)

        setTimeout(function(){
            calculatePrice();
        },5000)
    });

$("#order-now-button").click(function () {

    var phone = $('.phone_number').val();

    if (!phone) {
        alert("Phone number required");
    }
});

</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
(function () {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/62973b6eb0d10b6f3e751b11/1g4fc0aud';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();

</script>

</body>

</html>
