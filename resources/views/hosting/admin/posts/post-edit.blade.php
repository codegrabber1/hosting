@extends(env('THEME').'.admin.layouts.admin')
@section('content')
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Edit blog post</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.blog.dashboard') }}">Blog</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.blog.posts.index') }}">Blog Posts</a></li>
                        <li class="breadcrumb-item active">Post Edit</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <a class="btn btn-success btn-icon float-right" href="{{ route('admin.blog.posts.create') }}"><i class="zmdi zmdi-hc-fw"></i></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    @if($item->exists)
                    <div class="card">
                        <div class="blogitem mb-5">
                            <form action="{{ route('admin.blog.posts.update', $item->id)  }}" method="post" name="upadate">
                                @method('PATCH')
                                @csrf
                                @if($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
                                        </button>
                                        {{ $errors->first() }}
                                    </div>
                                @endif

                                @if(session('success'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
                                        </button>
                                        {{ session()->get('success') }}

                                    </div>
                                @endif
                                <div class="blogitem-image">
                                    <img src="{{ asset(env('THEME')).'/images/content/articles/'. $item->image }}" alt="{{ $item->title }}">
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
                                    <div class="card">
                                        <div class="body">
                                            @if($item->is_published)
                                                <p class="text-success right">Published</p>
                                            @else
                                                <p class="text-danger right">Unpublished</p>
                                            @endif
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input id="title" name="title" type="text" class="form-control" value="{{ old('title', $item->title )}}" />
                                            </div>
                                                <div class="form-group">
                                                    <label for="slug">Slung</label>
                                                    <input id="slug" name="slug" type="text" class="form-control" value="{{ old('slug', $item->slug )}}" />
                                                </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="body">
                                            <div class="row clearfix">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="author">Created at</label>
                                                        <input type="text" id="updated" name="updated" class="form-control" value="{{ $item->created_at }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="author">Updated at</label>
                                                        <input type="text" id="updated" name="updated" class="form-control" value="{{ $item->updated_at }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="author">Author</label>
                                                        <input type="text" id="updated" name="updated" class="form-control" value="{{ $item->user_id }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="body">
                                            <label for="excerpt">Excerpt</label>
                                            <textarea id="excerpt" name="excerpt" class="summernote">
                                                {{ old('excerpt', $item->excerpt) }}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="body">
                                            <label for="description">Full text</label>
                                            <textarea id="description" name="content" class="summernote">
                                                {{ old('description', $item->content) }}
                                            </textarea>

                                            <input type="submit" name="submit" class="btn btn-info waves-effect m-t-20" value="POST">
                                            <div class="checkbox">
                                                <input type="hidden"
                                                        name="is_published"
                                                        value="0">

                                                <input id="is_published"
                                                       name="is_published"
                                                       type="checkbox"
                                                       value="1"
                                                       @if($item->is_published) checked="checked" @endif >
                                                <label for="is_published">Publish</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Categories where the article is</strong></h2>
                        </div>
                        <div class="body">
                            <ul class="list-unstyled mb-0 widget-categories">
                                <li><a href="javascript:void(0);">Business Report</a></li>
                                <li><a href="javascript:void(0);">Business Growth</a></li>
                                <li><a href="javascript:void(0);">Business Strategy</a></li>
                                <li><a href="javascript:void(0);">Financial Advise</a></li>
                                <li><a href="javascript:void(0);">Creative Idea</a></li>
                                <li><a href="javascript:void(0);">Marketing</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Recent</strong> Posts</h2>
                        </div>
                        <div class="body">
                            <ul class="list-unstyled mb-0 widget-recentpost">
                                <li>
                                    <a href="blog-details.html"><img src="assets/images/image-gallery/1.jpg" alt="blog thumbnail"></a>
                                    <div class="recentpost-content">
                                        <a href="blog-details.html">Fundamental analysis services</a>
                                        <span>August 01, 2018</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="blog-details.html"><img src="assets/images/image-gallery/2.jpg" alt="blog thumbnail"></a>
                                    <div class="recentpost-content">
                                        <a href="blog-details.html">Steps to a successful Business</a>
                                        <span>November 01, 2018</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="blog-details.html"><img src="assets/images/image-gallery/3.jpg" alt="blog thumbnail"></a>
                                    <div class="recentpost-content">
                                        <a href="#blog-details.html">Development Progress Conference</a>
                                        <span>December 01, 2018</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="blog-details.html"><img src="assets/images/image-gallery/12.jpg" alt="blog thumbnail"></a>
                                    <div class="recentpost-content">
                                        <a href="blog-details.html">Steps to a successful Business</a>
                                        <span>December 15, 2018</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Tag</strong> Clouds</h2>
                        </div>
                        <div class="body">
                            <ul class="list-unstyled mb-0 tag-clouds">
                                <li><a href="javascript:void(0);" class="tag badge badge-default">Design</a></li>
                                <li><a href="javascript:void(0);" class="tag badge badge-success">Project</a></li>
                                <li><a href="javascript:void(0);" class="tag badge badge-info">Creative UX</a></li>
                                <li><a href="javascript:void(0);" class="tag badge badge-success">Wordpress</a></li>
                                <li><a href="javascript:void(0);" class="tag badge badge-warning">HTML5</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
