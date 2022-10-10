@extends('admin.layouts.app')
@section('page_title')
<label> Welcome to dashboard</label>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">@yield('page_title','Dashboard')</h3>
        </div>
        <div class="">
            <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="card bg-info">
                <a href="#">
                    <div class="card-body">
                        <div class="d-flex no-block">
                            <div class="m-r-20 align-self-center"><img src="{{ asset('admin/assets/images/icon/income-w.pn') }}g" alt="Income" /></div>
                            <div class="align-self-center">
                                <h6 class="text-white m-t-10 m-b-0">Posts</h6>
                                <h2 class="m-t-0 text-white">{{ isset($total_posts_count) ? $total_posts_count : 0 }}</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card bg-success">
                <a href="#">
                    <div class="card-body">
                        <div class="d-flex no-block">
                            <div class="m-r-20 align-self-center"><img src="{{ asset('admin/assets/images/icon/expense-w.pn') }}g" alt="Income" /></div>
                            <div class="align-self-center">
                                <h6 class="text-white m-t-10 m-b-0">Categories</h6>
                                <h2 class="m-t-0 text-white">{{ isset($categories_count) ? $categories_count : 0 }}</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card bg-primary">
                <a href="#">
                    <div class="card-body">
                        <div class="d-flex no-block">
                            <div class="m-r-20 align-self-center">
                                <img src="{{ asset('admin/assets/images/icon/assets-w.pn') }}g" alt="Income" />
                            </div>
                            <div class="align-self-center">
                                <h6 class="text-white m-t-10 m-b-0">Sub Categories</h6>
                                <h2 class="m-t-0 text-white">{{ isset($registered_companies) ? $registered_companies : 0 }}</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card bg-danger">
                <a href="#">
                    <div class="card-body">
                        <div class="d-flex no-block">
                            <div class="m-r-20 align-self-center"><img src="{{ asset('admin/assets/images/icon/staff-w.pn') }}g" alt="Income" /></div>
                            <div class="align-self-center">
                                <h6 class="text-white m-t-10 m-b-0">Total Users</h6>
                                <h2 class="m-t-0 text-white">{{ isset($users_count) ? $users_count : 0 }}</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="right-sidebar">
        <div class="slimscrollright">
            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                    <li><b>With Light sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                    <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                    <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                    <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme working">7</a></li>
                    <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                    <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection