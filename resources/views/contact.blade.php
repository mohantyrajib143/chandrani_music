@extends('layouts.app')

@section('title', 'Chandrani Music Contact')

@section('content')
    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg1">
        <div class="container">
            <div class="page-title-content">
                <h1 title="Contact Us">Contact Us</h1>
            </div>
        </div>
    </section>
    <!-- End Page Title Area -->

    <!-- Start Contact Area -->
    <section class="contact-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="contact-info">
                        <span class="sub-title">Contact Details</span>
                        <h2>Get in Touch</h2>
                        <p>Chandrani Music is a vibrant music company dedicated to creating, producing, and promoting captivating musical experiences. Whether it's through recording, distribution, or live performances, Chandrani Music is passionate about connecting artists and audiences with melodies that inspire and resonate.</p>

                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-location"></i>
                                </div>
                                <h3>Our Address</h3>
                                <p>Banja, Sukinda, Jajpur, Odisha, 755018</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-24-hours"></i>
                                </div>
                                <h3>Contact</h3>
                                <p>Mobile: <a href="tel:7978250660">+91 7978250660</a></p>
                                <p>Mail: <a href=""><span class="">chandranimusic784@gmail.com</span></a></p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-network"></i>
                                </div>
                                <h3>Social</h3>
                                <div class="social-box">
                                    <a href="#" target="_blank"><i class="bx bxl-twitch"></i></a>
                                    <a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="bx bxl-youtube"></i></a>
                                    <a href="#" target="_blank"><i class="bx bxl-instagram"></i></a>
                                    <a href="#" target="_blank"><i class="bx bxl-vimeo"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="contact-form">
                        <h2>Ready to Get Started?</h2>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <form method="POST" action="{{ route('contact-save') }}" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" placeholder="Your name *" required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" placeholder="Your email address *" required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="number" name="phone" id="phone" placeholder="Your phone number *" required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="5" required placeholder="Write your message *"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Send Message</button>
                                    <!-- <div id="msgSubmit" class="h3 text-center hidden"></div> -->
                                    <!-- <div class="clearfix"></div> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->
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
