@extends(env('THEME').'.admin.layouts.admin')
@section('content')
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Blog Posts</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.blog.dashboard') }}">Blog</a></li>
                        <li class="breadcrumb-item active">All Posts</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        @if($posts)
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="blogitem mb-5">
                            <div class="blogitem-image">
                                <a href="blog-details.html"><img src="{{ $post->image }}" alt="blog image"></a>
                                <span class="blogitem-date">{{ $post->created_at }}</span>
{{--                                Monday, December 15, 2018--}}
                            </div>
                            <div class="blogitem-content">
                                <div class="blogitem-header">
                                    <div class="blogitem-meta">
                                        <span><i class="zmdi zmdi-account"></i>By <a href="javascript:void(0);">Michael</a></span>
                                        <span><i class="zmdi zmdi-comments"></i><a href="blog-details.html">Comments(3)</a></span>
                                    </div>
                                    <div class="blogitem-share">
                                        <ul class="list-unstyled mb-0">
                                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook-box"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter-box"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h5><a href="blog-details.html">{{ $post->title }}</a></h5>
                                <p>{{ $post->excerpt }}</p>
                                <a href="blog-details.html" class="btn btn-info">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="card">
                    <div class="body">
                        @if($posts->total() > $posts->count())
                        <ul class="pagination pagination-primary m-b-0">
                            <li class="page-item">
                                {{ $posts->links() }}
                            </li>
                        </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
@stop
