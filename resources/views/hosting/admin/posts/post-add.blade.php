@extends(env('THEME').'.admin.layouts.admin')
@section('content')
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Edit blog post</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.blog.posts.index') }}">Blog Posts</a></li>
                        <li class="breadcrumb-item active">Add new post</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="blogitem mb-5">
                                <form action="{{ route('admin.blog.posts.store')  }}" method="post" name="create" enctype="multipart/form-data">
                                    @csrf
                                    @include(env('THEME').'.admin.posts.includes.message')
                                    <div class="card">
                                        <div class="header">
                                            <h2>Choose an <strong>image</strong> for your post.</h2>
                                        </div>
                                        <div class="body">
                                            <input type="file"  name="image" id="dropify-event">
                                        </div>
                                    </div>
                                    <div class="blogitem-content">
                                        <div class="card">
                                            <div class="body">
                                                <div class="form-group">
                                                    <label for="title">Title</label>
                                                    <input id="title" name="title" type="text" class="form-control" placeholder="title"/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="slug">Slug</label>
                                                    <input id="slug" name="slug" type="text" class="form-control"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="body">
                                                <div class="row clearfix">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="created_at">Created at</label>
                                                            <input type="text" id="created_at" name="created_at" class="form-control" value="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="author">Author</label>
                                                            <input type="text" id="author" name="user_id" class="form-control" value="{{ Auth::user()->name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="header">
                                                <h2><strong>Choose the category </strong></h2>
                                            </div>
                                            <div class="body">
                                                <label for="category_id"></label>
                                                <select name="category_id" id="category_id">
                                                    @foreach($catList as $cat)
                                                        <option value="{{ $cat->id }}">
                                                            {{ $cat->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="body">
                                                <label for="excerpt">Excerpt</label>
                                                <textarea id="excerpt" name="excerpt" class="summernote">
                                            </textarea>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="body">
                                                <label for="description">Full text</label>
                                                <textarea id="description" name="content" class="summernote"></textarea>
                                                <input type="submit" name="submit" class="btn btn-info waves-effect m-t-20" value="POST">
                                                <div class="checkbox">
                                                    <input type="hidden"
                                                           name="is_published"
                                                           value="0">
                                                    <input id="is_published"
                                                           name="is_published"
                                                           type="checkbox"
                                                           value="1"
                                                           checked="checked">
                                                    <label for="is_published">Publish</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    @if(isset($resentPosts))
                    <div class="card">
                        <div class="header">
                            <h2><strong>Recent</strong> Posts</h2>
                        </div>
                        <div class="body">
                            <ul class="list-unstyled mb-0 widget-recentpost">

                                @foreach($resentPosts as $item)
                                <li>
                                    <a href="{{ route('admin.blog.posts.edit', $item->id) }}"><img src="{{ asset(env('THEME')).'/images/content/articles/'. $item->image }}" alt="blog thumbnail"></a>
                                    <div class="recentpost-content">
                                        <a href="{{ route('admin.blog.posts.edit', $item->id) }}">{{ $item->title }}</a>
                                        <span> {{ \Carbon\Carbon::parse($item->created_at )->locale('uk')->isoFormat('MMMM d, Y ')}}</span>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    @endif
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
@stop
