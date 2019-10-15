<section id="pricing" class="full-width-box">
    <div class="fwb-bg fwb-fixed no-bg">
        <div class="overlay"></div>
    </div>
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
            @if($pricing)
                @foreach($pricing as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="pricing" data-appear-animation="fadeInLeft">
                            <!-- Title -->
                            <div class="title"><a href="#">{{ $item->tariffname }}</a></div>
                            <div class="price-box">
                                <!-- Price -->
                                <div class="starting">Starting at</div>
                                <div class="price">${{ $item->price }}<span>/month</span></div>
                            </div>
                            <ul class="options">
                                <!-- Item List -->
                                <li>Disc Space {{ $item->disc_space }}</li>
                                <li class="active"> {{ $item->dom_subdom }} Mb</li>
                                <li class="active">{{ $item->emails }} Emails</li>
                                <li>{!! $item->support  !!}</li>
                            </ul>
                            <div class="bottom-box">
                                <div class="clearfix"></div>
                                <a href="#" class="btn btn-default btn-lg">Order Now</a>
                            </div>
                        </div>
                        <!-- .pricing -->
                    </div>
                @endforeach
            @endif
{{--            <div class="col-sm-6 col-md-4 col-lg-3">--}}
{{--                <div class="pricing" data-appear-animation="fadeInUp">--}}
{{--                    <!-- Title -->--}}
{{--                    <div class="ribbon-wrapper">--}}
{{--                        <div class="ribbon yellow">OFFER</div>--}}
{{--                    </div>--}}
{{--                    <div class="title"><a href="#">Standard</a></div>--}}
{{--                    <div class="price-box">--}}
{{--                        <!-- Price -->--}}
{{--                        <div class="starting">Starting at</div>--}}
{{--                        <div class="price">$99.9<span>/month</span></div>--}}
{{--                    </div>--}}
{{--                    <ul class="options">--}}
{{--                        <!-- Item List -->--}}
{{--                        <li>Wordpress</li>--}}
{{--                        <li class="active">HTML5 & CSS 3</li>--}}
{{--                        <li class="active">PSD Files</li>--}}
{{--                        <li>Unlimited Support</li>--}}
{{--                    </ul>--}}
{{--                    <div class="bottom-box">--}}
{{--                        <div class="clearfix"></div>--}}
{{--                        <button class="btn btn-default btn-lg">Order Now</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- .pricing -->--}}
{{--            </div>--}}
{{--            <div class="col-sm-6 col-md-4 col-lg-3">--}}
{{--                <div class="pricing" data-appear-animation="fadeInUp">--}}
{{--                    <!-- Title -->--}}
{{--                    <div class="title"><a href="#">Advanced</a></div>--}}
{{--                    <div class="price-box">--}}
{{--                        <!-- Price -->--}}
{{--                        <div class="starting">Starting at</div>--}}
{{--                        <div class="price">$159.9<span>/month</span></div>--}}
{{--                    </div>--}}
{{--                    <ul class="options">--}}
{{--                        <!-- Item List -->--}}
{{--                        <li class="active">Wordpress</li>--}}
{{--                        <li class="active">HTML5 & CSS 3</li>--}}
{{--                        <li class="active">PSD Files</li>--}}
{{--                        <li>Unlimited Support</li>--}}
{{--                    </ul>--}}
{{--                    <div class="bottom-box">--}}
{{--                        <div class="clearfix"></div>--}}
{{--                        <button class="btn btn-default btn-lg">Order Now</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- .pricing -->--}}
{{--            </div>--}}
{{--            <div class="col-sm-6 col-md-4 col-lg-3">--}}
{{--                <div class="pricing" data-appear-animation="fadeInRight">--}}
{{--                    <!-- Title -->--}}
{{--                    <div class="title"><a href="#">Premium</a></div>--}}
{{--                    <div class="price-box">--}}
{{--                        <!-- Price -->--}}
{{--                        <div class="starting">Starting at</div>--}}
{{--                        <div class="price">$199.9<span>/month</span></div>--}}
{{--                    </div>--}}
{{--                    <ul class="options">--}}
{{--                        <!-- Item List -->--}}
{{--                        <li class="active">Wordpress</li>--}}
{{--                        <li class="active">HTML5 & CSS 3</li>--}}
{{--                        <li class="active">PSD Files</li>--}}
{{--                        <li class="active">Unlimited Support</li>--}}
{{--                    </ul>--}}
{{--                    <div class="bottom-box">--}}
{{--                        <div class="clearfix"></div>--}}
{{--                        <button class="btn btn-default btn-lg">Order Now</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- .pricing -->--}}
{{--            </div>--}}
        </div>
    </div>
</section>
