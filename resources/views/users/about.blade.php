@extends('layouts/users')

@section('title')
About Us
@endsection

@section('content')
<div class="about-hero">
    <img src="{{ asset('img/carousel1.jpg') }}" alt="">
    <div class="about-hero-caption">
        <h5>Our Mission</h5>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, quia.</p>
    </div>
</div>

<div class="about-highlight">
    <div class="container py-5" style="max-width: 90%;">
        <div class="animated animatedFadeInUp fadeInUp">
            <div class="row align-items-center flex-column-reverse flex-lg-row pb-5 flex-sm-row">
                <div class="col-sm">
                    <div class="about-highlight-image">
                        <img src="{{ asset('img/about-highlight1.jpg') }}" class="mx-auto d-block" alt="">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="about-highlight-caption">
                        <h5>ONE OF THE BEST VIEW RESTAURANT IN BOGOR</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti autem ut iure exercitationem qui odio architecto laudantium quod ratione sint?</p>
                    </div>
                </div>
            </div>
            <div class="about-title pb-5">
                <h4>Lorem Ipsum</h4>
            </div>
            <div class="row align-items-center   flex-lg-row pb-5">
                <div class="col-sm">
                    <div class="about-highlight-caption">
                        <h5>ONE OF THE BEST VIEW RESTAURANT IN BOGOR</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti autem ut iure exercitationem qui odio architecto laudantium quod ratione sint?</p>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="about-highlight-image">
                        <img src="{{ asset('img/about-highlight1.jpg') }}" class="mx-auto d-block" alt="">
                    </div>
                </div>
            </div>
            <div class="row align-items-center  flex-column-reverse flex-sm-row  flex-lg-row pb-5  ">
                <div class="col-sm">
                    <div class="about-highlight-image">
                        <img src="{{ asset('img/about-highlight1.jpg') }}" class="mx-auto d-block" alt="">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="about-highlight-caption">
                        <h5>ONE OF THE BEST VIEW RESTAURANT IN BOGOR</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti autem ut iure exercitationem qui odio architecto laudantium quod ratione sint?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection