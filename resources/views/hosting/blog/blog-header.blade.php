@if(isset($posts))
<header class="page-header">
    <div class="container">
        <h1 class="title">Our blog</h1>
    </div>
    <div class="breadcrumb-box">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('main') }}">Home</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
            </ul>
        </div>
    </div><!-- .breadcrumb-box -->
</header>
@else
<header class="page-header">
    <div class="container">
        <h1 class="title">{{ $post->title }}</h1>
    </div>
    <div class="breadcrumb-box">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('main') }}">Home</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li class="active">{{ $post->title }}</li>
            </ul>
        </div>
    </div><!-- .breadcrumb-box -->
</header>
@endif