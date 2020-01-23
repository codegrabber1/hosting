@extends(env('THEME').'.admin.layouts.admin')
@section('content')
    <div class="body-scroll">
        @if($item->exists)
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Edit the plan</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.tariff.prices.index') }}">Prices</a></li>
                            <li class="breadcrumb-item active">Planing</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>

                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button">
                            <i class="zmdi zmdi-arrow-right"></i></button>
                        <a class="btn btn-success btn-icon float-right" href="{{ route('admin.tariff.prices.create') }}"><i class="zmdi zmdi-hc-fw"></i></a>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="blogitem mb-5">
                                <form action="{{ route('admin.tariff.prices.update', $item->id) }}" method="post" name="upadate">
                                    @method('PATCH')
        @else
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Add a new plan</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.tariff.prices.index') }}">Prices</a></li>
                            <li class="breadcrumb-item active">Planing</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>

                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button">
                            <i class="zmdi zmdi-arrow-right"></i></button>

                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="blogitem mb-5">
                                <form action="{{ route('admin.tariff.prices.store') }}" method="post" name="create">
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
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs p-0 mb-3">
                                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Main info</a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings">Settings</a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">Profile</a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages">Messages</a></li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane in active" id="home">
                                                <div class="row clearfix">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="tariffname">Create the name of plan</label>
                                                            <input id="tariffname" name="tariffname" type="text"
                                                                   class="form-control"
                                                                   value="{{ old('tariffname', $item->tariffname )}}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="slug">Slug</label>
                                                            <input id="slug" name="slug" type="text" class="form-control" value="{{ old('slug', $item->slug )}}" placeholder="Here is a slug"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="irs-demo">
                                                            <label for="price">Set a price</label>
                                                            <input type="text" name="price" id="price" value="{{ old('price', $item->price )}}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="irs-demo">
                                                            <label for="disc_space">Set a disc space</label>
                                                            <input type="text" name="disc_space" id="disc_space" value="{{ old('disc_space', $item->disc_space )}}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="settings">
                                                <div class="row clearfix">
                                                    <div class="col-lg-6">
                                                        <div class="irs-demo">
                                                            <label for="php_versions">Set PHP Versions</label>
                                                            <input type="text" name="php_versions" id="php_versions" value="{{ old('php_versions', $item->php_versionsy) }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="irs-demo">
                                                            <label for="php_memory">Set PHP Memories</label>
                                                            <input type="text" name="php_memory" id="php_memory" value="{{ old('php_memory', $item->php_memory) }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="irs-demo">
                                                            <label for="dom_subdom">Set the count of subdomains</label>
                                                            <input type="text" name="dom_subdom" id="dom_subdom" value="{{ old('dom_subdom', $item->dom_subdom) }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="irs-demo">
                                                            <label for="ftp">Set the count of FTP</label>
                                                            <input type="text" name="ftp" id="ftp" value="{{ old('ftp', $item->ftp) }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="irs-demo">
                                                            <label for="db">Set the count of DataBase</label>
                                                            <input type="text" name="db" id="db" value="{{ old('db', $item->db) }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="irs-demo">
                                                            <label for="emails">Set the count of Emails</label>
                                                            <input type="text" name="emails" id="emails" value="{{ old('emails', $item->emails) }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="profile">
                                                <div class="row clearfix">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="backup">Tell about the frequency of backups</label>
                                                            <input id="backup" name="backup" type="text" class="form-control" value="{{ old('backup', $item->backup) }}" placeholder="How often do you can do backups?"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="panel">Management panel</label>
                                                            <input id="panel" name="panel" type="text" class="form-control" value="{{ old('panel', $item->panel) }}" placeholder="What panel do you propose?"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="support">Tell about your support</label>
                                                            <textarea id="support" name="support" class="summernote">{{ old('support', $item->support) }}</textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="messages">
                                                <div class="row clearfix">
                                                    <div class="col">
                                                        <label for="messages">Add extra info to the user</label>
                                                        <textarea id="messages" name="messages" class="summernote">{{ old('messages', $item->messages) }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="body">
                                        <input type="submit" name="submit" class="btn btn-info waves-effect m-t-20" value="Create">
                                        <div class="checkbox right m-t-20">
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
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    @if(isset($published))
                    <div class="card">
                        <div class="header">
                            <h2><strong>Published</strong> Plans</h2>
                        </div>
                        <div class="body">
                            <ul class="list-unstyled mb-0 widget-recentpost">
                                @foreach($published as $item)
                                <li>
                                    <div class="recentpost-content">
                                        <a href="{{ route('admin.tariff.prices.edit', $item->id) }}">{{ $item->tariffname }}</a>
                                    </div>
                                </li>
                               @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                        @if(isset($unpublished))
                            <div class="card">
                                <div class="header">
                                    <h2><strong>Unpublished</strong> Plans</h2>
                                </div>
                                <div class="body">
                                    <ul class="list-unstyled mb-0 widget-recentpost">
                                        @foreach($unpublished as $item)
                                            <li>
                                                <div class="recentpost-content">
                                                    <a href="{{ route('admin.tariff.prices.edit', $item->id) }}">{{ $item->tariffname }}</a>
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

