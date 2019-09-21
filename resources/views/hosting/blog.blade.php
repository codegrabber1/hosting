@extends(env('THEME').'.layouts.page')
@section('content')
    <div class="content blog grid-layout col-sm-9 col-md-9">
        <div class="row">
            <div class="col-md-6">
                <article class="post">
                    <div class="post-image"><img src="img/content/blog/big-1.jpg" width="600" height="400" alt="" title=""></div>
                    <h2 class="entry-title"><a href="blog-single-right-sidebar.html">Sample Blog Post</a></h2>
                    <div class="entry-content">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <footer class="entry-meta">
                        <span class="autor-name">John Deo</span>,
                        <span class="time">03.11.2014</span>
                        <span class="comments-link pull-right">
              <a href="#">3 comment(s)</a>
            </span>
                    </footer>
                </article><!-- .post -->
            </div>
            <div class="col-md-6">
                <article class="post">
                    <!-- Audio Container -->
                    <div class="audio-container embed-container">
                        <iframe class="audio" height="166" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/69966731&amp;auto_play=false&amp;hide_related=false&amp;visual=false" style="width: 100%;"></iframe>
                    </div>
                    <h2 class="entry-title"><a href="blog-single-right-sidebar.html">Sample Audio Post</a></h2>
                    <div class="entry-content">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <footer class="entry-meta">
                        <span class="autor-name">John Deo</span>,
                        <span class="time">03.11.2014</span>
                        <span class="comments-link pull-right">
              <a href="#">3 comment(s)</a>
            </span>
                    </footer>
                </article><!-- .post -->
            </div>
        </div>
        <div class="pagination-box pull-right">
            <ul class="pagination">
                <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li class="disabled"><a href="#">...</a></li>
                <li><a href="#">9</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </div><!-- .pagination-box -->
    </div>
@stop
@section('sidebar')
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
        <aside class="widget recent-post">
            <header>
                <h3 class="title">Recent Posts</h3>
            </header>
            <ul>
                <li class="clearfix">
                    <a href="#" class="post-image">
                        <img src="img/content/blog/1.jpg" width="72" height="72" alt="" title="">
                    </a>
                    <h3 class="post-name">
                        <a href="#">10 / nov / 2014</a>
                    </h3>
                    <div class="post-box">
                        <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
                    </div>
                </li>
                <li class="clearfix">
                    <a href="#" class="post-image">
                        <img src="img/content/blog/2.jpg" width="72" height="72" alt="" title="">
                    </a>
                    <h3 class="post-name">
                        <a href="#">10 / Dec / 2014</a>
                    </h3>
                    <div class="post-box">
                        <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
                    </div>
                </li>
                <li class="clearfix">
                    <a href="#" class="post-image">
                        <img src="img/content/blog/3.jpg" width="72" height="72" alt="" title="">
                    </a>
                    <h3 class="post-name">
                        <a href="#">15 / Dec / 2014</a>
                    </h3>
                    <div class="post-box">
                        <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
                    </div>
                </li>
            </ul>
        </aside><!-- .specials-->
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
                        <img src="img/content/big-1.jpg" width="270" height="270" alt="">
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
@stop