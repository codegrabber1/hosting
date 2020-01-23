@extends(env('THEME').'.admin.layouts.admin')
@section('content')
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Main slider</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item active">All slides</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <a class="btn btn-success btn-icon float-right" href="{{ route('admin.settings.slider.create') }}"><i class="zmdi zmdi-hc-fw"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            @if(!empty($items))
                @foreach($items as $item)
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="body product_item">
                        @if($item->is_published)
                            <p class="text-success">Published</p>
                        @else
                            <p class="text-danger">Unpublished</p>
                        @endif
                        <img src="{{ asset(env('THEME')).'/images/content/slider/'. $item->image }}" alt="{{ $item->title }}" class="img-fluid cp_img" />
                        <div class="product_details">
                            <a href="{{ route('admin.settings.slider.edit', $item->id) }}">{{ $item->title }}</a>
                        </div>
                        <div class="action">
                            <a href="{{ route('admin.settings.slider.edit', $item->id) }}" class="btn btn-info">Edit slide</a>
                            <form method='post' action="{{ route('admin.settings.slider.destroy', $item->id) }}" class='right' name="delete">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger waves-effect">Delete slide</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="card">
                <div class="body">
                    @if($items->total() > $items->count())
                        <ul class="pagination pagination-primary m-b-0">
                            <li class="page-item">
                                {{ $items->links() }}
                            </li>
                        </ul>
                    @endif
                </div>
            </div>
            @else
                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-6">
                    <p>Add some slides</p>
                </div>
            @endif
        </div>
    </div>
@stop