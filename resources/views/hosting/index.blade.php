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
@section('content')
    <p>hello content</p>
@stop
@section('footer')

@stop