@extends('layouts/users')

@section('title')
About Us
@endsection

@section('content')
<div class="about-hero">
    <img src="{{ asset('img/carousel1.jpg') }}" alt="">
    <div class="about-hero-caption">
        <h5>Our Mission</h5>
        <p>Menyajikan hidangan kualitas terbaik dengan suasana asri Kebun Raya</p>
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
                        <p>Terletak di tengah-tengah Kebun Raya Bogor membuat pemandangan dan suasana Resto Raasa menjadi sejuk serta asri</p>
                    </div>
                </div>
            </div>
            <div class="about-title pb-5">
                <h4>We started operation in 2020, rebranding from Green Garden Resto</h4>
            </div>
            <div class="row align-items-center   flex-lg-row pb-5">
                <div class="col-sm">
                    <div class="about-highlight-caption">
                        <h5>SERVING WIH PLEASURE</h5>
                        <p>Menyajikan menu dengan sepenuh hati guna memuaskan pelayanan terhadap konsumen kami</p>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="about-highlight-image">
                        <img src="{{ asset('img/serving.jpg') }}" class="mx-auto d-block" alt="">
                    </div>
                </div>
            </div>
            <div class="row align-items-center  flex-column-reverse flex-sm-row  flex-lg-row pb-5  ">
                <div class="col-sm">
                    <div class="about-highlight-image">
                        <img src="{{ asset('img/professional.jpg') }}" class="mx-auto d-block" alt="">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="about-highlight-caption">
                        <h5>PROFESSIONAL STAFF</h5>
                        <p>Memiliki staf yang profesional untuk memaksimalkan konsumen ketika menikmati hidangan di restoran kami</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection