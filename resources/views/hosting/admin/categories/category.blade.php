@extends(env('THEME').'.admin.layouts.admin')
@section('content')
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Categories</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <a class="btn btn-success btn-icon float-right" href="{{ route('admin.blog.categories.create') }}"><i class="zmdi zmdi-hc-fw"></i></a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Category Slug</th>
                                    <th data-breakpoints="sm xs">Description</th>
                                    <th data-breakpoints="xs">Parent</th>
                                    <th data-breakpoints="xs md">Updated</th>
                                    <th data-breakpoints="sm xs md">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($category as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->slug }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->parentTitle }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->updated_at )->locale('uk')->isoFormat('dddd, D MMM Y, H:m:s') }}</td>
                                        <td>
                                            <a href="{{ route('admin.blog.categories.edit', $item->id) }}" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                 @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            @if($category->total() > $category->count())
                                <ul class="pagination pagination-primary m-b-0">
                                    <li class="page-item">
                                        {{ $category->links() }}
                                    </li>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop