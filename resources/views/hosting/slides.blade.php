@if(!$slides)
<section id="home" class="full-width-box">
    @foreach($slides as $slider)
    <div class="fwb-bg fwb-paralax" style="background-image:url({{ asset(env('THEME')) }}/images/content/slider/{{ $slider->image }})" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
    </div>
    <div class="container padding-80">
        <div class="row">
            <div class="col-md-12 white text-slider">
                <!--TYPED TEXT SLIDER-->
                <h1 class="typed-text upper top-padding-120 text-color">
                    <span class="element color" data-elements="{{ $slider->title }}"></span>
                </h1><!--/.TYPED TEXT SLIDER-->
                <p class="description medium white">{!! $slider->description !!}</p>
                <p>
                    <a class="btn btn-default" href="#">Read More</a>
                    <a class="btn btn-default" href="#">Download Now</a>
                </p>
            </div>
        </div>
    </div>
     @endforeach
</section><!-- #home -->
@endif