<section id="news" class="full-width-box">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6" data-appear-animation="fadeInLeft">
                <div class="title-box">
                    <!-- Heading -->
                    <h2 class="title">Latest Posts</h2>
                </div>
                @if($latest)
                <ul class="latest-posts">
                    @foreach($latest as $item)
                    <li>
                        <img class="image" src="{{ asset(env('THEME')).'/images/content/articles/'. $item->image }}" alt="{{ $item->title }}" title="">
                        <div class="meta">
                            <!-- Author -->
                            <span>{{ $item->user->name }}</span>,
                            <!-- Meta Date -->
                            <span class="time">{{ \Carbon\Carbon::parse($item->created_at )->locale('uk')->isoFormat('dddd, d MMM Y, H:m:s') }}</span>
                        </div>
                        <div class="description">
                            <a href="{{ route('blog.post', $item->id) }}">
                                <!-- Text -->
                                {!! Str::limit($item->excerpt, 200 )!!}
                            </a>
                        </div>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="col-sm-12 col-md-6 home-testimonials" data-appear-animation="fadeInRight">
                <div class="title-box">
                    <!-- Heading -->
                    <h2 class="title">Testimonials</h2>
                </div>
                <div class="carousel-box overflow" data-carousel-autoplay="false" data-carousel-nav="false" data-carousel-pagination="true" data-carousel-one="true">
                    <div class="row">
                        <div class="carousel testimonials-center">
                            <div class="respond respond-blockquote border col-sm-12 col-md-12">
                                <div class="description border-info">
                                    <blockquote>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim ducimus eveniet distinctio amet quaerat maxime fugit nesciunt sunt ut quasi nulla.
                                    </blockquote>
                                    <div class="star-rating text-right">
                                        <i class="fa fa-star  text-color"></i>
                                        <i class="fa fa-star  text-color"></i>
                                        <i class="fa fa-star  text-color"></i>
                                        <i class="fa fa-star  text-color"></i>
                                        <i class="fa fa-star-half-o  text-color"></i>
                                    </div>
                                </div>
                                <div class="name text-center">
                                    <div class="icon">
                                        <!-- Image -->
                                        <img class="img-circle" src="img/content/testimonials/1.jpg" width="145" height="145" alt="">
                                    </div>
                                    <div class="client-details">
                                        <!-- Name -->
                                        <strong class="text-color">John Doe</strong>
                                        <!-- Company -->
                                        <span>Designer, zozothemes</span>
                                    </div>
                                </div>
                            </div>
                            <div class="respond text-center respond-blockquote border col-sm-12 col-md-12">
                                <div class="description border-info">
                                    <blockquote>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim ducimus eveniet distinctio amet quaerat maxime fugit nesciunt sunt ut quasi nulla.
                                    </blockquote>
                                    <div class="star-rating text-right">
                                        <i class="fa fa-star  text-color"></i>
                                        <i class="fa fa-star  text-color"></i>
                                        <i class="fa fa-star  text-color"></i>
                                        <i class="fa fa-star  text-color"></i>
                                        <i class="fa fa-star-half-o  text-color"></i>
                                    </div>
                                </div>
                                <div class="name text-center">
                                    <div class="icon">
                                        <!-- Image -->
                                        <img class="img-circle" src="img/content/testimonials/2.jpg" width="145" height="145" alt="">
                                    </div>
                                    <div class="client-details">
                                        <!-- Name -->
                                        <strong class="text-color">John Doe</strong>
                                        <!-- Company -->
                                        <span>Marketing Head, zozothemes</span>
                                    </div>
                                </div>
                            </div>
                            <div class="respond text-center respond-blockquote border col-sm-12 col-md-12">
                                <div class="description border-info">
                                    <blockquote>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim ducimus eveniet distinctio amet quaerat maxime fugit nesciunt sunt ut quasi nulla.
                                    </blockquote>
                                    <div class="star-rating text-right">
                                        <i class="fa fa-star text-color"></i>
                                        <i class="fa fa-star  text-color"></i>
                                        <i class="fa fa-star  text-color"></i>
                                        <i class="fa fa-star  text-color"></i>
                                        <i class="fa fa-star-half-o  text-color"></i>
                                    </div>
                                </div>
                                <div class="name text-center">
                                    <div class="icon">
                                        <!-- Image -->
                                        <img class="img-circle" src="img/content/testimonials/3.jpg" width="145" height="145" alt="">
                                    </div>
                                    <div class="client-details">
                                        <!-- Name -->
                                        <strong class="text-color">John Doe</strong>
                                        <!-- Company -->
                                        <span>Director, zozothemes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="pagination switches"></div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- #Latest posts -->

