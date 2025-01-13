<!-- This extends the main layout app.blade.php -->
@extends('layouts.app')

@section('title', 'Chandrani Music - Home')

@section('content')
    <!-- Start Main Banner Area -->
    <div class="main-banner jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="main-banner-content">
                <span class="sub-title wow animate__animated animate__fadeInLeft" data-wow-delay="00ms" data-wow-duration="1000ms">Enjoy The New Release</span>
                <div class="logo wow animate__animated animate__fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
                    <!-- <img src="assets/img/zelda.png" alt="image"> -->
                    <h1 style="font-size:80px">TEST TEST TEST TEST</h1>
                </div>
                <h6 class="wow animate__animated animate__fadeInRight" data-wow-delay="00ms" data-wow-duration="1000ms">Available Now</h6>
                <div class="btn-box wow animate__animated animate__fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
                    <a href="#" class="default-btn">Purchase Now</a>
                    <a href="contact.html" class="optional-btn">Free Trial</a>
                </div>
            </div>

            <div class="banner-video-slides owl-carousel owl-theme">
                <div class="banner-video-box">
                    <img src="assets/img/main-banner-video-img1.jpg" alt="image">

                    <div class="content">
                        <a href="https://www.youtube.com/watch?v=AXWZ-p3mUbs" class="video-btn popup-youtube"><i class="flaticon-play"></i></a>
                        <span class="title">TESt TEST TEST</span>
                    </div>
                </div>

                <div class="banner-video-box">
                    <img src="assets/img/main-banner-video-img1.jpg" alt="image">

                    <div class="content">
                        <a href="https://www.youtube.com/watch?v=Qw6cyRwJ9fI" class="video-btn popup-youtube"><i class="flaticon-play"></i></a>
                        <span class="title">TESt TEST TEST</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Banner Area -->

     <!-- Start Subscribe Area -->
     <section class="subscribe-area">
        <div class="container">
            <div class="subscribe-inner ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
                <span class="sub-title">Get Updates</span>
                <h2>Chandrani Music Newsletter</h2>
                <form class="newsletter-form" data-bs-toggle="validator">
                    <label><i class="flaticon-null-1"></i></label>
                    <input type="text" class="input-newsletter" placeholder="Enter your email address" name="EMAIL" required autocomplete="off">
                    <button type="submit" class="default-btn">Subscribe Now</button>
                    <div id="validator-newsletter" class="form-result"></div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Subscribe Area -->
@endsection
