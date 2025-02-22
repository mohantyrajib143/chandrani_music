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
                    <h1 style="font-size:80px">JIBANA SAGADI</h1>
                </div>
                <h6 class="wow animate__animated animate__fadeInRight" data-wow-delay="00ms" data-wow-duration="1000ms">Available Now</h6>
                <div class="btn-box wow animate__animated animate__fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
                    <a href="#" class="default-btn">YOUTUBE</a>
                    <a href="#" class="optional-btn">YOUTUBE MUSIC</a>
                </div>
            </div>

            <div class="banner-video-slides owl-carousel owl-theme">
                @foreach($videos as $video)
                    <div class="banner-video-box">
                        <img src="{{ asset('assets/img/' . $video->image) }}" alt="image">

                        <div class="content">
                            <a href="{{ $video->yt_link }}" class="video-btn popup-youtube"><i class="flaticon-play"></i></a>
                            <span class="title">{{ $video->title }}</span>
                        </div>
                    </div>
                @endforeach
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
                <form class="newsletter-form" id="newsletterForm" method="POST" action="{{ route('newsletters') }}" data-bs-toggle="validator">
                    @csrf
                    <label><i class="flaticon-null-1"></i></label>
                    <input type="email" class="input-newsletter" placeholder="Enter your email address" name="email" required autocomplete="off" required>
                    <button type="submit" id="subscribeButton" class="default-btn">Subscribe Now</button>
                    <div id="success" class="form-result"></div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Subscribe Area -->
    <script>
        // Check for success message
        @if (session('success'))
            alert("{{ session('success') }}");
        @endif

        // Check for error message
        @if (session('error'))
            alert("{{ session('error') }}");
        @endif
    </script>
@endsection
