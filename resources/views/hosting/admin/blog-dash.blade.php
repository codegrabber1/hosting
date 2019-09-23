@extends(env('THEME').'.admin.layouts.admin')
@section('content')
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Blog Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.blog.dashboard') }}">Blog</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <a class="btn btn-success btn-icon float-right" href="{{ route('admin.blog.categories.create') }}"><i class="zmdi zmdi-hc-fw"></i></a>
                </div>
            </div>
        </div>
        <div class="container-luid">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="body xl-blue">
                            <h4 class="mt-0 mb-0">2,048</h4>
                            <p class="mb-0">Total Leads</p>
                            <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                                 data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                                 data-offset="90" data-width="100%" data-height="40px" data-line-Width="2" data-line-Color="#FFFFFF"
                                 data-fill-Color="transparent"> 7,6,7,8,5,9,8,6,7 </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="body xl-purple">
                            <h4 class="mt-0 mb-0">521</h4>
                            <p class="mb-0 ">Total Connections</p>
                            <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                                 data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                                 data-offset="90" data-width="100%" data-height="42px" data-line-Width="2" data-line-Color="#FFFFFF"
                                 data-fill-Color="transparent"> 6,5,7,4,5,3,8,6,5 </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="body xl-green">
                            <h4 class="mt-0 mb-0">73</h4>
                            <p class="mb-0 ">Articles</p>
                            <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                                 data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                                 data-offset="90" data-width="100%" data-height="45px" data-line-Width="2" data-line-Color="#FFFFFF"
                                 data-fill-Color="transparent"> 8,7,7,5,5,4,8,7,5 </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="body xl-pink">
                            <h4 class="mt-0 mb-0">15</h4>
                            <p class="mb-0">Categories</p>
                            <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                                 data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                                 data-offset="90" data-width="100%" data-height="45px" data-line-Width="2" data-line-Color="#FFFFFF"
                                 data-fill-Color="transparent"> 7,6,7,8,5,9,8,6,7 </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Popular</strong> Categories</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="chart-bar" style="height: 16rem"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop