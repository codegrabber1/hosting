@extends(env('THEME').'.layouts.main')
@section('slider')
    <section id="home" class="full-width-box">
        <div class="fwb-bg fwb-paralax" style="background-image:url({{ asset(env('THEME')) }}/images/content/slider/slider8-bg.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
        </div>
        <div class="container padding-80">
            <div class="row">
                <div class="col-md-12 white text-slider">
                    <!--TYPED TEXT SLIDER-->
                    <h1 class="typed-text upper top-padding-120 text-color">
                        <span class="element color" data-elements="Great Way to Present your App, Premium HTML5 Template, Powerful Bootstrap Theme Forever"></span>
                    </h1><!--/.TYPED TEXT SLIDER-->
                    <p class="description medium white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, quisquam, culpa, soluta hic aperiam porro ipsum nisi optio
                        necessitatibus commodi dolorum sapiente voluptatem officiis similique maiores!</p>
                    <p>
                        <a class="btn btn-default" href="#">Read More</a>
                        <a class="btn btn-default" href="#">Download Now</a>
                    </p>
                </div>
            </div>
        </div>
    </section><!-- #home -->
    <!-- .rs-slider -->
@stop
@section('pricing')
    <section id="pricing" class="full-width-box">
{{--        <div class="fwb-bg fwb-fixed no-bg">--}}
{{--            <div class="overlay"></div>--}}
{{--        </div>--}}
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12 col-md-12">
                    <div class="title-box white text-center">
                        <!-- Heading -->
                        <h2 class="title">Price List</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="pricing" data-appear-animation="fadeInLeft">
                        <!-- Title -->
                        <div class="title"><a href="#">Basic Plan</a></div>
                        <div class="price-box">
                            <!-- Price -->
                            <div class="starting">Starting at</div>
                            <div class="price">$59.9<span>/month</span></div>
                        </div>
                        <ul class="options">
                            <!-- Item List -->
                            <li>Wordpress</li>
                            <li class="active">HTML5 & CSS 3</li>
                            <li class="active">PSD Files</li>
                            <li>Unlimited Support</li>
                        </ul>
                        <div class="bottom-box">
                            <div class="clearfix"></div>
                            <button class="btn btn-default btn-lg">Order Now</button>
                        </div>
                    </div>
                    <!-- .pricing -->
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="pricing" data-appear-animation="fadeInUp">
                        <!-- Title -->
                        <div class="ribbon-wrapper">
                            <div class="ribbon yellow">OFFER</div>
                        </div>
                        <div class="title"><a href="#">Standard</a></div>
                        <div class="price-box">
                            <!-- Price -->
                            <div class="starting">Starting at</div>
                            <div class="price">$99.9<span>/month</span></div>
                        </div>
                        <ul class="options">
                            <!-- Item List -->
                            <li>Wordpress</li>
                            <li class="active">HTML5 & CSS 3</li>
                            <li class="active">PSD Files</li>
                            <li>Unlimited Support</li>
                        </ul>
                        <div class="bottom-box">
                            <div class="clearfix"></div>
                            <button class="btn btn-default btn-lg">Order Now</button>
                        </div>
                    </div>
                    <!-- .pricing -->
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="pricing" data-appear-animation="fadeInUp">
                        <!-- Title -->
                        <div class="title"><a href="#">Advanced</a></div>
                        <div class="price-box">
                            <!-- Price -->
                            <div class="starting">Starting at</div>
                            <div class="price">$159.9<span>/month</span></div>
                        </div>
                        <ul class="options">
                            <!-- Item List -->
                            <li class="active">Wordpress</li>
                            <li class="active">HTML5 & CSS 3</li>
                            <li class="active">PSD Files</li>
                            <li>Unlimited Support</li>
                        </ul>
                        <div class="bottom-box">
                            <div class="clearfix"></div>
                            <button class="btn btn-default btn-lg">Order Now</button>
                        </div>
                    </div>
                    <!-- .pricing -->
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="pricing" data-appear-animation="fadeInRight">
                        <!-- Title -->
                        <div class="title"><a href="#">Premium</a></div>
                        <div class="price-box">
                            <!-- Price -->
                            <div class="starting">Starting at</div>
                            <div class="price">$199.9<span>/month</span></div>
                        </div>
                        <ul class="options">
                            <!-- Item List -->
                            <li class="active">Wordpress</li>
                            <li class="active">HTML5 & CSS 3</li>
                            <li class="active">PSD Files</li>
                            <li class="active">Unlimited Support</li>
                        </ul>
                        <div class="bottom-box">
                            <div class="clearfix"></div>
                            <button class="btn btn-default btn-lg">Order Now</button>
                        </div>
                    </div>
                    <!-- .pricing -->
                </div>
            </div>
        </div>
    </section>
@stop
@section('latest')
    <section id="news" class="full-width-box">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6" data-appear-animation="fadeInLeft">
                <div class="title-box">
                    <!-- Heading -->
                    <h2 class="title">Latest Posts</h2>
                </div>
                <ul class="latest-posts">
                    <li>
                        <img class="image" src="img/content/blog/1.jpg" alt="" title="" width="84" height="84">
                        <div class="meta">
                            <!-- Author -->
                            <span>John Brito</span>,
                            <!-- Meta Date -->
                            <span class="time">03.11.2014, 10:45:</span>
                        </div>
                        <div class="description">
                            <a href="#">
                                <!-- Text -->
                                Suspendisse at placerat turpis. Duis luctus erat vel magna pharetra aliquet. Maecenas tincidunt feugiat ultricies. Phasellus et dui risus.
                            </a>
                        </div>
                    </li>
                    <li>
                        <img class="image" src="img/content/blog/2.jpg" alt="" title="" width="84" height="84">
                        <div class="meta">
                            <!-- Author -->
                            <span>John Deo</span>,
                            <!-- Meta Date -->
                            <span class="time">03.10.2014, 7:45:</span>
                        </div>
                        <div class="description">
                            <a href="#">
                                <!-- Text -->
                                Maecenas porttitor orci vitae turpis interdum sit amet dignissim dolor consequat. Aenean id erat lorem.
                            </a>
                        </div>
                    </li>
                    <li>
                        <img class="image" src="img/content/blog/3.jpg" alt="" title="" width="84" height="84">
                        <div class="meta">
                            <!-- Author -->
                            <span>Rick Vick</span>,
                            <!-- Meta Date -->
                            <span class="time">11.9.2014, 10:45:</span>
                        </div>
                        <div class="description">
                            <a href="#">
                                <!-- Text -->
                                Mauris vehicula fringilla nisl porttitor sollicitudin. Suspendisse facilisis metus id neque fermentum eget rutrum orci pulvinar.
                            </a>
                        </div>
                    </li>
                </ul>
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
@stop
@section('footer')

@stop