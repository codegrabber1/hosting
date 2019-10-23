@extends(env('THEME').'.admin.layouts.admin')
@section('content')
    @if($item->exists)
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">

                    <h2>Edit Top Menu</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.settings.menu.index') }}">All menu items</a></li>
                        <li class="breadcrumb-item active">Edit menu</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <a class="btn btn-success btn-icon float-right" href="{{ route('admin.settings.menu.create') }}"><i class="zmdi zmdi-hc-fw"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('admin.settings.menu.update', $item->id)  }}" method="post" name="upadate">
                @method('PATCH')
                @else
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Add menu item</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.settings.menu.index') }}">All menu items</a></li>
                        <li class="breadcrumb-item active">Add menu item</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('admin.settings.menu.store')  }}" method="post" name="upadate">
    </div>
    @endif
     @csrf
        @if(session('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
                </button>
                {{ session()->get('success') }}
            </div>
        @endif
            <div class="card">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input id="title" name="title" type="text" class="form-control" value="{{ old('title', $item->title )}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="slug">Path</label>
                                <input id="slug" name="slug" type="text" class="form-control" value="{{ old('slug', $item->slug )}}" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-md-4">
                            <label for="parent">Menu List</label>
                            <select id='parent' name='parent' class="form-control show-tick">
                                <option value="0">no item</option>
                                @foreach($menuList as $list)
                                    <option value="{{ $list->id }}"
                                        @if($list->id == $item->parentTitle) selected @endif>
                                        {{ $list->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="created">Created at</label>
                                @if($item->exists)
                                    <input type="text" id="created" name="created" class="form-control"  value="{{ $item->created_at }}" disabled  >
                                @else
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control datetimepicker" placeholder="Please choose date & time...">
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="author">Updated at</label>
                                <input type="text" id="updated" name="updated" class="form-control" value="{{ $item->updated_at }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                    <div class="body">
                        <input type="submit" name="submit" class="btn btn-info waves-effect m-t-20" value="POST">
                    </div>
                </div>
          </form>
        </div>
    </div>
@endsection