<!DOCTYPE html>
<html lang="en">

<head>
    <title>essaythrone | order</title>
    <meta charset="UTF-8">
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
            height: 170px;
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
          .float-right-whatsapp{
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 5%;
            left: 1.6%;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            /* box-shadow: 2px 2px 3px #999; */
            z-index: 100;
        }
        
        .my-float{
        	margin-top:16px;
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
        li.no-items {
            list-style: none;
        }
         .minus, .plus {
             margin-bottom:2px;
            width: 10%;
            margin-top: -2% !important;
            background: #fece14;
            border-radius: 4px;
            border: 1px solid #ddd;
            display: inline-block;
            /* vertical-align: middle; */
            text-align: center;
            cursor: pointer;
            margin-bottom: -1%;
        }
       .pages-count {
            height: 80% !important;
            width: 55%;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 4px;
            display: inline-block;
            /* vertical-align: middle; */
        }
        .minus, .plus {
            width: 20%;
            height: 100%;
            background: #fece14;
            border-radius: 4px;
            border: 1px solid #ddd;
            display: inline-block;
            /* vertical-align: middle; */
            text-align: center;
            cursor: pointer;
            margin-bottom: -1%;
        }
        .contact-us-footer>a{
            color:#fff;
        }
        .contact-us-footer{
            list-style:none;
        }
        
    </style>
</head>

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
                    <form method="post" action="{{ route('frontend.orders.store') }}" 
                        id="calculatePrice" enctype="multipart/form-data">
                        @csrf
 
                        <div class="card p-3 py-4">
                            <h3 class="text-uppercase">Project Details</h3>
                            <div class="row">

                                <div class="col-md-6 @if(isset(current_user()->first_name)) d-none @endif">
                                    <input type="hidden" name="domain_id" value="{{ config('app.domain_id') }}">
                                    <input type="hidden" name="manual_discount_amount" value="0">
                                    <input type="hidden" name="customer_id" id="customer_id"
                                        value="{{ isset(current_user()->id) ? current_user()->id : null }}">
                                    <input type="hidden" name="lead_id" id="lead_id" value="">
                                    <input type="hidden" name="total_amount" value="0">
                                    <input type="hidden" name="grand_total_amount" value="0">
                                    <input type="hidden" name="addons_amount" value="0">
                                    <input type="hidden" name="service_amount" value="0">
                                    <input type="hidden" name="discount_amount" value="0">

                                    <div class="form-group">
                                    <span class="feildtitle">Name:</span>
                                    <input type="text" id="yourName" class="form-control" name="yourName" value="{{ old('name',current_user()->first_name ?? "") }}" placeholder="Enter Name">
                                    <label id="username_field" class="d-none" style="color:red;">Please fill out this field</label>
                                    </div>

                                </div>
                                <div class="col-md-6 @if(isset(current_user()->phone)) d-none @endif">
                                    <span class="feildtitle">Phone No:</span>
                                    <div class="inputbox mt-3 mr-2">
                                        <input type="tel" id="phone" class="form-control phone_number"
                                             placeholder=" +44 208 432 6446"
                                            value="{{ old('tel',current_user()->phone ?? "") }}"
                                            maxlength="18">
                                    <label id="phone_field" class="d-none" style="color:red;">Please fill out this field</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row @if(isset(current_user()->email)) d-none @endif">
                                <div class="col-md-12">
                                    <span class="feildtitle">Email:</span>
                                    <div class="inputbox mt-3 mr-2">
                                        <input type="email" class="form-control" id="email_address"
                                            placeholder="Enter Your Email"
                                            value="{{ old('email',current_user()->email ?? "") }}"
                                             placeholder="Email" name="email">
                                        <label id="email_field" class="d-none" style="color:red;">Please fill out this field</label>
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
                                    <!--<div class="inputbox mt-3 mr-2">-->
                                    <!--    <div class="input-group">-->
                                    <!--      <input type="button" value="-" class="button-minus " data-field="quantity">-->
                                    <!--      <input type="number" step="1" max="" value="1" name="price_plan_no_of_page_id" id="pages" class="quantity-field ">-->
                                    <!--      <input type="button" value="+" class="button-plus " data-field="quantity">-->
                                    <!--    </div>-->
                                    
                                    
                                    
                                    
                                 
                                 
                                        <button class="btn  btn-outline-secondary m-0 numbtn del minus"
                                        type="button"
                                        onclick="setTimeout(function(){
                                            makeInfoList('No Of Pages', parseInt($('#pages').val())-1)
                                        },500)">-</button>
                               
                                    <p class="val d-none">0</p>
                                    <input type="number" height="48px"
                                    class="form-control val add_in_list pages-count"
                                     value="1" name="price_plan_no_of_page_id" id="pages" />
                                 
                                        <button class="btn  btn-outline-secondary m-0 numbtn add plus"
                                        type="button"
                                        onclick="setTimeout(function(){
                                            makeInfoList('No Of Pages', parseInt($('#pages').val())+1)
                                        },500)">+</button>
                           
                           
                                        
                                        <!--<input type="number" name="price_plan_no_of_page_id" id="pages"-->
                                        <!--    class="quantity form-control pages-count" min="1" max="1000" placeholder="1" value="1">-->
                                      
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
                                        <select class="form-control d-block w-100" id="" name="line_spacing"
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
                                    <span class="feildtitle">Topic</span>
                                    <input type="text" id="topic" name="topic" placeholder="Any topic"
                                        onchange="makeInfoList('Topic', $('#topic').val())" class="form-control"
                                         placeholder="Write Your Choice">
                                <label id="topic_field" class="d-none" style="color:red;">Please fill out this field</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="inputbox mt-3">
                                    <span>Paper Instructions:</span>
                                    <input type="text" name="instructions" class="form-control" 
                                        placeholder="Description">
                                </div>
                            </div>

                            <fieldset id="order_attachments" class="mb-3">
                                <div class="fieldwrapper row" id="field1">
                                    <div class="col-6">
                                        <input type="file" name='attachments[]' id="file1" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <i class="fa fa-trash removeFile" style="color: red"></i>
                                        <input type="button" value="Add More File" class="ml-2 add add_more_btn btn btn-warning btn-sm" id="add_file" style="color:#fff;" />
                                    </div>
                                </div>
                            </fieldset>

                            <!-- <div class="dropzone-wrapper">
                                <label for="dropzone">
                                    <div class="dropzone-desc">
                                        <input type="file" name='attachments[]' class="d-none" id="dropzone" multiple>
                                    </div>
                                </lable>
                            </div> -->

                            <!-- <div class="choosefilebg  justify-content-center mt-4 mb-4">
                            <div class="d-flex align-items-center">
                          

                                <form action="/action_page.php" class="d-flex">
                                    <div class="icon_choose">
                                        <label for="myFile"><i>
                                                <img src="{{ asset('frontend/assets/img/upload.png') }}" class="img-fluid">
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
                                            class="form-control" maxlength="2" value="0" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span class="feildtitle">Reference style:</span>
                                    <div class="inputbox mt-3 mr-2">
                                        <select class="form-control d-block w-100" id="reference_style" name="price_plan_style_id" onchange="makeInfoList('Reference style', $('#reference_style option:selected').text())"
                                            required>
                                            <option class="values" value="1">OSCOLA</option>
                                            <option class="values" value="2">APA</option>
                                            <option class="values" value="3">Hardvard</option>
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
                                            <option value="Calibri (Standard)">Calibri (Standard)</option>
                                            <option value="Arial" selected>Arial</option>
                                            <option value="Times New Roman">Times New Roman</option>
                                            <option value="Verdana">Verdana</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Trebuchet MS">Trebuchet MS</option>
                                            <option value="Courier New">Courier New</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <span class="feildtitle mb-3">Addons</span>

                                <div class="col-md-4 writer" id="checkbox1">
                                    <label for="service-1">
                                        <div class="writericon">
                                            <input type="checkbox" class="d-none" id="service-1" name="addOns[]" value="1" data-amount="10">
                                            Plagirism Report
                                        </div>
                                        <div class="writericon"> <span>Add for $10</span></div>
                                    </label>
                                </div>

                                <div class="col-md-4 writer" id="checkbox2">
                                    <label for="service-2">
                                        <div class="writericon">
                                            <input type="checkbox" class="d-none" id="service-2" name="addOns[]" value="2" data-amount="6">
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
                                <span id="type_of_work">Essay</span>
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
                            $<span id="service_cost">0.00</span>
                            </div>
                        </div>
                        <div class="row Summary">
                            <div class="col-md-6">
                                <span>Price After Discount</span>
                            </div>
                            <div class="col-md-6">
                            $<span id="discount_cost">0.00</span>
                            </div>
                        </div>
                        <hr class="Rounded">
                        <div class="row Summary">
                            <div class="col-md-6">
                                <span>Add-ons Cost</span>
                            </div>
                            <div class="col-md-6">
                                $<span id="addon_cost">0.00</span>
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
                                $<span id="grand_total_amount">0.00</span>
                            </div>
                        </div>
                       
                    </div>
                </div>

            </div>

        </div>
        </div>
    </section>
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <a href="https://api.whatsapp.com/send?phone=+447520665751&text=Say%21%20Hello%20." class="float-right-whatsapp" target="_blank">
      <i class="fa fa-whatsapp my-float"></i>
      </a>
      
    <footer id="footer">

     @include('frontend.includes.footer')
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
    
    let username = document.getElementById('yourName');
	let phone = document.getElementById('phone');
    let email = document.getElementById('email_address');
    let topic = document.getElementById('topic');
    
	document.getElementById("calculatePrice").addEventListener("submit", function(e){

		if (!username.value || !phone.value || !email.value || !topic.value) {	
            $("#username_field").removeClass("d-none");
            $("#phone_field").removeClass("d-none");
            $("#email_field").removeClass("d-none");
            $("#topic_field").removeClass("d-none");
           
            if(username.value){
                $("#username_field").addClass("d-none");
                location.href = "#username_field";
            }
            if(phone.value){
                $("#phone_field").addClass("d-none");
            }
            if(email.value){
                $("#email_field").addClass("d-none");
            }
            if(topic.value){
                $("#topic_field").addClass("d-none");
            }
            
			e.preventDefault();
			alert("Please fill out all required fields");
			return false;		
		}
        
	});


    </script>
    <script>

function incrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal)) {
    parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
  } else {
    parent.find('input[name=' + fieldName + ']').val(0);
  }
}

function decrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal) && currentVal > 0) {
    parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
  } else {
    parent.find('input[name=' + fieldName + ']').val(0);
  }
}

$('.input-group').on('click', '.button-plus', function(e) {
  incrementValue(e);
});

$('.input-group').on('click', '.button-minus', function(e) {
  decrementValue(e);
});
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
                    console.log("hassam");
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

        $(".dropzone").change(function () {
            readFile(this);
        });

        $('.dropzone-wrapper').on('dragover', function (e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).addClass('dragover');
        });

        $('.dropzone-wrapper').on('dragleave', function (e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).removeClass('dragover');
        });

        $('.remove-preview').on('click', function () {
            var boxZone = $(this).parents('.preview-zone').find('.box-body');
            var previewZone = $(this).parents('.preview-zone');
            var dropzone = $(this).parents('.form-group').find('.dropzone');
            boxZone.empty();
            previewZone.addClass('hidden');
            reset(dropzone);
        });

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
                $('#username_field').removeClass('d-none');
            } else {
                $('#username_field').addClass('d-none');
            }
        });

        $(document).on('keyup', '.phone_number', function () {
            if ($(this).val() == '') {
                $('#phone_field').removeClass('d-none');
            } else {
                $('#phone_field').addClass('d-none');
            }
        });

        $(document).on('keyup', '#email_address', function () {
            if ($(this).val() == '') {
                $('#email_field').removeClass('d-none');
            } else {
                $('#email_field').addClass('d-none');
            }
        });

        $(document).on('keyup', '#topic', function () {
            if ($(this).val() == '') {
                $('#topic_field').removeClass('d-none');
            } else {
                $('#topic_field').addClass('d-none');
            }
        });

        $(document).ready(function () {
            setTimeout(function () {

                    setTimeout(function () {
                        calculatePrice();
                    }, 2000)

                getUrlVars();
                
            }, 4000)
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
        $('select[name="price_plan_level_id"]').val(vars['price_plan_level_id'] ?? 1).change();
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
            var fieldWrapper = $("<div class=\"fieldwrapper row \" id=\"field" + intId + "\"/>");
            fieldWrapper.data("idx", intId);
            var fName = $(
                "<div class=\"col-6 mt-3 mb-3\"> <input type=\"file\" name=\"attachments[]\" class=\" form-control\" /> </div>"
                );
            var removeButton = $(
                "<div class=\"col-6 mt-3\"> <i class=\"fa-solid fa-trash\" style=\"color: red\"></i> </div> </div>"
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


        $("#order-now-button").click(function () {

            var phone = $('.phone_number').val();

            if (!phone) {
                alert("Phone number required");
            }
        });

    </script>

   <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5db1fa7678ab74187a5b670c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>

</html>
