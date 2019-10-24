@extends(env('THEME').'.admin.layouts.admin')
@section('content')
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Top menu</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item active">All items</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <a class="btn btn-success btn-icon float-right" href="{{ route('admin.settings.menu.create') }}"><i class="zmdi zmdi-hc-fw"></i></a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        @if($menu)
                        <div class="table-responsive">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
                                    </button>
                                    {{ session()->get('success') }}

                                </div>
                            @endif
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Menu path</th>
                                    <th data-breakpoints="sm xs">Parent item</th>
                                    <th data-breakpoints="xs">Created</th>
                                    <th data-breakpoints="xs md">Updated</th>
                                    <th data-breakpoints="sm xs md">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($menu as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->slug }}</td>
                                            <td>{{ $item->parentTitle }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->created_at )->locale('uk')->isoFormat('dddd, D MMM Y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->updated_at )->locale('uk')->isoFormat('dddd, D MMM Y, H:m:s') }}</td>
                                            <td>
                                                <a href="{{ route('admin.settings.menu.edit', $item->id) }}" class="btn btn-default waves-effect waves-float btn-sm waves-green left"><i class="zmdi zmdi-edit"></i></a>
                                                <form action="{{ route('admin.settings.menu.destroy', $item->id) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-default waves-effect waves-float btn-sm waves-red right"><i class="zmdi zmdi-delete"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
