@extends(env('THEME').'.admin.layouts.admin')
@section('content')
    <div class="body_scroll">
        @if($item->exists)
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Edit slide</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.settings.slider.index') }}">All slides</a></li>
                        <li class="breadcrumb-item active">Edit slide</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <a class="btn btn-success btn-icon float-right" href="{{ route('admin.settings.slider.create') }}"><i class="zmdi zmdi-hc-fw"></i></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="blogitem mb-5">
                                <form action="{{ route('admin.settings.slider.update', $item->id)  }}" method="post" name="update" enctype="multipart/form-data">
                                @method('PATCH')
                                @else
                            <div class="block-header">
                                <div class="row">
                                    <div class="col-lg-7 col-md-6 col-sm-12">

                                        <h2>Add new slide to the Main slider</h2>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="zmdi zmdi-home"></i> Aero</a></li>
                                            <li class="breadcrumb-item"><a href="{{ route('admin.settings.slider.index') }}">All Slides</a></li>
                                            <li class="breadcrumb-item active">Add slide</li>
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
                                        <form action="{{ route('admin.settings.slider.store')  }}" method="post" name="upadate" enctype="multipart/form-data">
                                            @endif
                                @csrf
                                @include(env('THEME').'.admin.posts.includes.message')
                                <div class="blogitem-image">
                                    <input type="file" name="image" id="dropify-event" data-default-file="{{ asset(env('THEME')).'/images/content/slider/'. $item->image }}">
                                </div>
                                <div class="blogitem-content">
                                    <div class="blogitem-header">

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
                                                <label for="path">Path</label>
                                                <input id="path" name="path" type="text" class="form-control" value="{{ old('path', $item->path )}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="body">
                                            <div class="row clearfix">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="author">Updated at</label>
                                                        <input type="text" id="updated" name="updated" class="form-control" value="{{ $item->updated_at }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="author">Author</label>
                                                        <input type="text" id="author" name="user_id" class="form-control" value="{{ old('user_id', $item->name) }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="body">
                                            <label for="description">Full text</label>
                                            <textarea id="description" name="description" class="summernote">
                                                {{ old('description', $item->description) }}
                                            </textarea>

                                            <input type="submit" name="submit" class="btn btn-info waves-effect m-t-20" value="POST">
                                            <div class="checkbox right m-t-20">
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
                            </div>
                        </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Unpublished</strong> Slides</h2>
                        </div>
                        <div class="body">
                            <ul class="list-unstyled mb-0 widget-recentpost">
                                @foreach($unpublishedSlides as $unpdslide)
                                    <li>
                                        <a href="{{ route('admin.settings.slider.edit', $unpdslide->id) }}"><img src="{{ asset(env('THEME')).'/images/content/slider/'. $unpdslide->image }}" alt="{{ $unpdslide->title }}"></a>
                                        <div class="recentpost-content">
                                            <a href="{{ route('admin.settings.slider.edit', $unpdslide->id) }}">{{ $unpdslide->title }}</a>
                                            <span>{{ \Carbon\Carbon::parse($unpdslide->updated_at )->locale('uk')->isoFormat('MMMM D, Y')}}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Published</strong> Slides</h2>
                        </div>
                        <div class="body">
                            <ul class="list-unstyled mb-0 widget-recentpost">
                                @foreach($publishedSlides as $pbslide)
                                    <li>
                                        <a href="{{ route('admin.settings.slider.edit', $pbslide->id) }}"><img src="{{ asset(env('THEME')).'/images/content/slider/'. $pbslide->image }}" alt="{{ $pbslide->title }}"></a>
                                        <div class="recentpost-content">
                                            <a href="{{ route('admin.settings.slider.edit', $pbslide->id) }}">{{ $pbslide->title }}</a>
                                            <span>{{ \Carbon\Carbon::parse($pbslide->updated_at )->locale('uk')->isoFormat('MMMM D, Y')}}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Resent</strong> Posts</h2>
                        </div>
                        <div class="body">
                            <ul class="list-unstyled mb-0 widget-recentpost">
                                @foreach($resentPosts as $respost)
                                    <li>
                                        <a href="{{ route('admin.blog.posts.edit', $respost->id) }}"><img src="{{ asset(env('THEME')).'/images/content/articles/'. $respost->image }}" alt="{{ $respost->title }}"></a>
                                        <div class="recentpost-content">
                                            <a href="{{ route('admin.blog.posts.edit', $respost->id) }}">{{ $respost->title }}</a>
                                            <span>{{ \Carbon\Carbon::parse($pbslide->updated_at )->locale('uk')->isoFormat('MMMM D, Y')}}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
