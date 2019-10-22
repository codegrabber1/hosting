<div id="sidebar" class="sidebar col-sm-3 col-md-3">
    <aside class="widget menu">
        <header>
            <h3 class="title">Blog Categoies</h3>
        </header>
        <nav>
            <ul>
                <li><a href="#">Proin lobortis nulla</a></li>
                <li class="parent active">
                    <a href="#"><span class="open-sub"></span>Curabitur volutpat</a>
                    <ul class="sub">
                        <li><a href="#">Integer rutrum accumsan</a></li>
                        <li><a href="#">Fusce egestas mauris</a></li>
                        <li class="active"><a href="#">Phasellus justo turpis</a></li>
                        <li><a href="#">Vestibulum non nisi</a></li>
                        <li><a href="#">Nam fermentum ipsum</a></li>
                        <li><a href="#">Sed id erat augue</a></li>
                    </ul>
                </li>
                <li class="parent">
                    <a href="#"><span class="open-sub"></span>Maecenasamet ante</a>
                    <ul class="sub">
                        <li><a href="#">Integer rutrum accumsan</a></li>
                        <li><a href="#">Fusce egestas mauris</a></li>
                    </ul>
                </li>
                <li><a href="#">Donec aliquam</a></li>
                <li><a href="#">Donec faucibus fringilla</a></li>
            </ul>
        </nav>
    </aside><!-- .menu-->
    @if($posts)
    <aside class="widget recent-post">
        <header>
            <h3 class="title">Recent Posts</h3>
        </header>
        <ul>
            @foreach($posts as $post)
            <li class="clearfix">
                <a href="#" class="post-image">
                    <img src="{{ asset(env('THEME')).'/images/content/articles/'. $post->image }}" width="100%" height="72" alt="" title="">
                </a>
                <h3 class="post-name">
                    <a href="#">{{ \Carbon\Carbon::parse($post->created_at )->locale('uk')->isoFormat('d MMM Y') }}</a>
                </h3>
                <div class="post-box">
                    <a href="#">{{ $post->title }}</a>
                </div>
            </li>
            @endforeach
        </ul>
    </aside><!-- .specials-->
    @endif
    <aside class="widget banners no-style carousel-box" >
        <header>
            <a class="next" href="#"><i class="fa fa-angle-right"></i>
            </a>
            <a class="prev" href="#"><i class="fa fa-angle-left"></i>
            </a>
            <h3 class="title">Gallery</h3>
        </header>
        <div class="carousel-pagination row">
            <div class="carousel">
                <div class="slide col-sm-12 col-md-12">
                    <img src="!img/content/big-1.jpg" width="270" height="270" alt="">
                </div>

                <div class="slide col-sm-12 col-md-12">
                    <img src="img/content/big-2.jpg" width="270" height="270" alt="">
                </div>
            </div>
        </div>
    </aside><!-- .banners -->
    <aside class="widget tags">
        <header>
            <h3 class="title">Tags</h3>
        </header>
        <ul class="clearfix">
            <li><a href="#">california</a></li>
            <li><a href="#">canada</a></li>
            <li><a href="#">canon</a></li>
            <li><a href="#">cat</a></li>
            <li><a href="#">chicago</a></li>
            <li><a href="#">christmas</a></li>
            <li><a href="#">mars</a></li>
            <li><a href="#">church</a></li>
            <li><a href="#">city</a></li>
            <li><a href="#">clouds</a></li>
            <li><a href="#">color</a></li>
            <li><a href="#">concert</a></li>
            <li><a href="#">dance</a></li>
            <li><a href="#">day</a></li>
            <li><a href="#">dog</a></li>
            <li><a href="#">travels</a></li>
        </ul>
    </aside><!-- .tags -->
</div>

</div>
</div>